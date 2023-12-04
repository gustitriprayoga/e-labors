<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanDepan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi ke model Labor
    public function labor()
    {
        return $this->belongsTo(Labor::class);
    }

    public function prodi(){
        return $this->belongsTo(LaborProdi::class);
    }
}
