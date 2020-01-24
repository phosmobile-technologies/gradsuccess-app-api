<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PackageReview extends Model
{
    //
    protected $fillable = [
        'associate_id', 'package_id','rating','comment'
    ];
}
