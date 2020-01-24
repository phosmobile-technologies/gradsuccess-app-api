<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
   protected $fillable = [
        'user_id','associate_id','message_body','attachment_ref','attachment_name','message_type'
    ];
}
