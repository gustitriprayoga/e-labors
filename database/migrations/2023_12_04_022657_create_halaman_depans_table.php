<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('halaman_depans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_atas_kecil');
            $table->string('judul_atas_besar');
            $table->string('judul_atas_animasi');
            $table->string('judul_atas_foto');


            $table->foreignId('labor_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman_depans');
    }
};
