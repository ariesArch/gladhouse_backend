<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name_mm' => $faker->name,
        'name_en' => $faker->name,
        'description' => $faker->sentence,

    ];
});
