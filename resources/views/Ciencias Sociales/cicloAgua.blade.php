@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Ciclo del agua</title>
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

            background:#dcfecb;

        }

        .card{
            background: #FFC9B5;
            border:palevioletred 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }


        #pa{
            text-align: justify;

        }

        #banderin{

            margin-top: auto;
            height:90px;

        }

        #color{
            color: white;
            height: 80px;
        }

        p{
            text-align: center;

        }

        .navbar{
            background: #60A71B;
        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            background:  #B4F97B;
        }
        #separadorInferior21 .content{

            width: 100%;
            height: 80px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #B4F97B;
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
            background:mistyrose;
        }
        #borde{
            border: plum 8px dotted;


        }

        h5{

            padding-top: 20px;
            text-align: center;
        }



    </style>


</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid " >
    <div class="row" >
        <div class="col-md-12" >
            <div class="row ml-5 mr-5"  >
                <div class="col-md-6 mx-auto d-block" >
                    <img class="mt-5 " src="https://i.ibb.co/SxDfK3s/lluvia-ni-os-removebg-preview.png"  width="300"  >
                </div>
                <div class="col-xl-6  mt-5" style=" background: #FDC7FF" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: magenta">Ciclo del agua</h3>
                    <p class="" id="pa">
                        <strong><br>El ciclo del agua describe la presencia y el movimiento del agua en la Tierra y sobre ella. El agua de la Tierra esta siempre en movimiento y constantemente cambiando de estado, desde líquido, a vapor, a hielo, y viceversa. El ciclo del agua ha estado ocurriendo por billones de años, y la vida sobre la Tierra depende de él; la Tierra sería un sitio inhóspito si el ciclo del agua no tuviese lugar.

                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="separadorInferior21">
    <div class="content ">

    </div>
</div>
<div  class="container-fluid mt-5">
    <div class="row ">
        <div class="col-md-12">
            <img class=" mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/KLMtM1t/evaporacion-c.png"  width="600" style="border: dashed  palevioletred" />
        </div>

    </div>
</div>

<div class="container-fluid justify-content-center  pl-5" >
    <div class="row m-5  ">
        <div class="col-md-6 pb-3 " >
            <div class="card mx-auto d-block" style="width: 25rem;">
                <img src="https://i.ibb.co/64vTsX8/ciclo-evaporacion.jpg"  width="388" height="280">
                <div class="card-body">
                    <h5 class="card-title">Evaporación</h5>
                    <p style="text-align: justify"><strong>El agua cambia de estado líquido a gaseoso.<br> La evaporación es el proceso por la cual el agua líquida de los océanos ingresa a la atmósfera, en forma de vapor, regresando al ciclo del agua. <br>Diversos estudios han demostrado que los océanos, mares, lagos y ríos proveen alrededor del 90% de humedad a la atmósfera vía evaporación; el restante 10% proviene de la transpiración de las plantas.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-md-6 justify-content-center ">
            <div class="card mx-auto d-block" style="width: 25rem;">
                <img src="https://i.ibb.co/3W4C1ff/cinfilgracion.jpg"   width="388" height="280">
                <div class="card-body">
                    <h5 class="card-title ">Infiltración</h5>

                    <p style="text-align: justify"><strong> El movimiento descendente del agua desde la superficie de la Tierra hacia el suelo o las rocas porosas. <br><br><br>En cualquier parte del mundo, una porción del <br>agua que cae como precipitación <br>y nieve se infiltra hacia el suelo subsuperficial y hacia las rocas.</strong></p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid justify-content-center  pl-5" >
    <div class="row m-5 "  >
        <div class="col-md-6 pb-3 " >
            <div class="card mx-auto d-block" style="width: 25rem;">
                <img src="https://i.ibb.co/71ZjxHn/ciclo-condensacion.jpg"   class=" mx-auto d-block" width="388" height="280" >
                <div class="card-body">
                    <h5 class="card-title">Condensación</h5>
                    <p style="text-align: justify"><strong>La condensación es el proceso por el cual el vapor de agua del aire se transforma en agua líquida. <br><br>La condensación es importante para el ciclo del agua ya que forma las nubes. <br>Estas nubes pueden producir precipitación, la cual es la principal forma que el agua regresa a la Tierra. La condensación es lo opuesto a la evaporación.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-md-6 justify-content-center ">
            <div class="card mx-auto d-block" style="width: 25rem;">
                <img src="https://i.ibb.co/7WgfdNc/preci.jpg" width="385" height="300">
                <div class="card-body">
                    <h5 class="card-title">Precipitación<br></h5>

                    <p style="text-align: justify" ><strong> La precipitación, es agua liberada desde las nubes en forma de lluvia, aguanieve, nieve o granizo. <br><br>Es el principal proceso por el cual el agua retorna a la Tierra.<br><br> La mayor parte de la precipitación cae como lluvia.</strong></p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid justify-content-center  pl-5" >
    <div class="row m-5 ">
        <div class="col-md-12 pb-3 ">
            <div class="card mx-auto d-block" style="width: 25rem;">
                <img src="https://i.ibb.co/pbChrkZ/escorrentia.jpg" class=" mx-auto d-block" width="388" height="300" >
                <div class="card-body">
                    <h5 class="card-title">Escorrentía</h5>
                    <p style="text-align: justify"><strong>
                            La escorrentía superficial describe el flujo del agua, lluvia, nieve, u otras fuentes, sobre la tierra, y es un componente principal del ciclo del agua. <br>Al área de tierra que produce el drenaje de la escorrentía a un punto común se la conoce como línea divisoria de aguas.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-1" style="background: palevioletred">
            <h1 style="text-align: center"></h1>

        </div>
    </div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-1" style="background: palevioletred">
            <h1 style="text-align: center"></h1>
        </div>
    </div>
</div>
<div id="separadorInferior2">
    <div class="content ">


    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
