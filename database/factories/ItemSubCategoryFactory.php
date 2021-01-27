<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ItemCategory;
use App\Models\ItemSubCategory;

$factory->define(ItemSubCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'name_mm' => $faker->name,
        'item_category_id'=>function(){
            return ItemCategory::all()->random()->id;
        },
        'description' => $faker->sentence,
    ];
});
