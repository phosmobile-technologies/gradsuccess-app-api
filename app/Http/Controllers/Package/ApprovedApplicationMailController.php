<?php

namespace App\Http\Controllers;

use App\Mail\AssignedExpert;
use Illuminate\Http\Request;
use \App\Mail\ApplicationApproved;
use \App\Mail\ApplicationAssigned;


use \App\User;

class ApprovedApplicationMailController extends Controller
{
    function index(Request $request)
    {
        $associate_id = $request->associate_id;
        $form_id = $request->form_id;

        $expert = User::where('id', $associate_id)->get();
        $client = User::where('form_id', $form_id)->get();

        \Mail::to($expert[0]->email)->send(new ApplicationApproved($expert));
        sleep(1);
        \Mail::to($client[0]->email)->send(new AssignedExpert($client));
        sleep(1);
        \Mail::to('admin@gradsuccess.org')->send(new ApplicationAssigned($expert));
        return "success";
    }
}

