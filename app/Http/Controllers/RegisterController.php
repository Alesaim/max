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


        $credentials = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
        ];

    	$user = Sentinel::registerAndActivate($credentials);
        $user->banned = 0;
        $user->save();

    	UserMeta::create([
    		'user_id' => $user->id
    	]);
    	return redirect('/');

        }

}
 