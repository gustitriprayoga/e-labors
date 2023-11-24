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
        Schema::create('labor_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pinjam_labor_id');
            $table->string('tgl_pengajuan')->nullable();
            $table->date('tgl_persetujuan')->nullable();
            $table->string('nama_peminjam');
            $table->date('tanggal_peminjaman');
            $table->text('keterangan');
            $table->text('keterangan_reject')->nullable();
            $table->time('waktu_dipinjam');
            $table->string('foto_selfie')->nullable();
            $table->string('status')->default('diajukan');
            // $table->string('hari_dipinjam')->nullable();
            $table->timestamps();

            $table->foreign('pinjam_labor_id')->references('id')->on('pinjam_labors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_histories');
    }
};
