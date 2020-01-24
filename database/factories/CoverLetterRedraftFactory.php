<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\CoverLetterRedraft;
use Faker\Generator as Faker;

$factory->define(CoverLetterRedraft::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'workplace_1' => $faker->company,
        'workplace_1_roles' => $faker->jobTitle,
        'workplace_1_recognized_job' => $faker->sentence,
        'workplace_2'=> $faker->company,
        'workplace_2_roles' => $faker->jobTitle,
        'workplace_2_recognized_job' => $faker->sentence ,
        'supervised_before' => $faker->randomElement(["Yes", "No"]),
        'supervised_workplace'=> $faker->company,
        'recent_tertiary_institute'=> $faker->company,
        'number_of_employee_supervised_workplace_1'=> $faker->numberBetween(1,10),
        'number_of_employee_supervised_workplace_2'=> $faker->numberBetween(1,10),
        'recent_tertiary_institute_name' => $faker->company,
        'scholarship_and_awards' => $faker->sentence,
        'final_grade_school_1' => $faker->numberBetween(200, 500),
        'result_rank_school_1' => $faker->randomElement(["Upper", "Credit", "Pass","Fail"]),
        'top_courses_school_1'=> $faker->sentence,
        'project_dissertation_name_school_1' => $faker->sentence,
        'next_most_recent_tertiary_education' => $faker->sentence,
        'final_grade_school_2' => $faker->numberBetween(200, 500),
        'result_rank_school_2' => $faker->randomElement(["Upper", "Credit", "Pass","Fail"]),
        'top_courses_school_2' => $faker->sentence,
        'leadership_experience' => $faker->sentence ,
        'interpersonal_skills' => $faker->boolean,
        'presentation_skills'=> $faker->boolean,
        'programming'=> $faker->boolean,
        'microsoft_excel'=> $faker->boolean,
        'java' => $faker->boolean,
        'other_skills' => $faker->sentence,
        'extracurricular_activities' => $faker->sentence,
        'professional_workshops'=> $faker->sentence,
        'certification_dates' => $faker->date("Y-m-d"),
        'organization_contacted_before_hand' => $faker->company,
        'summary_of_interest' => $faker->sentence(300),
        'attached_file' => $faker->imageUrl(),
        'assigned_associate_id' => $faker->numberBetween(5,6),
        'user_id' => $faker->numberBetween(1,3),
        'package_id' => $faker->numberBetween(1,5),
        'status' => $faker->randomElement(['New','Assigned','Completed']),
    ];
});
