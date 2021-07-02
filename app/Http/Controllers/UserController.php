<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function features(){
    	return view('features');
    }

    public function pricing(){
    	return view('pricing');
    }

    public function contact(){
    	return view('contact');
    }

    public function terms(){
    	return view('terms');
    }

    public function index(){
        return view('dashboard.index');
    }
}
