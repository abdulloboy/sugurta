<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahsulot extends Model
{
    use HasFactory;

    public function obyekt()
    {
        return $this->hasOne(Obyekt::class);
    }

    public function risks()
    {
        return $this->belongsToMany(Risk::class);
    }

    public function oqibats()
    {
        return $this->belongsToMany(Oqibat::class);
    }
}
