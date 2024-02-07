<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index(){

        $car=Car::where('active', 1)->orderBy('id','desc')->take(9)->get();

        $testimonial=Testimonial::where('published',true)->take(3)->latest()->get();

        return view('index',compact("car","testimonial"));

    }

    public function listingCar(){

        $car=Car::where('active', 1)->orderBy('id', 'desc')->get();
        $testimonial=Testimonial::take(3)->latest()->get();
        return view('listingCar',compact('car','testimonial'));
    }

    public function testimonial(){
        $testimonial=Testimonial::where('published',true)->take(6)->latest()->get();
        return view('testimonial',compact('testimonial'));
    }

    public function blog(){
        return view('blog');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function single(string $id){
        // $car=Car::findOrFail($id);
        // $testimonials=Testimonial::get();
        // $category=Category::get();

        // $cars = Car::with('category')->get();
        // $categoryCarCounts = $cars->groupBy('category.name')->count();

        // return view('single',compact('car','testimonial','category'));

    // $car = Car::with('category')->findOrFail($id);
    $car = Car::findOrFail($id);
    // $categoryCarCount = Car::where('category_id', $car->category_id)->count();
    $categories = Category::all();
    $categories = Category::withCount('car')->get();


    // return view('single', compact('car', 'categoryCarCount','categories'));
    return view('single', compact('car','categories'));
    }

    public function __invoke()
    {
        return view('404');
    }



}
