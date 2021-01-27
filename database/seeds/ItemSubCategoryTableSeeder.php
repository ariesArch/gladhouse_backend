<?php

use Illuminate\Database\Seeder;
use App\Models\ItemSubCategory;

class ItemSubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $item_sub_categories = [
        ['name' => 'Rice', 'name_mm' => 'Rice'],
        ['name' => 'Chicken', 'name_mm' => 'Chicken']
    ];
    public function run()
    {
        foreach ($this->item_sub_categories as $sub_category) {
            factory(ItemSubCategory::class)->create([
                'name' => $sub_category['name'],
                'name_mm' => $sub_category['name_mm']
            ]);
        }
    }
}
