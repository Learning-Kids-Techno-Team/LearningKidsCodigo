@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Figuras Geométricas</title>
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
        background: #FF7E5A;
    }
    #separadorDePagina{
        background: #d5f5fa;
        border: #FF7E5A 15px double;

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

<body style="background: #FF7E5A">

<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 p-2" style="background: #f8cfc6" id="fondo" >
            <img   src="https://i.ibb.co/Ytwf03F/doodle-lineas-diferentes-estilos-1639-125-removebg-preview.png"
                   width="300" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid" >
    <div class="row">
        <div class="col-xl-4 p-2">
            <br>
            <img  src="https://i.ibb.co/F0Ct1wn/37538359-muchacho-de-la-historieta-con-un-l-piz-removebg-preview.png"
                  width="200" class="mx-auto d-block "/>
        </div>
        <div class="col-xl-8 p-2">
            <h2 class="text-center" id="cuento">
                ¿Qué son las lineas?
            </h2>
            <p >
                <strong><em>
                        Cualquier línea está compuesta por puntos, que es la unidad mínima. Un punto, decía Euclides, es lo que no tiene dimensión: ni alto, ni ancho, ni profundo. Así que esos puntos solo pueden vivir en la imaginación del que hace las matemáticas, porque son infinitamente pequeños.<br>
                        <br>Una línea está formada por una sucesión de puntos. Estos puntos están tan pegados entre sí que cuando los ves forman un trazo continuo. Ni siquiera poniendo una lupa y acercándonos muchísimo podríamos apreciar que realmente son puntos que se sitúan uno junto a otro, porque los puntos que forman una línea no dejan ningún hueco entre ellos.
                    </em></strong> </p>
        </div>
    </div>
</div>



<!-- tarjetas de tipos de figuras geometricas -->
<div class="container-fluid " style="background: #f8cfc6 ">
    <div class="row ">
        <div class="col-xl-12 p-2 ">
            <h3>Las Lineas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 p-2">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/v3XvfPM/chgvhg.jpg" width="283" >
                <div class="card-body">
                    <h5 class="text-center">Lineas Rectas</h5>
                    <div class="text-center">
                    <a style=" background: #FF7E5A" href=" {{ url('/rectas') }}" class="btn btn-primary">Leer</a>
                    </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-4 p-2 ">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/DCgjPkt/imagddde.jpg" width="280" class="mx-auto d-block">
                <div class="card-body">
                    <h5 class="text-center">Lineas Curvas</h5>
                    <div class="text-center">
                    <a href=" {{ url('/curvas') }}" style=" background: #FF7E5A" class="btn btn-primary">Leer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 p-2">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/z7Gsw75/hgvgx.jpg"    class="mx-auto d-block" width="215">
                <div class="card-body">

                    <h5 class="text-center">Lineas Poligonales</h5>
<div class="text-center">
                    <a href=" {{ url('/poligonales') }}" style=" background: #FF7E5A" class="btn btn-primary">Leer</a>
</div>
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
