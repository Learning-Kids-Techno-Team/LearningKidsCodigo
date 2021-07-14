@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Lineas Rectas</title>
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
            border:  #3B5686 5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }
        #separadorDePagina {
            background: #d5f5fa;
            border: #FDFD96 15px double;
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
<body style=" background: #FF7E5A;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-xl-12 p-2" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/8sx4w39/rectas-removebg-preview.png" width="300"
                  class=" mx-auto d-block"/>
        </div>
    </div>
</div>

<!-- titulo de las categorias-->
<div style="color: #D8E2F3;">
    <h1>Lineas rectas  paralelas</h1>
</div>

<!-- tarjetas lineas-->
<div class="container-fluid">
    <div class="row"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-xl-6 p-3" >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/DL2c4D1/horizontal-line-removebg-preview.png"
                    class="card mx-auto d-block"
                      width="200">
                <div class="card-body">
                    <h1>Horizontal:</h1>
                    <h5 class="card-title" align="center">Es aquella cuya trayectoria representa el sentido del horizonte tal cual lo percibimos. Se desplaza de derecha a izquierda y viceversa, <br>siendo además perpendicular (en ángulo de 90º) a la línea vertical.
                        <br>
                    </h5>
                </div>
                <audio  id="player" src="Matematica/Lineas Rectas/linea1.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/cQPRP8y/vertical-line-removebg-preview.png"
                     class="card mx-auto d-block"    width="200">
                <div class="card-body">
                    <h1> Vertical:</h1>
                    <h5 class="card-title" align="center">Es perpendicular a la horizontal que es a su vez paralela al horizonte terrestre. Simplemente una vertical es de arriba abajo <br>o a la inversa y horizontal es de derecha a izquierda o a la inversa.
                        <br>
                    </h5>
                </div>
                <audio  id="player" src="Matematica/Lineas Rectas/linea2.mp3" controls >.mp
                </audio>
            </div>
        </div>

        <!-- tarjeta3 -->
        <div  class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-info mb-5">
                    <h1 style="text-align: center">Líneas rectas Perpendiculares: </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="background: #FFCDA0">
                <div class="col-md-6 pb-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/C2VjpCX/perpendicular1-removebg-preview.png" alt="perpendicular1-removebg-preview" class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h2>Perpendicular:</h2>
                            <h5 class="card-title" align="center">Es cuando una línea corta a otra por la mitad formando un ángulo recto el cual mide 90°. </h5>
                        </div>
                        <audio  id="player" src="Matematica/Lineas Rectas/linea3.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta4 -->
                <div class="col-md-6 pb-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/6m0Q24B/Perpendiculares-removebg-preview.png" alt="Perpendiculares-removebg-preview"   class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h2>Perpendicular:</h2>
                            <h5 class="card-title" align="center">Es cuando una línea corta a otra por la mitad formando un ángulo recto el cual mide 90°.</h5>
                        </div>
                        <audio  id="player" src="Matematica/Lineas Rectas/linea3.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta5 -->
                <div  class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 bg-info p-2">
                            <h1 style="text-align: center">Líneas rectas Secantes: </h1>
                        </div>
                    </div>
                </div>
                <div  class="container-fluid">
                    <div class="row" style="background: #FFCDA0">
                        <div class="col-xl-6 p-3">
                            <div class="card mx-auto d-block" style="width: 18rem;">
                                <br>
                                <img src="https://i.ibb.co/VqBFMH8/secante2-removebg-preview.png" alt="secante2-removebg-preview" class="card mx-auto d-block"  height="150" width="200">
                                <div class="card-body">
                                    <h1>Secante:</h1>
                                    <h5 class="card-title" align="center">Es aquella que corta otra recta o una curva. Puede decirse que dos rectas son secantes cuando disponen de un punto en común (aquel en el que se cruzan).  </h5>
                                </div>
                                <audio  id="player" src="Matematica/Lineas Rectas/linea4.mp3" controls >.mp
                                </audio>
                            </div>
                        </div>
                        <!-- tarjeta6 -->
                        <div class="col-xl-6 p-3">
                            <div class="card mx-auto d-block" style="width: 18rem;">
                                <br>
                                <img src="https://i.ibb.co/DrLnSs3/secante1-removebg-preview.png" alt="secante1-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                                <div class="card-body">
                                    <h1>Secante:</h1>
                                    <h5 class="card-title" align="center">Es aquella que corta otra recta o una curva. Puede decirse que dos rectas son secantes cuando disponen de un punto en común (aquel en el que se cruzan). </h5>
                                </div>
                                <audio  id="player" src="Matematica/Lineas Rectas/linea4.mp3" controls >.mp
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- separador -->
    <div id="separadorInferior2">
        <div class="content ">

        </div>
</div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
