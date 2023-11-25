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
        Schema::create('labor_jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('labor_id');
            $table->string('hari');
            $table->string('prodi');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('nama_dosen');

            $table->foreign('labor_id')->references('id')->on('labors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_jadwals');
    }
};
