<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class AssociateDetail extends Model
{
   protected $fillable = [
        'highest_ranked_university_attended',
       'qualification_at_university',
       'employment',
       'scholarships_and_awards',
       'graduating_grade',
       'gre_score',
       'gmat_score',
       'ielts',
       'university_transcripts',
       'attached_file',
       'bio_bait',
       'where_client_from',
       'what_jobs_client',
       'client_reach_you_for',
       'profile_image_ref',
       'user_name',
       'bank_account_number',
       'bank_name',
       'user_id'
   ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



}











