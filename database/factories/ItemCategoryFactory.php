<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ItemCategory;

$factory->define(ItemCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'name_mm' => $faker->name,
        'description' => $faker->sentence,
    ];
});
