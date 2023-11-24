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
        Schema::create('pinjam_labors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('labor_id');
            $table->foreignId('user_id');
            $table->foreignId('admin_id')->nullable(); // Kolom baru untuk admin_id
            $table->foreignId('role_id')->nullable(); // Role
            
            $table->foreign('labor_id')->references('id')->on('labors');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_labors');
    }
};
