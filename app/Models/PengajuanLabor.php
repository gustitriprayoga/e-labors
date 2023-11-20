<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanLabor extends Model
{
    protected $table = 'pengajuan_labors';

    // Definisikan relasi One-to-One ke model PinjamLabor
    public function pinjamLabor()
    {
        return $this->hasOne(PinjamLabor::class, 'pengajuan_labor_id');
    }
}
