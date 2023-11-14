<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('labors')->insert([
            'nama_labor' => 'Nama Labor 1',
            'lokasi_labor' => 'Lokasi 1',
            'description' => 'Deskripsi Labor 1',
            'kapasitas_labor' => 'Kapasitas 1',
            'status_labor' => 'Status 1',
            'foto_labor' => 'path/foto1.jpg',
        ]);

        DB::table('labors')->insert([
            'nama_labor' => 'Nama Labor 2',
            'lokasi_labor' => 'Lokasi 2',
            'description' => 'Deskripsi Labor 2',
            'kapasitas_labor' => 'Kapasitas 2',
            'status_labor' => 'Status 2',
            'foto_labor' => 'path/foto2.jpg',
        ]);
    }
}
