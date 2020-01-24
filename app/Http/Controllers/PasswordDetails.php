<?php

namespace App\Http\Controllers;
use \App\Mail\ClientPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\User;

class PasswordDetails extends Controller
{
    function index(Request $request) {
		$form_id = $request->form_id;
		$password = $request->password;
		$client = User::where('form_id', $form_id)->get();
		\Mail::to($client[0]->email)->send(new ClientPassword($password,$client[0]->first_name,$client[0]->email));
		return $client[0]->email;
	}
}
