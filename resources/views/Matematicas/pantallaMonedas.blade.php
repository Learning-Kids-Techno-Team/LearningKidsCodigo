@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Monedas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #FF7800;
        }

        body{

            background: #fcebcb;

        }

        .card{
            background: #DCFECB;
            border:green 6px solid;
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
        .card-title{
            color: orangered;
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #FF7800;
        }
        #titulo{
            text-align: center;
            color: red;
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


    </style>

    <script>

        function resu1(){
            document.getElementById("demo1").innerHTML="<h4> <strong> 40 centavos</h4>"

        }
        function resu2(){
            document.getElementById("demo2").innerHTML="<h4> <strong> 35 centavos</h4>"

        }
        function resu3(){
            document.getElementById("demo3").innerHTML="<h4><strong> 90 centavos</h4>"

        }
        function resu4(){
            document.getElementById("demo4").innerHTML="<h4> <strong> 60 centavos</h4>"

        }
        function resu5(){
            document.getElementById("demo5").innerHTML="<h4> <strong>70 centavos</h4>"

        }
        function resu6(){
            document.getElementById("demo6").innerHTML="<h4><strong> 80 centavos</h4>"

        }

    </script>
</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-info">
            <div class="row ml-5 mr-5">
                <div class="col-md-7 bg-warning mt-5">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/0M0m3Cw/gratis-png-moneda-de-dibujos-animados-sosteniendo-la-moneda-de-la-nina-encantadora-de-dibujos-animad.png"  width="300"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: #fcebcb"  >
                    <h4 style="color: #FF7800">Matematica</h4>
                    <h3 class="mt-5" style="text-align: center">Monedas</h3>
                    <p class="" id="pa">
                        <em>La moneda es una pieza de metal que se utiliza en las sociedades modernas para el intercambio de bienes o servicios. En otras palabras, es una medida sobre el valor o costo que tienen los objetos o prestaciones de servicios. En este sentido, el término se toma como sinónimo de la palabra dinero.</em>
                        <br>
                        <em>La función principal de las monedas es la de favorecer el intercambio de bienes y/o servicios. Sin esta moneda, las sociedades actuales no serían capaces de realizar intercambios.

                            Por tanto, se la considera como el eje central de la vida económica en una sociedad. En consecuencia, la función principal de la moneda es que actúe como un medio de pago.
                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-center p-5" >
    <div class="row" >
        <div class="col-md-12 ">

            <img class="mx-auto db-block" src="https://i.ibb.co/qCbZLQ9/vector-children-buying-from-a-cashier-removebg-preview.png" >
            </div>
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Monedas de Honduras</h1>
        </div>
    </div>
</div>

<!-- contenido de la resta-->



<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>Moneda de 5 centavos</h2>
                <img  src="https://i.ibb.co/HN8ysXz/40honduras3-removebg-preview.png"    height="200" >
            </div>
        </div>
        <div class="col-md-6">

            <div class="card" style="width: 30rem;">
                <h2>Moneda de 10 centavos</h2>
                <img src="https://i.ibb.co/kBvMBRT/10-CENTAVOS-2006-removebg-preview.png"    height="200">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>Moneda de 20 centavos</h2>
                <img   src="https://i.ibb.co/k9L9SXZ/honduras-20-centavos-1991-removebg-preview.png"      height="200" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>Moneda de 50 centavos</h2>
                <img  src="https://i.ibb.co/tDnkX33/430-001-removebg-preview.png" alt="430-001-removebg-preview"    height="200">
            </div>
        </div>
    </div>
</div>




<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Ejemplos del uso de las monedas</h1>
        </div>
    </div>
</div>

<!-- contenido de la resta-->



<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/BwfcgN9/Captura-de-pantalla-403.png"     height="200" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img src="https://i.ibb.co/x3w6kQG/Captura-de-pantalla-402.png"    height="200">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/py1jQv1/Captura-de-pantalla-400.png"      height="200" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/M6tgVgT/Captura-de-pantalla-401.png"      height="200">
            </div>
        </div>
    </div>
</div>





<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/G0NtGKp/Captura-de-pantalla-397.png"       height="200" >


            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/MhstWzv/Captura-de-pantalla-398.png"     height="200">
            </div>
        </div>
    </div>
</div>






<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Ejercicios</h1>
        </div>
    </div>
</div>



<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/988Kf3Y/Captura-de-pantalla-410.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo1"></h6>
                    <button class="btn btn-danger" onclick="resu1()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9Zk0BTb/Captura-de-pantalla-415.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo2"></h6>
                    <button class="btn btn-danger" onclick="resu2()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/ZYx8d4h/Captura-de-pantalla-414.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo3"></h6>
                    <button  class="btn btn-danger" onclick="resu3()">Resultado</button>


                </div>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/3NS5Wzd/Captura-de-pantalla-413.png"    class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo4"></h6>
                    <button class="btn btn-danger" onclick="resu4()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/F7pT8hx/Captura-de-pantalla-411.png"    class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo5"></h6>
                    <button class="btn btn-danger" onclick="resu5()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/h2SgxJS/Captura-de-pantalla-412.png"   class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo6"></h6>

                    <button class="btn btn-danger" onclick="resu6()">Resultado</button>

                    <br>
                </div>
            </div>
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

@endsection
