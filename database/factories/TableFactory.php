<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'city_id' => function () {
            return City::all()->random()->id;
        },
        'name_mm' => $faker->name,
        'name_en' => $faker->name,
        'description' => $faker->sentence,
    ];
});
