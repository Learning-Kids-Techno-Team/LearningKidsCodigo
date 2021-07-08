@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Restas</title>
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


    </style>

    <script>

        function resu1(){
            document.getElementById("demo1").innerHTML="<h4>La respuesta es <strong> 4</h4>"

        }
        function resu2(){
            document.getElementById("demo2").innerHTML="<h4>La respuesta es <strong> 2</h4>"

        }
        function resu3(){
            document.getElementById("demo3").innerHTML="<h4>La respuesta es <strong> 4</h4>"

        }
        function resu4(){
            document.getElementById("demo4").innerHTML="<h4>La respuesta es <strong> 0</h4>"

        }
        function resu5(){
            document.getElementById("demo5").innerHTML="<h4>La respuesta es <strong> 6</h4>"

        }
        function resu6(){
            document.getElementById("demo6").innerHTML="<h4>La respuesta es <strong> 2</h4>"

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
                    <img class="mt-5" src="https://i.ibb.co/SfTfKWb/ninos-aprendiendo-matematicas-abaco-1308-15835-removebg-preview.png">
                </div>
                <div class="col-xl-5  mt-5 " style=" background: #fcebcb"  >
                    <h4>Matemática</h4>
                    <h3 class="mt-5" style="text-align: center">Resta</h3>
                   <p class="" id="pa">
                       <em>Aprender a restar es una de las habilidades que más necesitamos tener para poder realizar nuestras actividades cotidianas. La resta es la inversa de la suma porque en esta, dados los sumandos, hay que hallar la suma de los mismos, mientras que en la resta, dada la suma de dos sumandos y uno de ellos, se halla el otro sumando.

                           <br> Mediante esta operación se puede sustraer una cantidad determinada de otra. Por ejemplo, si tenemos cierta cantidad de manzanas y regalamos algunas, para saber cuántas manzanas nos quedan debemos realizar una resta.</em>
                   </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-center p-5" >
    <div class="row " >
        <div class="col-md-12 ">
            <div class="card" style="width: 40rem;">
                 <iframe src="https://drive.google.com/file/d/1JA2SKHmUjkosTPVCqigPmZug3cceCka7/preview" width="628" height="300"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Explicación de la resta </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Partes de la resta</h1>
        </div>
        </div>
</div>

<!-- contenido de la resta-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-12 ">

            <h3>En la resta se tienen tres elementos.</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h3 class="mt-3">Minuendo</h3>
    <div class="row">

        <div class="col-md-6">
            <p id="pa" >El minuendo es la parte inicial de la resta, es el valor que se reducirá.

                Cabe mencionar que la resta no es conmutativa, si se cambia el orden del minuendo con el sustraendo, el resultado puede variar. Tampoco es asociativa, el orden de cómo se realice la operación es crucial para que la diferencia sea otro número natural.</p>
    </div>
        <div class="col-md-6 mt-n3">
            <img src="https://i.ibb.co/WGXbXTF/Captura-de-pantalla-280-removebg-preview.png" width="400">
        </div>
    </div>
</div>



<div class="container-fluid">
    <h3 class="mt-3">Sustraendo</h3>
    <div class="row">

        <div class="col-md-6">
            <p id="pa" >Es aquel segundo número que va a ser removido durante una operación de resta.</p>
        </div>
        <div class="col-md-6 mt-n3">
            <img src="https://i.ibb.co/CbjK7dD/Captura-de-pantalla-282-removebg-preview.png" width="430">
        </div>
    </div>
</div>



<div class="container-fluid">
    <h3 class="mt-3">Diferencia</h3>
    <div class="row">

        <div class="col-md-6">
            <p id="pa" >Es el resultado obtenido luego de sustraer. Si se desea comprobar que si está correcta la diferencia, tan simplemente se suma la diferencia y el sustraendo. El valor será la misma cifra que el minuendo. Esta es la propiedad clave de la resta.</p>
        </div>
        <div class="col-md-6 mt-n3">
            <img src="https://i.ibb.co/p3kqH0H/Captura-de-pantalla-285-removebg-preview.png"  width="430">
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Ejemplos</h1>
        </div>
    </div>
</div>





<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/9ZgQd5s/Captura-de-pantalla-311.png"    height="400" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img src="https://i.ibb.co/k3kqS39/Captura-de-pantalla-309.png"    height="400">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/6FFHchy/Captura-de-pantalla-313.png"     height="400" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/2FqB1yK/Captura-de-pantalla-315.png"    height="400">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/y4F5Ggp/Captura-de-pantalla-318.png"    height="400" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img src="https://i.ibb.co/bdQhqG1/Captura-de-pantalla-321.png"     height="400">
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



<div class="container-fluid  center-block pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/j3x0pwz/Captura-de-pantalla-348.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo1"></h6>
                    <button class="btn btn-danger" onclick="resu1()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/Yy7C2qT/Captura-de-pantalla-355.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo2"></h6>
                    <button class="btn btn-danger" onclick="resu2()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/hKWC5tn/Captura-de-pantalla-353.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo3"></h6>
                    <button  class="btn btn-danger" onclick="resu3()">Resultado</button>


                </div>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid  center-block pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MV859WY/Captura-de-pantalla-352.png"   class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo4"></h6>
                    <button class="btn btn-danger" onclick="resu4()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/GknwsYp/Captura-de-pantalla-350.png"   class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo5"></h6>
                    <button class="btn btn-danger" onclick="resu5()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/wzWnPm3/Captura-de-pantalla-351.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo6"></h6>
                    <br>
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
