<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;
use App\Models\Trip;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::get();
        return view('admin.category.categoryTable',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages =[
            'categoryName'=>'please enter the category name',
        ];

        $data=$request->validate([
                'categoryName'=>'required|string|max:50',
                     ],$messages);
                     Category::create($data);
                     return redirect('admin/categoryTable');
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
        $category=Category::findOrFail($id);
        return view('admin.category.editCategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages =[
            'categoryName'=>'please enter the category name',
        ];

        $data=$request->validate([
                'categoryName'=>'required|string|max:50',
                     ],$messages);

                     Category::where('id',$id)->update($data);
                     return redirect('admin/categoryTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $found = Car::where('category_id', $id)->count();
        $foundTrips = Trip::where('category_id', $id)->count();
        if($found){
            // return redirect('teachers');
            return back()->with('error',"This teacher is linked to a class. It can't be deleted");
         }elseif ($foundTrips) {
                return back()->with('error', "This category is linked to trips and cannot be deleted.");
        }else{
        Category::where('id',$id)->delete();
        return redirect('admin/categoryTable');
             }
    }
}
