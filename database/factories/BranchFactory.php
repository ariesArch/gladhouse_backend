<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Branch;
use App\Models\City;
use App\Models\Zone;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        //
        'city_id' => function () {
            return City::all()->random()->id;
        },
        'zone_id' => function () {
            return Zone::all()->random()->id;
        },
        'name' => 'Glad House',
        'name_mm' => 'Glad House',
        'description' => $faker->sentence,
    ];
});
