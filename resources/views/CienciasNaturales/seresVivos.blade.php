@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Seres Vivos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>


        body{

            background:lightyellow;

        }

        .card{
            background: #FFC9B5;
            border:teal 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }


        #pa{
            text-align: justify;

        }

        #banderin{

            margin-top: auto;
            height:90px;
        }

        #color{
            color: white;
            height: 80px;

        }

        p{
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            background: #FDFD96;
        }

        #separadorInferior21 .content{

            width: 100%;
            height: 80px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #B4F97B;

        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        #bor{
            border: red 5px dotted;

        }
        #bor1{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:mistyrose;
        }

        #borde{
            border: green 8px dotted;

        }

        .navbar{
            background: #FDFD96;
        }

        h5{

            padding-top: 20px;
            text-align: center;
        }

    </style>

</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid mt-5"  >
    <div class="row">
        <div class="col-md-12"  >
            <div class="row ml-5 mr-5" id="borde">
                <div class="col-md-4  " style="background: lightgreen" >
                    <img class="mt-5 mx-auto d-block"   src="https://i.ibb.co/BsjWJ7K/nin-removebg-preview.png" width="350"  >
                </div>
                <div class="col-xl-8 " style=" background: #D2FFB5;" >


                    <h3 class="mt-5" style="text-align: center; color:green">Seres Vivos</h3>
                    <p class="" id="pa">
                        <strong><br><br>Tantos plantas como animales son seres vivos.
                            Los seres vivos se relacionan con otros seres vivos y con su ambiente.
                            Los seres vivos son todas las estructuras o sistemas moleculares complejos
                            que cumplen con funciones esenciales como la alimentación, el desarrollo,
                            la reproducción y las interacciones con otros organismos, incluyendo el
                            intercambio energético con el medio que los rodea.

                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center  " >
    <div class="row p-5 ">
        <div class="col-md-12  " id="bor" style="background: yellow">

            <h3>Son Seres Vivos:
            </h3>
        </div>
    </div>
</div>

<div class="container-fluid   pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <div id="tar1" class="card" style="width: 18rem;">
                <h2>Las plantas</h2>

            </div>
        </div>

        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <h2>Animales</h2>


            </div>
        </div>

        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <h2>Personas</h2>

            </div>
        </div>

    </div>
</div>

<div class="container-fluid   pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <div id="tar1" class="card" style="width: 18rem;">
               <img  src="https://i.ibb.co/sP71K5V/m1.jpg"  width="275" height="200">

            </div>
        </div>

        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/MCz7bPp/original.jpg"  width="275" height="200">


            </div>
        </div>

        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img  src="https://image.freepik.com/vector-gratis/ninos-felices-dibujos-animados-jugando-parque_18591-61445.jpg"  width="275" height="200">

            </div>
        </div>

    </div>
</div>

<div class="container-fluid d-flex justify-content-center  " >
    <div class="row p-5 ">
        <div class="col-md-12  " id="bor" style="background: yellow">

            <h3>Los Seres vivos tienen un ciclo de Vida:
            </h3>
        </div>
    </div>
</div>

<div class="container-fluid   pl-5" >
    <div  class="row m-5" >
        <div class="col-md-3">

            <div id="tar1" class="card" style="width: 18rem;">
                <h2>Nacen</h2>

            </div>
        </div>

        <div class="col-md-3 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <h2>Crecen</h2>


            </div>
        </div>

        <div class="col-md-3 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <h2>Reproducen</h2>


            </div>
        </div>
        <div class="col-md-3 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <h2>Mueren</h2>


            </div>
        </div>

    </div>
</div>

<div class="container-fluid   pl-5" >
    <div  class="row m-5" >
        <div class="col-md-3">

            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/2WndrRJ/po.jpg"   width="275" height="200">

            </div>
        </div>

        <div class="col-md-3 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/wKtb7dv/cut.jpg"   width="275" height="200">


            </div>
        </div>
        <div class="col-md-3 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pnxc8WD/91.jpg"   width="275" height="200">


            </div>
        </div>


        <div class="col-md-3">
            <div id="tar3" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/q7vSJFB/a3.jpg"  width="275" height="200">

            </div>
        </div>

    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mt-1">
            <h1 style="text-align: center"></h1>

        </div>
    </div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mt-1">
            <h1 style="text-align: center"></h1>
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


