<?php

namespace Database\Seeders;

use App\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([

            'first_name' => 'Admin',
            'last_name' => 'Doe',
            'email' => 'admin@test.com',
            'password' => 'pppppp123',

        ])->syncRoles(RoleEnum::ADMIN);
    }
}
