<?php

namespace Database\Seeders;

use App\Models\LaborProdi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaborProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaborProdi::create([
            'nama_prodi' => 'Teknik Informatika',
            'kode_prodi' => 'TIF',
            'labor_fakultas_id' => 1,
        ]);
        
        LaborProdi::create([
            'nama_prodi' => 'Teknik Sipil',
            'kode_prodi' => 'TSI',
            'labor_fakultas_id' => 1,
        ]);
        LaborProdi::create([
            'nama_prodi' => 'Teknik Industri',
            'kode_prodi' => 'TIN',
            'labor_fakultas_id' => 1,
        ]);
        LaborProdi::create([
            'nama_prodi' => 'PGSD',
            'kode_prodi' => 'PGSD',
            'labor_fakultas_id' => 2,
        ]);
        LaborProdi::create([
            'nama_prodi' => 'PGPAUD',
            'kode_prodi' => 'PGP',
            'labor_fakultas_id' => 2,
        ]);

    }
}
