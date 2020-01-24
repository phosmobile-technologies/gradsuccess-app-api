<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GraduateSchoolEssayRedraft extends Model
{
    //

    protected $fillable = [
       	'name',
		'phone',
		'employment_most_relevant_to_you_masters_application',
		'typical_achievements',
		'scholarships_and_award',
		'undergraduate_level_courses_master',
		'project_dissertation_name_master',
		'most_recent_undergraduate',
		'undergraduate_level_grade',
		'result_ranking',
		'undergraduate_level_courses_phd',
		'project_dissertation_name_phd',
		'leadership_experience',
		'interpersonal_skills',
		'presentation_skills',
		'programming',
		'microsoft_excel',
		'java',
		'other_skills',
		'extracurricular_activities',
		'professional_workshops',
		'academic_conferences_attended',
		'certificate',
		'english',
		'french',
		'german',
		'spanish',
		'nigeria_languages',
		'other_languages',
		'masters_intended_area_of_research',
		'university_of_choice_and_course',
		'modules_interested',
		'teaching_personnel_contacted',
		'summary_of_interest',
		'post_study_goal',
		'referee',
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
