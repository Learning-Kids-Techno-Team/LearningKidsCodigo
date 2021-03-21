@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Frutas y verduras</title>
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
            background: #f9f9f9;
            border-bottom-left-radius: 50%;
            border: black 8px solid;


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
            background: aquamarine;
        }



        .navbar{
            background: aquamarine;

        }

        #separadorDePagina{
            background:  #FDFD96;
            border: yellow 10px dashed;
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
            background: aquamarine ;
        }

        #im {
            border: black 5px dotted;

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
                <img  class=" mx-auto d-block" src="https://i.ibb.co/sHB3gbC/ab-removebg-preview.png">
            </div>
        </div>
    </div>


    <!-- descrpcion -->
    <div id="separadorDePagina" class="container-fluid">
        <div class="row">
            <div class="mx-auto d-block">
                <img  width="330" height="240" class="mx-auto d-block" src="https://i.ibb.co/xYDY0yQ/lpo-removebg-preview.png">
                <h2 class="text-center"><em>Frutas y Verduras en Inglés
                    </em></h2>

                <p class="text-center">
                    <strong><em><br> Aprender los nombres de los vegetales (verduras) y frutas en inglés y español
                            puede ser la oportunidad perfecta para que los niñoss comiencen a probar nuevos tipos de
                            comida. Conocer los diferentes tipos de frutas y verduras no sólo ayuda a enriquecer su
                            vocabulario, también es una forma genial para ayudarles a crear hábitos alimenticios saludables,
                            especialmente al usar actividades donde puedan aprender sobre ellos en inglés mientras van tomándole el gusto a su sabor,
                            por ejemplo, cocinando en familia. <br>
                        </em></strong> </p>
            </div>
        </div>
    </div>




    <!-- contenedor de las tarjetas -->
    <div class="container-fluid  center-block pl-5 d-flex justify-content-center" style="background: #FFEECC"><h2 align="center"><em><br>  </em></h2>
        <div class="row m-5" >
            <div class="col-md-6">
                <div class="card" style="width: 30rem;">
                    <img id="im" class="mx-auto d-block" src="https://i.ibb.co/Fm5X0qY/frtt-removebg-preview.png" width="445" height="250">
                    <div class="card-body">
                        <h5 class="card-title" align="center">¡Fruits - Frutas!</h5>
                        <a href=" {{ url('/frutas') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 ><em><br></em></h2>
                <div class="card" style="width: 30rem;">
                    <img id="im" class="mx-auto d-block" src="https://i.ibb.co/PhSprzv/vegg-removebg-preview.png" width="445" height="250">
                    <div class="card-body">
                        <h5 class="card-title" align="center">¡Vegetables - Vegetales! (verduras)</h5>
                        <a href=" {{ url('/verduras') }}" class="btn">Leer</a>
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


