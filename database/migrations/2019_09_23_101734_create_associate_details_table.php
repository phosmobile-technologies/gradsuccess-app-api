<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('associate_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('highest_ranked_university_attended');
            $table->string('qualification_at_university');
            $table->string('employment');
            $table->string('scholarships_and_awards');
            $table->string('graduating_grade');
            $table->string('gre_score');
            $table->string('gmat_score');
            $table->string('ielts');
            $table->string('university_transcripts')->nullable();
            $table->string('attached_file')->nullable();
            $table->longText('bio_bait')->nullable();
            $table->string('where_client_from')->nullable();
            $table->string('what_jobs_client')->nullable();
            $table->string('client_reach_you_for')->nullable();
            $table->string('profile_image_ref')->nullable();
            $table->string('user_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('associate_details');
    }
}
