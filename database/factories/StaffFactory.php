<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        //
        'username' => $faker->name,
        'city_id' => rand(1,10),
        'zone_id' => rand(1,10),
        'branch_id' => rand(1,10),
        'department_id' => rand(1,10),
        'role_id' => rand(1,10),
        'remember_token' => Str::random(10),
    ];
});
