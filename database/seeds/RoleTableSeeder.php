<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $roles = [
        'Super Admin'=>'Super Admin',
        'Admin' => 'Admin Role - can access all',
        'Manager' => 'Manager Role',
        'Supervisor' => 'Supervisor Role - can access ',
        'Leader' => 'Leader Role',
        'Cashier' => 'Cashier Role',
        'Senior' => 'Senior',
        'Junior' => 'Junior',
        'Internship'=>'Internship'
    ];
    public function run()
    {
        //
        // factory(App\Models\Role::class, 10)->create();
        foreach($this->roles as $key=>$value) {
            factory(Role::class)->create([
                'name'=>$key,
                'description'=>$value
            ]);
        }
    }
}
