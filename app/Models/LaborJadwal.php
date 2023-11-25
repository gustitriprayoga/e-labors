<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaborJadwal extends Model
{
    protected $table = 'labor_jadwals';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $guarded = [];

    public function labor()
    {
        return $this->belongsTo(Labor::class);
    }
}
