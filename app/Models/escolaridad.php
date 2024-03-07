<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escolaridad extends Model
{
    use HasFactory;
    public function expediente()
    {
        return $this->belongsToMany(Registro_Atencion_Sedes::class);
    }
}
