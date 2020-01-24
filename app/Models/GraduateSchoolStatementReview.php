<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GraduateSchoolStatementReview extends Model
{

	protected $fillable = [
        'name', 'university_and_course_applied_for', 'summary_of_interest','attached_file','assigned_associate_id','user_id','package_id','status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }
}
