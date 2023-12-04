<?php

namespace Database\Seeders;

use App\Models\LaborFakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaborFakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaborFakultas::create([
            'nama_fakultas' => 'Fakultas Teknik',
            'kode_fakultas' => 'FTI',
        ]);

        LaborFakultas::create([
            'nama_fakultas' => 'Fakultas Ilmu Pendidikan',
            'kode_fakultas' => 'FIK',
        ]);
    }
}
