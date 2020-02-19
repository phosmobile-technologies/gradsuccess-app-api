<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\ExpertDetail;
use App\User;

class ExpertDetails extends Controller
{
    function index(Request $request) {	
        $expert = new ExpertDetail();	

        $expert->associate_id = request('associate_id');
        $expert->highest_ranked_university_attended = request('highest_ranked_university_attended');
        $expert->qualification_at_university = request('qualification_at_university');
        $expert->employment = request('employment');
        $expert->scholarships_and_awards = request('scholarships_and_awards');
        $expert->graduating_grade = request('graduating_grade');
        $expert->gre_score = request('gre_score');
        $expert->gmat_score = request('gmat_score');
        $expert->ielts = request('ielts');
        $expert->university_transcripts = request('university_transcripts');
        $expert->attached_file = request('attached_file');
        $expert->bio_bait = request('bio_bait');
        $expert->where_client_from = request('where_client_from');
        $expert->what_jobs_client = request('what_jobs_client');
        $expert->client_reach_you_for = request('client_reach_you_for');
        $expert->profile_image_ref = request('profile_image_ref');
        $expert->user_name = request('user_name');
        $expert->bank_account_number = request('bank_account_number');
        $expert->bank_name = request('bank_name');

        $expert->save();
        return $request;

    }
    


    function update(Request $request) {	

        $associate_id = request('associate_id');
        $highest_ranked_university_attended = request('highest_ranked_university_attended');
        $qualification_at_university = request('qualification_at_university');
        $employment = request('employment');
        $scholarships_and_awards = request('scholarships_and_awards');
        $graduating_grade = request('graduating_grade');
        $gre_score = request('gre_score');
        $gmat_score = request('gmat_score');
        $ielts = request('ielts');
        $university_transcripts = request('university_transcripts');
        $attached_file = request('attached_file');
        $bio_bait = request('bio_bait');
        $where_client_from = request('where_client_from');
        $what_jobs_client = request('what_jobs_client');
        $client_reach_you_for = request('client_reach_you_for');
        $bank_account_number = request('bank_account_number');
        $bank_name = request('bank_name');

         $data=array(
            'highest_ranked_university_attended' =>$highest_ranked_university_attended,
            'qualification_at_university' =>$qualification_at_university,
            'employment'=>$employment,
            'scholarships_and_awards'=>$scholarships_and_awards,
            'graduating_grade'=>$graduating_grade,
            'gre_score'=>$gre_score,
            'gmat_score'=>$gmat_score,
            'ielts'=>$ielts,
            'university_transcripts' =>$university_transcripts,
            'attached_file' =>$attached_file,
            'bio_bait' =>$bio_bait,
            'where_client_from' =>$where_client_from,
            'what_jobs_client' =>$what_jobs_client,
             'client_reach_you_for' =>$client_reach_you_for,
            'bank_account_number' =>$bank_account_number,
            'bank_name' =>$bank_name
            );
              DB::table('expert_details')->where('associate_id', $associate_id)->update($data);

            return $highest_ranked_university_attended;
      }

      function getExpertInfo(Request $request) {
        $user = User::where('account_type', "Associate")->get();
         return $user;
      }

      function checkUserExists(Request $request){
        $email = request('email');

        $email_exists = User::where('email', $email)->get();

        if(count($email_exists) > 0){
          return "true";
        }else{
          return "false";
        }

      }

    }
    

