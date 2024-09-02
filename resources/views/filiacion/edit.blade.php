@extends('adminlte::page')

@section('title', 'FICHA KINESICA-FISICA')

@section('content_header')
    <h1>EDITAR REGISTRO DE FILIACIÓN</h1>
@stop

@section('content')
<form action="/filiacions/{{$filiacion->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
        <label for="numero_ficha_clinico" class="form-label">Número de Ficha Clínica</label>
        <input id="numero_ficha_clinico" name="numero_ficha_clinico" type="text" class="form-control" value="{{$filiacion->numero_ficha_clinico}}">    
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$filiacion->nombre}}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{$filiacion->apellido}}">
    </div>
    <div class="mb-3">
        <label for="asegurado" class="form-label">Asegurado</label>
        <input id="asegurado" name="asegurado" type="text" class="form-control" value="{{$filiacion->asegurado}}">
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input id="edad" name="edad" type="number" class="form-control" value="{{$filiacion->edad}}">
    </div>
    <div class="mb-3">
        <label for="disciplina" class="form-label">Disciplina</label>
        <input id="disciplina" name="disciplina" type="text" class="form-control" value="{{$filiacion->disciplina}}">
    </div>
    <div class="mb-3">
        <label for="posicion_prueba" class="form-label">Posición/Prueba</label>
        <input id="posicion_prueba" name="posicion_prueba" type="text" class="form-control" value="{{$filiacion->posicion_prueba}}">
    </div>
    <div class="mb-3">
        <label for="ocupacion" class="form-label">Ocupación</label>
        <input id="ocupacion" name="ocupacion" type="text" class="form-control" value="{{$filiacion->ocupacion}}">
    </div>
    <div class="mb-3">
        <label for="peso" class="form-label">Peso</label>
        <input id="peso" name="peso" type="number" step="0.01" class="form-control" value="{{$filiacion->peso}}">
    </div>
    <div class="mb-3">
        <label for="talla" class="form-label">Talla</label>
        <input id="talla" name="talla" type="number" step="0.01" class="form-control" value="{{$filiacion->talla}}">
    </div>
    <div class="mb-3">
        <label for="imc" class="form-label">IMC</label>
        <input id="imc" name="imc" type="number" step="0.01" class="form-control" value="{{$filiacion->imc}}">
    </div>
    <div class="mb-3">
        <label for="procedencia" class="form-label">Procedencia</label>
        <input id="procedencia" name="procedencia" type="text" class="form-control" value="{{$filiacion->procedencia}}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <textarea id="direccion" name="direccion" class="form-control">{{$filiacion->direccion}}</textarea>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="{{$filiacion->telefono}}">
    </div>
    <div class="mb-3">
        <label for="asociacion_club" class="form-label">Asociación/Club</label>
        <input id="asociacion_club" name="asociacion_club" type="text" class="form-control" value="{{$filiacion->asociacion_club}}">
    </div>
    <div class="mb-3">
        <label for="fisioterapeuta_kinesiologo" class="form-label">Fisioterapeuta/Kinesiólogo</label>
        <input id="fisioterapeuta_kinesiologo" name="fisioterapeuta_kinesiologo" type="text" class="form-control" value="{{$filiacion->fisioterapeuta_kinesiologo}}">
    </div>
    <div class="mb-3">
        <label for="fecha_evaluacion" class="form-label">Fecha de Evaluación</label>
        <input id="fecha_evaluacion" name="fecha_evaluacion" type="date" class="form-control" value="{{$filiacion->fecha_evaluacion}}">
    </div>
    <a href="/filiacions" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <!-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> -->
@stop