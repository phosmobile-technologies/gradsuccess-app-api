<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\ApplicationDeclined;
use \App\Mail\ApplicationAssigned;


use \App\User;

class DeclinedApplicationMailController extends Controller
{
  

   function index(Request $request) {
	$associate_id = $request->associate_id;

	$expert = User::where('id', $associate_id)->get();
	
	\Mail::to($expert[0]->email)->send(new ApplicationDeclined($expert));

    return "success";
}
}

