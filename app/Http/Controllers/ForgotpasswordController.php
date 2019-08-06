<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Sentinel;
use Mail;
class ForgotpasswordController extends Controller
{
    //
	public function forget(){
		return view('forgot');
	}

	public function password(Request $request)
	{
		$user = user::whereEmail($request->email)->first();

		if($user == null)
		{
			return redirect()->back()->with('message','Email Does not Exists!!');
		}

		$user = Sentinel::findById($user->id);
		$reminder = Reminder::exists($user) ? : Reminder::create($user);
		$this->sendEmail($user,$reminder->code);
		return redirect()->back()->with('message','Password Reset Code Sent To Your Mail');
	}

	public function sendEmail($user,$code)
	{
		Mail::send(
			'email.forgot',
			array('user'=>$user,'code'=>$code),
			function($message) use ($user){
				$message->to($user->email);
				$message->subject("$user->first_name, reset your password.");	
				
			}
			);
	}


	public function reset()
	{
		return "Done";
	}
}
