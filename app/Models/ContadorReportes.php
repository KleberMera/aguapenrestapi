<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContadorReportes extends Model
{
    use HasFactory;

    protected  $fillable = ['trabajadores_anulados', 'areas_anuladas', 'vehiculos_anulados'];
}
