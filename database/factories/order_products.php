<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order_products::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'Order_id'=>$faker->numberBetween(1,100000),
        'product_code'=>$faker->languageCode,
        'Qty'=>$faker->numberBetween(0,110000),
        'priceEach'=>$faker->numberBetween(0,1)
    ];
});
