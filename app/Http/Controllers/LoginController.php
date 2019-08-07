<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('login');
    }

    public function postlogin(Request $request)
    {
    	Sentinel::authenticate($request->all());
    	
        if(Sentinel::check())
        {   
            $users = user::all();
            return view('admin/show',compact('users'));
        }
    }

    public function logout(){
    	Sentinel::logout();
    	return redirect('/login');
    }
}
