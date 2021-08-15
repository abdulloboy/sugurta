<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oqibat extends Model
{
    use HasFactory;

    public function mahsulots()
    {
        return $this->belongsToMany(Mahsulot::class);
    }
}
