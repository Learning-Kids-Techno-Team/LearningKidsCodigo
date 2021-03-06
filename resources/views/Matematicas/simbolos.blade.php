@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Mayor que, menor que</title>
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
            background: #FF7E5A;
        }

        body{

            background: #FFC897;

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

        #color{
            color: white;
            height: 80px;



        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-bottom-right-radius: 70%;
            border-top-right-radius: 80%;
            border-top-left-radius: 70%;
            background: #FF7800;
        }
        p{
            text-align: center;

        }
        .card-title{
            color: indianred;
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;

            background: #FF7800;
        }

        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
        }


        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
        }

    </style>
    <script>

        function respuesta1(){
            document.getElementById("res1").innerHTML="<h4>La respuesta es: <strong> < </h4>"

        }
        function respuesta2(){
            document.getElementById("res2").innerHTML="<h4>La respuesta es: <strong> = </h4>"

        }
        function respuesta3(){
            document.getElementById("res3").innerHTML="<h4>La respuesta es: <strong> > </h4>"

        }
        function respuesta4(){
            document.getElementById("res4").innerHTML="<h4>La respuesta es: <strong> < </h4>"

        }
        function respuesta5(){
            document.getElementById("res5").innerHTML="<h4>La respuesta es: <strong> = </h4>"

        }
        function respuesta6(){
            document.getElementById("res6").innerHTML="<h4>La respuesta es: <strong> > </h4>"

        }

    </script>
</head>
<body >

<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-xl-4 p-2 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/44k0vNg/Captura-de-pantalla-297-removebg-preview.png"    height="300">
        </div>

        <div class="col-xl-8 p-2" >
            <br>
            <h2 class="text-center">Mayor Que, Menor Que o Igual</h2>
<br>
            <p class="text-justify"><strong><em>
                        Los símbolos de desigualdad más conocidos son:
                        “mayor que” > y “menor que” <  Con ellos podemos hacer comparaciones.
                        Son elementos que se utilizan en matemáticas para indicar que un número
                        es mayor o menor que otro.
                        <br>
                        <br>
                        <br>
                        <br>

                    </em></strong></p>


        </div>
    </div>
</div>


<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-12  p-2">
            <div class="card mx-auto d-block" style="width: 21rem;">
                <iframe  src="https://drive.google.com/file/d/1Ea-UzkQLadNSU-QB0tTaXAW5wBtcaTTS/preview"
                         width="325"  ></iframe>
                <div class="card-body" id="im">
                    <h5 class="text-center">¿Para qué nos sirven los simbolos mayor que, menor que e igual?</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" >
    <div class="row " >
        <div class="col-xl-12 p-2">
            <h1 class="text-center" >Conozcamos los símbolos</h1>

        </div>
    </div>
</div>




    <div class="container-fluid " >
        <div class="row " >
            <div class="col-xl-4 p-2">
                <div class="card mx-auto d-block" style="width: 18rem;">
                    <img  src="https://i.ibb.co/ZfftSFr/mm.jpg"  class=" mx-auto d-block" width="270"
                         >
                    <div class="card-body">
                        <h5 class="text-center">Signo Mayor</h5>
                        <p><strong>Este símbolo siempre abre la boca hacia el número que es mayor.</strong></p>
                    </div>
                </div>
            </div>


            <div class="col-xl-4  p-2">
                <div class="card mx-auto d-block" style="width: 18rem;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/ryVpqDx/meee.jpg"
                         width="273" >
                    <div class="card-body">
                        <h5 class="text-center">Signo Menor</h5>

                        <p><strong>Este símbolo siempre abre la boca hacia el número que es menor.</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 p-2">
                <div class="card mx-auto d-block" style="width: 18rem;">

                    <img src="https://i.ibb.co/ZKLh2tM/igual.jpg"  class=" mx-auto d-block"
                         width="270" height="284" >
                    <div class="card-body">
                        <h5 class="text-center">Signo Igual</h5>
                        <p><strong>Este símbolo siempre tiene la boca cerrada cuando dos numeros son iguales.</strong></p>
                    </div>
                </div>
            </div>

    </div>
</div>

<div class="container-fluid"  >
    <div class="row " >
        <div class="col-xl-12 p-2">
            <br>
            <h1 class="text-center" >Comparemos números</h1>

        </div>
    </div>
</div>
<div class="container-fluid  " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div >
                 <img class="mx-auto d-block" src="https://i.ibb.co/NnK9dQn/Captura-de-pantalla-322-removebg-preview-1.png"
                      width="300" >

                <div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div  >
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/pXdR7Mh/Captura-de-pantalla-320-removebg-preview.png"
                     width="320" >
                </div>
            </div>

        </div>
    </div>

</div>
<div >
<br>
            <h3 class=" text-center mx-auto d-block ">La niña tiene 10 pastelitos y el niño 5.<br>
                La niña tiene más pastelitos que el niño porque 10 es mayor que 5.<br>
                El niño tiene menos pastelitos que la niña porque 5 es menor que 10.
            </h3>
</div>
<br>


<div class="container-fluid" >
    <div class="row " >

        <div class="col-xl-4 p-2">
            <div >
                <img class="mx-auto d-block"
                     src="https://i.ibb.co/HFKf6wr/Captura-de-pantalla-324-removebg-preview.png"
                      width="300"  >

            </div>
        </div>

            <div class="col-xl-4 p-2">
                <div  >
                    <img class="mx-auto d-block"
                         src="https://i.ibb.co/WByxNLB/Captura-de-pantalla-326-removebg-preview.png"
                         width="300"  >

                </div>
            </div>


                <div class="col-xl-4 p-2">
                    <div >
                        <img class="mx-auto d-block"
                             src="https://i.ibb.co/s3DqPDf/Captura-de-pantalla-328-removebg-preview.png"
                               width="300" >

                    </div>
                </div>
        </div>

    </div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-xl-12 bg-info p-2">
            <h1 style="text-align: center">Ejercicios</h1>
        </div>
    </div>
</div>
<br>
<div class="container-fluid " >
    <div class="row  " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img  src="https://i.ibb.co/Wxgqdds/Captura-de-pantalla-330-removebg-preview.png"
                      width="300" >
                <div class="card-body text-center" id="im">

                    <h6 id="res1"></h6>
                    <button class="btn btn-success" onclick="respuesta1()">Respuesta</button>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/yhFj8Jn/Captura-de-pantalla-332-removebg-preview.png"
                     width="300" >
                <div class="card-body text-center">
                  <h6 id="res2"></h6>

                   <button class="btn btn-success" onclick="respuesta2()">Respuesta</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/tHwkfG4/Captura-de-pantalla-334-removebg-preview.png"
                     width="300" >
                <div class="card-body text-center" id="im">
                   <h6 id="res3"></h6>

                   <button class="btn btn-success" onclick="respuesta3()">Respuesta</button>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/gSSrdSS/Captura-de-pantalla-337-removebg-preview.png"
                     width="300" >
                <div class="card-body text-center">
                    <h6 id="res4"></h6>

                    <button class="btn btn-success" onclick="respuesta4()">Respuesta</button>


                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid  " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img  src="https://i.ibb.co/RTK3yX5/Captura-de-pantalla-339-removebg-preview.png"
                      width="300" >
                <div class="card-body text-center" id="im">
                    <h6 id="res5"></h6>

                    <button class="btn btn-success" onclick="respuesta5()">Respuesta</button>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img  src="https://i.ibb.co/0f6YFpp/Captura-de-pantalla-341-removebg-preview.png"
                      width="300" >
                <div class="card-body text-center">
                    <h6 id="res6"></h6>

                    <button class="btn btn-success" onclick="respuesta6()">Respuesta</button>


                </div>
            </div>

        </div>
    </div>
</div>





<br>
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
