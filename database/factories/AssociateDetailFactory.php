<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AssociateDetail;
use Faker\Generator as Faker;

$factory->define(AssociateDetail::class, function (Faker $faker) {
    return [
        'highest_ranked_university_attended' =>$faker->company,
        'qualification_at_university' =>$faker->word,
        'employment' => $faker->company,
        'scholarships_and_awards' =>$faker->word,
        'graduating_grade' =>$faker->word,
        'gre_score' =>$faker->numberBetween(50,100),
        'gmat_score' => $faker->numberBetween(70, 300),
        'ielts' =>$faker->numberBetween(70, 300),
        'university_transcripts' =>$faker->word,
        'attached_file' => $faker->imageUrl(),
        'bio_bait' =>$faker->sentence(30),
        'where_client_from' =>$faker->address,
        'what_jobs_client' => $faker->word,
        'client_reach_you_for' =>$faker->word,
        'profile_image_ref' =>$faker->imageUrl(),
        'user_name' => $faker->unique()->word,
        'bank_account_number' =>$faker->numberBetween(1000000000, 20000000000),
        'bank_name' =>$faker->company,
        'user_id' => $faker->unique()->randomElement([5,6]),
    ];
});
