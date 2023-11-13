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
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');

        $asisten = \App\Models\User::create([
            'name' => 'Asisten',
            'username' => 'Asisten',
            'email' => 'asisten@gmail.com',
            'password' => bcrypt('asisten123'),
        ]);

        $asisten->assignRole('asisten');

        $user1 = \App\Models\User::create([
            'name' => 'qori',
            'username' => '1855201012',
            'email' => 'qori@gmail.com',
            'password' => bcrypt('qori1234'),
        ]);

        $user1->assignRole('user');
    }
}
