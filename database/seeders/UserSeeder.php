<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //call user factory to create admin user
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => '1',
        ]);

        //call user factory to create common user
        \App\Models\User::factory()->create([
            'name' => 'anotheruser',
            'email' => 'anotheruser@user.com',
            'is_admin' => '0',
        ]);

         \App\Models\User::factory()->create([
            'name' => 'Test Ilham ',
            'email' => 'ilham@admin.com',
            'is_admin' => '1',
            'password' => Hash::make('12345678'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test user ',
            'email' => 'user@user.com',
            'is_admin' => '0',
            'password' => Hash::make('45678912'),
        ]);
    }
}
