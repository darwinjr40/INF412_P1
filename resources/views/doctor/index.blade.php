@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Doctores</h1>
@stop

@section('content')

<div class="card">
  <div class="card-header">
      <a class="btn btn-primary btb-sm" href="{{route('doctors.create')}}"> Registrar Doctor</a>
  </div>
</div>

<div class="card">
    <div class="card-body">
      <table class="table table-striped" id="doctors" border="5" >
        <thead>
          <tr>
            <th scope="col" width="5%">Id</th>
            <th scope="col" width= "15%">Nombre completo</th>
            <th scope="col" width= "5%">Genero </th>
            <th scope="col" width= "15%">Fecha de Nacimiento</th>
            <th scope="col" width= "15%">Usuario</th>
            <th scope="col" width= "15%">Email</th>
            <th scope="col" width="5%">Acciones</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
              <td>{{$doctor->id}}</td>
              <td>{{$doctor->nombre}}</td>
              <td>{{$doctor->sexo}}</td>
              <td>{{date('d-m-Y',strtotime($doctor->fecha))}}</td>

              <td>{{$doctor->name}}</td>
              <td>{{$doctor->email}}</td>

              <td >
                <form  action="{{route('doctors.destroy',$doctor->id)}}" method="post">
                  @csrf
                  @method('delete')
                    {{-- <a  class="btn btn-primary btn-sm" href="{{route('persons.show',$persona)}}">Ver</a>   --}}
                    {{-- <a class="btn btn-info btn-sm" href="{{route('persons.edit',$persona)}}">Editar</a>                  --}}
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                    value="Borrar">Eliminar</button>

                </form>
              </td>    
            </tr>
          @endforeach

        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css"> --}}

{{-- responsive --}}
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
{{-- responsive --}}
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
     $('#doctors').DataTable({
       responsive: true,
       autoWidth: false
     });
    } );
</script>
@stop