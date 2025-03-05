<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        User::factory(30)->create();

        User::factory()->create([

            'first_name' => 'Admin',
            'last_name' => 'Doe',
            'email' => 'admin@test.com',
            'password' => 'pppppp123',

        ])->syncRoles('admin');

    }
}
