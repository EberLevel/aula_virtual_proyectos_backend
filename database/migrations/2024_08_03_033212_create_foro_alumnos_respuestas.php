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
        Schema::create('foro_respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('foro_id')->constrained();
            $table->foreignId('alumno_id')->constrained();
            $table->foreignId('domain_id')->constrained();
            $table->text('respuesta');
            $table->text('nota')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foro_alumnos_respuestas');
    }
};
