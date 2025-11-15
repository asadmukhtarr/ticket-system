<?php

use App\Http\Controllers\admin\roomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\admin\adminController;

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

// routes for admin ..
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[adminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/settings',[adminController::class,'settings'])->name('admin.settings');
    Route::resource('/rooms',roomsController::class);
    Route::get('/users',[adminController::class,'users'])->name('admin.users');
    Route::get('/analytics',[adminController::class,'analytics'])->name('admin.analytics');
});
