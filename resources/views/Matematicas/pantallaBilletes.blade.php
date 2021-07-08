@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Billetes</title>
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
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        h5{
            font-family: bold;
        }


    </style>

    <script>

        function resu1(){
            document.getElementById("demo1").innerHTML="<h4> <strong> 7 Lempiras</h4>"

        }
        function resu2(){
            document.getElementById("demo2").innerHTML="<h4> <strong> 51 Lempiras</h4>"

        }
        function resu3(){
            document.getElementById("demo3").innerHTML="<h4><strong> 110 Lempiras</h4>"

        }
        function resu4(){
            document.getElementById("demo4").innerHTML="<h4> <strong> 30 Lempiras</h4>"

        }
        function resu5(){
            document.getElementById("demo5").innerHTML="<h4> <strong>107 Lempiras</h4>"

        }
        function resu6(){
            document.getElementById("demo6").innerHTML="<h4><strong> 12 Lempiras</h4>"

        }

    </script>
</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-info">
            <div class="row ml-5 mr-5">
                <div class="col-md-7 bg-warning mt-5">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/mGrKprn/dt-common-streams-Stream-Server-cls-removebg-preview.png"   width="300"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: #fcebcb"  >
                    <h4 style="color: #FF7800">Matematica</h4>
                    <h3 class="mt-5" style="text-align: center">Billetes</h3>
                    <p class="" id="pa">
                        <em> billete tiene varios usos de acuerdo al contexto. La acepción más común está vinculada al papel moneda: es decir, al documento impreso por las autoridades que se utiliza como medio legal de pago.</em>
                        <br>
                        <br>
                        <em>El dinero y todas sus representaciones son el símbolo del valor que damos a las cosas que necesitamos.

                            El dinero sirve para comprar cosas. Algunas cosas las necesitamos y otras nos gustan, pero con dinero no es la única forma de conseguirlas. Podéis plantear este ejercicio a los niños y niñas, haciéndoles entender la diferencia entre lo que les gusta y lo que necesitan. Así, también les podéis ayudar a hacer cálculos y a pensar cómo conseguir esas cosas de forma razonable.
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

            <img class="mx-auto db-block" src="https://i.ibb.co/djRhXZq/ninos-comprando-bebidas-tienda-1308-6800-removebg-preview.png"  >
        </div>
    </div>
</div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Billetes de Honduras</h1>
        </div>
    </div>
</div>

<!-- contenido de los billetes-->



<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>1 Lempira</h2>

                <img  src="https://i.ibb.co/wrL9ynM/billete-1-lempira-honduras-D-NQ-NP-740341-MLM27600813056-062018-F-removebg-preview.png"    height="400" >
                <h5><em>En su parte de enfrente lleva la cara de El Cacique lempira, Y su reverso una foto de Copán ruinas</em></h5>
            </div>
        </div>
        <div class="col-md-6">

            <div class="card" style="width: 30rem;">
                <h2>2 Lempiras</h2>
                <img src="https://i.ibb.co/5BnKBKL/15641288216117-removebg-preview.png"     height="400">
                <h5><em>En su parte de enfrente lleva la cara de Marco Aurelio soto, Y su reverso una foto de Isla de Amapala.</em></h5>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid  d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>5 lempiras</h2>
                <img   src="https://i.ibb.co/cFdD7dP/coleccion-billetes-honduras-pick-numero-85-5-lempira-removebg-preview.png"      height="400" >
                <h5><em>En su parte de enfrente lleva la cara de El General Francisco Morazán, Y su reverso Representa la Batalla de la trinidad.

                    </em></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>10 lempiras</h2>
                <img  src="https://i.ibb.co/pZYZ022/www-mynumi-net-BKHN10-L89-FFB1251-30-removebg-preview.png"    height="400">
                <h5><em>En su parte de enfrente lleva la cara de José Trinidad Cabañas, Y su reverso una foto Ciudad Universitaria UNAH. </em></h5>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>20 lempiras</h2>
                <img   src="https://i.ibb.co/N3pYM22/20-lempiras-own.jpg"       height="400" >
                <h5><em><br>En su parte de enfrente lleva la cara de Dionisio de Herrera, Y su reverso una foto de La Casa Presidencial.

                    </em></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>50 lempiras</h2>
                <img   src="https://i.ibb.co/sPCrfVh/precioso-de-billetes-honduras-pick-numero-88-50-lempira-removebg-preview.png"    height="400">
                <h5><em>En su parte de enfrente lleva la cara de Juan Manuel Gálvez, Y su reverso una foto del Banco Central de Honduras.</em></h5>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>100 lempiras</h2>
                <img   src="https://i.ibb.co/V99LNph/billete-de-banco-coleccion-honduras-pk-n-102-100-lempiras.jpg"      height="400" >
                <h5><em>En su parte de enfrente lleva la cara de José Cecilio del Valle, Y su reverso una foto de la casa en donde nació sabio del Valle.</em></h5>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <h2>500 lempiras</h2>
                <img   src="https://i.ibb.co/qYJBrCR/500-lempiras-own.jpg"    height="400">
                <h5><em><br>En su parte de enfrente lleva la cara de Ramón Rosa, Y su reverso una foto de las Minas de San Juancito.</em></h5>
            </div>
        </div>
    </div>
</div>




<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning mb-5">
            <h1 style="text-align: center">Ejemplos del uso de los billetes</h1>
            <h5><em></em></h5>
        </div>
    </div>
</div>

<!-- ejemplos de la resta-->



<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/nM9fw6b/Captura-de-pantalla-424.png"   height="300" >
                <h5><em></em></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img src="https://i.ibb.co/nshPHNf/Captura-de-pantalla-425.png"     height="300">
                <h5><em></em></h5>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/ftrTTwk/Captura-de-pantalla-426.png"      height="300" >

            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/tQWWy4W/Captura-de-pantalla-428.png"     height="300">
            </div>
        </div>
    </div>
</div>





<div class="container-fluid   d-flex justify-content-center pl-5" >
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img   src="https://i.ibb.co/Jtr0wcz/Captura-de-pantalla-429.png"        height="300" >


            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img  src="https://i.ibb.co/30syPWc/Captura-de-pantalla-427.png"     height="300">
            </div>
        </div>
    </div>
</div>


<!-- ejercicicos de los billetes -->



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
                <img src="https://i.ibb.co/fHpQcnX/Captura-de-pantalla-436.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo1"></h6>
                    <button class="btn btn-danger" onclick="resu1()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/Ws7pgbd/Captura-de-pantalla-437.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo2"></h6>
                    <button class="btn btn-danger" onclick="resu2()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/1fs53wg/Captura-de-pantalla-438.png"  class="card-img-top" alt="...">
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
                <img src="https://i.ibb.co/6FQ3wSM/Captura-de-pantalla-439.png"    class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo4"></h6>
                    <button class="btn btn-danger" onclick="resu4()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/wgntyc3/Captura-de-pantalla-440.png"    class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 id="demo5"></h6>
                    <button class="btn btn-danger" onclick="resu5()">Resultado</button>


                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/LQ4487n/Captura-de-pantalla-441.png"   class="card-img-top" alt="...">
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
