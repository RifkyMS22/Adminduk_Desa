<?php
// AdminSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin account
        User::create([
            'name' => 'Admin Palar',
            'nik' => '1234567812345678',
            'email' => 'admin@google.com',
            'password' => Hash::make('adminpalar'), // Ganti dengan password yang aman
            'role' => 'admin',
        ]);
    }
}
