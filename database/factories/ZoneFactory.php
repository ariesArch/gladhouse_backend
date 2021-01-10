<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\City;
use App\Models\Zone;

$factory->define(Zone::class, function (Faker $faker) {
    return [
        'city_id' => function () {
            return City::all()->random()->id;
        },
        'name' => $faker->name,
        'name_mm' => $faker->name,
        'description' => $faker->sentence,
    ];
});
