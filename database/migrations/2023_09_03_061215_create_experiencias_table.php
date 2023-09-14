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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->bigIncrements('ExperienciaID');
            $table->string('Descripcion');
            $table->string('FechaInicio');
            $table->string('FechaFin');
            $table->string('Nota');
            $table->string('FechaRegistroNota');
            $table->BigInteger('CompetenciaID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
