<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;



Route::prefix('admin')->middleware('verified')

  ->group(function(){

    //user routes

    Route::get('user',[UserController::class,'index'])->name('userTable');

    Route::get('addUser',[UserController::class,'create'])->name('addUser');

    Route::post('storeUser',[UserController::class,'store'])->name('storeUser');

    Route::get('editUser/{id}',[UserController::class,'edit'])->name('editUser');

    Route::put('updateUser/{id}',[UserController::class,'update'])->name('updateUser');

    Route::get('unreadMessage',[UserController::class,'unreadMessage'])->name('unreadMessage');



    //message routes

    Route::get('messageTable',[ContactController::class,'index'])->name('messageTable');

    Route::get('showMessage/{id}',[ContactController::class,'show'])->name('showMessage');

    Route::get('deleteMessage/{id}',[ContactController::class,'destroy'])->name('deleteMessage');

    Route::post('contactMail',[ContactController::class,'contactMail'])->name('contactMail');

    Route::get('unreadMessage',[ContactController::class,'unreadMessage'])->name('unreadMessage');


    //testimonial routes

    Route::get('testimonialTable',[TestimonialController::class,'index'])->name('testimonialTable');

    Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');

    Route::post('storeTestimonial',[TestimonialController::class,'store'])->name('storeTestimonial');

    Route::get('editTestimonial/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');

    Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');

    Route::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');



    //category routes

    Route::get('categoryTable',[CategoryController::class,'index'])->name('categoryTable');

    Route::get('addCategory',[CategoryController::class,'create'])->name('addCategory');

    Route::post('storeCategory',[CategoryController::class,'store'])->name('storeCategory');

    Route::get('editCategory/{id}',[CategoryController::class,'edit'])->name('editCategory');

    Route::put('updateCategory/{id}',[CategoryController::class,'update'])->name('updateCategory');

    Route::get('deleteCategory/{id}',[CategoryController::class,'destroy'])->name('deleteCategory');


     //car routes

     Route::get('carTable',[CarController::class,'index'])->name('carTable');

     Route::get('addCar',[CarController::class,'create'])->name('addCar');

     Route::post('storeCar',[CarController::class,'store'])->name('storeCar');

     Route::get('editCar/{id}',[CarController::class,'edit'])->name('editCar');

     Route::put('updateCar/{id}',[CarController::class,'update'])->name('updateCar');

     Route::get('deleteCar/{id}',[CarController::class,'destroy'])->name('deleteCar');














  })->name('admin');
