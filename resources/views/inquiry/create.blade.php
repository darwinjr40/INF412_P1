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
                    <h5>Doctores:</h5>
                    <select name="doctorSpecialty_id" id="doctorSpecialty_id" class="form-control" >
                        {{-- value="" <=> value=null  --}}
                         <option value="">Seleccione un Doctor</option>
                            @foreach ($doctorsSpecialties as $doctorSpecialty)
                                <option value="{{$doctorSpecialty->doctorSpecialty_id}}">  
                                        {{$doctorSpecialty->doctor_nombre. ':   ( '. $doctorSpecialty->specialty_nombre.' )'}}  
                                </option>
                            @endforeach
                    </select>

                    @error('idProducto')
                        <p>DEBE INGRESAR BIEN EL PRODUCTO</p>
                    @enderror
                </div>  
                {{-- INGRESAR CANTIDAD --}}
                <div class="col-4">
                    <h5>Pacientes:</h5>
                    <select name="patient_id" id="patient_id" class="form-control" >
                        {{-- value="" <=> value=null  --}}
                         <option value="">Seleccione un Paciente</option>
                            @foreach ($patients as $patient)
                                <option value="{{$patient->patient_id}}">  
                                        {{$patient->patient_nombre}}  
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
@stop