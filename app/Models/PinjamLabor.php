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
        'user_id',
        'nama_peminjam',
        'tanggal_peminjaman',
        'keterangan',
        'status', // Tambahkan 'status' ke dalam fillable
    ];

    // Definisikan relasi One-to-One ke model PengajuanLabor
    public function pengajuanLabor()
    {
        return $this->belongsTo(PengajuanLabor::class, 'pengajuan_labor_id');
    }
}
