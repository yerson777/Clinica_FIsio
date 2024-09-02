@extends('adminlte::page')

@section('title', 'FICHA KINESICA-FISICA')

@section('content_header')
    <h1>Filiación de Pacientes.</h1>
@stop

@section('content')
<a href="filiacions/create" class="btn btn-primary">Crear</a>

<table id="filiacions" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">N° Ficha Clínica</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Asegurado</th>
      <th scope="col">Edad</th>
      <!-- <th scope="col">Disciplina</th>
      <th scope="col">Posición/Prueba</th>
      <th scope="col">Ocupación</th>
      <th scope="col">Peso</th>
      <th scope="col">Talla</th>
      <th scope="col">IMC</th>
      <th scope="col">Procedencia</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Asociación/Club</th>
      <th scope="col">Fisioterapeuta/Kinesiólogo</th>
      <th scope="col">Fecha de Evaluación</th> -->
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($filiacions as $filiacion)
    <tr>
        <td>{{$filiacion->id}}</td>
        <td>{{$filiacion->numero_ficha_clinico}}</td>
        <td>{{$filiacion->nombre}}</td>
        <td>{{$filiacion->apellido}}</td>
        <td>{{$filiacion->asegurado}}</td>
        <td>{{$filiacion->edad}}</td>
        <!-- <td>{{$filiacion->disciplina}}</td>
        <td>{{$filiacion->posicion_prueba}}</td>
        <td>{{$filiacion->ocupacion}}</td>
        <td>{{$filiacion->peso}}</td>
        <td>{{$filiacion->talla}}</td>
        <td>{{$filiacion->imc}}</td>
        <td>{{$filiacion->procedencia}}</td>
        <td>{{$filiacion->direccion}}</td>
        <td>{{$filiacion->telefono}}</td>
        <td>{{$filiacion->asociacion_club}}</td>
        <td>{{$filiacion->fisioterapeuta_kinesiologo}}</td>
        <td>{{$filiacion->fecha_evaluacion}}</td> -->
        <td>
         <form action="{{ route('filiacions.destroy',$filiacion->id) }}" method="POST">
          <a href="/filiacions/{{$filiacion->id}}/edit" class="btn btn-primary ">
          <i class="fas fa-edit"></i></a>        
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i> 
              </button>
              <a href="/filiacions/{{$filiacion->id}}" class="btn btn-info">
                <i class="fas fa-eye"></i>
               </a> 
              

         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>

<script>
$(document).ready(function(){
    $('#filiacions').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
    });
});
    // new DataTable('#filiacions');
</script>

@stop