<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Department;

$factory->define(Department::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'name_mm' => $faker->name,
        'description' => $faker->sentence,
    ];
});
