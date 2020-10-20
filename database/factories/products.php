<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\products::class, function (Faker $faker) {
    return [
        'code'=>$faker->languageCode,
        'ProductLineID'=>$faker->numberBetween(1,100000),
        'Name'=>$faker->name,
        'Scale'=>$faker->numberBetween(1,100000),
        'Vendor'=>$faker->word,
        'pdt_description'=>$faker->text,
        'QtyInStock'=>$faker->numberBetween(1,100000),
        'BuyPrice'=>$faker->numberBetween(1,100000),
        'MSRP'=>$faker->text
    ];
});
