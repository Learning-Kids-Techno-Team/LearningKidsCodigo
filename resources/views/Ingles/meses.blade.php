@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Los meses del año</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>
    <style>

        body{

            background:lightyellow;

        }

        .card{
            background: #d7f3e3;
            border: #FDFD96 6px dashed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        #pa{
            text-align: justify;


        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

        .navbar{
            background: aquamarine;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }

       #bord{
           background: lightblue;
           border: #fff6af 15px dashed;
       }



    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #d7f3e3">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #FDFD96">
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/x3rstQX/compu-removebg-preview.png" >
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow">
                        <h4  class="mt-5" style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Meses del año. (Months of the year)</h3>
                        <p class="" id="pa">
                            <br>Una de las formas más sencillas para que los niños aprendan los meses del año en inglés y
                            español es hablarles sobre los cumpleaños, ya que ocurren una sola vez al año.

                            <br>Para ayudarles a comprender las fechas en inglés, podrían enseñarles primero los nombres de los meses del
                            año, así podrán saber en qué mes es el cumpleaños de mamá, ¡O cuándo es la fecha de su propio cumpleaños!
                            <br>

                            <br> Aparte de aprender los nombres de los <stron>meses en inglés que son doce,</stron> es ideal decirle cómo
                            se escriben las abreviaturas de los meses en inglés.

                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 "><h2 class="mt-5">Meses en inglés</h2>
        <div class="card">
        <div class="row m-3">
            <div class="col-md-6 ">
                <h2 class="mt-5">
                    Enero:
                </h2>
                <h3>January – (Jan.)</h3>
                <iframe src="https://drive.google.com/file/d/1qkvP6-jlaGCq7wY1apjuccFTugM0P0B_/preview" width="300" height="80"></iframe>
                <p>
                    <br><strong>Es el primer mes del año, y tiene 31 días. </strong>
                    <br> En el hemisferio norte representa el invierno,
                    <br> mientras que en el sur apenas está comenzando el verano, o <strong>summertime.</strong>

            </div>

            <div class="col-md-6 mb-5">
                <img class="mx-auto d-block" src="https://i.ibb.co/SB8CcF4/enero-removebg-preview.png" width="350" height="200">
            </div>
          </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Febrero:
                    </h2>
                    <h3>February – (Feb.)</h3>
                    <iframe src="https://drive.google.com/file/d/1IaRsOUKUrk3aQGHE0AFKD3prBYf1zfcp/preview" width="300" height="80"></iframe>
                    <p>
                        <br><strong>¡Es el mes más corto del año!</strong> Y también uno bastante peculiar.
                        Febrero tiene normalmente 28 días, sin embargo,
                        cada 4 años se le suma un día extra para un total de 29 días.
                        <br>Este día extra es llamado leap day en inglés, e indica que ese año
                        es un año bisiesto o <strong>leap year,</strong> es decir que tiene 366 días en lugar de 365.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/qxGWWnb/febr-removebg-preview.png" width="420" height="250">
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Marzo:
                    </h2>
                    <h3>March – (Mar.)</h3>
                    <iframe src="https://drive.google.com/file/d/191zUV71ZH8GJAIWPbxuBbwW4WazaCVHJ/preview" width="300" height="80"></iframe>
                    <p>
                        <br>En el hemisferio norte marca la llegada de la primavera, o <strong>spring,</strong> sin embargo,
                        en el hemisferio sur es el comienzo del otoño.
                        <br><strong>Cuenta con 31 días.</strong>
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/1n0z8mW/march-1-removebg-preview.png" width="350" height="250" >
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Abril:
                    </h2>
                    <h3>April – (Apr.)</h3>
                    <iframe src="https://drive.google.com/file/d/1f0HAioMtp_hSV5O0L9puO2OqYauGEzBC/preview" width="300" height="80"></iframe>
                    <p>
                        <br><strong>Tiene 30 días,</strong> y es conocido como el mes de las flores en el hemisferio norte.
                        <br>En America Central es verano o summertime.
                        <br>En el mes de abril se presenta un clima caluroso.


                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Z2SHqR5/unna-removebg-preview.png" width="300" height="250">
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Mayo:
                    </h2>
                    <h3>May – (May)</h3>
                    <iframe src="https://drive.google.com/file/d/1njEKjZObnMh2xXK__vjAFvJJfsfsExOP/preview" width="300" height="80"></iframe>
                    <p>
                        <br>Es el quinto mes del año, <strong>tiene 31 días</strong> y marca el inicio del invierno, o <strong>winter,</strong>
                        <br>en el hemisferio sur. En el norte, es el comienzo del verano.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Lr36t0y/kooj-removebg-preview.png" width="300" height="250">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Junio:
                    </h2>
                    <h3>June – (Jun.)</h3>
                    <iframe src="https://drive.google.com/file/d/1T5HsdL-S945UtNQSFceayu2ZLX6BB-Xv/preview" width="300" height="80"></iframe>
                    <p>
                        <br>Junio tiene 30 días, y <strong>está justo en la mitad del año.</strong>
                        <br>Para las personas que viven en el hemisferio sur viene con frío y bajas temperaturas,
                        mientras que para los que viven en la otra mitad del mundo viene repleto de días soleados.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/THZT2Jb/june-removebg-preview.png" width="380" height="250">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Julio:
                    </h2>
                    <h3>July - (Jul.)</h3>
                    <iframe src="https://drive.google.com/file/d/1AfLfFPzPjqnPaLrXdsHv99VoJ-IIYgRn/preview" width="300" height="80"></iframe>
                    <p>
                        <br><strong>Tiene 31 días y es justo la mitad del verano,</strong> o midsummer, en el hemisferio norte.
                        <br>Frecuentemente se asocia al comienzo de las vacaciones.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/WGncnLc/juk-removebg-preview.png" width="300" height="250">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Agosto:
                    </h2>
                    <h3>August – (Aug.)</h3>
                    <iframe src="https://drive.google.com/file/d/1cExntNl9i1IrYdhQVIeQEq6a4ZRi0kBL/preview" width="300" height="80"></iframe>
                    <p>
                        <br>Un mes frío para el hemisferio sur que marca el final del invierno.
                        <br><strong>Tiene 31 días.</strong> Agosto, en el hemisferio norte, es el mes perfecto para ir
                        a la playa y disfrutar del mar.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/ZgRfGPJ/agost-removebg-preview.png" width="320" height="180">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Septiembre:
                    </h2>
                    <h3>September - (Sep.)</h3>
                    <iframe src="https://drive.google.com/file/d/1HCaFFzhVub_CZp3y3LoQAuyKhvt9XK5t/preview" width="300" height="80"></iframe>
                    <p>
                        <br>Es el séptimo mes del año y con él comienza el otoño en el hemisferio norte.
                        También representa para muchos lugares el comienzo del nuevo año escolar.
                        <br><strong>Septiembre tiene 30 días.</strong>
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/gRPnC18/septiem-removebg-preview.png" width="300" height="250" >
                </div>
            </div>
        </div>
    </div>

        <!-- contenedor de los meses-->
        <div class="container-fluid mt-5 ">
            <div class="card">
                <div class="row m-3">
                    <div class="col-md-6 ">
                        <h2 class="mt-5">
                            Octubre:
                        </h2>
                        <h3>October – (Oct.)</h3>
                        <iframe src="https://drive.google.com/file/d/1oV6qsXiZ9mLi2SqMqHy5Ye-QRwtB0Qcg/preview" width="300" height="80"></iframe>
                        <p>
                            <br>Las hojas comienzan a caer de los árboles para los que viven en la mitad norte
                            del mundo, mientras que para los de la mitad sur las temperaturas van en subida.
                            <br><strong>Octubre tiene 31 días y es el decimoprimer mes del año.</strong>
                            <br>

                    </div>

                    <div class="col-md-6 mb-5">
                        <img class="mx-auto d-block" src="https://i.ibb.co/XYgP6dQ/octub-removebg-preview.png" width="300" height="250">
                    </div>
                </div>
            </div>
        </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Noviembre:
                    </h2>
                    <h3>November – (Nov.)</h3>
                    <iframe src="https://drive.google.com/file/d/1tTTB-uMaR6N52NG7djHI6sU4a2sRzMu0/preview" width="300" height="80"></iframe>
                    <p>
                        <br>En noviembre, las temperaturas en el hemisferio norte siguen en bajada,
                        mientras que al otro lado del planeta los días son más calentitos.
                        <br><strong>Noviembre tiene 30 días y es el penúltimo mes del año.</strong>
                        <br>
                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/rwqDhNr/noviem-removebg-preview.png" width="300" height="250" >
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Diciembre:
                    </h2>
                    <h3>December – (Dec.)</h3>
                    <iframe src="https://drive.google.com/file/d/16YH9Q6a1GikZUuv_49QeCb6LhhqhiPrl/preview" width="300" height="80"></iframe>
                    <p>
                        <br>Es el último mes del año, y tiene 31 días. Diciembre marca el comienzo del
                        invierno para los que viven al norte, y el del verano para los que residen al sur del planeta.
                        <br><strong>En este mes se celebra la navidad o christmas.</strong>
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/kB3ZBZg/diciemb-removebg-preview.png" width="300" height="250">
                </div>
            </div>
        </div>
    </div>


    <!-- Video -->
            <div  class="container-fluid mt-5" >
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-align: center">
                            Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                            <br>de los meses en inglés con esta divertida canción. ¡Vamos a cantar!
                            <br>
                        </h2>
                        <iframe id="bord" class="mx-auto d-block" src="https://drive.google.com/file/d/1eNnfhsj1j-rBD_f-58H7vJofyTb4Ao5h/preview" width="670" height="390"></iframe>
                    </div>

                </div>
            </div>



    <!-- separador -->
    <div id="separadorInferior">
        <div class="content ">

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection

