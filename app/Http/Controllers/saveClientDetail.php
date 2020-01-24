<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

    use App\User;

class saveClientDetail extends Controller
{
    function index(Request $request) {
        $password = Hash::make($request->password);
   		
		$user = new User();	

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->phone = request('phone');
        $user->form_id = request('form_id');
        $user->package = request('package');
        $user->email = request('email');
        $user->password = $password;
        $user->account_type = request('account_type');

        $user->save();
        return $request;
	}
}
