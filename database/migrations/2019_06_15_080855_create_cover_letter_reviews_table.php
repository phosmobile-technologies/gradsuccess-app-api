<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverLetterReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_letter_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('industry_applied_for');
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
        Schema::dropIfExists('cover_letter_reviews');
    }
}
