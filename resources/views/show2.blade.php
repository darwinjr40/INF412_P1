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
                        style="font-family: Arial, Helvetica, sans-serif;"><strong>TRATAMIENTO
                            MEDICO</strong></span></span></p>

                            <div class="row  align-items-center">
                                <div class="col-1">
                                    <img class="brand-image img-circle  " style="width: 80px"
                                        src="https://w7.pngwing.com/pngs/981/736/png-transparent-logo-clinic-family-medicine-physician-family-walk-text-trademark-logo.png">
                                        <h3><strong> Clinica SantaCruz </strong></h3>
                                </div>
                                <div class="col-3  d-flex" style="padding-left: 2%">
                                    
                                </div>
                            </div>
            <p style="line-height: 1;"><strong><span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Direccion:&nbsp;</span></strong><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Doble v&iacute;a <span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">a guardia entre 2do y</span>
                    3er anillo &nbsp; &nbsp;<strong>Fecha&nbsp;</strong>27-04-2022</span></p>
            <p style="line-height: 1;"><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>T</strong></span><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>elefono:</strong>
                    72561823 &nbsp;<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; Nro orden :</strong> 1</span></p>
            <p style="line-height: 1;"><strong><span
                        style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Santa Cruz -
                        Bolivia</span></strong></p> <br>
            <p><span style="font-size: 20px;"><strong><span style="font-family: Arial, Helvetica, sans-serif;">Datos del
                            paciente <hr></span></strong></span>
                    <span style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><strong>Nombre:</strong>&nbsp;
                    &nbsp; &nbsp;Maximo Hugo Ondarza<br> <strong>Fecha de &nbsp;Nacimiento</strong>: &nbsp;
                    24-04-1990<br> <strong>Edad:</strong>&nbsp; &nbsp; &nbsp;32<br> <strong>Genero:</strong>&nbsp;
                    &nbsp; &nbsp;M</span></p>

            <p></p>
            <p><span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><strong>Datos del
                        Medico <hr></strong></span><span
                    style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                    <strong>Medico:</strong>&nbsp; &nbsp; Max Coimbra Herrera<br> <strong>Servicio:</strong>&nbsp;
                    &nbsp;M&eacute;dicina Interna</span></p>
            <p></p>
            


            {{-- <div class="col justify-content-center"> --}}
                {{-- <div class="row">
                    <div class="col-sm-2"> --}}
                <h2><strong> Receta</strong> </h2>
                <hr>
                {{-- </div>
                </div> --}}

                <table class="table table-striped" id="inquiries" border="2" style="">
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
