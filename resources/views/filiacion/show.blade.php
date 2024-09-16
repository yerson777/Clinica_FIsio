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
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $filiacion->id }}</td>
                </tr>
                <tr>
                    <th>N° Ficha Clínica:</th>
                    <td>{{ $filiacion->numero_ficha_clinico }}</td>
                </tr>
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $filiacion->nombre }}</td>
                </tr>
                <tr>
                    <th>Apellido:</th>
                    <td>{{ $filiacion->apellido }}</td>
                </tr>
                <tr>
                    <th>Asegurado:</th>
                    <td>{{ $filiacion->asegurado }}</td>
                </tr>
                <tr>
                    <th>Edad:</th>
                    <td>{{ $filiacion->edad }}</td>
                </tr>
                <tr>
                    <th>Disciplina:</th>
                    <td>{{ $filiacion->disciplina }}</td>
                </tr>
                <tr>
                    <th>Posición/Prueba:</th>
                    <td>{{ $filiacion->posicion_prueba }}</td>
                </tr>
                <tr>
                    <th>Ocupación:</th>
                    <td>{{ $filiacion->ocupacion }}</td>
                </tr>
                <tr>
                    <th>Peso:</th>
                    <td>{{ $filiacion->peso }}</td>
                </tr>
                <tr>
                    <th>Talla:</th>
                    <td>{{ $filiacion->talla }}</td>
                </tr>
                <tr>
                    <th>IMC:</th>
                    <td>{{ $filiacion->imc }}</td>
                </tr>
                <tr>
                    <th>Procedencia:</th>
                    <td>{{ $filiacion->procedencia }}</td>
                </tr>
                <tr>
                    <th>Dirección:</th>
                    <td>{{ $filiacion->direccion }}</td>
                </tr>
                <tr>
                    <th>Teléfono:</th>
                    <td>{{ $filiacion->telefono }}</td>
                </tr>
                <tr>
                    <th>Asociación/Club:</th>
                    <td>{{ $filiacion->asociacion_club }}</td>
                </tr>
                <tr>
                    <th>Fisioterapeuta/Kinesiólogo:</th>
                    <td>{{ $filiacion->fisioterapeuta_kinesiologo }}</td>
                </tr>
                <tr>
                    <th>Fecha de Evaluación:</th>
                    <td>{{ $filiacion->fecha_evaluacion }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/filiacions" class="btn btn-secondary">Regresar</a>


        <form action="{{ route('filiacions.destroy', $filiacion->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@stop
