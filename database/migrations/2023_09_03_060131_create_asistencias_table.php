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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('AsistenciaID');
            $table->string('Asistencia');
            $table->string('FechaAsistencia');
            $table->string('Observacion')->nullable();
            $table->unsignedBigInteger('AreaID');
            $table->unsignedBigInteger('AlumnoID');
            $table->timestamps();

            $table->foreign('AreaID')->references('AreaID')->on('areas');
            $table->foreign('AlumnoID')->references('AlumnoID')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
