<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\payments::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'customer_id'=>$faker->numberBetween(1,100000),
        'payment_date'=>$faker->dateTime,
        'amount'=>$faker->numberBetween(1,100000),
        'MSRP'=>$faker->text
    ];
});
