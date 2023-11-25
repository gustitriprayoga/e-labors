<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Labor extends Model
{
    protected $guarded = [
        'id',
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function laborjadwal()
    {
        return $this->hasMany(LaborJadwal::class);
    }

}
