<?php

use Illuminate\Database\Seeder;
use App\Models\Staff;
class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $staffs = [
        ['name'=>'Super Admin','username'=>'super_admin',
        'city_id'=>1,'zone_id'=>1,'branch_id'=>1,
        'department_id'=>1,'role_id'=>1],
        [
            'name' => 'HR', 'username' => 'hr_admin',
            'city_id' => 1, 'zone_id' => 1, 'branch_id' => 1,
            'department_id' => 2, 'role_id' => 2
        ],
        [
            'name' => 'Finance', 'username' => 'fn_admin',
            'city_id' => 1, 'zone_id' => 1, 'branch_id' => 1,
            'department_id' => 3, 'role_id' => 2
        ],
        [
            'name' => 'Kitchen', 'username' => 'kc_admin',
            'city_id' => 1, 'zone_id' => 1, 'branch_id' => 1,
            'department_id' => 4, 'role_id' => 2
        ],
        [
            'name' => 'Floor', 'username' => 'fl_admin',
            'city_id' => 1, 'zone_id' => 1, 'branch_id' => 1,
            'department_id' => 5, 'role_id' => 2
        ],
        [
            'name' => 'Delivery', 'username' => 'deli_admin',
            'city_id' => 1, 'zone_id' => 1, 'branch_id' => 1,
            'department_id' => 6, 'role_id' => 2
        ],
    ];
    public function run()
    {
        //
        // factory(Staff::class, 10)->create();
        foreach($this->staffs as $staff) {
            factory(Staff::class)->create([
                'name'=>$staff['name'],
                'username'=>$staff['username'],
                'city_id'=>$staff['city_id'],
                'zone_id'=>$staff['zone_id'],
                'branch_id'=>$staff['branch_id'],
                'department_id'=>$staff['department_id'],
                'role_id'=>$staff['role_id']
            ]);
        }
    }
}
