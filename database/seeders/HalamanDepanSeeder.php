<?php

namespace Database\Seeders;

use App\Models\HalamanDepan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanDepanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HalamanDepan::create([
            'judul_atas_kecil' => 'Selamat Datang di',
            'judul_atas_besar' => 'Laboratorium Komputer',
            'judul_atas_animasi' => 'E-Labs',
            'judul_atas_foto' => 'judul_atas_foto/1.jpg',
            'labor_id' => 1,
        ]);
    }
}
