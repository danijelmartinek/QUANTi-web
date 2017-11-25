<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Member;

class MembershipController extends Controller
{
    //
    public function index(){

      return view('membership-register', array('user' => Auth::user()));
    }

    public function register_member(Request $request){
    	// Handle the member register
        $new_member = new Member;
        $new_member -> user_id = Auth::user()->id;
        $new_member -> firstname = $request -> firstname;
        $new_member -> lastname = $request -> lastname;
        $new_member -> email = $request -> email;
        $new_member -> phone_number = $request -> phone_number;
        $new_member -> address = $request -> address;
        $new_member -> city = $request -> city;
        $new_member -> oib = $request -> oib;

        $new_member -> save();

        return Redirect::to('/');
    	}

      public function member(){

        $current_user_id = Auth::user() ->id;
        $member = MEMBER::where('user_id', $current_user_id) -> first();
        if($member == NULL){
          return redirect('/membership/register');
        }
        return view('membership', ['member' => $member]);
      }

}
