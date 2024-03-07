<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derivada extends Model
{
    use HasFactory;

    public function expediente()
    {
        return $this->belongsToMany(CallCenter::class);
    }
}
