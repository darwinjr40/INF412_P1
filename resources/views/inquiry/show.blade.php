@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
{{-- <div class="card"> --}}
    <div class="card-body">
    <h1>Detalles</h1>
    </div>
{{-- </div> --}}
@stop

@section('content')
<div class="row">
    <div class="col-sm-6">
        <label for="nombre" >Nombre:</label>
        <input type="text" value="{{$patient['nombre']}}" name="nombre" class="form-control" placeholder="nombre" readonly>
    </div>
    {{-- <div class="col-sm-6">
        <label for="caratula" >Carátula:</label>
        <input type="text" value="{{$proceso->caratula}}" name="caratula" class="form-control" placeholder="nombre" readonly>

    </div> --}}
    <div class="col-sm-2">
        <label for="jurisdiccion">Edad:</label>
        <input type="text" value="{{$patient['edad']}}" name="jurisdiccion" class="form-control" placeholder="nombre" readonly>
        
    </div>
    <div class="col-sm-2">
        <label for="tipo" >Genero:</label>
        <input type="text" value="{{$patient['sexo']}}" name="tipo" class="form-control" placeholder="nombre" readonly>
        
    </div>    
    
    <div class="col-sm-3">
        <br>
        <label for="tipo" >Registrar signos Vitales</label>
        <br>
        <a href="{{route('vitals.create2', $inquiry->id)}}"class="btn btn-warning text-white btn-sm">Registro </a>

    </div>    

    <div class="col-sm-2">
        <br>
        <label for="tipo" >Registrar Receta </label>
        <br>
        <a href="{{route('doctors.index')}}"class="btn btn-warning text-white btn-sm">Registro</a>
    </div>
</div>
<div class="card-body">
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
