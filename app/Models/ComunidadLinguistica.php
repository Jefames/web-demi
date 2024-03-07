<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadLinguistica extends Model
{
    use HasFactory;

    public function expediente()
    {
        return $this->belongsToMany(Registro_Atencion_Sedes::class);
    }
}
