<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Models\Package;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'package_name' => $faker->randomElement(["Cover Letter review", "Cover Letter Redraft", "Graduate School Essay Redraft", "Graduate School Statement Review", "Resume Review"]),
        'turn_around_time' =>$faker->randomElement(["Flash", "Regular"]),
        'amount' => $faker->numberBetween(7000, 30000)
    ];
});
