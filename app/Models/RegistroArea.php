<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroArea extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_area',
        'fecha_registro',
        'hora_registro',
        'observacion',
    ];
}
