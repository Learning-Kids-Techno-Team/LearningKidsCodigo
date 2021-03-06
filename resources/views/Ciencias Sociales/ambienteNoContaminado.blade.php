@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>ambiente no contaminado</title>
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
            background: #60A71B;
        }

        body{

            background: #dcfecb;

        }


        .card{
            background: #dcfecb;
            border: darkgreen 10px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: #dcfecb;
            border: darkgreen 10px solid;

        }

        #color{
            color: darkgreen;

        }

    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/Hx99Shk/ju-removebg-preview.png" width="400" />

        </div>
        <div class="col-md-8">
            <h2 id="color" class="text-center"><em><br>¡El Medio Ambiente!</em></h2>
            <h3 class="text-center" id="color"><em><br>Ambiente Libre de Contaminación.</em></h3>
            <p id="color"><em><strong>El ambiente es todo aquello que nos rodea: el cielo, el suelo, el agua, las plantas, los animales
                        y el resto de las personas que se encuentran donde vivimos y conforman nuestro medio ambiente.
                        Es el elemento en el que vivimos y nos desarrollamos.
                    </strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor ambient-->
<div class="container-fluid ">
    <div class="row" >
        <div class="col-md-4">
            <h2 class="text-center" id="color"><strong><em><br><br><br>El ambiente sano es bueno para nuestra salud; por eso es un
                        deber cuidar y conservar el ambiente libre de contaminación.</em></strong></h2>
        </div>
            <div class="col-md-8">
                <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/LtZ5SVZ/bh-removebg-preview.png"  width="400" height="450"/>
            </div>
        </div>
</div>

<!-- contenedores de -->
<div class="container-fluid" id="color"><h2 align="center"><em><br>¡Elementos que encontramos en un ambiente libre de contaminación!</em></h2>
    <div class="row">
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/jZRTXh5/images-arb.jpg" width="260" height="200"/>
            <h5  align="center">Árboles verdes</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/pQcXbLL/co.jpg" width="260" height="200"/>
            <h5 align="center">Agua limpia</h5>
        </div>
        <div class="col-md-4"><br>
            <img  class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/PxszWHy/61ld2-JKg-EL-AC-SX466.jpg" width="260" height="200"/>
            <h5 align="center">Animales sanos</h5>
        </div>
    </div>
</div>

<!-- contenedor2 de amb-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/GcqK8kH/yyy.jpg" width="260" height="200"/>
            <h5 align="center">Aire limpio</h5>
        </div>
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/3cpN20T/zoo.jpg" width="260" height="200"/>
            <h5 align="center">Ambiente sin basura</h5><br>
        </div>
    </div>
</div>

<!-- contenedor-->
<div class="container-fluid " id="color"><h2 class="text-center"><em><br>¡Cuidemos!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/98hvmtH/jhgc-removebg-preview-1.png" width="270"/>
                <h5 class="card-title" align="center">Las plantas</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/k5ZYLVS/ag-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">El agua</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/jWfDcJy/jjj-removebg-preview-1.png" width="230"/>
                <h5 class="card-title" align="center">Los árboles</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor suge-->
<div class="container-fluid" id="color"><h2 class="text-center"><em><br>Observo y aprendo:</em></h2>
    <div class="row" >
        <div class="col-md-4 pb-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/vhGWS2p/fgo.jpg"  width="300" height="240">
                <h5 class="card-title" align="center">Mantengo mi ambiente limpio, deposito la basura en su lugar</h5>
            </div>
        </div>
        <div class="col-md-4 pb-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/bFvHgY9/nu.jpg"  width="300" height="240">
                <h5 class="card-title" align="center">Cuido los animalitos, el agua y el ambiente</h5>
            </div>
        </div>
        <div class="col-md-4 pb-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/KXB4CZ4/sd.jpg" width="300" height="240">
                <h5 class="card-title" align="center">Disfruto nuestro medio ambiente limpio</h5>
            </div>
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
