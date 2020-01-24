<?php

namespace App\Http\Controllers;
use \App\Mail\PasswordResetLink;
use \App\Mail\PasswordResetSuccessful;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use \App\User;
use App\PasswordReset;

class ResetForgottenPassword extends Controller
{
   function verifyEmail(Request $request){
	$email = $request->email;
	$token = $request->token;

    	$account = User::where('email', $email)->get();

    	if(count($account) !== 0){
    		$passwordReset = new PasswordReset();
    		$passwordReset->email = $email;
              $passwordReset->token = $token;

              if($passwordReset->save()){
                     \Mail::to($account[0]->email)->send(new PasswordResetLink($token));
       	       return "A reset link mail has been sent your Email Address";
              }else{
               	return "Failed to send reset link, please try again";
              }   
      	}else{
      		return "This Email account does not exist";
      	}
      }

   function saveResetPassword(Request $request){
       $email = $request->email;
       $password = Hash::make($request->password);

       $reset_req = PasswordReset::where('email', $email)->get();
       if(count($reset_req) !== 0){
              $data=array('password'=>$password);
              DB::table('users')->where('email', $email)->update($data);
              \Mail::to($reset_req[0]->email)->send(new PasswordResetSuccessful);
              DB::table('password_resets')->where('email', $email)->delete();
              return "Your password has been reset successfully, ";
       }else{
              return "failed";
       }
   }
}
