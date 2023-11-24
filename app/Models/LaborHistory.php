<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaborHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relasi ke model Labor
    public function labor()
    {
        return $this->belongsTo(Labor::class);
    }

    // Relasi ke model User (Peminjam)
    public function peminjam()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pinjamLabor()
    {
        return $this->belongsTo(PinjamLabor::class);
    }

    // Relasi ke model Role (Yang Menyetujui)
    // public function yangMenyetujui()
    // {
    //     return $this->belongsTo(Role::class);
    // }
}
