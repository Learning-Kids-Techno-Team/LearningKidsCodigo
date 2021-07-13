@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Otras Figuras</title>
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
            background: #FF7E5A;
        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background: #d5f5fa;
        }
        h1{
            text-align: center;

        }





        .card{
            background:#d5f5fa;
            border:  #FF7E5A 5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }
        #separadorDePagina {
            background: #d5f5fa;
            border: #FF7E5A 15px double;
        }

        p{
            text-align: center;
        }



        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;

        }
        #player{
            width: 100%;

        }

    </style>
</head>
<body>
<!-- navbar-->
@section('content')


<div class="" style=" background:#FF7E5A;">

<!-- imagen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-md-12" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/8YS23vz/otrasfiguras-removebg-preview-1.png" alt="otrasfiguras-removebg-preview-1"  class=" mx-auto d-block"/>
        </div>
    </div>
</div>
<!-- separador -->
<div class="container-fluid">
    <div id="separadorInferior2">
        <div class="content ">
        </div>
    </div>
</div>
    <div style="color: #D8E2F3;">
        <h1>Otras figuras geométricas </h1>
        <p><strong>Definimos las figuras geométricas como el conjunto de puntos unidos que forman un lugar geométrico, como un punto, una línea, un círculo, un polígono, etc</strong> </p>
    </div>
<!-- tarjetas tipos de triangulo-->
<div  class="container-fluid">
    <div class="row pt-5"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-md-3 p-3 " >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/ys9pK7f/hexagono1-removebg-preview.png" alt="hexagono1-removebg-preview" class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Hexágono:</h1>
                    <h5 class="card-title" align="center">
                        Es una figura geométrica del plano compuesta por seis lados y seis ángulos.
                        <br>
                    </h5>
                </div>
                <audio  id="player" src="Matematica/otras figuras/otra1.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-md-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/NmRf0TJ/1semic-rculo-removebg-preview.png" alt="1semic-rculo-removebg-preview"   class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>  Semicírculo:</h1>
                    <h5 class="card-title" align="center">Figura geométrica formada por la mitad de un círculo.
                        <br>
                    </h5>
                </div>

                <audio  id="player" src="Matematica/otras figuras/otra.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/0By0pR0/octagono-removebg-preview.png" alt="octagono-removebg-preview"  class="card mx-auto d-block"   height="150" width="150">
                <div class="card-body">
                    <h1>Octágono: </h1>
                    <h5 class="card-title" align="center">Es una figura geométrica compuesta por ocho lados y ocho ángulos.</h5>
                </div>
                <audio  id="player" src="Matematica/otras figuras/otra3.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta4 -->
        <div class="col-md-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/mcbkTbJ/circulo-removebg-preview.png" alt="circulo-removebg-preview"  class="card mx-auto d-block"   height="150" width="150">
                <div class="card-body">
                    <h1>Círculo: </h1>
                    <h5 class="card-title" align="center">Figura geométrica delimitada por una circunferencia.</h5>
                </div>
                <audio  id="player" src="Matematica/otras figuras/otra4.mp3" controls >.mp
                </audio>
            </div>
        </div>

        <!-- tarjeta5 -->
        <div class="container-fluid">
            <div class="row pt-3" style="background: #FFCDA0">
                <div class="col-md-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/JQvrX1c/Estrella-removebg-preview.png" alt="Estrella-removebg-preview"   class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1> Estrella: </h1>
                            <h5 class="card-title" align="center"><br><br>Es cualquier objeto con rayos <br>que parten de un centro común.</h5>
                        </div>
                        <audio  id="player" src="Matematica/otras figuras/otra5.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta6 -->
                <div class="col-md-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/JzpVF8T/ovalo-removebg-preview.png" alt="ovalo-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1>Óvalo: </h1>
                            <h5 class="card-title" align="center">Figura geométrica,con dos ejes de simetría perpendiculares, compuesta de varios arcos de circunferencia tangentes entre sí.</h5>
                        </div>
                        <audio  id="player" src="Matematica/otras figuras/otra6.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta7 -->
                <div class="col-md-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/YcC6gqm/cruz-removebg-preview.png" alt="cruz-removebg-preview" class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1> Cruz: </h1>
                            <h5 class="card-title" align="center">  <br><br> Consiste en dos líneas o barras <br>que se cruzan en un ángulo recto.
                                <br></h5>
                        </div>
                        <audio  id="player" src="Matematica/otras figuras/otra7.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta8 -->
                <div class="col-md-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/KmNZmPJ/corazon-removebg-preview.png" alt="corazon-removebg-preview" class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1> Corazón:</h1>
                            <h5 class="card-title" align="center">  <br><br>Un Corazón tiene un total de <br>2 vértices, 2 ángulos y 2 lados.
                                <br></h5>
                        </div>
                        <audio  id="player" src="Matematica/otras figuras/otra8.mp3" controls >.mp
                        </audio>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- separador -->
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
