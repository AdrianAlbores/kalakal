<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['User', 'Super-Admin'];
        foreach($roles as $role){
            Role::insert([
                'name' => $role,
                'guard_name' => 'web'
            ]);
        }
    }
}
