@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Seres Vivos</title>
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
            background: #CCEECC;
            border-bottom-left-radius: 50%;
            border: #60A71B 8px solid;

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
            border: #60A71B 5px dotted;

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
            <img src="https://i.ibb.co/qMPwxZL/prin-Seres-removebg-preview.png"  class=" mx-auto d-block" width="430" />
        </div>
    </div>
</div>

<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/P5KyNtJ/img-vi-removebg-preview.png" alt="img-vi-removebg-preview"  width="280" height="200" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Que son los Seres Vivos y Seres no Vivos ?
                </em></h2>

            <p class="text-center">
                <strong><em><br>Un ser vivo u organismo es un conjunto material de organización compleja, en la que intervienen sistemas de comunicación molecular que lo relacionan internamente y con el medio ambiente en un intercambio de materia y energía de una forma ordenada, teniendo la capacidad de desempeñar las funciones básicas de la vida que son la nutrición, la relación y la reproducción, de tal manera que los seres vivos funcionan por sí mismos sin perder su nivel estructural hasta su muerte. <br><br>
                        Un ser no vivo Son seres abióticos o lo que es lo mismo, sin vida. Por ejemplo una piedra no puede reproducirse ni alimentarse, es decir carece de vida. Ejemplos de seres no vivos son las rocas, la madera, el plástico, el agua, los metales, las frutas, el papel, el fuergo, etc.
                    </em></strong> </p>
        </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block" style="background: #FFEECC"><h2 align="center"><em><br>¡Tipos de ser!</em></h2>
    <div class="row">
        <div class="col-xl-6 pb-4">
            <div class="card mx-auto d-block "  style="width: 20rem;">
                <img src="https://i.ibb.co/R9GLKGT/no-vivos-removebg-preview.png" alt="no-vivos-removebg-preview" class="mx-auto d-block"   width="300"  >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Seres no vivos!</h5>
                    <div class="text-center">
                    <a href="http://learningkidscodigo.test/seresNoVivos" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 pb-4">
            <div class="card mx-auto d-block " style="width: 20rem;" >
                <img src="https://i.ibb.co/mBBqQ71/ser-Vivos-removebg-preview.png" alt="ser-Vivos-removebg-preview" class="mx-auto d-block"  width="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Seres Vivos!</h5>
                    <div class="text-center">
                    <a href="http://learningkidscodigo.test/seresVivos"  class="btn">Leer</a>
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
