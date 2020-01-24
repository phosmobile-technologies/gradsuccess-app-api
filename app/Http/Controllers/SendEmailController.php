<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\AssignApplicationToExpert;
use \App\Mail\ExpertSuccessMail;
use \App\Mail\NewApplicationAlert;

use \App\GraduateSchoolStatementReview;
use \App\GraduateSchoolEssayRedraft;
use \App\CoverLetterReview;
use \App\CoverLetterRedraft;
use \App\ResumeReview;
use \App\User;

class SendEmailController extends Controller
{
    function sendMail(Request $request)
    {
        $associate_id = $request->associate_id;
        $form_id = $request->form_id;
        $package = $request->formType;
        $applicationRequestToAssign = null;
        $expert = User::where('id', $associate_id)->get();

        if ($package === "graduateSchoolStatementReviewForm") {
            $applicationRequestToAssign = GraduateSchoolStatementReview::where('form_id', $form_id)->get();
        } else if ($package === "graduateSchoolEssayRedraftForm") {
            $applicationRequestToAssign = GraduateSchoolEssayRedraft::where('form_id', $form_id)->get();
        } else if ($package === "coverLetterReviewForm") {
            $applicationRequestToAssign = CoverLetterReview::where('form_id', $form_id)->get();
        } else if ($package === "coverLetterRedraft") {
            $applicationRequestToAssign = CoverLetterRedraft::where('form_id', $form_id)->get();
        } else {
            $applicationRequestToAssign = ResumeReview::where('form_id', $form_id)->get();
        }
        \Mail::to('admin@gradsuccess.org')->send(new AssignApplicationToExpert($expert, $applicationRequestToAssign));
        sleep(1);
        \Mail::to($expert[0]->email)->send(new ExpertSuccessMail($expert));

        return "success";
    }

    function sendAssociatesEmail(Request $request)
    {
        $form_id = $request->form_id;
        $experts = "Expert";

        $applicationRequesttoAssign = null;

        $expert = User::where('account_type', $experts)->get();

        foreach ($expert as $exp) {
            \Mail::to($exp->email)->send(new NewApplicationAlert($exp->first_name));
            sleep(1);
        }

        return $expert;
    }
}

