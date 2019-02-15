<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UsersController extends Controller
{
    //

    public function profile(){
        if( Auth::user()){
        return view('profile',array('user' => Auth::user()));
        }else{
            return redirect()->route('login');
        }
    }
}
