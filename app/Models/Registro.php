<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'id_user_registro',
        'fecha_registro',
        'hora_registro',
        'observacion',
        'imagen',
        'estado_registro',
    ];
}
