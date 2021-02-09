@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Figuras Geometricas</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

    .card{
        border-bottom-left-radius: 50%;
        ;
    }


    #separadorInferior2 .content{

        width: 100%;
        height: 100px;
        margin-left: 0px;
        border-bottom-left-radius:80%;
        border-top-right-radius: 80%;
        background: #d5f5fa;
    }

    .navbar{
        background: #FF7800;
    }
    #separadorDePagina{
        background: #d5f5fa;
        border: #FF7800 15px double;

    }
    p{
        margin-left:15%;
        margin-right: 15%;
        text-align: justify;
        font-style: italic;

    }
    #fondo{
        border-bottom-left-radius:50%;
        border-top-right-radius: 50%;

    }
     h3 {
         text-align: center;
     }


</style>
</head>

<body style="background: #FF7800">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: #f8cfc6" id="fondo" >
            <img   src="https://i.ibb.co/sv6dsyj/maxresdefault-removebg-preview.png"   height="500" width="800" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid" >
    <div class="row">
        <div class="col-md-4 mt-5">
            <img  src="https://i.ibb.co/2jG39ht/msaxresdef2ault-removebg-preview.png" width="500" class="mx-auto d-block "/>
            </div>
            <div class="col-md-8">
            <h2 class="text-center" id="cuento">
                ¿Que son las figuras geometricas?
            </h2>
            <p >
                <strong><em>
                        Las figuras geométricas se define como un conjunto no vacío que está compuesto por puntos y comprendidas como un lugar geométrico es un área cerrada por líneas o superficies, ya sea en un plano o en el espacio.<br>
                     <br>   Las figuras geométricas son: planas y sólidas. Las figuras geométricas planas son aquellas con dos o tres dimensiones respectivamente, se forman con la combinación de otras figuras geométricas más elementales y de menos dimensiones como la línea o el punto. Las figuras geométricas sólidas son aquellas con volumen y por lo tanto tridimensionales.
                    </em></strong> </p>
    </div>
    </div>
</div>








<!-- tarjetas de tipos de figuras geometricas -->
    <div class="container-fluid pb-5 " style="background: #f8cfc6 ">
        <div class="row">
            <div class="col-md-12 pb-3">
                <h3>Figuras Geometricas</h3>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2020/06/04/13/22/triangle-5258735_960_720.png" width="210" >
                    <div class="card-body">
                        <h5 class="card-title">Triangulo</h5>

                        <a style=" background: #FF7800" href=" {{ url('/TiposDeTriangulos') }}" class="btn btn-primary">Leer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2020/06/04/13/22/square-5258734_960_720.png" width="300" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cuadrado</h5>
                        <a href=" {{ url('/TipoDeCuadrilatero') }}" style=" background: #FF7800" class="btn btn-primary">Leer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ibb.co/4YyK2hd/conjunto-formas-geometria-matematica-1639-6401-removebg-preview.png"   class="card-img-top" alt="...">
                    <div class="card-body">
                        <br>
                        <br>
                        <br>
                        <h5 class="card-title">Otras Figuras</h5>

                        <a href=" {{ url('/OtrasFiguras') }}" style=" background: #FF7800" class="btn btn-primary">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div  id="separadorInferior2">
    <div class="content ">

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
