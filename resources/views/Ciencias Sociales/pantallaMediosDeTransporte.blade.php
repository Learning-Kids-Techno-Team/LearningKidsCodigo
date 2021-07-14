@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Medios de transporte</title>
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
            background: #d5f5fa;
        }


        .card{
            background: #d5f5fa;
            border-bottom-left-radius: 50%;
            border:  #60A71B 8px solid;


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
            background: #B4F97B;
        }



        .navbar{
            background: #60A71B;

        }

        #separadorDePagina{
            background: #B4F97B;
            border: #60A71B 10px dashed;
        }


        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }


        .btn {

            background: #B4F97B;
            border: #60A71B 1px solid;
        }

        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
            background: #d5f5fa;

        }

        #dif {
            background: #60A71B;
        }

        #im {
            border:  #60A71B 5px dotted;

        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row" >
        <div class="col-xl-12" id="fondo">
            <img  class="mx-auto d-block mb-5" src="https://i.ibb.co/Pw6dWRs/tipos-de-transporte-removebg-preview.png"  width="400"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/xYDY0yQ/lpo-removebg-preview.png" width="250" height="200" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Qué son los medios de transporte?
                </em></h2>

            <p class="text-justify">
                <strong><em><br>Transporte es el medio por el cual son trasladados datos, objetos o seres vivos de un lugar a otro. La palabra transporte deriva del latín cuyos compuestos léxicos son el prefijo trans- que indica de un lado a otro y portare que significa llevar. ... El transporte también puede ser hecho por un animal o insecto.
                    </em></strong> </p>
        </div>
    </div>
</div>



<!-- contenedor de las tarjetas -->
<div class="container-fluid pt-5">
    <div class="row" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block"  style="width: 21rem;" >
                <img id="im" src="https://i.ibb.co/bLdqt0n/conjunto-transporte-aereo-74855-420-removebg-preview.png"  width="300" height="230" class="mx-auto d-block" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Aereos!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/aereos') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block"  style="width: 21rem;" >
                <img id="im"class="mx-auto d-block"  src="https://i.ibb.co/Ry7Q40L/embarcaciones-mar-embarcaciones-transporte-maritimo-87946-105-removebg-preview.png"  width="300" height="230"  >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Maritimos!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/maritimos') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block"  style="width: 21rem;" >
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/brvg05d/m1-removebg-preview.png"  width="300" height="230"  >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Terrestres!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/terrestres') }}" class="btn">Leer</a>
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
