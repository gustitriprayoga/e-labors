<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->assignRole('admin');

        $asisten = \App\Models\User::create([
            'name' => 'Asisten',
            'username' => 'Asisten',
            'email' => 'asisten@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $asisten->assignRole('asisten');
    }
}
