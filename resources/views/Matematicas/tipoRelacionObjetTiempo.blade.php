<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Relacion de Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background:#FF7800;
        }

        body{

            background: #FFEECC ;

        }


        .card{
            background: lightblue;
            border: cornflowerblue 5px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #FF7800;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }


        #tar2{
            background: cornflowerblue;
            border: lightblue 12px dotted;

        }

        #tar3{
            background: lightblue;
            border: cornflowerblue 5px solid;

        }


        #color{
            color: darkblue;

        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- href me lleva a la pantalla principal -->
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://learningkidscodigo.test/pantallaPrincipal">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkidscodigo.test/pantallaPrincipalDeLaClaseDeEspa%C3%B1ol">Español</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkidscodigo.test/pantallaClaseMat">Matematicas</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkidscodigo.test/pantallaPrincipalDeCienciasNaturales">Ciencias Naturales</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkidscodigo.test/pantallaPrincipalDeLaClaseDeCienciasSociales">Ciencias Sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inicio de sesion</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- contenedor Concepto-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 ">
            <img class="mx-auto d-block" src="https://i.ibb.co/gz1sCPM/gu-removebg-preview.png" width="350" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡RELACIÓN DE OBJETOS!</em></h2>
            <h3 id="color"><em><br>Reconozco el tiempo.</em></h3>
            <p id="color"><em><strong>
                        El tiempo se vincula a un período determinado durante el que se
                        realiza una acción o se desarrolla un acontecimiento.
                    </strong></em></p>
        </div>
    </div>
</div>

<!-- contenedores de el sol y luna-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/hmGQWp5/ded.png" width="400"/>
        </div>
        <div class="col-md-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/TLWBKjp/noch.png" width="450"/>
        </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Observo y analizo!</em></h2>
            <div class="card" style="width: 28rem;">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/kmJsKCR/gictor.jpg" width="438" height="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Día!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Tiempo!</em></h2>
            <div class="card" style="width: 28rem;">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/R0xPzDT/feliz.jpg"  width="438" height="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Noche!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor video-->
<div class="container-fluid" id="color"><h2 align="center"><em><br>¡Veamos juntos lo que hacemos en el día y la noche!</em></h2>
    <div class="row">
        <div class="col-md-12">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1B9A4Rhj97fkbaLbP9QnpMOp2vn3oHLf-/preview" width="650" height="400"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de rojo-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Actividades del día!</em></h2>
    <div  class="card">
        <div class="row m-5" >
            <div  class="col-md-3">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/mNCKKB7/scol.jpg"  width="250" />
                <h5 class="card-title" align="center">Vamos a la escuela</h5>
            </div>
            <div class="col-md-3">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/J7dMmpv/vector9.jpg" width="250"/>
                <h5 class="card-title" align="center">Recibimos clases</h5>
            </div>
            <div class="col-md-3">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/XC4fsYR/comer.jpg" width="250"/>
                <h5 class="card-title" align="center">Comemos</h5>
            </div>
            <div class="col-md-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/R0pffSX/sdl.jpg" width="275" />
            <h5 class="card-title" align="center">Jugamos</h5>
        </div>
        </div>

    </div>
</div>

<!-- contenedor objet-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Otras Actividades!</em></h2>
    <div class="row m-5">
        <div class="col-md-3">
            <img class="mx-auto d-block" src="https://i.ibb.co/09x3v35/chic-removebg-preview.png" width="250" height="210">
            <h5 class="card-title" align="center" >Desayunar</h5>
        </div>
        <div class="col-md-3">
            <img class="mx-auto d-block" src="https://i.ibb.co/ZmTFcDP/ooo-removebg-preview.png" width="250" height="210">
            <h5 class="card-title" align="center">Vestirte</h5>
        </div>
        <div class="col-md-3">
            <img class="mx-auto d-block" src="https://i.ibb.co/X5YzQ5P/jhgc-removebg-preview.png" width="250" height="210">
            <h5 class="card-title" align="center">Regar las plantas</h5>
        </div>
        <div class="col-md-3">
            <img class="mx-auto d-block" src="https://i.ibb.co/qkLMVMg/di66-removebg-preview.png" width="250" height="210">
            <h5 class="card-title" align="center">Compartir con mis amiguitos</h5>
        </div>
    </div>
</div>

<!-- contenedor de calendario-->
<div class="container-fluid  center-block pl-5"><h2 id="color"><em><br>¡Calendario!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-6">
                <img id="tar2" class="mx-auto d-block" src="https://i.ibb.co/vwBpLP6/oid.jpg" width="650"/>
                <h5 class="card-title" align="center"></h5>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/hXySzsP/sst-removebg-preview.png" width="350"/>
                <h5 id="color" class="card-title" align="center">SEMANA, MES Y AÑO</h5><br><br>
            </div>
        </div>
    </div>
</div>

<!-- contenedor video calendario-->
<div class="container-fluid" id="color"><h2 align="center"><em><br>¡Cantemos juntos y aprendamos el calendario!</em></h2>
    <div class="row">
        <div class="col-md-12">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1U4eAkx77iCq_UOy6-StJp_JV_Rii7CTn/preview" width="650" height="400"></iframe>
            <h5 align="center"></h5>
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
