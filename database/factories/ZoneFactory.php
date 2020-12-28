<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Zone;
use Faker\Generator as Faker;
use App\City;

$factory->define(Zone::class, function (Faker $faker) {
    return [
        'city_id' => function () {
            return City::all()->random()->id;
        },
        'name_mm' => $faker->name,
        'name_en' => $faker->name,
        'description' => $faker->sentence,
    ];
});
