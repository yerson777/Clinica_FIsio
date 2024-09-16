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
        Schema::create('signos_vitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filiacion_id')->constrained('filiacions')->onDelete('cascade'); // Relación con la tabla filiacion
            $table->decimal('presion_arterial', 5, 2)->nullable(); // Presión arterial 
            $table->decimal('temperatura', 4, 2)->nullable(); // Temperatura corporal
            $table->decimal('frecuencia_respiratoria', 5, 2)->nullable(); // Frecuencia respiratoria
            $table->integer('pulso')->nullable(); // Pulso (latidos por minuto)
            $table->timestamps(); // Fecha de registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signos_vitals');
    }
};
