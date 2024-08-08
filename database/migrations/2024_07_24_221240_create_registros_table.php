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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios_trabajadores')->onDelete('cascade');
            $table->date('fecha_registro');
            $table->time('hora_registro');
            $table->string('observacion')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('estado_registro')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
