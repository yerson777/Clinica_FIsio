@extends('adminlte::page')

@section('title', 'Signos Vitales')

@section('content_header')
    <h1>Signos Vitales de Pacientes</h1>
@stop

@section('content')
<a href="signos_vitales/create" class="btn btn-primary">Crear</a>

<table id="signos_vitales" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Número de Ficha Clínica</th>
      <th scope="col">Presión Arterial</th>
      <th scope="col">Temperatura</th>
      <th scope="col">Frecuencia Respiratoria</th>
      <th scope="col">Pulso</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($signosVitales as $signosVital)
    <tr>
      <!-- <td>{{$signosVital->id}}</td> -->
      <td>{{ $signosVital->filiacion->numero_ficha_clinico }}</td>
      <td>{{ $signosVital->presion_arterial }}</td>
      <td>{{ $signosVital->temperatura }}</td>
      <td>{{ $signosVital->frecuencia_respiratoria }}</td>
      <td>{{ $signosVital->pulso }}</td>
      <td>
        <form action="{{ route('signos_vitales.destroy', $signosVital->id) }}" method="POST" class="form-eliminar">
          <a href="/signos_vitales/{{ $signosVital->id }}/edit" class="btn btn-primary">
            <i class="fas fa-edit"></i>
          </a>
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-danger btn-eliminar">
            <i class="fas fa-trash-alt"></i>
          </button>
          <a href="/signos_vitales/{{ $signosVital->id }}" class="btn btn-info">
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
    <link href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function(){
    $('#signos_vitales').DataTable({
        "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
    });

    // SweetAlert2 para confirmación antes de eliminar
    $('.btn-eliminar').click(function(event) {
        event.preventDefault();
        var form = $(this).closest('form'); // Capturar el formulario más cercano

        Swal.fire({
            title: '¿Estás seguro de eliminar este registro?',
            text: "Esta acción no se puede deshacer.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Si confirma, envía el formulario
            }
        })
    });
});
</script>
@stop
