@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Tiempo</title>
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
        .navbar{
            background:#FF7E5A;
        }

        body{

            background: #FFEECC ;

        }


        .card{
            background: lightblue;
            border: cornflowerblue 5px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #FF7E5A;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }


        #tar2{
            background: cornflowerblue;
            border: lightblue 12px dotted;

        }

        #tar3{
            background: lightblue;
            border: cornflowerblue 5px solid;

        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor Concepto-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-xl-4 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/gz1sCPM/gu-removebg-preview.png"
                 width="350" />

        </div>
        <div class="col-xl-8 p-2">
            <h2 class="text-center"> <br>¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center">Reconozco el tiempo.</h3>
            <p class="text-justify"><strong>
                        El tiempo se vincula a un período determinado durante el que se
                        realiza una acción o se desarrolla un acontecimiento.
                    </strong></p>
        </div>
    </div>
</div>

<!-- contenedores de el sol y luna-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/hmGQWp5/ded.png" width="200"/>
        </div>
        <div class="col-xl-6 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/TLWBKjp/noch.png" width="280"/>
        </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid">
    <div class="row " >
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¡Observo y analizo!</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/kmJsKCR/gictor.jpg"
                     width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Día!</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¡Tiempo!</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/R0xPzDT/feliz.jpg"
                     width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Noche!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor video-->
<div class="container-fluid" ><h2 align="center"><br>¡Veamos juntos lo que hacemos en el día y la noche!</h2>
    <div class="row">
        <div class="col-xl-12 p-2">
            <iframe id="tar2" class="mx-auto d-block"
                    src="https://drive.google.com/file/d/1B9A4Rhj97fkbaLbP9QnpMOp2vn3oHLf-/preview"
                    width="350" ></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor-->
<div class="container-fluid " ><h2 class="text-center"><br>¡Actividades del día!</h2>
    <div  class="card mx-auto d-block">
        <div class="row " >
            <div  class="col-xl-4 p-2">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/mNCKKB7/scol.jpg"
                     width="250" />
                <h5 class="card-title" align="center">Vamos a la escuela</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/J7dMmpv/vector9.jpg"
                     width="250"/>
                <h5 class="card-title" align="center">Recibimos clases</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/XC4fsYR/comer.jpg" width="250"/>
                <h5 class="card-title" align="center">Comemos</h5>
            </div>

        </div>

    </div>
</div>

<!-- contenedor objet-->
<div class="container-fluid"><h2 class="text-center"><br>¡Otras Actividades!</h2>
    <div class="row ">
        <div class="col-xl-3 p-2">
            <br><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/09x3v35/chic-removebg-preview.png" width="200"
               >
            <h5 class="card-title" align="center" >Desayunar</h5>
        </div>
        <div class="col-xl-3 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/ZmTFcDP/ooo-removebg-preview.png" width="250"
                 >
            <h5 class="card-title" align="center">Vestirte</h5>
        </div>
        <div class="col-xl-3 p-2">

            <img class="mx-auto d-block" src="https://i.ibb.co/X5YzQ5P/jhgc-removebg-preview.png"
                 width="270" >
            <h5 class="card-title" align="center">Regar las plantas</h5>
        </div>
        <div class="col-xl-3 p-2">
            <br>
            <img class="mx-auto d-block" src="https://i.ibb.co/qkLMVMg/di66-removebg-preview.png" width="250"
               >
            <h5 class="card-title" align="center">Compartir con mis amiguitos</h5>
        </div>
    </div>
</div>

<!-- contenedor de calendario-->
<div class="container-fluid ">
    <h2 class="mx-auto d-block text-center"><br>¡Calendario!</h2>
    <div class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-6 p-2">
                <br><br>
                <img id="tar2" class="mx-auto d-block" src="https://i.ibb.co/vwBpLP6/oid.jpg" width="300"/>
                <h5 class="card-title" align="center"></h5>
            </div>
            <div class="col-xl-6 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/hXySzsP/sst-removebg-preview.png"
                     width="250"/>
                <h5 id="color" class="card-title" align="center">SEMANA, MES Y AÑO</h5><br><br>
            </div>
        </div>
    </div>
</div>

<!-- contenedor video calendario-->
<div class="container-fluid" ><h2 align="center"><br>¡Cantemos juntos y aprendamos el calendario!</h2>
    <div class="row">
        <div class="col-xl-12 p-2">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1U4eAkx77iCq_UOy6-StJp_JV_Rii7CTn/preview"
                    width="300" ></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>


<!-- separador -->
<div id="separadorInferior">
    <div class="content">
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
