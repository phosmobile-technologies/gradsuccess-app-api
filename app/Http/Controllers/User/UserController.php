<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     *
     */
//    gets all registered experts
    function fetchAll(){
       return  $experts = User::where("account_type","Expert")->get();
    }

    public function getUserById(string $id){
        $user =  User::findOrFail($id);
        return $user;
    }
}
