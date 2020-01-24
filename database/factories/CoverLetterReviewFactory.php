<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use \App\Models\CoverLetterReview;
use Faker\Generator as Faker;

$factory->define(CoverLetterReview::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'industry_applied_for' => $faker->company,
        'summary_of_interest' => $faker->sentence(300),
        'attached_file' => $faker->imageUrl(),
        'assigned_associate_id' => $faker->numberBetween(5,6),
        'user_id' => $faker->numberBetween(1,3),
        'package_id' => $faker->numberBetween(1,5),
        'status' => $faker->randomElement(['New','Assigned','Completed']),
    ];
});
