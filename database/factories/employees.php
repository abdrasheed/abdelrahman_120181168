<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\employees::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'office_code'=>$faker->numberBetween(1,100000),
        'reports_to'=>$faker->numberBetween(1,100000),
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'extension'=>$faker->text,
        'email'=>$faker->email,
        'job_title'=>$faker->jobTitle,
    ];
});
