@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas Numeros</title>
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
        document.getElementById("demo1").innerHTML = "<h4>El número 10</h4>"
    }
    function resu2() {
        document.getElementById("demo2").innerHTML = "<h4>El número 7</h4>"
    }
    function resu3() {
        document.getElementById("demo3").innerHTML = "<h4>El número 6</h4>"
    }
    function resu4() {
        document.getElementById("demo4").innerHTML = "<h4>El número 3</h4>"
    }
    function resu5() {
        document.getElementById("demo5").innerHTML = "<h4>El número 20</h4>"
    }
    function resu6() {
        document.getElementById("demo6").innerHTML = "<h4>El número 1</h4>"
    }
    function resu7() {
        document.getElementById("demo7").innerHTML = "<h4>El número 1</h4>"
    }
    function resu8() {
        document.getElementById("demo8").innerHTML = "<h4>El número 2</h4>"
    }
    function resu9() {
        document.getElementById("demo9").innerHTML = "<h4>El número 5</h4>"

    }

</script>

</head>
<body>

<!-- navbar-->
@section('content')

<!-- contenedor -->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Adivinanzas de Números!</em></h2>
            <p><em><br>
                    Las adivinanzas de números son la forma más entretenida y educativa para pasar el rato con los niños. Ya que, por medio de ellas, aprenden los números, estimulan su capacidad de pensar y se sieten animados con ganas de seguir aumentando sus conocimientos.
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Un bastón alargado tiene un balón redondito como su compañero, si sumas 5 y 5 sabrás a quién me refiero. ¿Qué número es?</p>
                    <iframe src="https://drive.google.com/file/d/1f3T80CRVHb4WKBvvNAOHsvEVpJoHB7w1/preview" width="230" height="80"></iframe>
                    <h6 id="demo1"></h6>
                    <button class="btn" onclick="resu1()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/MpMC7mk/descarga-1.jpg"  class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- Si quieres saber quién soy, espera a que llueva. Contando los colores del arcoíris tendrás la prueba. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1RWrltT3Y2DvWvo9k8q2gTAyrcZHKzkBm/preview" width="230" height="80"></iframe>
                    <h6 id="demo2"></h6>
                    <button class="btn" onclick="resu2()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Puesto de una manera paso a ser un número par, pero paso a ser otro si la vuelta me das. ¿Qué número es?</p>
                    <iframe src="https://drive.google.com/file/d/1FTJgz10tMR_AvFlrq0_mkyJil3YFyn69/preview" width="230" height="80"></iframe>
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im" >
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Soy uno más que dos y tengo forma de serpiente, pero no la que más miente. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1AB2_FDRlcblI-o1ONd0L8vnHEHnt39PS/preview" width="230" height="80"></iframe>
                    <h6 id="demo4"></h6>
                    <button class="btn" onclick="resu4()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Cuenta los dedos de tu mano y también los de uno de tus pies y sabrás que número es. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/12eFlWnTzpltXg9ozM1e4K8kV-An__-Ty/preview" width="230" height="80"></iframe>
                    <h6 id="demo5"></h6>
                    <button class="btn" onclick="resu5()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Si quieres contar, por mí tienes que empezar. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1TWBXRW_gWm68puQQOWgLrgpBAxLHlpox/preview" width="230" height="80"></iframe>
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- De muchos hijos que somos, el primero yo nací, pero soy el menor de todos. ¿Cómo puede ser así? ¿sabes cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1Vm0RMnMtPaa6WLYJP4rH69hjEnAdBxr0/preview" width="230" height="80"></iframe>
                    <h6 id="demo7"></h6>
                    <button class="btn" onclick="resu7()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Soy más de uno sin llegar a tres y llego a cuatro cuando dos me des. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/15WoSXUuMPxeBUwySyM0DszkiGZnyx4G9/preview" width="230" height="80"></iframe>
                    <h6 id="demo8"></h6>
                    <button class="btn" onclick="resu8()">Respuesta</button>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="..." id="im">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- ¿Qué número tiene el mismo número de letras que el valor que expresa? Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1XvggfhCce1hVOnz3eA6zcHrubZMnpZc2/preview" width="230" height="80"></iframe>
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
            <iframe src="https://drive.google.com/file/d/1_dUoM20BOXLcJ68-smYqmUVIBA_rdl_-/preview" width="300" height="80"></iframe>
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
