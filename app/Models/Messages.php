<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
   protected $fillable = [
        'sender_id','recipient_id','message','attached_file','attached_file_name','attached_file_type'
    ];
}
