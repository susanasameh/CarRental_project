<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


//PageController Routes

Route::fallback(PageController::class)->name('404');

Route::get('index',[PageController::class,'index'])->name('index');

Route::get('listingCar',[PageController::class,'listingCar'])->name('listingCar');

Route::get('testimonial',[PageController::class,'testimonial'])->name('testimonial');

Route::get('blog',[PageController::class,'blog'])->name('blog');

Route::get('about',[PageController::class,'about'])->name('about');

Route::get('contact',[PageController::class,'contact'])->name('contact');

Route::get('single/{id}',[PageController::class,'single'])->name('single');




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
