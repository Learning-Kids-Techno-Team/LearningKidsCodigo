@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Posiciones</title>
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
            background: #FDFD96;
            border: gold 15px dotted;

        }



    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-xl-4 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/SrpcJKJ/dib-removebg-preview-1.png" width="350" />

        </div>
        <div class="col-xl-8 p-2">
            <h2 class="text-center"> <br>¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center" > Reconozco posiciones.</h3>
            <p class="text-justify"><strong>
                        El significado de posición vincula a la postura corporal (de pie, hacia la derecha, izquierda, sentado, etc.)...
                        Posición viene del latín positio, que significa ubicación.
                    </strong></p><br><br>
            <img class="mx-auto d-block"  width="100" />
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-12 p-2" >
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1XQ_JQEh0f-LLLNQE6bkvR7YjHTj3tGad/preview"
                    width="400" ></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de Imagenes-->
<div class="container-fluid" ><br><h2 class="text-center">Observo y aprendo: </h2>
    <h2 class="text-center">¡Posiciones!</h2>
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block"  style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/0m4yVQL/images-2-removebg-preview.png"
                     width="200">
                <h5 class="card-title" align="center">Izquierda</h5>
            </div>
        </div>

        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/WfHyJwP/nin-removebg-preview.png"
                     width="167" >
                <h5 class="card-title" align="center">Derecha</h5>
            </div>
        </div>
    </div>
</div>
<!-- contenedor -->
<div class="container-fluid" ><h2 class="text-center"><br>¡Repito!</h2>
    <div class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/ygc9x4z/mjj-removebg-preview.png"
                     width="200"/>
                <h5 class="card-title" align="center">Izquierda</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/crthqGt/ppk-removebg-preview.png"
                     width="200"/>
                <h5 class="card-title" align="center">El niño tiene helados en sus manos: Derecha e Izquierda</h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/mC6285T/s511-removebg-preview.png"
                     width="200"/>
                <h5 class="card-title" align="center">Derecha</h5>
            </div>
        </div>

    </div>
</div>
<!-- contenedor -->
<div class="container-fluid  " ><h2 class="text-center"><br>¡Analizo y aprendo!</h2>
    <div class="card mx-auto d-block">
        <div class="row" >
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/0MYVcvB/ilus-removebg-preview-1.png"
                     width="200"/>
                <h5 class="card-title" align="center"></h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/3RxVJvC/derecha-removebg-preview.png"
                     width="200"/>
                <h5 class="card-title" align="center"></h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/YZxxg9c/ilustrac-removebg-preview.png"
                     width="200"/>
                <h5 class="card-title" align="center"></h5>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  " ><h2 class="text-center"><br>¡Respondo en voz alta!</h2>
    <div class="row ">
        <div class="col-xl-3 p-2">
            <br>
            <img  class="mx-auto d-block" src="https://i.ibb.co/v150nc4/4871-removebg-preview.png"
                  width="214">
            <h5 class="card-title" align="center">¿En que lado tiene la niña su oso?</h5>
        </div>
        <div class="col-xl-3 p-2">
            <br>
            <img  class="mx-auto d-block" src="https://i.ibb.co/myY6LCc/sss-removebg-preview.png"
                  width="220" >
            <h5 class="card-title" align="center">¿Que lado señala el niño?</h5>
        </div>
        <div class="col-xl-3 p-2">
            <img  class="mx-auto d-block" src="https://i.ibb.co/RyZcYqf/ayhk-removebg-preview.png"
                  width="220" >
            <h5 class="card-title" align="center">¿En que lado sostiene la niña su estrella?</h5>
        </div>
        <div class="col-xl-3 p-2">
            <br><br>
            <img  class="mx-auto d-block" src="https://i.ibb.co/jk29TJ4/Circo-removebg-preview.png"
                  width="249">
            <h5 class="card-title" align="center">¿Que sostiene el payasito con su mano izquierda?</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
        </div>
    </div>
</div>

<!-- contenedor -->
<div class="container-fluid ">

    <div class="row ">
        <div class="col-xl-4 p-2">

            <h2 class="text-center" >¡Izquierda  y derecha!</h2>
            <div class="card mx-auto d-block" style="width: 15rem;">
                <img class=" mx-auto d-block" src="https://i.ibb.co/1MgsHWJ/hh.jpg" width="228"
                >
            </div>
        </div>

        <div class="col-xl-4 p-2">

            <h2 class="text-center" >¡En direcciones!</h2>
            <div class="card mx-auto d-block" style="width: 15rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/9VLzwhQ/IZQ-DER.jpg" width="228"

                    >
            </div>
        </div>
        <div class="col-xl-4 p-2">
            <h2 class="text-center">¡Posiciones!</h2>
            <div class="card mx-auto d-block" style="width: 15rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/drYGBkJ/unnamed-1.jpg"
                     width="228" >
            </div>
        </div>
    </div>
</div>

<br><br>
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
