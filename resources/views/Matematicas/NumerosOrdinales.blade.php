@extends('layouts.app')

</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Numeros Ordinales</title>
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
    .navbar {
    background:#FF7E5A;

    }

    body{

    background: #FFEECC;

    }


    .card{
    background: lightblue;
    border: cornflowerblue 5px solid;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;

    }

    p{
    margin-left:15%;
    margin-right: 15%;
    text-align: justify;
    font-style: italic;

    }

    #separadorInferior .content{

    width: 100%;
    height: 100px;
    margin-left: -5px;
    background: #FF7E5A;
    border-top-left-radius: 50%;
    border-top-right-radius:50%;
    }


    #tar2{
        background: lightblue;
        border: cornflowerblue 10px dashed;

    }

    .btn {

    background: #FDFD96;
    border: gold 1px solid;
    }



    </style>
</head>
<body>

<script language="JavaScript">

    function pulsa() {
        document.getElementById("demo").innerHTML = "<h2>PRIMER LUGAR: EL ELEFANTE</h2>";
        document.getElementById("demo1").innerHTML = "<h2>SEGUNDO LUGAR: LA CEBRA </h2>";
        document.getElementById("demo2").innerHTML = "<h2>TERCER LUGAR: LA JIRAFA</h2>";
        document.getElementById("demo3").innerHTML = "<h2>CUARTO LUGAR: EL TIGRE</h2>";
    }
</script>

<!-- navbar-->
@section('content')

<!-- contenedor concepto-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-xl-4 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/XxhwJqD/Sin-t-tulo-removebg-preview.png"
                 width="400"/>
        </div>
        <div class="col-xl-8 p-2">
            <h2><em><br></em></h2>
            <h3><em><br>Nos sirven para ordenar los objetos, sucesos o a las personas.
                    Utilizamos estos números para contar u ordenar.</em></h3><br>
        </div>
    </div>
</div>

<!-- Contenedor -->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-xl-12 p-2" >
                <h3 align="center" id="color">
                    <br><em>¡Observo las ilustraciones!</em><br>
                </h3>
            <img id="tar2" src="https://i.ibb.co/mSmZ4s0/20201015-222211.jpg" class=" mx-auto d-block"
            width="450"/><br><br>
            <img id="tar2" src="https://i.ibb.co/k3vN9Q2/20201015-222244.jpg" class=" mx-auto d-block"
            width="450"/>
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid" ><h2 align="center"><em><br>¡Veamos juntos y aprendamos sobre los números ordinales!</em></h2>
    <div class="row">
        <div class="col-xl-12 p-2">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1vsgPjbFiy8z2aLMwl-cQYH-Joo-T0qu4/preview"
                    width="450" height="300"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- Texto concepto -->
<div class="container-fluid" ><h3 align="center"><br><em>Los números ordinales son aquellos que nos expresan un orden.</em><br>
    </h3>
    <div class="row">
        <div class="col-xl-6 p-2"><br>
            <img id="tar2" class="mx-auto d-block" src="https://i.ibb.co/Kmb0DFm/4f0b.jpg"
                 width="300" />
            <h5 align="center"></h5>
        </div>
        <div class="col-xl-6 p-2"><br>
            <img id="tar2" class="mx-auto d-block" src="https://i.ibb.co/yP75b8P/sf.jpg" width="300" />
            <h5 align="center"></h5><br>
        </div>
    </div>
</div>


<!-- animales -->
<div class="container-fluid" id="color">
<div  class="row">
    <div class="col-xl-12 p-2">
        <h3 align="center">
            <br><em>¡¡Adivina quienes ganaron el PRIMERO, SEGUNDO, TERCERO y CUARTO lugar de la carrera!!</em><br><br>
        </h3>
             <img id="tar2" src="https://i.ibb.co/drP8tfB/wild.jpg" width="450" height="250" class=" mx-auto d-block" />
        </div>
    </div>
</div>

<!-- actividad RESPUESTAS -->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-xl-4 p-2"><br><br><br>
            <a class="btn" onclick="pulsa()">Ver Respuestas!!</a><br>
        </div>
        <div class="col-xl-8 p-2" >
            <h2><br>Respuestas Correctas:</h2><br>
            <!-- Btn respuestas -->
            <p id="demo"></p>
            <p id="demo1"></p>
            <p id="demo2"></p>
            <p id="demo3"></p>
            <p id="demo4"></p>
            <p id="demo5"></p>
            <p id="demo6"></p>

        </div>
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
