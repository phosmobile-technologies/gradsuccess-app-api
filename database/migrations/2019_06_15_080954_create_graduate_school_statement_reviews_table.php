<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduateSchoolStatementReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_school_statement_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('university_and_course_applied_for');
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
        Schema::dropIfExists('graduate_school_statement_reviews');
    }
}
