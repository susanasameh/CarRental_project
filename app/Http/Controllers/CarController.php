<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car=Car::get();
        return view('admin.car.carTable',compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::get();
        return view('admin.car.addCar',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([

            'title'=>'required|string|max:50',
            'price'=>'required|string',
            'content'=>'required|string',
            'luggage'=>'required|string',
            'doors'=>'required|integer',
            'passengers'=>'required|integer',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id'

        ], $messages);
        //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['active'] = isset($request->active);
        Car::create($data);
        return redirect('admin/carTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $category = Category::get();
        return view('admin/car/editCar', compact("car", "category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([

            'title'=>'required|string|max:50',
            'price'=>'required|string',
            'content'=>'required|string',
            'luggage'=>'required|string',
            'doors'=>'required|integer',
            'passengers'=>'required|integer',
            'image'=>'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|exists:categories,id'

        ], $messages);

        if($request->hasFile('image')){
            //use method from traits called uploadFile
            $fileName=$this->uploadFile($request->image, 'assets/images');
            $data['image']=$fileName;
            //remove old image from server
            unlink("assets/images/".$request->oldImage);
        }
        $data['active']=isset($request->active);

        Car::where('id', $id)->update($data);
        return redirect('admin/carTable');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();    // softdelete
        return redirect('admin/carTable');
    }

    public function messages(){
        return[


            'title.required'=>'please enter the car name',
            'price.required'=>'please enter your profession and should be text',
            'content.required'=> 'should be text',
            'luggage.required'=> 'should be text',
            'doors.required'=> 'should be text',
            'passengers.required'=> 'should be text',
            'image'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'teacher_id' => 'required|exists:teachers,id',


        ];
    }
}
