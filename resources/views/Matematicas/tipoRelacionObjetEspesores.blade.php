@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Espesores</title>
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
            background:#FF7800;
        }

        body{

            background: #FFEECC;

        }


        .card{
            background: #FDFD96;
            border: gold 5px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #FF7800;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #tar2{
            background: gold ;
            border: #FDFD96 12px dotted;


        }



    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concep-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/J7z9d3G/6eb1-removebg-preview.png" width="280" />

        </div>
        <div class="col-md-8">
            <br>
            <h2 class="text-center">¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center">Distingo espesores.</h3>
            <p class="text-justify"><strong>
                        Los espesores se vinculan a que tan grueso o delgado resulta un objeto.
                        Persona o animal fisicamente (gordo o flaco) en relacion de otro.
                    </strong></p><br><br>
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid"  >
    <div class="row">
        <div class="col-xl-12 " >

            </div> <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1QtyXDhPsS5RCn4E0xyD_nZTLrCHzuxg3/preview"
                           width="400" height="300" ></iframe>

            </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid " >

    <h2 class="text-center"><br>¡Observo y aprendo!</h2>
    <br>
    <div class="row " >
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width:20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/5RNKHrq/book-removebg-preview.png"
                     width="200"><br>
                <p align="center"><strong>Grueso</strong></p>

                <img class="mx-auto d-block" src="https://i.ibb.co/jyKGv8Z/tration-removebg-preview.png"
                     width="200"><p align="center"><strong>Delgado</strong></p>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/Ksws8bm/9a55-removebg-preview.png"
                     width="180" >
                <p align="center"><strong>Grueso</strong></p>

                <img class="mx-auto d-block" src="https://i.ibb.co/F5qZqw2/lap348-removebg-preview.png"
                     width="200" ><p align="center"><strong>Delgado</strong></p>
                <div class="card-body">
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de las tarjetas -->
<div class="container-fluid  ">
    <div class="row " >
        <div class="col-xl-6 p-5">
            <h2 class="text-center"> <em><br>¡Observo y analizo!</em></h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/YhJ6cgR/ni-o-removebg-preview.png"
                     width="200" >
                <div class="card-body">
                <p class="text-center"><strong> Gordo - Flaco </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <h2 class="text-center"><br>¡Aprendo!</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/SJf1qTn/torno-removebg-preview.png"
                     width="200">
                <div class="card-body">
                    <p class="text-center"><strong> Gordo - Flaco </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de tarjetas -->
<div class="container-fluid  id="color">
    <div class="row " >
        <div class="col-xl-6">
            <h2 class="text-center" id="color">¿Cuál es más gordo?</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
<br>
                <img class="mx-auto d-block" src="https://i.ibb.co/93xDC7Q/pez-removebg-preview.png"
                     width="220" >
                <br>
                <div class="card-body">
                    <p class="text-center"><strong>Pez 1- Pez 2</strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6">

            <h2 class="text-center" id="color">¡Repite en voz alta!</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br><br>
                <img class="mx-auto d-block" src="https://i.ibb.co/sKHTNFt/gordo-flaco1-removebg-preview.png"
                     width="279" >
                <div class="card-body">
                    <br>
                    <p class="text-center"><strong> Gato 1 - Gato 2 </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de las tarjetas -->
<div class="container-fluid  id="color" >
    <div class="row " >
        <div class="col-xl-6">
            <h2 class="text-center" id="color"><br>Responde en voz alta:</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/HVT42Dw/535-removebg-preview.png"
                     width="200" >
                <div class="card-body">
                    <h5 class="card-title; text-center">Mesa 1</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <br>
            <h2 class="text-center" id="color">¿Cuál mesa es más gruesa?</h2>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/r7LbySg/png-removebg-preview.png"
                     width="200" >
                <div class="card-body">
                    <h5 class="card-title; text-center">Mesa 2</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
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
