<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => bcrypt('password'),
            // password
            'is_admin' => true,
        ]);

        User::create([
            'name'     => 'User',
            'email'    => 'user@example.com',
            'password' => bcrypt('password'),
            // password
            'is_admin' => false,
        ]);
    }
}