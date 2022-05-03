<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="card" style="">
        <div class="card-body" style="">
            <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                    style="font-size: 16px;">&nbsp;</span><span style="font-size: 22px;"><span
                        style="font-family: Arial, Helvetica, sans-serif;">
                        <strong>TRATAMIENTO MEDICO</strong>
                    </span></span>
                        <br>
                        <img src="https://w7.pngwing.com/pngs/981/736/png-transparent-logo-clinic-family-medicine-physician-family-walk-text-trademark-logo.png"
                        class="brand-image img-circle  " width="80px">
                        <h3><strong> Clinica SantaCruz </strong></h3>
            </p>                 

    
            <p style="line-height: 1;"><strong><span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Direccion:&nbsp;</span></strong><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Doble v&iacute;a <span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">a guardia entre 2do y</span>
                    3er anillo &nbsp;
                    &nbsp;<strong>Fecha&nbsp;</strong>{{ date('d-m-Y', strtotime($inquiry->fecha)) }}</span></p>
            <p style="line-height: 1;"><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>T</strong></span><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>elefono:</strong>
                    72561823 &nbsp;<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; Nro orden :</strong> {{ $inquiry->id }}</span></p>
            {{-- <p style="line-height: 1;"><span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Santa Cruz -
                        Bolivia</span></p>  --}}
            {{-- ---------------------------------------- --}}
            <p><span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><strong>Datos de la consulta
                        <hr>
                    </strong></span><span style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                    <strong>Medico:</strong>&nbsp; &nbsp; {{ $doctor->nombre }}<br> <strong>Servicio:</strong>&nbsp;
                    &nbsp;{{ $specialty->nombre }}</span>
            </p>
           
            {{-- ---------------------------------------- --}}

            <p>
                <strong>
                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">
                        Datos del paciente<hr>
                    </span>
                </strong>
                <span style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>Nombre:</strong>&nbsp;
                    &nbsp; &nbsp;{{ $patient['nombre'] }}<br> <strong>Fecha de &nbsp;Nacimiento</strong>: &nbsp;
                    {{ date('d-m-Y', strtotime($patient['fecha'])) }}<br> <strong>Edad:</strong>&nbsp; &nbsp;
                    &nbsp;{{ $patient['edad'] }}<br> <strong>Genero:</strong>&nbsp;
                    &nbsp; &nbsp;{{ $patient['sexo'] }}</span>
            </p>

            <p></p>
            {{-- Vitals------------------------------------------ --}}
            @if ($vital)
                <strong>
                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">
                        Signos Vitales<hr>
                    </span>
                </strong>
            <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                <strong>Presion arterial:</strong>  {{ $vital ? $vital->presion : "" }}  <br>
                <strong>Pulso:</strong>  {{ $vital->pulso ? $vital->pulso : "" }} <br>
                <strong>Peso:</strong>  {{ $vital ? $vital->presion : "" }} <br>
                <strong>Temperatura:</strong>  {{ $vital->temperatura ? $vital->presion : "" }} <br>
                <strong>Frecuencia cardiaca:</strong>  {{ $vital ? $vital->presion : "" }} <br>
                <strong>Estatura:</strong>  {{ $vital ? $vital->presion : "" }} <br>
                <strong>Frecuencia respiratoria</strong>  {{ $vital ? $vital->presion : "" }} <br>
                <strong>saturacion:</strong>  {{ $vital ? $vital->presion : "" }} <br>
                <strong>imc:</strong>  {{ $vital ? $vital->presion : "" }} <br>
            </p>
                
            @endif
            {{-- ---------------------------------------- --}}
            <h2 style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><strong> Receta</strong> </h2>
            <hr>
            <table class="table table-striped" id="inquiries" border="2" style="font-size: 15px; font-family: Arial, Helvetica, sans-serif; text-align: center;
                vertical-align: middle; height: 50px; width: 50px;">
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
            {{-- </div> --}}

        </div>
    </div>

</body>

</html>
