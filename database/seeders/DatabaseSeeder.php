<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@example.com',
            'password'          => bcrypt('password'),
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
            // password
            'is_admin'          => true,
        ]);

        User::create([
            'name'              => 'User',
            'email'             => 'user@example.com',
            'password'          => bcrypt('password'),
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
            // password
            'is_admin'          => false,
        ]);

        Barang::factory(50)->create();
        Transaksi::factory(50)->create();
    }
}