@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>El Clima</title>
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
            background: #FDFD96;
        }

        body{

            background: lightblue;

        }

        .card{
            background: #FDFD96;
            border: skyblue 10px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #FDFD96;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: lightblue;
            border: cornflowerblue 10px dashed;

        }

        #color{
            color: #3B5686;

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
            <img class="mx-auto d-block" src="https://i.ibb.co/b5wnxrq/ARc-removebg-preview.png" width="400" />

        </div>
        <div class="col-md-8">
            <h2 id="color" class="text-center"><em><br>¡El Clima!</em></h2>
            <h3 id="color" ><em><br>¿Qué es el clima?</em></h3>
            <p id="color" class="text-center"><em><strong>Entendemos por clima a aquel fenómeno natural que se da a
                        nivel atmosférico y que se caracteriza por ser una conjunción de numerosos elementos
                        tales como la temperatura, la humedad, la presión, la lluvia, el viento y otros.
                    </strong></em></p><br><br><br><br>
        </div>
    </div>
</div>


<!-- contenedor clima-->
<div class="container-fluid  center-block pl-5">
    <div class="row" >
        <div class="col-md-4">
            <h2 class="text-center" id="color"><strong><em>Fenómeno natural de la atmósfera que es el resultado de la interacción de
                        elementos como la lluvia, la presión, la humedad, la temperatura, entre otros.<br>
                        Esa suma de variables atmosféricas y que afectan a una zona geográfica dada se conoce como: ¡clima!</em></strong></h2>
        </div>
        <div class="col-md-8">
            <img id="bor" src="https://i.ibb.co/JypHQj9/unnamed-1.jpg" width="700" height="450"/>
        </div>
    </div>
</div>


<!-- contenedores -->
<div class="container-fluid" id="color"><h2 align="center"><em><br>¡Tipos de clima!</em></h2>
    <div class="row">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/VQP4vNb/nublad-removebg-preview.png" width="260" height="200"/>
            <h5  align="center">Nublado</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="mx-auto d-block " src="https://i.ibb.co/HTSsmc6/dibujos-de-soles-removebg-preview.png" width="260" height="200"/>
            <h5 align="center">Soleado Tropical</h5>
        </div>
        <div class="col-md-4"><br>
            <img  class="mx-auto d-block " src="https://i.ibb.co/ZTTsMpp/lluvios-removebg-preview.png" width="260" height="200"/>
            <h5 align="center">Lluvioso</h5>
        </div>
    </div>
</div>

<!-- contenedor2 de amb-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6"><br>
            <img class="mx-auto d-block " src="https://i.ibb.co/G7mrZcb/vient-removebg-preview.png" width="260" height="200"/>
            <h5 align="center">Viento frio</h5>
        </div>
        <div class="col-md-6"><br>
            <img class="mx-auto d-block " src="https://i.ibb.co/nBj21zj/neva-removebg-preview.png" width="260" height="200"/>
            <h5 align="center">Nieve</h5><br><br><br>
        </div>
    </div>
</div>

<!-- contenedor text-->
<div class="container-fluid  center-block pl-5" id="color">
    <div class="card">
        <div class="row m-3" >
            <div class="col-md-4">
                <img id="bor" src="https://i.ibb.co/KhXk4TZ/met.jpg" width="350" height="250"/>
            </div>
            <div class="col-md-8">
                <h2 class="text-center" id="color"><strong><em>La meteorología, es la ciencia que estudia y predice
                            el clima de acuerdo a los elementos visibles en numerosos tipos de mapas y sistemas de
                            observación planetaria, pero analizando los valores actuales.</em></strong></h2>
            </div>
        </div>
    </div>
</div>


<!-- contenedor sug-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>Observo y aprendo:</em></h2>
    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/wCTtRbH/tropical.jpg" width="300" height="240">
                <h5 class="card-title" align="center">¡Tropical!</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/xgR9zYK/unnamed-removebg-preview-2.png" width="300" height="240">
                <h5 class="card-title" align="center">¡Lluvioso! ¡Soleado!</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/cxrTRNk/nev.jpg" width="300" height="240">
                <h5 class="card-title" align="center">¡Nieve (Frío)!</h5>
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
