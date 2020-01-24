<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverLetterRedraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_letter_redrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('workplace_1');
            $table->string('workplace_1_roles');
            $table->string('workplace_1_recognized_job');
            $table->string('workplace_2')->nullable();
            $table->string('workplace_2_roles')->nullable();
            $table->string('workplace_2_recognized_job')->nullable();
            $table->string('supervised_before');
            $table->string('supervised_workplace')->nullable();
            $table->string('recent_tertiary_institute');
            $table->integer('number_of_employee_supervised_workplace_1')->nullable();
            $table->integer('number_of_employee_supervised_workplace_2')->nullable();
            $table->string('recent_tertiary_institute_name')->nullable();
            $table->string('scholarship_and_awards')->nullable();
            $table->float('final_grade_school_1')->nullable();
            $table->string('result_rank_school_1')->nullable();
            $table->string('top_courses_school_1')->nullable();
            $table->string('project_dissertation_name_school_1');
            $table->string('next_most_recent_tertiary_education');
            $table->float('final_grade_school_2')->nullable();
            $table->string('result_rank_school_2')->nullable();
            $table->string('top_courses_school_2')->nullable();
            $table->longText('leadership_experience');
            $table->boolean('interpersonal_skills');
            $table->boolean('presentation_skills');
            $table->boolean('programming');
            $table->boolean('microsoft_excel');
            $table->boolean('java');
            $table->string('other_skills')->nullable();
            $table->string('extracurricular_activities')->nullable();
            $table->longText('professional_workshops')->nullable();
            $table->string('certification_dates')->nullable();
            $table->string('organization_contacted_before_hand')->nullable();
            $table->longText('summary_of_interest');
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
        Schema::dropIfExists('cover_letter_redrafts');
    }
}
