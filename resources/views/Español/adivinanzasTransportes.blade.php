@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas Transporte</title>
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
            background:#3B5686;
        }

        body{

            background: #CCDDCC;

        }


        .card{
            background:aliceblue;
            border:navy 5px  solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #3B5686;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }

        #tar1{
            background: #CCEECC;
            border:darkgreen 5px solid;

        }

        #tar2{
            background: #f1DAFF;
            border: fuchsia 5px solid;

        }

        #tar3{
            background: #FFEECC;
            border: darkorange 5px solid;

        }


        .btn {

            background: #FDFD96;
            border: gold 1px solid;
        }


        #color{
            color: navy;
            text-align: center;

        }


        #im {
            border: gold 6px dashed;

        }
        #player{
            width: 100%;

        }
        p{
            text-align: justify;
        }

    </style>

<script>


    function resu1() {
        document.getElementById("demo1").innerHTML = "<h4>El Tren</h4>"
    }
    function resu2() {
        document.getElementById("demo2").innerHTML = "<h4>El Carro</h4>"
    }
    function resu3() {
        document.getElementById("demo3").innerHTML = "<h4>El El Avión</h4>"
    }
    function resu4() {
        document.getElementById("demo4").innerHTML = "<h4>El Helicóptero</h4>"
    }
    function resu5() {
        document.getElementById("demo5").innerHTML = "<h4>El Tráiler</h4>"
    }
    function resu6() {
        document.getElementById("demo6").innerHTML = "<h4>El Velero</h4>"
    }
    function resu7() {
        document.getElementById("demo7").innerHTML = "<h4>El Barco</h4>"
    }
    function resu8() {
        document.getElementById("demo8").innerHTML = "<h4>El Bus</h4>"
    }
    function resu9() {
        document.getElementById("demo9").innerHTML = "<h4>La Motocicleta</h4>"

    }

</script>

</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>¡Adivinanzas de Transportes!</em></h2>
            <p><em><br>
                    Las adivinanzas de transportes son una forma entretenida y educativa para pasar el rato con los niños. Reta
                    tu mente y pon a prueba tus conocimientos acerca de los medios de transporte respondiendo estos divertidos acertijos.
                </em></p>
            <p id="color"><em><strong>Las respuestas estan al final.</strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  d-flex justify-content-center" >
    <div  class="row" >
        <div class="col-xl-4 p-5">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Por un camino de hierro voy corriendo muy veloz, doy un fuerte silbido cuando llego a la estación. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/tra1.mp3" controls >
                    </audio>
                    <h6 id="demo1"></h6>
                    <button class="btn" onclick="resu1()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-5">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- Llevo a la familia y a su equipaje. Paso todas las noches en el garaje. ¿Quién soy?</p>
                    <br>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer2.mp3" controls >
                    </audio>
                    <h6 id="demo2"></h6>
                    <button class="btn" onclick="resu2()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Soy pájaro sin nido con las alas de metal, las ruedas tengo de goma y los ojitos de cristal. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer3.mp3" controls >
                    </audio>
                    <h6 id="demo3"></h6>
                    <button class="btn" onclick="resu3()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- contenedor 2 -->
<div class="container-fluid   d-flex justify-content-center  " >
    <div class="row " >
        <div class="col-xl-4 p-5">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Encima de la cabeza gira mi gran abanico y en la punta de la cola gira otro pequeñito. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer4.mp3" controls >
                    </audio>
                    <h6 id="demo4"></h6>
                    <button class="btn" onclick="resu4()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-5  ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png"  class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Tengo seis ruedas y a veces más. Llevo la carga donde deba llegar. ¿Quién soy?</p>
                   <br>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer5.mp3" controls >
                    </audio>
                    <h6 id="demo5"></h6>
                    <button class="btn" onclick="resu5()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Camino sobre las olas y tengo vestidos blancos. Si el viento me empuja fuerte mucho más rápido ando. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer6.mp3" controls >
                    </audio>
                    <h6 id="demo6"></h6>
                    <button class="btn" onclick="resu6()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor3 -->
<div class="container-fluid  d-flex justify-content-center" >
    <div class="row m-5" >
        <div class="col-xl-4 p-5">
            <!-- tarjeta 7 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Si por el mar quieres viajar, ¿dónde te vas a montar? ¿Quién soy?</p>
                    <br><br>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer7.mp3" controls >
                    </audio>
                    <h6 id="demo7"></h6>
                    <button class="btn" onclick="resu7()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-xl-4 p-5 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Mi misión es transportar y en la parada debo parar. Vengo de muchos colores, pero si te llevo a la escuela, mi color es amarillo. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer8.mp3" controls >
                    </audio>
                    <h6 id="demo8"></h6>
                    <button class="btn" onclick="resu8()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- Vehículo soy, hago muchísimo ruido, pero sólo dos viajan conmigo. ¿Quién soy?</p>
                   <br><br>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Nmer9.mp3" controls >
                    </audio>
                    <h6 id="demo9"></h6>
                    <button class="btn" onclick="resu9()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de Respuestas-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/5Rdp7jk/pil-removebg-preview.png" width="250" />
            <!-- Btn respuestas -->
            <audio  id="player" src="AudiosEspañol/Adivinanzas/RespTran.mp3" controls >
            </audio>
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
