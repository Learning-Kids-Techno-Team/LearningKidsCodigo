@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Medios aéreos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #60A71B;


        }

        body{

            background: #dcfecb;

        }


        .card{

            background: #D2FFB5;
            border: lightgreen 8px double;
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
                    <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/Xx7yjLV/ae-removebg-preview.png"   width="500" height="380" >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Medios de Transporte Aéreos</h3>
                    <p class="" id="pa">
                        <strong><br><br>
                            El transporte aéreo o transporte por avión es el servicio de trasladar
                            de un lugar a otro, pasajeros o cargamento, mediante la utilización de aeronaves.<br>

                            <br>Al desarrollarse en el medio aéreo, goza de la ventaja de la
                            continuidad de éste, que se extiende sobre tierra y mar,
                            pero está limitado por la necesidad de costosas infraestructuras
                            y un mayor coste económico que el resto de los medios de transporte.

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

                <h3>Algunos ejemplos de Transporte Aéreo:
                </h3>
            </div>
        </div>
    </div>

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/hDXgxyL/nk.jpg"  src="https://image.freepik.com/vector-gratis/nino-helicoptero_8495-9.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Helicóptero</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/sQHmWWZ/fly.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Avión</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/PhWxVdx/dl.png"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Avioneta</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"   src="https://i.ibb.co/ByNqMmh/2i.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Globo aerostático</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/DkgbZFm/coh.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Cohete</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/vxTb4vQ/t.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Teleférico</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/G25G8kC/para.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Parapente</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/mtpHrdk/diri.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Dirigible o Zeppelin</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/d7cnJS7/42.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Ultraliviano </em></h2>
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

