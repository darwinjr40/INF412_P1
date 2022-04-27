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

    <form action="{{ route('vitals.store2', $inquiry->id) }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-sm-12">
                <h2>Datos del paciente</h2>
            </div>

            <div class="col-sm-6">
                <label for="nombre">Nombre:</label>
                <input type="text" value="{{ $patient['nombre'] }}" name="" class="form-control" placeholder="nombre"
                    readonly>
            </div>

            <div class="col-sm-3">
                <label for="jurisdiccion">Edad:</label>
                <input type="text" value="{{ $patient['edad'] }}" name="" class="form-control" placeholder="nombre"
                    readonly>

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
                <input type="text" value="{{ $specialty->nombre }}" name="" class="form-control" placeholder="servicio"
                    readonly>
                <br>
            </div>

            <div class="col-sm-12">
                <h2>Signos Vitales</h2>
            </div>
            <div class="col-sm-4">
                <label for="tipo">Presion Arterial:</label>
                <input type="text" value="{{ $vital ? $vital->presion : old('Presion Arterial') }}" name="presion"
                    class="form-control" placeholder="Presion Arterial">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Temperatura:</label>
                <input type="text" value="{{ $vital ? $vital->temperatura : old('temperatura') }}" name="temperatura"
                    class="form-control" placeholder="Temperatura">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Pulso:</label>
                <input type="text" value="{{ $vital ? $vital->pulso : old('pulso') }}" name="pulso" class="form-control"
                    placeholder="pulso">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Frecuencia Respiratoria(x Minuto):</label>
                <input type="text" value="{{ $vital ? $vital->fre_respiratoria : old('fre_respiratoria') }}"
                    name="fre_respiratoria" class="form-control" placeholder="Frecuencia Respiratoria">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Frecuencia Cardiaca(x Minuto):</label>
                <input type="text" value="{{ $vital ? $vital->fre_cardiaca : old('fre_cardiaca') }}" name="fre_cardiaca"
                    class="form-control" placeholder="Frecuencia Cardiaca">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Saturacion O2:</label>
                <input type="text" value="{{ $vital ? $vital->saturacion : old('saturacion') }}" name="saturacion"
                    class="form-control" placeholder="Saturacion">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Peso:(Kg) utilice punto para decimales:</label>
                <input type="text" value="{{ $vital ? $vital->peso : old('peso') }}" name="peso" class="form-control"
                    placeholder="Peso">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Estatura:(cm)</label>
                <input type="text" value="{{ $vital ? $vital->estatura : old('estatura') }}" name="estatura"
                    class="form-control" placeholder="estatura">
                <br>
            </div>

            <div class="col-sm-4">
                <label for="tipo">Imc:</label>
                <input type="text" value="{{ $vital ? $vital->imc : old('imc') }}" name="imc" class="form-control"
                    placeholder="Imc">
                <br>
            </div>
            <div class="col-sm-1">
                {{-- @if (!$vital) --}}
                <button class="btn btn-danger btn-sm" type="submit">Registrar</button>
                {{-- @endif --}}
            </div>

            <div class="col-sm-1">
                <a href="{{ route('inquiries.index') }}" class="btn btn-warning text-white btn-sm">cancelar</a>
            </div>
        </div>
    </form>

    <br>
    {{-- Receta----------------------------------------------------------------------------- --}}

    <div class="card">

        <div class="card-body">
            <form action="{{ route('recipes.store2', $inquiry->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-2">
                        <h2>Receta</h2>

                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="tipo">descripcion:</label>
                        <input type="text" value="" name="descripcion" class="form-control">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="tipo">medicamento:</label>
                        <input type="text" value="" name="medicamento" class="form-control">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="tipo">presentacion:</label>
                        <input type="text" value="" name="presentacion" class="form-control">
                    </div>

                    <div class="col-sm-2">
                        <label for="tipo">dosis:</label>
                        <input type="text" value="" name="dosis" class="form-control">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="tipo">duracion:</label>
                        <input type="text" value="" name="duracion" class="form-control">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="tipo">cantidad:</label>
                        <input type="text" value="" name="cantidad" class="form-control">
                        <br>
                    </div>

                    <div class="col-sm-1" style="padding-top: 3%">
                        <button class="btn btn-info" type="submit">Añadir</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped" id="inquiries" border="5">
                <thead>
                    <tr>
                        <th scope="col" width="1%">Id</th>
                        <th scope="col" width="15%">Descripcion</th>
                        <th scope="col" width="15%">medicamento</th>
                        <th scope="col" width="15%">presentacion</th>
                        <th scope="col" width="15%">dosis</th>
                        <th scope="col" width="5%">duracion</th>
                        <th scope="col" width="15%">cantidad</th>
                        <th scope="col" width="5%">accion</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->id }}</td>
                            <td>{{ $recipe->descripcion }}</td>
                            <td>{{ $recipe->medicamento }}</td>

                            <td>{{ $recipe->presentacion }}</td>
                            <td>{{ $recipe->dosis }}</td>
                            <td>{{ $recipe->duracion }}</td>
                            <td>{{ $recipe->cantidad }}</td>

                            <td>
                                <form action="{{ route('recipes.destroy2', [$recipe->id, $inquiry->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    {{-- <a  class="btn btn-primary btn-sm" href="{{route('inquiries.show',$inquiry->id)}}">Ver</a> --}}
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">X</button>

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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
