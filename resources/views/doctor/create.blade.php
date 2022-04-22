@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de un Doctor</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form id="personal" method="post" action="{{route('doctors.store')}}">
            @csrf
            {{-- DOCTOR --}}
            <!-- Grupo: Nombre -->
            <h5>nombre Completo:</h5>
            <div class="formulario__grupo-input" id="grupo__nombre">
                <input type="text"  name="nombre" class="focus border-primary   form-control" value="{{old('nombre')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('nombre') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="nombre" class="formulario__input-error">*El nombre tiene que ser de 1 a 40 letras y solo puede contener letras, espacios y puede llevar acentos.</p>
            <!-- Grupo: sexo -->
            <div class="form-group">
            <h5>sexo:</h5>
            <select name="sexo" id="select-sexo"  class="focus border-primary  form-control" value="{{old('sexo')}}">
                <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
            </select>
            @error('sexo')  <small style="color: red">*{{$message}}</small> @enderror
            </div>

            {{-- USER --}}

            <!-- Grupo: Usuario -->
            <h5>usuario:</h5>
            <div class="formulario__grupo-input" id="grupo__usuario">
                <input type="text" name="name"  class="focus border-primary  form-control" value="{{old('name')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('name') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="name" class="formulario__input-error">*El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
            
            <!-- Grupo: Email -->
            <h5>email:</h5>
            <div class="formulario__grupo-input" id="grupo__email">
                <input type="email" name="email"  class="focus border-primary  form-control" value="{{old('email')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('email') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="email" class="formulario__input-error">*El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
            
            <!-- Grupo: password -->
            <h5>password:</h5>
            <div class="formulario__grupo-input" id="grupo__password">
                <input type="password" name="password"  class="focus border-primary  form-control" value="{{old('password')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('password') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="password" class="formulario__input-error">*El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p> 

                
            



            

            
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            

            <br>
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
            <a href="{{route('doctors.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>

           
        </form>        


    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ asset('js/prueba.js') }}"></script>
@stop