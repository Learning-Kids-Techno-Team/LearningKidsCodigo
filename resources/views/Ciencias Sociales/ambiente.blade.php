@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>El Ambiente</title>
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

            background:  #60A71B;

        }


        #separadorInferior .content{

            width: 100%;
            height: 200%;

            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #color{
            color: darkgreen;

        }



        .card{
            background:lightgreen ;
            border-bottom-left-radius: 50%;
            border:#60A71B 6px solid;
            border-top-right-radius: 100px;

        }


        #separadorDePagina{
            background: #FDFD96 ;
            border: tomato 10px dashed;
        }



        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }
        .btn {

            background: tomato;
            border: greenyellow 5px solid;
            color: white;
        }

        #fondo{
            border-bottom-left-radius:20%;
            border-top-right-radius: 20%;



        }
        #im{
            border-top-right-radius: 90px;
            border-bottom-left-radius: 60px;
        }

        .card{
            background: #CCEECC;
            border-bottom-left-radius: 50%;
            border: #60A71B 8px solid;


        }


        .content{

            width: 100%;
            height: 40px;
            margin-left: 0px;
            border-top-left-radius: 60%;
            border-top-right-radius:60%;


        }


        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
            background:#dcfecb ;

        }



    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row" >
        <div class="col-md-12" id="fondo">
            <img  src="https://i.ibb.co/sR75Spn/do-removebg-preview.png" class=" mx-auto d-block" height="500" width="500">
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/4dxbpDV/jls-removebg-preview.png"  width="250" height="200" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Qué es el ambiente?

                </em></h2>

            <p class="text-center">
                <strong><em><br>Es el conjunto de factores externos (atmosféricos, climáticos,
                        hidrológicos, geológicos y biológicos) que actúan sobre un organismo, una población o una comunidad.
                    </em></strong> </p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid   center-block pl-5" style="background: #D2FFB5" ><h2 align="center"><em><br>Tipos de Ambientes</em></h2>
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img id="im" class="mx-auto d-block"  src="https://i.ibb.co/JCP7ZJB/images-2.jpg"  width="460" height="280">
                <div class="card-body">
                    <h5 class="card-title" align="center">Contaminados</h5>
                    <a href=" {{ url('/ambienteContaminado') }}" class="btn">Leer</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-5">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 30rem;">
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/dDn8pMM/5.jpg"  width="460" height="280">
                <div class="card-body">
                    <h5 class="card-title" align="center">No Contaminados</h5>
                    <a href=" {{ url('/ambienteNoContaminado') }}" class="btn">Leer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mt-1">
            <h1 style="text-align: center"></h1>

        </div>
    </div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mt-1">
            <h1 style="text-align: center"></h1>
        </div>
    </div>
</div>

<div id="separadorInferior2">
    <div class="content ">

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
@endsection
