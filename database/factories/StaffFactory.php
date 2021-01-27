<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Staff;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username'=>$faker->name,
        'city_id' => rand(1,10),
        'zone_id' => rand(1,10),
        'branch_id' => rand(1,10),
        'department_id' => rand(1,10),
        'role_id' => rand(1,10),
        'password'=>bcrypt('secret')
    ];
});
