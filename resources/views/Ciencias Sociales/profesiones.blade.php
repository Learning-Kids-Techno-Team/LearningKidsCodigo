@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Profesiones</title>
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
                    <img class="mt-5 mx-auto d-block"   src="https://i.ibb.co/L63rgT8/17-removebg-preview.png"  width="500" height="380" >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Las Profesiones</h3>
                    <p class="" id="pa">
                        <strong><br><br>
                            Las profesiones son ocupaciones que requieren de un conocimiento especializado,
                            una capacitación educativa de alto nivel, control sobre el contenido del trabajo,
                            organización propia, autorregulación, altruismo, espíritu de servicio a la
                            comunidad y elevadas normas éticas.
                            <br><br>
                            Generalmente se acepta que una profesión es una actividad especializada
                            del trabajo dentro de la sociedad, y a la persona que la realiza se
                            le denomina profesional.
                            Para ser un profesional es necesario estudiar en una Universidad
                            o un Instituto Profesional por un lapso de cuatro o más años.
                        </strong>
                    </p>
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
            <div class="col-md-12  " id="bor" style="background: #FDFD96">

                <h3>Algunos ejemplos de Profesiones:
                </h3>
            </div>
        </div>
    </div>

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/b7MHbYb/di.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Ingenieros</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/m5NqYfR/a.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Abogado</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/BcKhCw7/dis.png"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Médico</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/dmB55RX/arqu.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Arquitecto</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/47Kvq2x/vect.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Periodista</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/PTJwFFn/p.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Veterinario</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/CW8fp87/16262562.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Contadores</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/ZXkSTsX/Den.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Dentista</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/Fnt90R8/Theater-actress-in-dressing-room-applying-makeup-sitting-by-vanity-mirror-flat-purple-room-interior.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Actor o Actriz</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/3sVBPW5/as.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Astrónomo</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/rwt6fpS/el.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Escritor</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/sFSQ6pT/juez.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Juez</em></h2>
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
