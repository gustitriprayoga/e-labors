<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PengajuanLabor;

class PinjamLabor extends Model
{
    protected $table = 'pinjam_labors';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'labor_id',
        'nama_peminjam',
        'tanggal_peminjaman',
        'waktu_dipinjam',
        'keterangan',
        'user_id',
        'admin_id',
        'foto_selfie',
        'status',
    ];

    // Definisikan relasi One-to-One ke model PengajuanLabor
    public function pengajuanLabor()
    {
        return $this->belongsTo(PengajuanLabor::class, 'pengajuan_labor_id');
    }

    public function labor()
    {
        return $this->belongsTo(Labor::class, 'labor_id', 'id');
    }
}
