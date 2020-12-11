@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Adivinanzas</title>
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
        background: #D8E2F3;
    }

    .card{
        background: #CCEECC;
        border-bottom-left-radius: 50%;
        border: darkgreen 1px solid;


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
        background: #3B5686;
    }

    .navbar{
        background: #3B5686;
    }

    #separadorDePagina{
        background:  #FDFD96;
        border: yellow 8px double;
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
        background: #D8E2F3;

    }

    #dif {
        background: #3B5686;
    }

</style>
</head>
<body>

<!-- navbar-->
@section('content')

<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row">
        <div class="col-md-12" id="fondo" >
            <img src="https://i.ibb.co/PDx7Lhq/unnamed-removebg-preview.png" width="500" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid" >
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/D7KgKLp/hinj-removebg-preview.png" width="340" height="250" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                ¿Qué son las adivinanzas?
                </em></h2>

            <p class="">
                <strong><em>
                        <br>Una adivinanza es una pregunta ingeniosa que se presenta como un juego de palabras en un enunciado,
                        por lo general en forma de rima y plantea un componente educativo. Muchas adivinanzas infantiles
                        cortas tienen el objetivo de transmitir un concepto como pueden ser las de animales o las de frutas y otros objetos.<br>
                    </em></strong> </p>
        </div>
    </div>
</div>
<!-- titulo -->
<div  class="row" style="background: #D8E2F3">
    <div class="col-md-12">
        <h3 align="center">
            <br><em>Tipos de Adivinanzas </em><br><br>
        </h3>
    </div>
</div>



<!-- tarjetas tipos de adivinanzas -->
<div class="container-fluid">
<div class="row" >
    <!-- tarjeta 1 -->
    <div class="col-md-4 pb-5" >
        <div class="card"  style="width: 18rem;" >

            <img src="https://i.ibb.co/j8qn5bF/bhg.jpg" class="card mx-auto d-block" height="150" width="220">
            <div class="card-body">
                <h5 class="card-title" align="center">Adivinanzas de<br>animales</h5>
                <a href="http://learningkidscodigo.test/adivinanzasAnimales" class="btn">Leer</a>
            </div>
        </div>
    </div>


    <!-- tarjeta2 -->
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ibb.co/dKXqK3Z/maxresdefault-1.jpg" class="card mx-auto d-block" height="150" width="220">
            <div class="card-body">
                <h5 class="card-title" align="center">Adivinanzas de<br>frutas</h5>
                <a href="http://learningkidscodigo.test/adivinanzasFrutas" class="btn">Leer</a>
            </div>
        </div>
    </div>
    <!-- tarjeta3 -->
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card mx-auto d-block" height="160" width="220">
            <div class="card-body">
                <h5 class="card-title" align="center">Adivinanzas de<br> números</h5>
                <a href="http://learningkidscodigo.test/adivinanzasNumeros" class="btn">Leer</a>
            </div>
        </div>
    </div>
</div>
</div>

    <!-- Contenedor2 y tarjeta4 -->
    <div class="container-fluid">
        <div class="row">
            <div  class="col-md-6 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ibb.co/hdgRwK2/icon.webp" class="card mx-auto d-block" height="150" width="220">
            <div class="card-body">
                <h5 class="card-title" align="center">Adivinanzas de<br> transportes</h5>
                <a href="http://learningkidscodigo.test/adivinanzasTransportes" class="btn">Leer</a>
            </div>
        </div>
</div>
<!-- tarjeta5 -->

            <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ibb.co/Hpb4517/jghi.jpg" class="card mx-auto d-block" height="150" width="220">
            <div class="card-body">
                <h5 class="card-title" align="center">Adivinanzas<br> cortas</h5>
                <a href="http://learningkidscodigo.test/adivinanzasCortas" class="btn">Leer</a>
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
