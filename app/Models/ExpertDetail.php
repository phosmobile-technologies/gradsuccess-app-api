<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ExpertDetail extends Model
{
   protected $fillable = [
        'associate_id', 'highest_ranked_university_attended','qualification_at_university','employment','scholarships_and_awards','graduating_grade','gre_score','gmat_score','ielts','university_transcripts','attached_file','bio_bait','where_client_from','what_jobs_client','client_reach_you_for','profile_image_ref,user_name','bank_account_number','bank_name'
    ];
}










