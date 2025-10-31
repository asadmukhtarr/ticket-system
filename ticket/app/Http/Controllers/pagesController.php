<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    // about ..
    public function about(){
        return view('about');
    }
    // contact ..
    public function contact(){
        return view('contact');
    }
    // checkout ..
    public function checkout(){
        return view('checkout');
    }
    // rooms 
    public function rooms(){
        return view('rooms');
    }
    // room profiel ..
    public function room(){
        return view('room');
    }
}
