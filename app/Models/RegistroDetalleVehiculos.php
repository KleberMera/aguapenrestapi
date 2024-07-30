<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroDetalleVehiculos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_registro_vehiculo',
        'id_producto',
        'cantidad',
    ];
}
