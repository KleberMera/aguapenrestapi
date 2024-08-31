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
        Schema::create('usuarios_trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('tx_nombre');
            $table->string('tx_cedula');
            $table->string('tx_cargo');
            $table->string('tx_area');
            $table->string('tx_correo')->nullable();
            $table->integer('dt_status')->nullable()->default(0);
            $table->string('dt_usuario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_trabajadores');
    }
};
