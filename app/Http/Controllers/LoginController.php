<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
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
    	return redirect(route('home.index'));
    }

    public function logout(){
    	Sentinel::logout();
    	return redirect('/');
    }
}
