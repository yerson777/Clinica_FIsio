<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignosVital extends Model
{
    use HasFactory;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'filiacion_id', 
        'presion_arterial', 
        'temperatura', 
        'frecuencia_respiratoria', 
        'pulso'
    ];

    // Relación con el modelo Filiacion
    public function filiacion()
    {
        return $this->belongsTo(Filiacion::class);
    }
}
