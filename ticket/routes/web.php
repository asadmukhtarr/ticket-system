<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/',[pagesController::class,'home'])->name('home');
// about page ..
Route::get('about',[pagesController::class,'about'])->name('about');
// contact page ..
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// rooms..
Route::get('/rooms',[pagesController::class,'rooms'])->name('rooms');
// room 
Route::get('/room',[pagesController::class,'room'])->name('room.profile');
// checkout ..
Route::get('/checkout',[pagesController::class,'checkout'])->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
