@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Salud</title>
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

        body {
            background: #FFEECC;
        }


        .card{
            background: #FDFD96;
            border-bottom-left-radius: 50%;
            border: gold 8px solid;


        }


        .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 80%;
            border-top-right-radius:80%;


        }


        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background: #FDFD96;
        }



        .navbar{
            background: #FDFD96;

        }

        #separadorDePagina{
            background: lightblue ;
            border: cornflowerblue 10px dashed;
        }


        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }


        .btn {

            background: #FDFD96;
            border: gold 1px solid;
        }

        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
            background: #FFEECC;


        }

        #dif {
            background: #FDFD96;
        }

        #im {
            border: gold 5px dotted;

        }
        h3{
            text-align: center;
        }



    </style>
</head>
<body>

<!-- navbar -->
@section('content')
<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row" >
        <div class="col-xl-12" id="fondo">
            <img src="https://i.ibb.co/B4VjgMc/uno-removebg-preview.png" class=" mx-auto d-block" width="430"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/xYDY0yQ/lpo-removebg-preview.png" width="250" height="200" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Qué es la salud?
                </em></h2>

            <p class="text-center">
                <strong><em><br>La salud es la condición de todo ser vivo que goza de un absoluto bienestar tanto
                        a nivel físico como a nivel mental y social.<br>
                        El estilo de vida, o sea el tipo de hábitos y costumbres que posee una persona, puede ser
                        beneficioso para la salud, pero también puede llegar a dañarla o a influir de modo negativo sobre ella,
                        causandonos diferentes tipos de enfermedades en nuestro cuerpo.
                    </em></strong> </p>
        </div>
    </div>
</div>

<!-- titulo -->
<div class="container-fluid  center-block ">
    <div  class="row" style="background: #FFEECC">
    <div class="col-xl-12">
        <h3>
            <br><em><br>¡Nuestra Salud!</em><br><br>
        </h3>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block ">
    <div class="row " >

        <div class="col-xl-4 pb-4">
            <div class="card mx-auto d-block" style="width: 21rem;">

                <img id="im" src="https://i.ibb.co/RBx52LQ/hb1-removebg-preview-1.png" width="300" height="230" class="mx-auto d-block" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Normas de Higiéne!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/normas') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 pb-4">
            <div class="card mx-auto d-block" style="width: 21rem;">
                <img id="im" src="https://i.ibb.co/rwCtZPy/resp-removebg-preview-1.png" width="300" height="230" class="mx-auto d-block" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Enfermedades Respiratorias!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/respiratorias') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 pb-4">
            <div class="card mx-auto d-block" style="width: 21rem;">
                <img id="im" src="https://i.ibb.co/dWw7M81/intes-removebg-preview-1.png" width="300" height="230" class="mx-auto d-block" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Enfermedades Intestinales!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/intestinales') }}" class="btn">Leer</a>
                    </div>
                </div>
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
