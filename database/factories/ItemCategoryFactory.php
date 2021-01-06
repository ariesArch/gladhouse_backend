<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ItemCategory;
use Faker\Generator as Faker;

$factory->define(ItemCategory::class, function (Faker $faker) {
    return [
        'name_mm' => $faker->name,
        'name_en' => $faker->name,
        'description' => $faker->sentence,
    ];
});
