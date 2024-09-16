@extends('adminlte::page')

@section('title', 'Crear Signos Vitales')

@section('content_header')
    <h1>Crear Registro de Signos Vitales</h1>
@stop

@section('content')
<form action="{{ route('signos_vitales.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="filiacion_id" class="form-label">Número de Ficha Clínica</label>
                <select id="filiacion_id" name="filiacion_id" class="form-control" required>
                    <option value="">Seleccione una filiación</option>
                    @foreach ($filiacions as $filiacion)
                        <option value="{{ $filiacion->id }}">{{ $filiacion->numero_ficha_clinico }} - {{ $filiacion->nombre }} {{ $filiacion->apellido }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="presion_arterial" class="form-label">Presión Arterial</label>
                <input id="presion_arterial" name="presion_arterial" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="temperatura" class="form-label">Temperatura</label>
                <input id="temperatura" name="temperatura" type="number" step="0.1" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="frecuencia_respiratoria" class="form-label">Frecuencia Respiratoria</label>
                <input id="frecuencia_respiratoria" name="frecuencia_respiratoria" type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="pulso" class="form-label">Pulso</label>
                <input id="pulso" name="pulso" type="number" class="form-control" required>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{ route('signos_vitales.index') }}" class="btn btn-secondary me-2">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    {{-- Add here extra scripts --}}
@stop
