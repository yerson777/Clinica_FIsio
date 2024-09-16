@extends('adminlte::page')

@section('title', 'FICHA KINESICA-FISICA')

@section('content_header')
    <h1>CREAR REGISTRO DE FILIACIÓN</h1>
@stop

@section('content')
<form action="/filiacions" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="numero_ficha_clinico" class="form-label">Número de Ficha Clínica</label>
                <input id="numero_ficha_clinico" name="numero_ficha_clinico" type="text" class="form-control" tabindex="1">    
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="asegurado" class="form-label">Asegurado</label>
                <input id="asegurado" name="asegurado" type="text" class="form-control" tabindex="4">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input id="edad" name="edad" type="number" class="form-control" tabindex="5">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="disciplina" class="form-label">Disciplina</label>
                <input id="disciplina" name="disciplina" type="text" class="form-control" tabindex="6">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="posicion_prueba" class="form-label">Posición/Prueba</label>
                <input id="posicion_prueba" name="posicion_prueba" type="text" class="form-control" tabindex="7">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="ocupacion" class="form-label">Ocupación</label>
                <input id="ocupacion" name="ocupacion" type="text" class="form-control" tabindex="8">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg)</label>
                <input id="peso" name="peso" type="number" step="0.01" class="form-control" tabindex="9" oninput="calcularIMC()">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="talla" class="form-label">Talla (cm)</label>
                <input id="talla" name="talla" type="number" step="0.01" class="form-control" tabindex="10" oninput="calcularIMC()">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="imc" class="form-label">IMC</label>
                <input id="imc" name="imc" type="number" step="0.01" class="form-control" tabindex="11" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="procedencia" class="form-label">Procedencia</label>
                <select id="procedencia" name="procedencia" class="form-control" tabindex="12">
                    <option value="">Seleccione un municipio</option>
                    <option value="Aiquile" {{ old('procedencia') == 'Aiquile' ? 'selected' : '' }}>Aiquile</option>
                    <option value="Arani" {{ old('procedencia') == 'Arani' ? 'selected' : '' }}>Arani</option>
                    <option value="Arque" {{ old('procedencia') == 'Arque' ? 'selected' : '' }}>Arque</option>
                    <option value="Capinota" {{ old('procedencia') == 'Capinota' ? 'selected' : '' }}>Capinota</option>
                    <option value="Cochabamba" {{ old('procedencia') == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                    <option value="Colcapirhua" {{ old('procedencia') == 'Colcapirhua' ? 'selected' : '' }}>Colcapirhua</option>
                    <option value="Colomi" {{ old('procedencia') == 'Colomi' ? 'selected' : '' }}>Colomi</option>
                    <option value="Constanza" {{ old('procedencia') == 'Constanza' ? 'selected' : '' }}>Constanza</option>
                    <option value="Cruz Loma" {{ old('procedencia') == 'Cruz Loma' ? 'selected' : '' }}>Cruz Loma</option>
                    <option value="Icla" {{ old('procedencia') == 'Icla' ? 'selected' : '' }}>Icla</option>
                    <option value="Liriuni" {{ old('procedencia') == 'Liriuni' ? 'selected' : '' }}>Liriuni</option>
                    <option value="Mizque" {{ old('procedencia') == 'Mizque' ? 'selected' : '' }}>Mizque</option>
                    <option value="Pocona" {{ old('procedencia') == 'Pocona' ? 'selected' : '' }}>Pocona</option>
                    <option value="Punata" {{ old('procedencia') == 'Punata' ? 'selected' : '' }}>Punata</option>
                    <option value="Quillacollo" {{ old('procedencia') == 'Quillacollo' ? 'selected' : '' }}>Quillacollo</option>
                    <option value="Sipe Sipe" {{ old('procedencia') == 'Sipe Sipe' ? 'selected' : '' }}>Sipe Sipe</option>
                    <option value="Tiquipaya" {{ old('procedencia') == 'Tiquipaya' ? 'selected' : '' }}>Tiquipaya</option>
                    <option value="Vinto" {{ old('procedencia') == 'Vinto' ? 'selected' : '' }}>Vinto</option>
                    <option value="Vila Vila" {{ old('procedencia') == 'Vila Vila' ? 'selected' : '' }}>Vila Vila</option>
                    <option value="Otro" {{ old('procedencia') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <textarea id="direccion" name="direccion" class="form-control" tabindex="13"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input id="telefono" name="telefono" type="text" class="form-control" tabindex="14">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="asociacion_club" class="form-label">Asociación/Club</label>
                <input id="asociacion_club" name="asociacion_club" type="text" class="form-control" tabindex="15">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="fisioterapeuta_kinesiologo" class="form-label">Fisioterapeuta/Kinesiólogo</label>
                <select id="fisioterapeuta_kinesiologo" name="fisioterapeuta_kinesiologo" class="form-control" tabindex="16">
                    <option value="" disabled selected>Seleccionar...</option>
                    <option value="Fisioterapeuta">Fisioterapeuta</option>
                    <option value="Kinesiólogo">Kinesiólogo</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="fecha_evaluacion" class="form-label">Fecha de Evaluación</label>
                <input id="fecha_evaluacion" name="fecha_evaluacion" type="date" class="form-control" tabindex="17">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a href="/filiacions" class="btn btn-secondary me-2" tabindex="18">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="19">Guardar</button>
    </div>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        function calcularIMC() {
            const peso = parseFloat(document.getElementById('peso').value);
            const talla = parseFloat(document.getElementById('talla').value) / 100; // Convertir de cm a metros

            if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
                const imc = (peso / (talla * talla)).toFixed(2);
                document.getElementById('imc').value = imc;
            } else {
                document.getElementById('imc').value = '';
            }
        }
    </script>
@stop
