<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\ChangePassword;

class PasswordReset extends Controller
{
   function index(Request $request) {
		$email = $request->email;
		\Mail::to($email)->send(new ChangePassword);
	    return "success";
	}
}
