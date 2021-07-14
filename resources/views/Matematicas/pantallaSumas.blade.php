@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Sumas</title>
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

            background: #fcebcb;

        }

        .card{
            background: MediumAquamarine;
            border:#3B5686 6px solid;
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
            color: Teal;
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: MediumAquamarine;
        }
        #titulo{
            text-align: center;
            color: red;
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
            document.getElementById("demo1").innerHTML="<h4>La respuesta es <strong> 8</h4>"

        }
        function resu2(){
            document.getElementById("demo2").innerHTML="<h4>La respuesta es <strong> 7</h4>"

        }
        function resu3(){
            document.getElementById("demo3").innerHTML="<h4>La respuesta es <strong> 9</h4>"

        }
        function resu4(){
            document.getElementById("demo4").innerHTML="<h4>La respuesta es <strong> 10</h4>"

        }
        function resu5(){
            document.getElementById("demo5").innerHTML="<h4>La respuesta es <strong> 9</h4>"

        }
        function resu6(){
            document.getElementById("demo6").innerHTML="<h4>La respuesta es <strong> 4</h4>"

        }

    </script>
</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 bg-info p-2">
            <div class="row ml-5 mr-5 ">
                <div class="col-md-7  mt-5 mx-auto d-block" style="background: MediumAquamarine">
                    <img class="mx-auto d-block" src="https://i.ibb.co/RTYhFcB/81-Vpg-Dox-AIL-removebg-preview.png"
                    width="300">
                </div>
                <div class="col-xl-5  mt-5 " style=" background: #fcebcb"  >
                    <h4>Matemáticas</h4>
                    <h3 class="mt-5" style="text-align: center">Sumas</h3>
                    <p class="" id="pa">
                        <em>Llamamos suma o adición, a la acción de añadir o agregar elementos o cosas. <br>Dicha acción nos permite añadir cosas o cantidades a otras previamente existentes, y de ahí la acción de “sumar”. <br>Con la suma podemos unir cantidades o conjuntos, y para ello siempre deberemos tener un mínimo de dos elementos.

                           </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-12 p-2">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1vo9tPE33X-cjm7Ru4v5stR9OuVAThZXv/preview"
                        width="400"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title"> Explicación de la Suma </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div  class="container-fluid">
    <div class="row">
        <div class="col-xl-12 bg-danger p-2">
            <h1 style="text-align: center">Partes de la suma</h1>
        </div>
    </div>
</div>

<!-- contenido de la resta-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-12 ">

            <h3></h3>
        </div>
    </div>
</div>

<div class="container-fluid">

    <h3 class="text-justify">Sumando</h3>
    <div class="row">

        <div class="col-xl-6 p-2">
            <p id="pa" >El sumando es la parte inicial de la suma, Corresponde al primer número a sumar.

                </p>
        </div>
        <div class="col-xl-6 p-2">

            <img class="mx-auto d-block" src="https://i.ibb.co/xzS80Jd/sumando6-removebg-preview.png"
                   width="300">
        </div>
    </div>
</div>



<div class="container-fluid">
    <h3 class="mt-3">Sumando</h3>
    <div class="row">

        <div class="col-xl-6 p-2">
            <p id="pa" >Es aquel segundo ó varios número que serán adicionados o sumados  durante una operación de suma.</p>
        </div>
        <div class="col-xl-6 p-2">
            <img  class="mx-auto d-block" src="https://i.ibb.co/jLYbrwX/suma7-removebg-preview.png"
                 width="300">
        </div>
    </div>
</div>



<div class="container-fluid">
    <h3 class="mt-3">Suma o total</h3>
    <div class="row">

        <div class="col-xl-6 p-2">
            <p id="pa" >Es el resultado obtenido luego de sumar o adicionar. </p>
        </div>
        <div class="col-xl-6 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/nLwkr3T/total-removebg-preview.png"
                 width="300">
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-xl-12 bg-danger p-2">
            <h1 style="text-align: center">Ejemplos</h1>
        </div>
    </div>
</div>
<br>




<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/j3LqGWj/suma8.png" width="308" >

            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/HNMfnnn/suma9.png" height="256" width="307">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid  " >
    <div class="row" >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block"  style="width: 20rem;">
                <img src="https://i.ibb.co/SnDV1MY/suma10.png" alt="suma10"  width="307" height="250">

            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/98PKt6G/suma11.png" alt="suma11" width="307" height="250">
            </div>
        </div>
    </div>
</div>




<div class="container-fluid  " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/51q7frF/suma12.png"
                     alt="suma12"  width="307" height="250"  >

            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/v3znyG5/tortugas2.png" alt="tortugas2"
                     width="307" height="250">
            </div>
        </div>
    </div>
</div>


<br>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-danger mb-5">
            <h1 style="text-align: center">Ejercicios</h1>
        </div>
    </div>
</div>



<div class="container-fluid  " >
    <div  class="row " >
        <div class="col-xl-4 p-2">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/mSR6mRt/ul.png"  class="mx-auto d-block" width="274"
                 height="250">
                <div class="card-body">
                    <h6 id="demo1"></h6>
                <div class="text-center">
                    <button class="btn btn-danger" onclick="resu1()">Resultado</button>
                </div>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-2">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/gSm7CT4/sm.png" class="mx-auto d-block" width="274" height="250">
                <div class="card-body">
                    <h6 id="demo2"></h6>
                    <div class="text-center">
                    <button class="btn btn-danger" onclick="resu2()">Resultado</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-2">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/zNTqSMk/3.png"  class="mx-auto d-block" width="274" height="250">
                <div class="card-body">
                    <h6 id="demo3"></h6>
                <div class="text-center">
                    <button  class="btn btn-danger" onclick="resu3()">Resultado</button>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid  " >
    <div  class="row " >
        <div class="col-xl-4 p-2">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/kxjxtFL/4.png" class="mx-auto d-block" width="274" height="250" >
                <div class="card-body">
                    <h6 id="demo4"></h6>
                    <button class="btn btn-danger" onclick="resu4()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-2">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/wQcvwLN/5.png" class="mx-auto d-block"  width="274" height="250">
                <div class="card-body">
                    <h6 id="demo5"></h6>
                    <div class="text-center">
                    <button class="btn btn-danger" onclick="resu5()">Resultado</button>
                </div>

                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-2">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/Y3yFBfz/ya.png"  class="mx-auto d-block" width="274" height="250">
                <div class="card-body">
                    <h6 id="demo6"></h6>
                    <div class="text-center">
                    <button class="btn btn-danger" onclick="resu6()">Resultado</button>
                    </div>
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
