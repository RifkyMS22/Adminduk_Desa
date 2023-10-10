<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('12345678'),
            ],
            [
            'name'=>'User',
            'email'=>'user@gmail.com',
            'role'=>'user',
            'password'=>bcrypt('12345678'),
            ],
        ];
        foreach($userdata as $key => $val)
    },
};
