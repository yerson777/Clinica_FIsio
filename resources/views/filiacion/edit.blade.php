@extends('adminlte::page')

@section('title', 'FICHA KINESICA-FISICA')

@section('content_header')
    <h1>EDITAR REGISTRO DE FILIACIÓN</h1>
@stop

@section('content')
<form action="/filiacions/{{$filiacion->id}}" method="POST">
    @csrf    
    @method('PUT')

     <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Número de Ficha Clínica</th>
                <td>
                    <input id="numero_ficha_clinico" name="numero_ficha_clinico" type="text" class="form-control" value="{{$filiacion->numero_ficha_clinico}}">
                </td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>
                    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$filiacion->nombre}}">
                </td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>
                    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$filiacion->apellido}}">
                </td>
            </tr>
            <tr>
                <th>Asegurado</th>
                <td>
                    <input id="asegurado" name="asegurado" type="text" class="form-control" value="{{$filiacion->asegurado}}">
                </td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>
                    <input id="edad" name="edad" type="number" class="form-control" value="{{$filiacion->edad}}">
                </td>
            </tr>
            <tr>
                <th>Disciplina</th>
                <td>
                    <input id="disciplina" name="disciplina" type="text" class="form-control" value="{{$filiacion->disciplina}}">
                </td>
            </tr>
            <tr>
                <th>Posición/Prueba</th>
                <td>
                    <input id="posicion_prueba" name="posicion_prueba" type="text" class="form-control" value="{{$filiacion->posicion_prueba}}">
                </td>
            </tr>
            <tr>
                <th>Ocupación</th>
                <td>
                    <input id="ocupacion" name="ocupacion" type="text" class="form-control" value="{{$filiacion->ocupacion}}">
                </td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>
                    <input id="peso" name="peso" type="number" step="0.01" class="form-control" value="{{$filiacion->peso}}" oninput="calcularIMC()">
                </td>
            </tr>
            <tr>
                <th>Talla</th>
                <td>
                    <input id="talla" name="talla" type="number" step="0.01" class="form-control" value="{{$filiacion->talla}}" oninput="calcularIMC()">
                </td>
            </tr>
            <tr>
                <th>IMC</th>
                <td>
                    <input id="imc" name="imc" type="number" step="0.01" class="form-control" value="{{$filiacion->imc}}" readonly>
                </td>
            </tr>

            <tr>
                <th>Procedencia</th>
                <td>
                    <select id="procedencia" name="procedencia" class="form-control">
                        <option value="">Seleccione un municipio</option>
                        <option value="Aiquile" {{ $filiacion->procedencia == 'Aiquile' ? 'selected' : '' }}>Aiquile</option>
                        <option value="Arani" {{ $filiacion->procedencia == 'Arani' ? 'selected' : '' }}>Arani</option>
                        <option value="Arque" {{ $filiacion->procedencia == 'Arque' ? 'selected' : '' }}>Arque</option>
                        <option value="Capinota" {{ $filiacion->procedencia == 'Capinota' ? 'selected' : '' }}>Capinota</option>
                        <option value="Cochabamba" {{ $filiacion->procedencia == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                        <option value="Colcapirhua" {{ $filiacion->procedencia == 'Colcapirhua' ? 'selected' : '' }}>Colcapirhua</option>
                        <option value="Colomi" {{ $filiacion->procedencia == 'Colomi' ? 'selected' : '' }}>Colomi</option>
                        <option value="Constanza" {{ $filiacion->procedencia == 'Constanza' ? 'selected' : '' }}>Constanza</option>
                        <option value="Cruz Loma" {{ $filiacion->procedencia == 'Cruz Loma' ? 'selected' : '' }}>Cruz Loma</option>
                        <option value="Icla" {{ $filiacion->procedencia == 'Icla' ? 'selected' : '' }}>Icla</option>
                        <option value="Liriuni" {{ $filiacion->procedencia == 'Liriuni' ? 'selected' : '' }}>Liriuni</option>
                        <option value="Mizque" {{ $filiacion->procedencia == 'Mizque' ? 'selected' : '' }}>Mizque</option>
                        <option value="Pocona" {{ $filiacion->procedencia == 'Pocona' ? 'selected' : '' }}>Pocona</option>
                        <option value="Punata" {{ $filiacion->procedencia == 'Punata' ? 'selected' : '' }}>Punata</option>
                        <option value="Quillacollo" {{ $filiacion->procedencia == 'Quillacollo' ? 'selected' : '' }}>Quillacollo</option>
                        <option value="Sipe Sipe" {{ $filiacion->procedencia == 'Sipe Sipe' ? 'selected' : '' }}>Sipe Sipe</option>
                        <option value="Tiquipaya" {{ $filiacion->procedencia == 'Tiquipaya' ? 'selected' : '' }}>Tiquipaya</option>
                        <option value="Vinto" {{ $filiacion->procedencia == 'Vinto' ? 'selected' : '' }}>Vinto</option>
                        <option value="Vila Vila" {{ $filiacion->procedencia == 'Vila Vila' ? 'selected' : '' }}>Vila Vila</option>
                        <option value="Otro" {{ $filiacion->procedencia == 'Otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>
                    <textarea id="direccion" name="direccion" class="form-control">{{$filiacion->direccion}}</textarea>
                </td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>
                    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$filiacion->telefono}}">
                </td>
            </tr>
            <tr>
                <th>Asociación/Club</th>
                <td>
                    <input id="asociacion_club" name="asociacion_club" type="text" class="form-control" value="{{$filiacion->asociacion_club}}">
                </td>
            </tr>
            <tr>
                <th>Fisioterapeuta/Kinesiólogo</th>
                <td>
                    <select id="fisioterapeuta_kinesiologo" name="fisioterapeuta_kinesiologo" class="form-control">
                        <option value="Fisioterapeuta" {{ $filiacion->fisioterapeuta_kinesiologo == 'Fisioterapeuta' ? 'selected' : '' }}>Fisioterapeuta</option>
                        <option value="Kinesiólogo" {{ $filiacion->fisioterapeuta_kinesiologo == 'Kinesiólogo' ? 'selected' : '' }}>Kinesiólogo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Fecha de Evaluación</th>
                <td>
                    <input id="fecha_evaluacion" name="fecha_evaluacion" type="date" class="form-control" value="{{$filiacion->fecha_evaluacion}}">
                </td>
            </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <a href="/filiacions" class="btn btn-secondary me-2">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@stop

@section('js')
    <script>
        function calcularIMC() {
            const peso = parseFloat(document.getElementById('peso').value);
            const talla = parseFloat(document.getElementById('talla').value) / 100; // Convertir cm a metros

            if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
                const imc = (peso / (talla * talla)).toFixed(2);
                document.getElementById('imc').value = imc;
            } else {
                document.getElementById('imc').value = '';
            }
        }
    </script>
@stop
