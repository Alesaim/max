<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login(){
    	return view('admin.login');
    } 

    public function postLogin(Request $request){
        if(Sentinel::authenticate($request->all())){
            return redirect('/');
        }else
    	return redirect()->back()->with(['error' => 'Wrong Credentials.']);
    	
    } 

    public function logout(){
    	Sentinel::logout();
    	return redirect('/');
    }
}
