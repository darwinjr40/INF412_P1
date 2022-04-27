@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
    <form action="{{ route('vitals.store2', $inquiry->id) }}" method="POST">
        @csrf
        <br>
        <h5>Signos Vitales</h5>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre">Nombre:</label>
                <input type="text" value="{{ $patient['nombre'] }}" name="" class="form-control" placeholder="nombre"
                    readonly>
            </div>
            {{-- <div class="col-sm-6">
            <label for="caratula" >Carátula:</label>
            <input type="text" value="{{$proceso->caratula}}" name="caratula" class="form-control" placeholder="nombre" readonly>
    
        </div> --}}
            <div class="col-sm-3">
                <label for="jurisdiccion">Edad:</label>
                <input type="text" value="{{ $patient['edad'] }}" name="" class="form-control"
                    placeholder="nombre" readonly>

            </div>
            <div class="col-sm-3">
                <label for="tipo">Genero:</label>
                <input type="text" value="{{ $patient['sexo'] }}" name="" class="form-control" placeholder="nombre"
                    readonly>
            </div>

            <div class="col-sm-6">
                <label for="tipo">Especialista</label>
                <input type="text" value="{{ $doctor->nombre }}" name="" class="form-control" placeholder="nombre"
                    readonly>

            </div>

            <div class="col-sm-6">
                <label for="tipo">Servicio:</label>
                <input type="text" value="" name="" class="form-control" placeholder="servicio" readonly>
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Presion Arterial:</label>
                <input type="text" value="{{old('presion')}}" name="presion" class="form-control" placeholder="Presion Arterial">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Temperatura:</label>
                <input type="text" value="{{old('temperatura')}}" name="temperatura" class="form-control" placeholder="Temperatura">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Pulso:</label>
                <input type="text" value="{{old('pulso')}}" name="pulso" class="form-control" placeholder="pulso">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Frecuencia Respiratoria(x Minuto):</label>
                <input type="text" value="{{old('fre_respiratoria')}}" name="fre_respiratoria" class="form-control"
                    placeholder="Frecuencia Respiratoria">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Frecuencia Cardiaca(x Minuto):</label>
                <input type="text" value="{{old('fre_cardiaca')}}" name="fre_cardiaca" class="form-control" placeholder="Frecuencia Cardiaca">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Saturacion O2:</label>
                <input type="text" value="{{old('saturacion')}}" name="saturacion" class="form-control" placeholder="Saturacion">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Peso:(Kg) utilice punto para decimales:</label>
                <input type="text" value="{{old('peso')}}" name="peso" class="form-control" placeholder="Peso">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Estatura:(cm)</label>
                <input type="text" value="{{old('estatura')}}" name="estatura" class="form-control" placeholder="estatura">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Imc:</label>
                <input type="text" value="{{old('imc')}}" name="imc" class="form-control" placeholder="Imc">
                <br>
            </div>
            <div class="col-sm-3">
                {{-- <br> --}}
                {{-- <label for="tipo">Guardar</label> --}}
                {{-- <br> --}}
                {{-- <a href="{{route('vitals.create2', $inquiry->id)}}"class="btn btn-warning text-white btn-sm">Registro </a> --}}
                <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            </div>

            <div class="col-sm-2">
                <br>
                <label for="tipo">Cancelar</label>
                <br>
                {{-- <a href="{{route('doctors.index')}}"class="btn btn-warning text-white btn-sm">Registro</a> --}}
            </div>
        </div>
    </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
    @stop
