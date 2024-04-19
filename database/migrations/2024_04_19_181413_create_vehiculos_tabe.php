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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propietario_id');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->string('matricula');
            $table->string('tipo');
            $table->timestamps();

            // Definir clave foránea
            $table->foreign('propietario_id')->references('id')->on('propietarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos_tabe');
    }
};
