@extends('adminlte::page')

@section('title', 'Editar Signos Vitales')

@section('content_header')
    <h1>Editar Registro de Signos Vitales</h1>
@stop

@section('content')
<form action="{{ route('signos_vitales.update', $signosVital->id) }}" method="POST">
    @csrf
    @method('PUT')

    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Número de Ficha Clínica</th>
                <td>
                    <select id="filiacion_id" name="filiacion_id" class="form-control" required>
                        <option value="">Seleccione una filiación</option>
                        @foreach ($filiacions as $filiacion)
                            <option value="{{ $filiacion->id }}" {{ $filiacion->id == $signosVital->filiacion_id ? 'selected' : '' }}>
                                {{ $filiacion->numero_ficha_clinico }} - {{ $filiacion->nombre }} {{ $filiacion->apellido }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Presión Arterial</th>
                <td>
                    <input id="presion_arterial" name="presion_arterial" type="text" class="form-control" value="{{ $signosVital->presion_arterial }}">
                </td>
            </tr>
            <tr>
                <th>Temperatura</th>
                <td>
                    <input id="temperatura" name="temperatura" type="number" step="0.1" class="form-control" value="{{ $signosVital->temperatura }}">
                </td>
            </tr>
            <tr>
                <th>Frecuencia Respiratoria</th>
                <td>
                    <input id="frecuencia_respiratoria" name="frecuencia_respiratoria" type="number" class="form-control" value="{{ $signosVital->frecuencia_respiratoria }}">
                </td>
            </tr>
            <tr>
                <th>Pulso</th>
                <td>
                    <input id="pulso" name="pulso" type="number" class="form-control" value="{{ $signosVital->pulso }}">
                </td>
            </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <a href="{{ route('signos_vitales.index') }}" class="btn btn-secondary me-2">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@stop

@section('js')
    {{-- Add here extra scripts if needed --}}
@stop
