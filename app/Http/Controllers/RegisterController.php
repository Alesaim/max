<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\UserMeta;

class RegisterController extends Controller
{
     public function register(){
    	return view('admin.register');
    }

    public function postRegister(Request $request){ 
    	$user = Sentinel::registerAndActivate($request->all());

    	UserMeta::create([
    		'user_id' => $user->id,
    		'name' => $user->name,
    	]);
    	return redirect('/');

        }
}
 