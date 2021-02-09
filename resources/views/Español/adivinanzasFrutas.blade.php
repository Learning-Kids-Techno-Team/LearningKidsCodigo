@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas Frutas</title>
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

        #separadorInferior .content{

            width: 110%;
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

        #im {
            border: gold 6px dashed;

        }

        #color{
            color: navy;

        }

    </style>


<script language="JavaScript">


    function resu1() {
        document.getElementById("demo1").innerHTML = "<h4>La Pera</h4>"
    }
    function resu2() {
        document.getElementById("demo2").innerHTML = "<h4>La Fresa</h4>"
    }
    function resu3() {
        document.getElementById("demo3").innerHTML = "<h4>El Platano</h4>"
    }
    function resu4() {
        document.getElementById("demo4").innerHTML = "<h4>El Tomate</h4>"
    }
    function resu5() {
        document.getElementById("demo5").innerHTML = "<h4>La Zanahoria</h4>"
    }
    function resu6() {
        document.getElementById("demo6").innerHTML = "<h4>Los Ajos</h4>"
    }
    function resu7() {
        document.getElementById("demo7").innerHTML = "<h4>La Sandia</h4>"
    }
    function resu8() {
        document.getElementById("demo8").innerHTML = "<h4>La Manzana</h4>"
    }
    function resu9() {
        document.getElementById("demo9").innerHTML = "<h4>El Pimiento</h4>"

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
            <h2 id="color"><em><br>Adivinanzas de Frutas o Verduras!</em></h2>
            <p><em><br>
                    Las adivinanzas de futas o verduras ayudan al niño a pensar y ejercitar la mente de forma entretenida. Debido a que, se muestran como un divertido juego para el pequeño. Aprovecha los acertijos y realiza actividades didácticas y alegres donde el niño aprenda los nombres y características de cada fruta y verdura.
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
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Blanca por dentro, verde por fuera. Si quieres te lo digo, espera. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/19WL9-bqyZMi9RqvzixftvtZ5MpRYOyX0/preview" width="230" height="80"></iframe>
                    <h6 id="demo1"></h6>
                    <button class="btn" onclick="resu1()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- Una señorita muy señoreada, lleva sombrero verde y blusa colorada. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1qRxulmTz6aSf4S5N8bSijZckyScqM9ui/preview" width="230" height="80"></iframe>
                    <h6 id="demo2"></h6>
                    <button class="btn" onclick="resu2()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- No soy de plata, plata no soy. Ya te he dicho quién soy. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1-97qO7ZT8AGBybnWGB1qmgaJp_JFiMWk/preview" width="230" height="80"></iframe>
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
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- No toma té, ni toma café, y está colorado,¿sabes quién es?</p>
                    <iframe src="https://drive.google.com/file/d/1tQWCoe4B22x7PQ6KS6JwJcHA6qyiGvCI/preview" width="230" height="80"></iframe>
                    <h6 id="demo4"></h6>
                    <button class="btn" onclick="resu4()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 btn-primary-->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Es alargada y naranja, se la comen los conejos para así llegar a viejos. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1F8DdlYgzp4dlWG2wLydrvsbyn1VaZlv5/preview" width="230" height="80"></iframe>
                    <h6 id="demo5"></h6>
                    <button class="btn" onclick="resu5()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Tengo cabeza redonda, sin nariz, ojos ni frente, y mi cuerpo se compone tan sólo de blancos dientes. ¿Quién es?</p>
                    <iframe src="https://drive.google.com/file/d/1WOtMJnfXR9yKw-qbs4sRkciqVd3FR59R/preview" width="230" height="80"></iframe>
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
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Roja por dentro, verde por fuera. Si te la quieres comer, muchas semillas tendrás que morder. ¿Qué fruta es?</p>
                    <iframe src="https://drive.google.com/file/d/1SylTz0M4-XMvImO0q35D93k4_XxlvpUE/preview" width="230" height="80"></iframe>
                    <h6 id="demo7"></h6>
                    <button class="btn" onclick="resu7()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Somos verdes y amarillas o rojas. Redonda es nuestra forma, y Blancanieves se comió una de nosotras. ¿Qué fruta somos?</p>
                    <iframe src="https://drive.google.com/file/d/1g9patJPasnL2UxZPyyIvfUmwoJqpr-lv/preview" width="230" height="80"></iframe>
                    <h6 id="demo8"></h6>
                    <button class="btn" onclick="resu8()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/zZpFNst/Kids-and-Fruits-removebg-preview.png" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- ¡Pi!, cantan los pájaros, miento y digo la verdad; por muy listo que seas, creo que no acertarás. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1v95E0oegiLl2h01Uo23RtGSTCOl83Q_t/preview" width="230" height="80"></iframe>
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
            <iframe src="https://drive.google.com/file/d/1rRGIHIrqI_Twl9p3-XovkoDGxXQSlxeC/preview" width="300" height="80"></iframe>

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
