@extends('adminlte::page')

@section('title', 'Detalles de los Signos Vitales')

@section('content_header')
    <h1>Detalles de los Signos Vitales del Paciente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Información de los Signos Vitales</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $signosVital->id }}</td>
                </tr>
                <tr>
                    <th>Número de Ficha Clínica:</th>
                    <td>{{ $signosVital->filiacion->numero_ficha_clinico }}</td>
                </tr>
                <tr>
                    <th>Presión Arterial:</th>
                    <td>{{ $signosVital->presion_arterial }}</td>
                </tr>
                <tr>
                    <th>Temperatura:</th>
                    <td>{{ $signosVital->temperatura }}</td>
                </tr>
                <tr>
                    <th>Frecuencia Respiratoria:</th>
                    <td>{{ $signosVital->frecuencia_respiratoria }}</td>
                </tr>
                <tr>
                    <th>Pulso:</th>
                    <td>{{ $signosVital->pulso }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('signos_vitales.index') }}" class="btn btn-secondary">Regresar</a>
        
        <form action="{{ route('signos_vitales.destroy', $signosVital->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <!-- Optional button for deletion -->
            <!-- <button type="submit" class="btn btn-danger">Eliminar</button> -->
        </form>
    </div>
</div>
@stop
