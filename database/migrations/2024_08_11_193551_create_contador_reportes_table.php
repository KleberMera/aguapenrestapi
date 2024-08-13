<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contador_reportes', function (Blueprint $table) {
            $table->id();
            $table->integer('trabajadores_anulados')->default(0);
            $table->integer('areas_anuladas')->default(0);
            $table->integer('vehiculos_anulados')->default(0);  
            $table->integer('trabajadores')->default(0);
            $table->integer('areas')->default(0);
            $table->integer('vehiculos')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contador_reportes');
    }
};
