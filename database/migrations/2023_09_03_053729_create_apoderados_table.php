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
        Schema::create('apoderados', function (Blueprint $table) {
            $table->bigIncrements('ApoderadoID');
            $table->string('Apellidos');
            $table->string('Nombres');
            $table->string('Dni');
            $table->string('FechaNacimiento');
            $table->string('Telefono');
            $table->unsignedBigInteger('UsuarioID');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('UsuarioID')->references('UsuarioID')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoderados');
    }
};
