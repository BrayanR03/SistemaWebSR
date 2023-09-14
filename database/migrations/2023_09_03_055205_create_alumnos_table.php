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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('AlumnoID');
            $table->string('Apellidos');
            $table->string('Nombres');
            $table->string('Dni');
            $table->string('FechaNacimiento');
            $table->string('Telefono');
            $table->unsignedBigInteger('ApoderadoID');
            $table->unsignedBigInteger('GradoSeccionID');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('ApoderadoID')->references('ApoderadoID')->on('apoderados');
            $table->foreign('GradoSeccionID')->references('GradoSeccionID')->on('gradossecciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
