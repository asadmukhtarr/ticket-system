<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// about page ..
Route::get('about',function(){
    return view('about');
})->name('about');
// contact page ..
Route::get('/contact',function(){
    return view('contact');
});
// rooms..
Route::get('/rooms',function(){
    return view('rooms');
})->name('room');
// room 
Route::get('/room',function(){
    return view('room');
})->name('room.profile');
// checkout ..
Route::get('/checkout',function(){
    return view('checkout');
})->name('checkout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
