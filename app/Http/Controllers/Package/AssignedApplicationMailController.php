<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\AssignedApplication;
use \App\Mail\ApplicationAssigned;
use \App\Mail\AssignedExpert;
;


use \App\User;

class AssignedApplicationMailController extends Controller
{
   function index(Request $request) {
	$associate_id = $request->associate_id;
	$user_id = $request->userID;
	
	$expert = User::where('id', $associate_id)->get();
	$client = User::where('form_id', $user_id)->get();

	\Mail::to($expert[0]->email)->send(new AssignedApplication($expert));
	sleep(10);
	\Mail::to($client[0]->email)->send(new AssignedExpert($client));
	sleep(10);
	\Mail::to('admin@gradsuccess.org')->send(new ApplicationAssigned($expert));

    return $user_id;
}
}

