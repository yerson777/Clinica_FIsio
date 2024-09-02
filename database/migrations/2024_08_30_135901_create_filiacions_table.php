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
        Schema::create('filiacions', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
            $table->string('numero_ficha_clinico')->unique(); // Número de ficha clínica, debe ser único
            $table->string('nombre')->nullable(); // Nombre del paciente
            $table->string('apellido')->nullable(); // Apellido del paciente
            $table->string('asegurado')->nullable(); // Información del asegurado
            $table->integer('edad')->nullable(); // Edad del paciente
            $table->string('disciplina', 100)->nullable(); // Disciplina
            $table->string('posicion_prueba', 100)->nullable(); // Posición o prueba
            $table->string('ocupacion', 100)->nullable(); // Ocupación
            $table->decimal('peso', 5, 2)->nullable(); // Peso con precisión
            $table->decimal('talla', 5, 2)->nullable(); // Talla con precisión
            $table->decimal('imc', 4, 2)->nullable(); // IMC con precisión
            $table->string('procedencia', 100)->nullable(); // Procedencia
            $table->text('direccion')->nullable(); // Dirección completa
            $table->string('telefono', 100)->nullable(); // Teléfono
            $table->string('asociacion_club', 100)->nullable(); // Asociación o club
            $table->string('fisioterapeuta_kinesiologo', 100)->nullable(); // Fisioterapeuta o Kinesiólogo
            $table->date('fecha_evaluacion')->nullable(); // Fecha de evaluación
            $table->timestamps(); // Time
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filiacions');
    }
};
