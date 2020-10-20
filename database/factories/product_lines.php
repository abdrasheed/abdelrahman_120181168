<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\product_lines::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'ProductLineID'=>$faker->numberBetween(1,100000),
        'Image'=>$faker->word,
        'DescInText'=>$faker->text,
        'DescInHTML'=>$faker->text
    ];
});
