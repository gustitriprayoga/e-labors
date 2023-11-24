<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PengajuanLabor;

class PinjamLabor extends Model
{
    protected $table = 'pinjam_labors';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $guarded = [];

    // Definisikan relasi One-to-One ke model PengajuanLabor
    public function pengajuanLabor()
    {
        return $this->belongsTo(PengajuanLabor::class, 'pengajuan_labor_id');
    }

    public function labor()
    {
        return $this->belongsTo(Labor::class, 'labor_id', 'id');
    }

    public function historyLabor()
    {
        return $this->hasOne(LaborHistory::class);
    }
}
