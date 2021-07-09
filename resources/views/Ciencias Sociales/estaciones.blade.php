@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">


    <title>Estaciones del Año</title>
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

            background: #dcfecb;

        }


        .card{
            background: #bce0ee ;
            border: #FDFD96 15px dotted;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: #bce0ee ;
            border: #FDFD96 10px solid;

        }

        #color{
            color: darkgreen;

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
            <img class="mx-auto d-block" src="https://i.ibb.co/YkJqSNj/guja-removebg-preview.png" width="350" />

        </div>
        <div class="col-md-8">
            <h2 id="color" align="center"><em><br>¡Las estaciones del año!</em></h2>
            <h3 id="color" align="justify"><em><br>Las estaciones del año son los cuatro periodos en los cuales
                ciertas condiciones climáticas se mantienen durante aproximadamente
                tres meses cada una y se denominan: primavera, verano, otoño e invierno.</em></h3>
        </div>
    </div>
</div>


<!-- contenedor images otoño, primaver-->
<div class="container-fluid" id="color"><h2><em><br>¡Encuentra diferencias entre las ilustraciones!</em></h2>
    <h3><em>¡Repito en voz alta cual de las ilustraciones se
            parece a estos días!</em></h3>
        <div class="row ">
            <div class="col-mx-6 mx-auto d-block">
                <h5  align="center">Otoño</h5>
                <img id="bor" class="rounded-circle mx-auto d-block" src="https://i.ibb.co/g4bRyJP/ninos.jpg"  width="400" height="300"/>
            </div>
            <div class="col-mx-6 mx-auto d-block">
                <h5  align="center">Primavera</h5>
                <img id="bor" class="rounded-circle mx-auto d-block" src="https://i.ibb.co/MZVPjtW/este.jpg"  width="400" height="300"/>
            </div>
        </div>
</div>

<!-- contenedor images verano, invierno-->
<div class="container-fluid " id="color">
        <div class="row ">
            <div class="col-mx-6 mx-auto d-block">
                <h5  align="center">Verano</h5>
                <img id="bor" class="rounded-circle mx-auto d-block" src="https://i.ibb.co/F41J6c4/vera.jpg" width="400" height="300"/>
            </div>
            <div class="col-mx-6 mx-auto d-block">
                <h5  align="center">Invierno</h5>
                <img id="bor" class="rounded-circle mx-auto d-block" src="https://i.ibb.co/Z2j5fNd/ind.jpg" width="400" height="300"/>
            </div>
        </div>
</div>

<!-- contenedor text-->
<div class="container-fluid " id="color">
    <div class="card mx-auto d-block">
        <div class="row m-3">
            <div class="col-mx-4">
                <img src="https://i.ibb.co/rcQ5tbq/nnk-removebg-preview.png" width="350" height="250"/>
            </div>
            <div class="col-md-8 mx-auto d-block">
                <h2 class="text-justify" id="color"><br><strong><em>Clima: </em></strong><em> Es el conjunto de condiciones atmosféricas
                        de una comunidad o región. Se producen cambios en las condiciones del clima que el hombre
                        no puede evitar.</em></h2>
            </div>
        </div>
    </div>
</div>
<!-- contenedor otoño-->
<div class="container-fluid ">
    <div class="row">
        <div class="col-mx-6 mx-auto d-block">
            <h2 class="text-justify mx-auto d-block" id="color"><em><br><br><br>Hay épocas que no llueve y algunos árboles
                    botan sus hojas, entonces es </em><strong><em>otoño.</em></strong></h2>
            <img class="mx-auto d-block"  src="https://i.ibb.co/9sydVpq/hojasgif.gif" width="200" height="100" />
        </div>
        <div class="col-mx-6 mx-auto d-block"><br><br><br>
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/z70g4w7/qe.jpg" width="350" height="250"/>
        </div>
    </div>
</div>
<!-- contenedor primave-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mx-auto d-block">
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/4KX9XVs/pri.jpg" width="350" height="250"/>
        </div>
        <div class="col-md-6">
            <h2 class="text-justify" id="color"><em><br><br><br>Hay un periódo del año en que los árboles empiezan a renovar sus hojas y florecen, entonces es </em><strong><em>primavera.</em></strong></h2>
            <img class="mx-auto d-block" src="https://i.ibb.co/YWw4M89/maripgif.gif" width="200" height="100"/>
        </div>
    </div>
</div>
<!-- contenedor verano-->
<div class="container-fluid">
    <div class="row" >
        <div class="col-md-6 mx-auto d-block">
            <h2 class="text-justify mx-auto d-block" id="color"><em><br><br><br>Cuando se produce calor, decimos
                    que estamos en </em><strong><em>verano.</em></strong></h2>
            <img class="mx-auto d-block" src="https://i.ibb.co/0yNLdnJ/gif.gif" width="200" height="100"/>
        </div>
        <div class="col-md-6 mx-auto d-block"><br><br><br>
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/nLqH4jL/veran.jpg" width="350" height="250"/>
        </div>
    </div>
</div>

<!-- contenedor invierno-->
<div class="container-fluid  ">
    <div class="row" >
        <div class="col-md-6 mx-auto d-block"><br><br><br>
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/8PgsYL6/dnn.jpg" width="350" height="250"/>
        </div>
        <div class="col-md-6 mx-auto d-block">
            <h2 class="text-justify" id="color"><em><br><br><br>Otras veces llueve mucho, lo que
                    indica que estamos en </em><strong><em>invierno.</em></strong></h2>
            <img class="mx-auto d-block" src="https://i.ibb.co/j5VbXWb/gifgotas.gif" width="200" height="100"/>
        </div>

    </div>
</div>

<!-- contenedor text-->
<div class="container-fluid ">
    <div class="row" >
        <div class="col-md-12">
            <h2 class="text-justify" id="color"><br><em>Actualmente el clima ha variado mucho debido a la destrucción
                    de los bosques, los incendios o por la tala o corte de los árboles, lo cual produce <strong>escasez</strong> de
                    lluvia y aumento de calor. Si las autoridades y todos nosotros no nos preocupamos por evitar
                        la destrucción del bosque, las futuras generaciones no tendrán agua ni para tomar.</em><br></h2>

            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/mcGzYsH/air.jpg" width="600" height="350"/>
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
