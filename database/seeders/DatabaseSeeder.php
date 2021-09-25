<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $role = Role::create(['name'=>'User']);
        $permission = Permission::create(['name'=>'User']);
        $role->givePermissionTo($permission);
        Menu::create([
            'menu_name' => 'Dashboard',
            'add_on_name' => 'Dashboard',
            'icon' => 'home',
            'route' => '/dashboard',
            'order' => 1
        ]);
        $this->call(CryptListSeeder::class);
    }
}
