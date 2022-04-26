@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>consulta</h1> --}}
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row row justify-content-center m-2">
            <h2 class="font-weight-bold">Registro de consulta</h2>
        </div>
        <br>
        <br>
        <br>

        <form action="{{ route('inquiries.store') }}" method="post">
            @csrf
            {{-- @method('PATCH') --}}
            <div class="row row justify-content-center">
                 {{-- SELECCIONAR Doctor y Especialidad --}}
                <div class="col-4">
                    <h5>Especialidad:</h5>
                    <select name="specialty_id" id="select-speciality" class="form-control" >
                         <option value="">Seleccione una Especialidad</option>
                         @foreach ($doctor_specialty as $doctorSpecialty)
                                <option value="{{$doctorSpecialty->id}}">  
                                        {{-- {{$doctorSpecialty->doctor_nombre. ':   ( '. $doctorSpecialty->specialty_nombre.' )'}}   --}}
                                        {{$doctorSpecialty->nombre}}  

                                </option>
                          @endforeach
                    </select>
                    <h5>Doctores:</h5>
                    <select name="doctor_id" id="select-doctor" class="form-control" >
                         <option value="">Seleccione un Doctor</option>
                          
                    </select>
                </div>  
                {{-- INGRESAR CANTIDAD --}}
                <div class="col-4">
                    <h5>Pacientes:</h5>
                    <select name="patient_id" id="patient_id" class="form-control" >
                         <option value="">Seleccione un Paciente</option>
                            @foreach ($patients as $patient)
                                <option value="{{$patient->id}}">  
                                        {{$patient->nombre}}  
                                </option>
                            @endforeach
                    </select>
                </div>
                {{--BUTTON AñADIR AL CARRITO  --}}
                <div class="col-3 align-items-center" style="padding-top: 3%">
                    <button  class="btn btn-info" type="submit">Añadir</button>
                </div>

                <div class="card-body" style="padding-left: 4%">
                    <div class="col-10">
                     <h5>Descripcion:</h5>

                    <input type="text" name="descripcion"  class="focus border-primary  form-control" value="{{old('name')}}">
                    </div>    
                      
                 </div>    

            </div>    
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ asset('js/inquiry.js') }}"></script>

@stop