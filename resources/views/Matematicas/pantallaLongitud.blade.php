@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La longitud</title>
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
            <img src="https://i.ibb.co/zS3dKTN/long1-removebg-preview.png"   height="400" width="650" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid" >
    <div class="row">
        <div class="col-md-4 mt-5">
            <img src="https://i.ibb.co/Fw4jCJ5/longuitud-removebg-preview.png"  width="500" class="mx-auto d-block "/>
        </div>
        <div class="col-md-8">
            <h2 class="text-center" id="cuento">
                ¿Que es la longitud?
            </h2>
            <p >
                <strong><em>
                        La longitud es un concepto métrico definible para entidades geométricas sobre las que se ha definido una distancia. <br>Más concretamente, dado un segmento, curva o línea fina, se puede definir su longitud a partir de la noción de distancia. <br>Determina la distancia que hay entre dos puntos, o dicho de otra manera, longitud es la cantidad de espacio que hay entre dos puntos. Por ejemplo, la distancia que hay entre mi casa y el colegio, o la distancia de un extremo de la mesa al otro. <br>La unidad principal para medir la longitud es el metro.
                    </em></strong> </p>
        </div>
    </div>
</div>








<!-- tarjetas de tipos de figuras geometricas -->
<div class="container-fluid pb-5 " style="background: #f8cfc6 ">
    <div class="row">
        <div class="col-md-12 pb-3">
            <h3>La longitud</h3>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-md-6  ">
            <div class="card mx-auto d-block" style="width: 18rem; background: #d5f5fa">
                <img src="https://i.ibb.co/dkV8L43/largo-corto.jpg"  width="285" style="border-bottom-left-radius: 30% ">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">Unidades de Longitud</h5>
                    <a href="http://learningkidscodigo.test/unidadLongitud" style=" background: #FF7800" href="" class="btn btn-primary">Leer</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card mx-auto d-block" style="width: 18rem; background: #d5f5fa">
                <img src="https://i.ibb.co/g6JY8p6/medidas.jpg"  width="285"  alt="..." style="border-bottom-left-radius: 5% ">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">Medir con las partes del cuerpo</h5>
                    <a href="http://learningkidscodigo.test/unidadCorporal#" style=" background: #FF7800" class="btn btn-primary">Leer</a>
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
