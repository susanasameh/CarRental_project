<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Trip;



class PageController extends Controller
{
    public function index(){

        $car=Car::where('active', 1)->orderBy('id','desc')->take(6)->get();

        $testimonial=Testimonial::where('published',true)->take(3)->latest()->get();
        $category =Category::get();
        $trip=Trip::get();

        return view('index',compact("car","testimonial","category","trip"));

    }

    public function listingCar(Request $request){

        // $car=Car::where('active', 1)->orderBy('id', 'desc')->get();
        $page = $request->query('page', 1); // Get page number from query string
        $car=Car::where('active', 1)->orderBy('id', 'desc')->paginate(6);
        $testimonial=Testimonial::take(3)->latest()->get();
        return view('listingCar',compact('car','testimonial','page'));
    }

    public function testimonial(){
        // $testimonial=Testimonial::where('published',true)->take(6)->latest()->get();
        $testimonial=Testimonial::where('published',true)->get();
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
