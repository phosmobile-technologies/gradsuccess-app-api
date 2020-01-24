<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CoverLetterRedraft extends Model
{
    //
     protected $fillable = [
        'name',
		'address',
		'phone',
		'workplace_1',
		'workplace_1_roles',
		'workplace_1_recognized_job',
		'workplace_2',
		'workplace_2_roles',
		'workplace_2_recognized_job',
		'supervised_before',
		'supervised_workplace',
		'recent_tertiary_institute',
		'number_of_employee_supervised_workplace_1',
		'number_of_employee_supervised_workplace_2',
		'recent_tertiary_institute_name',
		'scholarship_and_awards',
		'final_grade_school_1',
		'result_rank_school_1',
		'top_courses_school_1',
		'project_dissertation_name_school_1',
		'next_most_recent_tertiary_education',
		'final_grade_school_2',
		'result_rank_school_2',
		'top_courses_school_2',
		'leadership_experience',
		'interpersonal_skills', 
		'presentation_skills',  
		'programming', 
		'microsoft_excel',
		'java',
		'other_skills',
		'extracurricular_activities',
		'professional_workshops',
		'certification_dates',
		'organization_contacted_before_hand',
		'summary_of_interest',
		'attached_file',
		'assigned_associate_id',
		'user_id',
         'package_id',
		'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }
}
