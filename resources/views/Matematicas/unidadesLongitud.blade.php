@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Unidades de Longitud</title>
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

        body{

            background: #FFC897;

        }
        #banderin{

            margin-bottom: auto;


            height: 140px;

        }


        .card{
            background: #DCFECB;
            border:green 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }


        #pa{
            text-align: justify;


        }

        #color{
            color: white;
            height: 80px;



        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;

            background: #FF7E5A;
        }
        p{
            text-align: center;

        }
        .card-title{
            color: indianred;
            text-align: center;


        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;

            background: #FF7E5A;
        }
        #titulo{
            text-align: center;
            color: red;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
        }
        #borde{
            border: green 8px dotted;
        }

        #color{
            color: green;
        }


    </style>

</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->


        <div class="container-fluid mt-5"  >
            <div class="row">
                <div class="col-xl-12 p-2"  >
                    <div class="row ml-5 mr-5" id="borde">
                        <div class="col-xl-4 p-2 bg-success " >
                            <img  src="https://i.ibb.co/6mQGrhT/el-gabinete-de-madera-con-los-juguetes-mide-el-crecimiento-del-ni-o-72601700-removebg-preview-1.png"  height="400">
                        </div>
                        <div class="col-xl-8 p-2" style=" background: #DCFECB;"  >
<br>
                            <h3 class="text-center" style="text-align: center">Longitud</h3>
                            <p class="text-justify" >
                                <br>
                                <strong>La longitud determina la distancia que hay entre dos puntos, o dicho de otra manera, longitud
                                    es la cantidad de espacio que hay entre dos puntos.<br>
                                    La unidad principal para medir la longitud es el metro.
                                    Corresponden a unidades de medida que sirven para saber cuán largo es un objeto.<br><br>
                                    En la vida cotidiana la longitud la utilizamos para medir tu estatura, las dimensiones de un cuaderno o lápiz, para medir las puertas o ventanas, etc.
                                    Masa: Al comprar productos para hacer la comida, para medir tu peso, etc.
                                    Temperatura: Al hervir agua, al ponerse el termómetro para ver si tienes fiebre, regular la temperatura del agua para bañarse, etc.

                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<br><br>
            <h1 class="text-center" >Tipos de Longitud</h1>
            <h1 class="text-center">Longitud de medición</h1>
<br>





<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img  src="https://i.ibb.co/XDKRWj0/metroo.jpg"    class=" mx-auto d-block"
                      width="300" >
                <div class="card-body">
                    <br>
                    <h5 class="text-center">Metro</h5>

                    <p><strong>El metro (símbolo m).<br>
                            Es la unidad principal de unidades de longitud del Sistema Internacional de Unidades.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6  p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/Fm71cSm/ilustracion-man.jpg"
                     width="300">
                <div class="card-body">

                    <h5 class="text-center">Centímetro</h5>
                    <p><strong>El centímetro (símbolo cm) es una unidad de longitud.
                            </strong></p>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="container-fluid"  >
    <div class="row " >
        <div class="col-xl-12 p-2">
            <br>
            <h1 class="text-center">Longitud de peso/masa</h1>


        </div>
    </div>
</div>
<div class="container-fluid" >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/yn0HR78/ma.jpg"   class=" mx-auto d-block" width="300"  >
                <div class="card-body">
                    <br>
                    <h5 class="text-center">La libra</h5>
                    <p><strong><br>
                            La libra (lb) actualmente es una unidad de masa, usada desde la Antigua Roma como unidad de peso.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6 p-2 ">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/sgshyB4/k.jpg"   width="300" >
                <div class="card-body">
                    <h5 class="card-title">Kilogramo</h5>

                    <p><strong>El kilogramo, cuyo símbolo es kg.<br>
                            El kilogramo es una unidad de medición
                            </strong></p>
                </div>
            </div>
        </div>


    </div>
</div>

<br>
            <h1 class="text-center" >Temperatura</h1>



<div class="container-fluid" >
    <div class="row " >
        <div class="col-xl-12 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img   src="https://i.ibb.co/4SB2wNf/cal.jpg"   class=" mx-auto d-block" width="300"
                        >
                <div class="card-body">
                    <h5 class="text-center">Temperatura</h5>
                    <p><strong>
                            La temperatura es una magnitud física que
                            indica la energía interna de un cuerpo, de un objeto o del medio
                            ambiente en general, medida por un termómetro.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid " id="banderin" >
    <div class="row pt-5" >
        <div class="col-md-12">
            <img  src="https://i.ibb.co/vZNvgyG/ima-removebg-preview.png"  height="150">

        </div>


    </div>
</div>

<div id="separadorInferior2">
    <div class="content ">
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
