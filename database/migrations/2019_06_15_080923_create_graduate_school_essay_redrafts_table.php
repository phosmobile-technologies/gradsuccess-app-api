<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduateSchoolEssayRedraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_school_essay_redrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('employment_most_relevant_to_you_masters_application')->nullable();
            $table->string('typical_achievements')->nullable();
            $table->string('scholarships_and_award')->nullable();
            $table->string('undergraduate_level_courses_master')->nullable();
            $table->string('project_dissertation_name_master')->nullable();
            $table->string('most_recent_undergraduate')->nullable();
            $table->string('undergraduate_level_grade')->nullable();
            $table->string('result_ranking')->nullable();
            $table->string('undergraduate_level_courses_phd')->nullable();
            $table->string('project_dissertation_name_phd')->nullable();
            $table->longText('leadership_experience')->nullable();
            $table->boolean('interpersonal_skills');
            $table->boolean('presentation_skills');
            $table->boolean('programming');
            $table->boolean('microsoft_excel');
            $table->boolean('java');
            $table->string('other_skills')->nullable();
            $table->longText('extracurricular_activities')->nullable();
            $table->longText('professional_workshops')->nullable();
            $table->longText('academic_conferences_attended')->nullable();
            $table->string('certificate')->nullable();
            $table->boolean('english');
            $table->boolean('french');
            $table->boolean('german');
            $table->boolean('spanish');
            $table->boolean('nigeria_languages');
            $table->string('other_languages')->nullable();
            $table->string('masters_intended_area_of_research')->nullable();
            $table->string('university_of_choice_and_course')->nullable();
            $table->longText('modules_interested')->nullable();
            $table->longText('teaching_personnel_contacted')->nullable();
            $table->longText('summary_of_interest');
            $table->longText('post_study_goal')->nullable();
            $table->string('referee')->nullable();
            $table->string('attached_file')->nullable();
            $table->string('assigned_associate_id')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('package_id');
            $table->string('status');
            $table->timestamps();
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduate_school_essay_redrafts');
    }
}
