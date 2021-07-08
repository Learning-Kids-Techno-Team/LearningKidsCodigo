@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Tipos de triangulos</title>
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
            background: #FF7800;
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
            border:  #FF7800 5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }
        #separadorDePagina {
            background: #d5f5fa;
            border: #FF7800 15px double;
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
<body style=" background: #FF7800;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-md-12" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/RP5KYWw/triangulos-removebg-preview.png" alt="triangulos-removebg-preview"    class=" mx-auto d-block"/>
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
<!-- titulo de las triangulo-->
<div style="color: #D8E2F3;">
    <h1>Tipos de Triángulo según sus lados </h1>
</div>

<!-- tarjetas tipos de triangulo-->
<div class="container-fluid ">
    <div class="row pt-5"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-md-4 p-4" >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/M6jKgcd/equilatero-2-removebg-preview.png" alt="equilatero-2-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Equiláteros:</h1>
                    <h5 class="card-title" align="center"> <br>Un triángulo equilátero tiene tres lados de igual longitud, por lo que es un un polígono regular.
                        <br>Los ángulos en un triángulo equilátero también son iguales (60º cada uno).
                        <br>
                    </h5>
                </div>
                <audio  id="player" src="Matematica/Triangulos/triangulo1.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-md-4 p-4">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/RHhXPWv/Tri-ngulo-escaleno-removebg-preview.png" alt="Tri-ngulo-escaleno-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>  Escaleno:</h1>
                    <h5 class="card-title" align="center">Un triángulo escaleno tiene tres lados de diferentes longitudes, y sus ángulos también tienen de medidas diferentes.
                        El perímetro es igual a la suma de las longitudes de sus tres lados.
                        <br>
                    </h5>
                </div>
                <audio  id="player" src="Matematica/Triangulos/triangulo2.mp3" controls >.mp
                </audio>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-4 p-4">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/5RgsJ2z/isoceles3-removebg-preview.png" alt="isoceles3-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Isósceles:</h1>
                    <h5 class="card-title" align="center">Un triángulo isósceles tiene dos lados y dos ángulos iguales(de igual longitud) y otro no.
                        <br><br>La manera de calcular su perímetro <br>es: <br>P = 2 l + b.</h5>
                </div>
                <audio  id="player" src="Matematica/Triangulos/triangulo3.mp3" controls >
                </audio>
            </div><br>
        </div>

        <!-- tarjeta5 -->
        <div  class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <h1 style="text-align: center">Tipos de Triángulo según sus ángulos: </h1><br>
                </div>
            </div>
        </div>

        <!-- tarjeta5 -->
        <div  class="container-fluid center-block pl-5 d-flex justify-content-center"">
            <div class="row" style="background: #FFCDA0">
                <div class="col-md-3 p-4">
                    <div class="card mx-auto d-block " style="width: 18rem;">
                        <img  src="https://i.ibb.co/6cSzjkS/Escaleno2-removebg-preview.png" alt="Escaleno2-removebg-preview" class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h1> Rectángulo:</h1>
                            <h5 class="card-title" align="center">Se caracterizan por tener un ángulo interior recto, con un valor de 90º.
                                Los catetos son los lados que conforman este ángulo, mientras que la hipotenusa corresponde al lado opuesto. </h5>
                        </div>
                        <audio  id="player" src="Matematica/Triangulos/triangulo4.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta6 -->
                <div class="col-md-3 p-4">
                    <div class="card mx-auto d-block " style="width: 18rem;">
                        <img src="https://i.ibb.co/k8fQdW8/triangulo-obtusangulo-removebg-preview.png" alt="triangulo-obtusangulo-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1>Obtusángulo</h1>
                            <h5 class="card-title" align="center"><br>Este tipo de triángulo tiene un ángulo mayor a 90° pero menos de 180º <br>que recibe el nombre “obtuso”,
                                y dos ángulos agudos,los cuales son menores a 90°.<br></h5>
                        </div>
                        <audio  id="player" src="Matematica/Triangulos/triangulo5.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta7 -->
                <div class="col-md-3 p-4">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/52Q6sxX/Tri-ngulo-acut-ngulo-removebg-preview.png" alt="Tri-ngulo-acut-ngulo-removebg-preview" class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h1> Triángulo Acutángulo:</h1>
                            <h5 class="card-title" align="center"> <br>Este tipo de triángulo se caracteriza porque <br>tiene sus tres <br>ángulos que son <br>menores a 90°<br></h5>
                        </div>
                        <audio  id="player" src="Matematica/Triangulos/triangulo6.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
                <!-- tarjeta8 -->
                <div class="col-md-3 p-4">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/ph13d1k/equilatero-1-removebg-preview.png"  class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1>Triángulo equiángulo</h1>
                            <h5 class="card-title" align="center"> <br><br>Es el triángulo equilátero, puesto que sus ángulos internos <br>son iguales a 60°. </h5>
                        </div>
                        <audio  id="player" src="Matematica/Triangulos/triangulo7.mp3" controls >.mp
                        </audio>
                    </div>
                </div>
            </div>
        </div>


    <!-- separador -->
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
