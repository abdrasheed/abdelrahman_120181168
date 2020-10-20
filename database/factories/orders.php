<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'customer_id'=>$faker->numberBetween(1,100000),
        'order_date'=>$faker->dateTime,
        'required_date'=>$faker->dateTime,
        'shipped_date'=>$faker->dateTime,
        'status'=>$faker->numberBetween(0,1),
        'comments'=>$faker->text
    ];
});
