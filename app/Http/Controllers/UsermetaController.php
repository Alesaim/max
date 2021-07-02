<?php

namespace App\Http\Controllers;

use App\Models\UserMeta;
use Illuminate\Http\Request;
use Sentinel;

class UsermetaController extends Controller
{
    public function addUsermeta(Request $request)
    {
    	$credentials = UserMeta::create([
            'image'       => $request->image,
            'name'        => $request->name,
            'email'       => $request->email,
            'country'     => $request->country,
            'city'        => $request->city,
            'state'       => $request->state,
            'postcode'    => $request->postcode,            
            'address'     => $request->address,
        ]);

        $user = Sentinel::register($credentials);

        UserMeta::create([
        	'user_id' => $user_id
        	]);
        
        return redirect()->route('/settings');
    }
}
