<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserMeta;
use Sentinel;
use App\Models\User;

class ProfileController extends Controller
{
    
	public function getProfile()
    {           
        $profile = User::whereId(Sentinel::getUser()->id)->with('meta')->first();
        // dd($profile);
        return view('dashboard.settings', compact('profile'));
    }

    public function postProfile(Request $request)
    {

        //update meta_user info. For example, city etc
        if($request->has('city')){
            $this->updateUserMeta($request);
        }

        $user = User::with('meta')->find(Sentinel::getUser()->id);
        return redirect('/profile');
    }

    private function updateSentinelUser($request)
    {
        $user = Sentinel::getUser();

        $sentinelUser = Sentinel::findById($user->id); 

        $credentials = [
         'first_name' => $request->get('first_name'),
         'last_name'  => $request->get('last_name'),
        //             'email'      => $request->get('email')
        ];

        Sentinel::update($sentinelUser, $credentials);
    }



   private function updateUserMeta(Request $request)
    {
        $user = Sentinel::getUser();

        $user_meta          = UserMeta::where('user_id', $user->id)->first();

        $user_meta->user_id = $user->id;

        $user_meta->city                = $request->get('city')?:'';

        $user_meta->save();
    }

}
