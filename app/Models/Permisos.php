<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'opcion_id',
        'per_editar',
        'per_ver',
    ];
}
