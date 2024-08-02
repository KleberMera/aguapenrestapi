<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosTrabajadores extends Model
{
    use HasFactory;
    protected $fillable = [
        'tx_nombre',
        'tx_cedula',
        'tx_cargo',
        'tx_area',
        'tx_correo',
    ];

}
