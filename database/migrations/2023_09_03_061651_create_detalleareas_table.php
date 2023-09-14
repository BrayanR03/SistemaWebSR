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
        Schema::create('detalleareas', function (Blueprint $table) {
            $table->unsignedBigInteger('AreaID');
            $table->unsignedBigInteger('AlumnoID');
            $table->string('Competencia1');
            $table->string('Competencia2');
            $table->string('Competencia3');
            $table->string('Competencia4');
            $table->unsignedBigInteger('PeriodoID');
            $table->timestamps();

            $table->foreign('AreaID')->references('AreaID')->on('areas');
            $table->foreign('AlumnoID')->references('AlumnoID')->on('alumnos');
            $table->foreign('PeriodoID')->references('PeriodoID')->on('periodos');

            $table->primary(['AreaID','AlumnoID']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleareas');
    }
};
