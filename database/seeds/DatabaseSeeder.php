<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ItemCategoryTableSeeder::class);
        $this->call(ItemSubCategoryTableSeeder::class);
    }
}
