<?php

use Illuminate\Database\Seeder;
use App\Models\City;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $cities = [
        ['name' => 'Nay Pyi Taw', 'name_mm' => 'နေပြည်တော်',  'is_available_d2d' => 1],
        ['name' => 'Mandalay', 'name_mm' => 'မန္တလေး',  'is_available_d2d' => 1],
        ['name' => 'Yangon', 'name_mm' => 'ရန်ကုန်',  'is_available_d2d' => 1],
    ];
    public function run()
    {
        // factory(App\City::class,10)->save();
        // factory(App\City::class, 10)->create()->each(function ($city) {
        //     $city->zones()->save(factory(App\Zone::class)->make());
        // });
        // factory(App\City::class, 10)->create()->each(function ($city) {
        //     $city->zones()->saveMany(factory(App\Zone::class, 10)->make());
        // });
        Schema::disableForeignKeyConstraints();
        foreach ($this->cities as $city) {
            factory(City::class)->create([
                'name' => $city["name"],
                'name_mm' => $city["name_mm"],
                'is_available_d2d' => $city["is_available_d2d"]
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
