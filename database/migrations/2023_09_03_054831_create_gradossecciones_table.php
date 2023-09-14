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
        Schema::create('gradossecciones', function (Blueprint $table) {
            $table->bigIncrements('GradoSeccionID');
            $table->unsignedBigInteger('GradoID');
            $table->unsignedBigInteger('SeccionID');
            $table->timestamps();

            $table->foreign('GradoID')->references('GradoID')->on('grados');
            $table->foreign('SeccionID')->references('SeccionID')->on('secciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gradossecciones');
    }
};
