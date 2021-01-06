<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        //
        'normal_quantity' => $faker->randomFloat(3, 0, 1000),
        'normal_price' => $faker->randomFloat(3, 0, 1000),
        'special_quantity' => $faker->randomFloat(3, 0, 1000),
        'special_price' => $faker->randomFloat(3, 0, 1000),
        'cover' => $faker->sentence,
        'description' => $faker->sentence,

    ];
});
