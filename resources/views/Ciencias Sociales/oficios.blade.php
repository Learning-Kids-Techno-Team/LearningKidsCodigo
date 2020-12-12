@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Oficios</title>
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
            border: mediumspringgreen 8px solid;
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
                    <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/DGzw4rG/iy-removebg-preview.png" width="500" height="380" >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Los Oficios</h3>
                    <p class="" id="pa">
                        <strong><br><br>
                            Se llama oficio a la ocupación de una persona,
                            en especial que se  relaciona con labores manuales o artesanales.
                            Los oficios son trabajos que se aprenden mirando, escuchando a
                            otras personas pero que en definitiva no se necesitan estudios
                            formales para poder realizarla, sino que la experiencia de la vida y
                            el trabajo lo han formado. Muchas veces, el oficio se transmite de
                            generación en generación en una misma familia.

                            En la mayoría de los casos, los oficios suelen ser trabajos que
                            se realizan de forma manual donde el trabajador debe conocer
                            en profundidad aquella actividad laboral y poseer una gran habilidad
                            para llevarla a cabo.
                   </strong> </p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- contenedor-->
<div class="container-fluid  center-block pl-5" >
    <br><br>
    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row p-5 ">
            <div class="col-md-12  " id="bor" style="background: yellow">

                <h3>Algunos ejemplos de Oficios:
                </h3>
            </div>
        </div>
    </div>

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"   src="https://i.ibb.co/0jVRx27/peg.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Carpintero</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/YW80740/al.jpg" width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Albañil</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/cCbJWd5/j.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Mecánico</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/mDBDrBS/ag.png"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Agricultor</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/mDLgg3G/9a.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Sastre</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/5Tppsng/car.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Carnicero</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/gtn14G6/ele.jpg" width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Electricista</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/3vdngN8/aut.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Conductor</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/X7WhMYs/font.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Fontanero</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/WtmgJp4/rest.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Mesero</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/WvvmTMd/ne.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Pescador</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/8DG2KvY/db.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Herrero</em></h2>
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
