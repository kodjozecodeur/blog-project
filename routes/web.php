<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**simple tricks ,if you have a static page, you can use Route::view */

Route::get('/', [HomeController::class, 'index'])->name('home');

//route for about page
Route::view('/about', 'about')->name('about');
//route for contact page
Route::view('/contact', 'contact')->name('contact');
