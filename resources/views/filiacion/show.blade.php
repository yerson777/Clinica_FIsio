@extends('adminlte::page')

@section('title', 'Detalles de la Ficha Kinesica-Fisica')

@section('content_header')
    <h1>DETALLES DE LA FILIACIÓN DEL PACIENTE</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Información del Paciente</h3>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $filiacion->id }}</p>
        <p><strong>N° Ficha Clínica:</strong> {{ $filiacion->numero_ficha_clinico }}</p>
        <p><strong>Nombre:</strong> {{ $filiacion->nombre }}</p>
        <p><strong>Apellido:</strong> {{ $filiacion->apellido }}</p>
        <p><strong>Asegurado:</strong> {{ $filiacion->asegurado }}</p>
        <p><strong>Edad:</strong> {{ $filiacion->edad }}</p>
        <p><strong>Disciplina:</strong> {{ $filiacion->disciplina }}</p>
        <p><strong>Posición/Prueba:</strong> {{ $filiacion->posicion_prueba }}</p>
        <p><strong>Ocupación:</strong> {{ $filiacion->ocupacion }}</p>
        <p><strong>Peso:</strong> {{ $filiacion->peso }}</p>
        <p><strong>Talla:</strong> {{ $filiacion->talla }}</p>
        <p><strong>IMC:</strong> {{ $filiacion->imc }}</p>
        <p><strong>Procedencia:</strong> {{ $filiacion->procedencia }}</p>
        <p><strong>Dirección:</strong> {{ $filiacion->direccion }}</p>
        <p><strong>Teléfono:</strong> {{ $filiacion->telefono }}</p>
        <p><strong>Asociación/Club:</strong> {{ $filiacion->asociacion_club }}</p>
        <p><strong>Fisioterapeuta/Kinesiólogo:</strong> {{ $filiacion->fisioterapeuta_kinesiologo }}</p>
        <p><strong>Fecha de Evaluación:</strong> {{ $filiacion->fecha_evaluacion }}</p>
    </div>
    <div class="card-footer">
        <a href="/filiacions" class="btn btn-secondary">Regresar</a>
        <a href="/filiacions/{{$filiacion->id}}/edit" class="btn btn-primary">Editar</a>
        <form action="{{ route('filiacions.destroy', $filiacion->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</div>
@stop
