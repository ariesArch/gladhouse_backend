<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\City::class,10)->save();
        // factory(App\City::class, 10)->create()->each(function ($city) {
        //     $city->zones()->save(factory(App\Zone::class)->make());
        // });
        factory(App\City::class, 10)->create()->each(function ($city) {
            $city->zones()->saveMany(factory(App\Zone::class, 10)->make());
        });
    }
}
