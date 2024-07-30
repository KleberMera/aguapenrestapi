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
    ];

    protected static function booted()
    {
        static::creating(function ($producto) {
            // Asigna el código automáticamente antes de crear el producto
            $latestProduct = self::orderBy('id', 'desc')->first();
            $nextCode = $latestProduct ? str_pad(intval($latestProduct->codigo) + 1, 3, '0', STR_PAD_LEFT) : '001';
            $producto->codigo = $nextCode;
        });
    }
}
