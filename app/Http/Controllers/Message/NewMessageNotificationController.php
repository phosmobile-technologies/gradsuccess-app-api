<?php

namespace App\Http\Controllers;

use App\Mail\NewMessageNotification;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewMessageNotificationController extends Controller
{

    function index(Request $request)
    {
        $sender_id = $request->sender_id;
        $receiver_id = $request->receiver_id;
        $from = $request->from;

        $receiver = null;
        $sender = null;

        if($from === "Associate"){
            $sender = User::where('id', $sender_id)->get();
            $receiver = User::where('form_id', $receiver_id)->get();

        }else{
            $sender = User::where('form_id', $sender_id)->get();
            $receiver = User::where('id', $receiver_id)->get();
        }

        \Mail::to($receiver[0]->email)->send(new NewMessageNotification($sender, $receiver));

        return "success";
    }
}
