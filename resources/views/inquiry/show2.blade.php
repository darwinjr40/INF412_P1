@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <div class="card"> --}}
    <div class="card-body">
        {{-- <h1>Detalles</h1> --}}
    </div>
    {{-- </div> --}}
@stop

@section('content')

    <div class="card">
        <div class="card-body">



            <div class="row justify-content-center border border-primary rounded-top">

                <div class="col justify-content-center">

                    <div class="row justify-content-center mt-2 text-center">
                        <div class="col">
                            <h1 class="font-weight-bold">Tratamiento Medico</h1>
                        </div>
                    </div>

                    <div class="row  align-items-center">
                        <div class="col-1">
                            <img class="brand-image img-circle  " style="width: 80px"
                                src="https://w7.pngwing.com/pngs/981/736/png-transparent-logo-clinic-family-medicine-physician-family-walk-text-trademark-logo.png">
                        </div>
                        <div class="col-3  d-flex" style="padding-left: 2%">
                            <h3><strong> Clinica SantaCruz </strong></h3>
                        </div>
                    </div>

                    <div class="row justify-content-between mx-1 mb-2">
                        <div class="col-4 align-items-center">
                            <div class="row ">
                                <h5></h5>
                            </div>
                            <div class="row ">
                                <h5></h5>
                            </div>
                            <div class="row ">
                                <h5></h5>
                            </div>

                            <div class="row">
                                <h5><strong> Direccion: </strong> Doble vía la guardia entre 2do y 3er anillo.</h5>
                            </div>
                            <div class="row">
                                <h5><strong> Telefono: </strong>72561823</h5>
                            </div>
                            <div class="row">
                                <h5> <strong>Santa Cruz - Bolivia</strong> </h5>
                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="row">
                                <h5><strong> Fecha : </strong> {{ date('d-m-Y', strtotime($inquiry->fecha)) }}</h5>
                            </div>
                            <div class="row">
                                <h5><strong>Nro orden : </strong> {{ $inquiry->id }}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="card">

        <div class="card-body">
            <div class="row justify-content-center border border-primary rounded-top">

                <div class="col justify-content-center">

                    <div class="row">
                        <div class="col-sm-12">
                            <h2><strong> Datos del paciente</strong> </h2>
                            <hr>
                        </div>

                        <div class="col-sm-3">
                            <h5> <strong>Nombre:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ $patient['nombre'] }}</h5>
                        </div>

                        <div class="col-sm-3">
                            <h5> <strong>Fecha de Nacimiento:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ date('d-m-Y', strtotime($patient['fecha'])) }}</h5>
                        </div>

                        <div class="col-sm-3">
                            <h5> <strong>Edad:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ $patient['edad'] }}</h5>
                        </div>

                        <div class="col-sm-3">
                            <h5> <strong>Genero:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ $patient['sexo'] }}</h5>
                        </div>

                        <div class="col-sm-12">
                            <br>
                            <h2><strong> Datos del Medico</strong> </h2>
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <h5> <strong>Medico:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ $doctor->nombre }}</h5>
                        </div>

                        <div class="col-sm-3">
                            <h5> <strong>Servicio:</strong> </h5>
                        </div>
                        <div class="col-sm-9">
                            <h5>{{ $specialty->nombre }}</h5>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Receta----------------------------------------------------------------------------- --}}

    <div class="card">

        <div class="card-body">
            <div class="row justify-content-center border border-primary rounded-top">

                <div class="col justify-content-center">
                    <div class="row">
                        <div class="col-sm-2">
                            <h2><strong> Receta</strong> </h2>

                        </div>
                    </div>

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


                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
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
