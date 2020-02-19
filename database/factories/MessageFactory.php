<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Messages;
use Faker\Generator as Faker;

$factory->define(Messages::class, function (Faker $faker) {
    return [
        'sender_id' => $faker->numberBetween(1,10),
        'recipient_id' =>$faker->numberBetween(1,10),
        'message' => $faker->sentence(10),
        'attached_file' =>$faker->imageUrl(),
        'attached_file_name' => $faker->word,
        'attached_file_type' =>$faker->randomElement(["File", "Image", "None"])
    ];
});