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
        Schema::create('registro_areas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_area')->constrained('areas')->onDelete('cascade');
            $table->date('fecha_registro')->nullable();
            $table->time('hora_registro')->nullable();
            $table->string('observacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_areas');
    }
};
