@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Adivinanzas Animales</title>




    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background:#3B5686;
        }

        body{

            background: #CCDDCC;

        }

        .btn {

            background: #FDFD96;
            border: gold 1px solid;
        }


        .card{
            background:aliceblue;
            border:navy 5px  solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

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

        #im {
            border: gold 5px dashed;

        }


        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #3B5686;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }

        #color{
            color: navy;
            text-align: center;



        }
        #player{
            width: 100%;

        }
        p{
            text-align: justify;
        }

    </style>


<script language="JavaScript">


    function resu1() {
        document.getElementById("demo1").innerHTML = "<h4>La Rana</h4>"
    }
    function resu2() {
        document.getElementById("demo2").innerHTML = "<h4>El Ratón</h4>"
    }
    function resu3() {
        document.getElementById("demo3").innerHTML = "<h4>La Luciérnaga</h4>"
    }
    function resu4() {
        document.getElementById("demo4").innerHTML = "<h4>El Cangrejo</h4>"
    }
    function resu5() {
        document.getElementById("demo5").innerHTML = "<h4>El Pollito</h4>"
    }
    function resu6() {
        document.getElementById("demo6").innerHTML = "<h4>El Camaleón</h4>"
    }
    function resu7() {
        document.getElementById("demo7").innerHTML = "<h4>La Abeja</h4>"
    }
    function resu8() {
        document.getElementById("demo8").innerHTML = "<h4>La Mariposa</h4>"
    }
    function resu9() {
        document.getElementById("demo9").innerHTML = "<h4>El Pingüino</h4>"

    }

</script>

</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>¡Adivinanzas de Animales!</em></h2>
            <p><em><br>
                    Las adivinanzas de animales ayudan al niño a pensar y ejercitar la mente de forma entretenida. Debido a que, se muestran como un divertido juego para el pequeño. Aprovecha los acertijos y realiza actividades didácticas y alegres donde el niño aprenda los nombres y características de cada animal.
                </em></p>
            <p id="color"><em><strong>Las respuestas estan al final.</strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  " >
    <div  class="row " >
        <div class="col-xl-4 p-5">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block " style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Canto en la orilla, vivo en el agua, no soy pescado ni cigarra. <br><br>¿Quién soy?<BR><BR></p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/AnimalesNum1.mp3" controls >
                    </audio>
                    <h6 id="demo1"></h6>
                    <button class="btn" onclick="resu1()">Respuesta</button>
                </div>
            </div>
        </div>

        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-5">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- El roer es mi trabajo, el queso mi aperitivo y el gato siempre será mi más temido enemigo. <br><br>¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num2.mp3" controls >
                    </audio>
                    <h6 id="demo2"></h6>
                    <button class="btn" onclick="resu2()">Respuesta</button>
                </div>
            </div>
        </div>

        <!-- tarjetas3 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Soy un trocito de luz en la noche. De día me escondo en la hierba. Parezco una esmeralda que el viento se lleva. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num3.mp3" controls >
                    </audio>
                    <h6 id="demo3"></h6>
                    <button class="btn" onclick="resu3()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor 2 -->
<div class="container-fluid   " >
    <div class="row " >
        <div class="col-xl-4 p-5">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Dos pinzas tengo y hacia atrás camino, de mar o de río en el agua vivo.<br> ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num4.mp3" controls >
                    </audio>
                    <h6 id="demo4"></h6>
                    <button class="btn" onclick="resu4()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4  p-5">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Madre me labró una casa sin puertas y sin ventanas, y cuando quiero salir rompo antes la muralla. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num5.mp3" controls >
                    </audio>
                    <h6 id="demo5"></h6>
                    <button class="btn" onclick="resu5()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- No es cama ni es león, y desaparece en cualquier rincón.<br> <br>¿Quién es?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num6.mp3" controls >
                    </audio>
                    <h6 id="demo6"></h6>
                    <button class="btn" onclick="resu6()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor3 -->
<div class="container-fluid " >
    <div class="row" >
        <div class="col-xl-4 p-5">
            <!-- tarjeta 7 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Vuelo entre las flores, vivo en una colmena, fabrico miel y también cera. <br>¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num7.mp3" controls >
                    </audio>
                    <h6 id="demo7"></h6>
                    <button class="btn" onclick="resu7()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-xl-4 p-5">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Soy un insecto que vuela entre las flores, tengo dos alitas de muchos colores. <br>¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num8.mp3" controls >
                    </audio>
                    <h6 id="demo8"></h6>
                    <button class="btn" onclick="resu8()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-xl-4 p-5">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- Viste de chaleco blanco y negro tiene su pecho. Es un ave que no vuela, pero sabe nadar derecho. ¿Quién soy?</p>
                    <audio  id="player" src="AudiosEspañol/Adivinanzas/Num8.mp3" controls >
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
            <audio  id="player" src="AudiosEspañol/Adivinanzas/RespAnimales.mp3" controls >
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
