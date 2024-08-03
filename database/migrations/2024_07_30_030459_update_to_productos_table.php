<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
           // Agrega la columna 'codigo' después de 'id'
           $table->string('codigo_producto', 10)->after('id')->nullable()->unique();
        });

         // Asigna códigos a los productos existentes
         $productos = DB::table('productos')->orderBy('id')->get();
         foreach ($productos as $index => $producto) {
             DB::table('productos')
                 ->where('id', $producto->id)
                 ->update(['codigo_producto' => str_pad($index + 1, 3, '0', STR_PAD_LEFT)]);
         }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('codigo_producto');

        });
    }
};
