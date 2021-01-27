<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\ItemCategory;
>>>>>>> 0018f8f6ce3f326ca5ef57eaeb9e61b9bd82e5b1

class ItemCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $item_categories = [
        ['name' => 'Myanmar Food', 'name_mm' => 'Myanmar Food'],
        ['name' => 'Drink', 'name_mm' => 'Drink'],
        ['name' => 'Juice', 'name_mm' => 'Juice'],
        ['name' => 'Coffee', 'name_mm' => 'Coffee']
    ];
    public function run()
    {
        foreach ($this->item_categories as $category) {
            factory(ItemCategory::class)->create([
                'name' => $category['name'],
                'name_mm' => $category['name_mm']
            ]);
        }
    }
}
