<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroDetalleAreas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_registro_area',
        'id_producto',
        'cantidad',
    ];
}
