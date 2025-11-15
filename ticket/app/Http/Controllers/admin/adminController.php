<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');   
    }
    public function settings(){
        return view('admin.settings');
    }
    public function users(){
        return view('admin.users');
    }
    public function analytics(){
        return view('admin.analytics');
    }
}

