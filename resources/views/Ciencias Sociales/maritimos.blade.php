@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Medios marítimos</title>
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
            border:springgreen 8px solid;
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
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/J71pwGV/fo-removebg-preview.png"  width="450" height="380" >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Medios de Transporte Marítimos</h3>
                    <p class="" id="pa">
                        <strong><br><br>
                            El transporte marítimo puede trasladar personas o cosas por
                            mar de un punto geográfico a otro a bordo de un buque.<br><br>
                            El transporte marítimo, en el ámbito mundial, es el modo
                            más utilizado para el comercio internacional.
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

                <h3>Algunos ejemplos de Transporte Marítimos:
                </h3>
            </div>
        </div>
    </div>

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/7S7Wgz1/ca.jpg"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Canoa</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/FXv3x3T/ho.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Kayak</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/CmLpMTB/lan.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Lancha</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/hyc8Rt2/dep.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Submarino</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/tBdjSJj/vele.jpg" width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Velero</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/K9M1bS7/dn.jpg" width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Transatlántico</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/cC2cV3v/deb.jpg"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Buque</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/5kVfJFN/mot.jpg"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Moto Acuatica</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/w7gQs6z/fer.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Ferry </em></h2>
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
