<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Role;
class RegistrationController extends Controller
{
    //
    public function register()
    {
    	$roles = role::all();
    	return view('register',compact('roles'));
	}

	public function postRegister(Request $request)
	{
		if($request->password != $request->confirmpassword)
		{
			return redirect('/register')->with('message','Please Enter Correct Value in Confirm Password Field.');	
		}
		$user = Sentinel::registerAndActivate($request->all());
		$role = Sentinel::findRoleBySlug('manager');
		$role->users()->attach($user);
		return redirect('/register')->with('message','User Has been Created. Now You Can Login.');
	}
    
}
