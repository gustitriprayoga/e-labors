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
        Schema::create('labor_perlengkapans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perlengkapan');
            $table->integer('jumlah_perlengkapan');
            $table->string('kondisi_bagus');
            $table->string('kondisi_tbagus');
            $table->string('keterangan');
            $table->foreignId('labor_id')->constrained('labors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_perlengkapans');
    }
};
