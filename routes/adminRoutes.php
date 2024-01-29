<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::prefix('admin')->middleware('verified')

  ->group(function(){


    




  })->name('admin');
