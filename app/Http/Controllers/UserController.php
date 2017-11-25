<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile(){
      
    	return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){
    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(null, 500, function ($constraint) {
    			$constraint->aspectRatio();})->save( public_path('/storage/users/' . $filename ));

    		$user = Auth::user();
    		$user-> avatar = 'users/' . $filename;
    		$user->save();
    	}
    return view('profile', array('user' => Auth::user()));
    }
}
