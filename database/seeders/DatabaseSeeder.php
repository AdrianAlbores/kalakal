<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $this->call(RoleSeeder::class);
        // \App\Models\User::create([
        //     'name' => 'User',
        //     'email' => 'user@example.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('123'),
        //     'remember_token' => Str::random(10),
        // ]);
        $user = \App\Models\User::create([
            'name' => 'Adrian',
            'email' => 'adrian@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('asd123__'),
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('Super-Admin');
        $this->call(CryptListSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
