@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Medios terrestres</title>
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

            background: #D2FFB5;
            border:limegreen 8px solid;
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

            border:coral 10px solid;

        }

        #color{
            color: tomato;

        }
        #co{
            color: black;
        }
        #borde{
            border: forestgreen 8px dotted;
        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid " >
    <div class="row" >
        <div class="col-md-12" >
            <div class="row ml-5 mr-5"  >
                <div class="col-md-6" >
                    <img class="mt-5   pt-5" src="https://i.pinimg.com/originals/1c/d1/53/1cd1536946678ee7f501f87c2f4b37ab.png"  width="350"  >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Medios de Transporte Terrestres</h3>
                    <p class="" id="pa">
                        <strong><br><br>

                            El transporte terrestre es el transporte que se realiza sobre
                            la superficie terrestre. La gran mayoría de transportes terrestres
                            se realizan sobre ruedas.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contenedor-->
<div class="container-fluid " >
    <br><br>
    <div class="container-fluid " >
        <div class="row p-5 ">
            <div class="col-md-12  " id="bor" style="background: peachpuff">

                <h3 style="text-align: center">Algunos ejemplos de Transporte Terrestres:
                </h3>
            </div>
        </div>
    </div>

    <div class="row " >
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class="mx-auto d-block"   src="https://i.ibb.co/k0v3GNZ/au.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Automóvil</em></h2>


            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/BwsyJYh/bic.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Bicicleta</em></h2>
            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/8PPKSFJ/mo2.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Motocicleta</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid" >

    <div class="row" >
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/mNW7J2H/ch.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Autobús</em></h2>


            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/whm8vw6/de2.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Carreta</em></h2>
            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/RDfccKq/cab.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Caballo</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid " >

    <div class="row " >
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/y6BD70x/t16.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Camión</em></h2>


            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/3ym5sPr/t3.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Tren</em></h2>
            </div>
        </div>
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mT1s5Zh/cami.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Camioneta</em></h2>
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
