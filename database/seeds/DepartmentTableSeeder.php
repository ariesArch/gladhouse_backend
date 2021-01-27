<?php

use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $departments = [
        'Admin' => 'Admin',
        'HR'=>'HR',
        'Finance' => 'Finance',
        'Kitchen' => 'Kitchen',
        'Floor' => 'Floor',
        'Delivery' => 'Delivery'
    ];
    public function run()
    {
        //
        // factory(App\Models\Department::class, 10)->create();
        Schema::disableForeignKeyConstraints();
        foreach ($this->departments as $key => $value) {
            factory(Department::class)->create([
                'name'    => $key,
                'description' => $value
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
