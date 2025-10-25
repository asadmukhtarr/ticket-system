<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// testing route ..
Route::get('/test',function(){
    return "Hello World";
});