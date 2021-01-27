<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\ItemSubCategory;
$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'name_mm' => $faker->name,
        'item_category_id' => function () {
            return ItemCategory::all()->random()->id;
        },
        'item_sub_category_id' => function () {
            return ItemSubCategory::all()->random()->id;
        },
        'normal_quantity' => $faker->randomFloat(3, 0, 30000),
        'normal_price' => $faker->randomFloat(3, 0, 30000),
        'special_quantity' => $faker->randomFloat(3, 0, 30000),
        'special_price' => $faker->randomFloat(3, 0, 30000),
        'cover' => $faker->sentence,
        'description' => $faker->sentence,

    ];
});
