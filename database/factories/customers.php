<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customers::class, function (Faker $faker) {
    return [
        'ID'=>$faker->languageCode,
        'sales_rep_employee_num'=>$faker->numberBetween(1,100000),
        'name'=>$faker->name,
        'amount'=>$faker->numberBetween(1,100000),
        'last_name'=>$faker->lastName,
        'first_name'=>$faker->firstName,
        'country'=>$faker->country,
        'postal_code'=>$faker->postcode,
        'state'=>$faker->state,
        'city'=>$faker->city,
        'address2'=>$faker->address,
        'address1'=>$faker->address,
        'phone'=>$faker->phoneNumber
    ];
});
