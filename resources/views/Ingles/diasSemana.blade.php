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
        li{
            text-align: justify;
        }



    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #FDFD96">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #d7f3e3 ">
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/x3rstQX/compu-removebg-preview.png" >
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Días de la semana. (Days of the week)</h3>
                        <p class="" id="pa">
                            <br>Es muy importante para los niños aprender los días de la semana en inglés,
                            ya que es una forma importante de medir el tiempo.
                            <br>
                            <br>
                            <br>Saber los nombres de los días les ayuda a organizar sus horarios y a tener presente cuándo
                            sucederán eventos importantes, ya sea una próxima excursión o un examen.
                            <br>
                            Es primordial enseñarles que no todos los días de la semana son iguales. Existen los días de semana, o weekdays, donde la mayoría de las personas trabaja o estudia, y luego están los fines de semana, o weekend en inglés,
                            donde es más común tener tiempo libre para salir al campo, descansar o ir de paseo con los amigos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 "><h2 class="mt-5">Días en inglés</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Lunes
                    </h2>
                    <h3> Monday - (Mon.)</h3>
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
                        Martes
                    </h2>
                    <h3>Tuesday - (Tue.)</h3>
                    <p>
                        <br><strong>¡Es el mes más corto del año!</strong> Y también uno bastante peculiar.
                        Febrero tiene normalmente 28 días, sin embargo,
                        cada 4 años se le suma un día extra para un total de 29 días.
                        <br>Este día extra es llamado leap day en inglés, e indica que ese año
                        es un año bisiesto o <strong>leap year,</strong> es decir que tiene 366 días en lugar de 365.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/qxGWWnb/febr-removebg-preview.png" width="400" height="300">
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
                        Miércoles
                    </h2>
                    <h3>Wednesday – (Wed.)</h3>
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
                        Jueves
                    </h2>
                    <h3>Thursday – (Thu.)</h3>
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
                        Viernes
                    </h2>
                    <h3>Friday – (Fri.)</h3>
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

                    </h2>
                    <h3>Saturday – (Sat.)</h3>
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
                        Domingo
                    </h2>
                    <h3>Sunday- (Sun.)</h3>
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


    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">
                    Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                    <br>de los meses en inglés con esta divertida canción. ¡Vamos a cantar!
                </h2>
                <img class=" mx-auto d-block"  width="400" />
            </div>

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
