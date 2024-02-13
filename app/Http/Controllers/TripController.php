<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Category;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trip = Trip::get();
        return view('admin.trip.tripTable', compact('trip'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data=$request->validate([           
            'pickUp'=>'required|string|max:50',
            'dropOff'=>'required|string',
            'category_id'=>'required|exists:categories,id',

        ],$messages);

        Trip::create($data);
        return redirect('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trip=Trip::findOrFail($id);
        // return dd($trip);
        return view('admin/trip/showTrip',compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trip = Trip::findOrFail($id);
        $category = Category::get();
        return view('admin/trip/editTrip', compact("trip", "category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data=$request->validate([           
            'pickUp'=>'required|string|max:50',
            'dropOff'=>'required|string',
            'category_id'=>'required|exists:categories,id',

        ],$messages);

        Trip::where('id', $id)->update($data);
        return redirect('admin/tripTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Trip::where('id',$id)->delete();
        return redirect('admin/tripTable');
    }

    public function messages(){
        return[
            

            'pickUp.required'=>'please enter the date of pick up',
            'dropOff.required'=>'please enter the date of drop off',
            'category_id'=>'required|exists:categories,id'
            
        ];
    }


}
