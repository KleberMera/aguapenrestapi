<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Usuarios extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'cedula',
        'telefono',
        'nombres',
        'apellidos',
        'correo',
        'usuario',
        'password',
        'rol_id',
    ];


    protected $casts = [
        'password' => 'hashed',
    ];
}
