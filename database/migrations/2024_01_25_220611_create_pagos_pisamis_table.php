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
        Schema::create('pagos_pisamis', function (Blueprint $table) {
            $table->id();            
            $table->string('codigo_asobancaria');
            $table->string('forma_pago');
            $table->string('codigo_barra');
            $table->string('numero_cuenta');
            $table->string('numero_recibo');
            $table->string('valor_pagado');
            $table->string('fecha_pago');
            $table->string('codigo_aceptacion');            
            $table->string('codigo_transaccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_pisamis');
    }
};
