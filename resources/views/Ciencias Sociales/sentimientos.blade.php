@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Los Sentimientos</title>
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
            border: greenyellow 8px double;
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
            background: #FFEECC;
            border:gold 10px solid;

        }

        #color{
            color: black;
            text-align: center;

        }

        #co{
            color: black;
        }

        #borde{

            border: #60A71B 10px dashed;
        }


    </style>
</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid " >
    <div class="row" >
        <div class="col-xl-12" >
            <div class="row">
                <div class="col-xl-6 p-5" >
                    <img class=" mx-auto d-block"   src="https://i.ibb.co/S364Jnr/hs-removebg-preview.png" width="400"   >
                </div>
                <div class="col-xl-6 mt-5"
                     style=" background: #B4F97B" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: black">Los Sentimientos</h3>
                    <p class="" id="pa" style="text-align: justify">
                        <strong><br><br>
                            Las personas a lo largo de nuestra vida experimentamos infinitos sentimientos,
                            que tienden a manifestarse en las polaridades de sentimientos positivos o
                            sentimientos negativos.<br>
                            <br> Los sentimientos nos hacen humanos, nos hacen personas y por ello comprender
                            su significado y los tipos de sentimientos que podemos experimentar nos ayudará a
                            comprendernos mejor a nosotros mismos y a establecer relaciones más próximas y saludables.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contenedor-->
<div class="container-fluid" >
    <br><br>
    <h2>Los sentimientos:</h2>
    <div class="row" >
        <div class="col-xl-4 pb-3">
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/j3Br1bZ/her.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Alegría</em></h2>
            </div>
        </div>
        <div class="col-xl-4 pb-3">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/HG0KyhQ/dibu.jpg" width="300" height="200">
                <h2  id="color"><em>Tristeza</em></h2>
            </div>
        </div>
        <div class="col-xl-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/51tRX17/e.jpg" width="300" height="200">
                <h2  id="color"><em>Enojo</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid" >
<div class="row " >
    <div class="col-xl-4 pb-3">
        <div class="card mx-auto d-block" style="width: 20rem;">
            <img class="mx-auto d-block"  src="https://i.ibb.co/S0hwCWP/e1a.jpg"  width="305" height="200">
            <h2  id="color"><em>Amistad</em></h2>


        </div>
    </div>
    <div class="col-xl-4 pb-3">
        <div class="card mx-auto d-block" style="width: 20rem;">
            <img class="mx-auto d-block"  src="https://i.ibb.co/6wTyNVk/oe.jpg"  width="300" height="200">
            <h2  id="color"><em>Miedo</em></h2>
        </div>
    </div>
    <div class="col-xl-4 pb-3">
        <div class="card mx-auto d-block" style="width: 20rem;">
            <img class="mx-auto d-block" src="https://i.ibb.co/2yL06LW/am.jpg" width="300" height="200">
            <h2  id="color"><em>Amor</em></h2>
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
