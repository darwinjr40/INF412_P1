@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $patient->nombre }}</h1>
    <strong>{{$patient->fecha}}</strong>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p> <b>Nombre:</b> {{$patient->nombre}} </p>
            <p> <b>Sexo:  </b> {{$patient->sexo}} </p>
            <p> <b>email:  </b> {{$patient->email}} </p>
            <p> <b>Edad:  </b> {{$patient->edad}} </p>

            
            

        </div>
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
