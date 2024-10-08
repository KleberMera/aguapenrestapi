<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_producto',
        'nombre_producto',
        'fecha_producto',
        'hora_producto',
        'stock_producto',
        'estado_producto',
    ];

   
}
