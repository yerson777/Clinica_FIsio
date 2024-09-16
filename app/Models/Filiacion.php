<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiacion extends Model
{
    use HasFactory;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'numero_ficha_clinico', 
        'nombre', 
        'apellido', 
        'asegurado', 
        'edad', 
        'disciplina', 
        'posicion_prueba', 
        'ocupacion', 
        'peso', 
        'talla', 
        'imc', 
        'procedencia', 
        'direccion', 
        'telefono', 
        'asociacion_club', 
        'fisioterapeuta_kinesiologo', 
        'fecha_evaluacion'
    ];

    // Relación con el modelo SignosVital
    public function signosvital()
    {
        return $this->hasMany(SignosVital::class);
    }
}
