<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Labor;

class LaborPerlengkapan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function labor()
    {
        return $this->belongsTo(Labor::class);
    }

}
