<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Branch;
use Faker\Generator as Faker;
use App\City;
use App\Zone;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        //
        'city_id' => function () {
            return City::all()->random()->id;
        },
        'zone_id' => function () {
            return Zone::all()->random()->id;
        },
        'name_mm' => $faker->name,
        'name_en' => $faker->name,
        'description' => $faker->sentence,
    ];
});
