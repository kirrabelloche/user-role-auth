<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function profile(){
        return view('profile' , array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request){
        // Handle the user uplode avartar

    }
}
