<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroDetalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_registro',
        'id_producto',
        'cantidad',
    ];
}
