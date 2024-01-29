<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function listingCar(){
        return view('listingCar');
    }

    public function testimonial(){
        return view('testimonial');
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

    public function single(){
        return view('single');
    }

    public function __invoke()
    {
        return view('404');
    }



}
