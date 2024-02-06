<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

use App\Traits\Common;


class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::get();

        return view('admin.testimonial.testimonialTable',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.testimonial.addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'position'=>'required|string|max:50',
            'content'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',

        ],$messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['published']=isset($request->published);
        Testimonial::create($data);
        return redirect('admin/testimonialTable');
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
        $testimonial = Testimonial::findOrFail($id);

        return view('admin/testimonial/editTestimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'position'=>'required|string|max:50',
            'content'=>'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg,webp|max:2048',

        ],$messages);

        if($request->hasFile('image')){
            //use method from traits called uploadFile
        $fileName=$this->uploadFile($request->image, 'assets/images');
        $data['image']=$fileName;
        //remove old image from server
        unlink("assets/images/" . $request->oldImage);
            }

        $data['published']=isset($request->published);
        Testimonial::where('id',$id)->update($data);
        return redirect('admin/testimonialTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect('admin/testimonialTable');
    }

    public function messages(){
        return[


            'name.required'=>'please enter your name',
            'position.required'=>'please enter your profession and should be text',
            'content.required'=> 'should be text',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',


        ];
    }
}
