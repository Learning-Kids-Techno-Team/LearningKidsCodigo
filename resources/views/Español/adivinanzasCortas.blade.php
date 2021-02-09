@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas cortas</title>
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

            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #3B5686;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }


        .btn {

            background: #FDFD96;
            border: gold 1px solid;
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
            border: gold 6px dashed;

        }


        #color{
            color: navy;



        }

    </style>


<script>


    function resu1() {
        document.getElementById("demo1").innerHTML = "<h4>El Bombillo</h4>"
    }
    function resu2() {
        document.getElementById("demo2").innerHTML = "<h4>La Sal</h4>"
    }
    function resu3() {
        document.getElementById("demo3").innerHTML = "<h4>El Ajo</h4>"
    }
    function resu4() {
        document.getElementById("demo4").innerHTML = "<h4>El Girasol</h4>"
    }
    function resu5() {
        document.getElementById("demo5").innerHTML = "<h4>La Letra L</h4>"
    }
    function resu6() {
        document.getElementById("demo6").innerHTML = "<h4>La Espuma</h4>"
    }
    function resu7() {
        document.getElementById("demo7").innerHTML = "<h4>La Botella</h4>"
    }
    function resu8() {
        document.getElementById("demo8").innerHTML = "<h4>El Gato </h4>"
    }
    function resu9() {
        document.getElementById("demo9").innerHTML = "<h4>La Cuchara</h4>"

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
            <h2 id="color"><em><br>Adivinanzas Cortas!</em></h2>
            <p><em><br>
                    Las adivinanzas cortas ayudan al niño a pensar y ejercitar la mente de forma entretenida. Debido a que, se muestran como un divertido juego para el pequeño. Aprovecha los acertijos y realiza actividades didácticas y alegres.
                </em></p>
            <p id="color"><em><strong>Las respuestas estan al final.</strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Es pequeña como una pera, pero alumbra la casa entera. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/11SXZ2RRv9fQT8To781ab20hDJllHYL7V/preview" width="230" height="80"></iframe>
                    <h6 id="demo1"></h6>
                    <button class="btn" onclick="resu1()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- La han sacado del mar, es blanca y también salada. La encuentras en la ensalada. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1STd8UKWmh61chq8BguHx0JPSF84p9uaY/preview" width="230" height="80"></iframe>
                    <h6 id="demo2"></h6>
                    <button class="btn" onclick="resu2()">Respuesta</button>

                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Tiene dientes, pero no puede comer. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1smUobulAXe8PcOVEkTiuOu6iNXT4r4mx/preview" width="230" height="80"></iframe>
                    <h6 id="demo3"></h6>
                    <button class="btn" onclick="resu3()">Respuesta</button>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- contenedor 2 -->
<div class="container-fluid   center-block pl-5  " >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Bonita flor que gira buscando el sol. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/18xeyAnRu3bYRt5vKU9_ZWsYv7GGgBZQ3/preview" width="230" height="80"></iframe>
                    <h6 id="demo4"></h6>
                    <button class="btn" onclick="resu4()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Una letra alta y delgada es. La luna y el sol la llevan, pero en el aire no la ves. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1eQqdBBCJDMNxnzzsYgC-vIdLEKVipFxQ/preview" width="230" height="80"></iframe>
                    <h6 id="demo5"></h6>
                    <button class="btn" onclick="resu5()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Es puma y no es animal; vuela y flota. ¿Qué será?</p>
                    <iframe src="https://drive.google.com/file/d/1b1Zn0fndjj-0JG3kTCi2uCLNqVGzTgt0/preview" width="230" height="80"></iframe>
                    <h6 id="demo6"></h6>
                    <button class="btn" onclick="resu6()">Respuesta</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor3 -->
<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 7 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Tiene cuello, pero no cabeza. ¿Sabes qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1tIZdr5THQ0X8HmUPDD8-nysAKJk0mYY9/preview" width="230" height="80"></iframe>
                    <h6 id="demo7"></h6>
                    <button class="btn" onclick="resu7()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Tiene patas y bigotes. Caza ratones y araña, pero no es araña. ¿Quién es?</p>
                    <iframe src="https://drive.google.com/file/d/1sQvzGBMvSkis2HeZualyckIBOA1OFyc6/preview" width="230" height="80"></iframe>
                    <h6 id="demo8"></h6>
                    <button class="btn" onclick="resu8()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- Sube llena y baja vacía. Si no se da prisa, la sopa se enfría. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1tts5n9ocmkyH27plL0Hai2E08NVn49g8/preview" width="230" height="80"></iframe>
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
            <iframe src="https://drive.google.com/file/d/1jgNM4u6jzRBDMi5i3i-S-XUeyD3p7FOS/preview" width="300" height="80"></iframe>
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
