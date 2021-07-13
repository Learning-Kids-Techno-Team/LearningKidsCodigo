@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Lineas poligonales</title>
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

    </style>
</head>
<body style=" background: #FF7E5A;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-xl-12 p-2" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/1rM2nHc/3111-imagen-teoria-poligonal-removebg-preview.png"
                 width="350"  class=" mx-auto d-block"/>
        </div>
    </div>
</div>

<div style="color: #D8E2F3;">
    <h1>Lineas poligonales</h1>
</div>

<!-- tarjetas tipos de lineas-->
<div class="container-fluid">
    <div class="row"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-xl-3 p-3" >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/Pz6z2hW/images-removebg-preview.png"
                     class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>  Poligonal abierta</h1>
                    <h5 class="card-title" align="center">
                    </h5>
                </div>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-xl-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/RDp6H0P/maties-4314-a-e335f-removebg-preview.png" alt="maties-4314-a-e335f-removebg-preview"   class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>  Poligonal abierta</h1>
                    <h5 class="card-title" align="center">
                    </h5>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-xl-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/f8J3FKJ/poligonals-removebg-preview.png" alt="poligonals-removebg-preview"   class="card mx-auto d-block"   height="150" width="150">
                <div class="card-body">
                    <h1>Poligonal abierta</h1>
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
        <!-- tarjeta4 -->
        <div class="col-xl-3 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/PxdWGWj/imagen-1-1462447250-removebg-preview.png" alt="imagen-1-1462447250-removebg-preview"  class="card mx-auto d-block"   height="150" width="150">
                <div class="card-body">
                    <h1> Poligonal abierta</h1>
                    <h5 class="card-title" align="center">
                    </h5>
                </div>
            </div>
        </div>

        <!-- tarjeta5 -->
        <div class="container-fluid">
            <div class="row" style="background: #FFCDA0">
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/vxK8gvx/1200px-Simple-polygon-svg-removebg-preview.png" alt="1200px-Simple-polygon-svg-removebg-preview"  class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1> Poligonal cerrada </h1>
                            <h5 class="card-title" align="center"></h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta6 -->
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/7vkqp7m/concave-hexagon-ver-1-removebg-preview.png" alt="concave-hexagon-ver-1-removebg-preview" class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1>Poligonal cerrada</h1>
                            <h5 class="card-title" align="center"></h5>
                        </div>

                    </div>
                </div>
                <!-- tarjeta7 -->
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/0By0pR0/octagono-removebg-preview.png" alt="octagono-removebg-preview" class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1> Poligonal cerrada</h1>
                            <h5 class="card-title" align="center">
                                </h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta8 -->
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img  src="https://i.ibb.co/qW2NSbV/l-nea-poligonal-cerrada-2-removebg-preview-1.png"
                             alt="hexagono1-removebg-preview" class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h1> Poligonal cerrada</h1>
                            <h5 class="card-title" align="center"></h5>
                        </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
