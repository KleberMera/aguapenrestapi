<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroVehiculos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vehiculo',
        'id_user_registro',
        'fecha_registro',
        'hora_registro',
        'observacion',
        'estado_registro',
    ];
}
