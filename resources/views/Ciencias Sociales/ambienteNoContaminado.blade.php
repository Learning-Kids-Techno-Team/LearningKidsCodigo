<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>El Ambiente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #60A71B;
        }

        body{

            background: #dcfecb;

        }


        .card{
            background: #dcfecb;
            border: darkgreen 10px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: #dcfecb;
            border: darkgreen 10px solid;

        }

        #color{
            color: darkgreen;

        }

    </style>
</head>
<body>
<!-- contenedor navbar-->
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

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/Hx99Shk/ju-removebg-preview.png" width="400" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡El Medio Ambiente!</em></h2>
            <h3 id="color"><em><br>Ambiente Libre de Contaminación.</em></h3>
            <p id="color"><em><strong>El ambiente es todo aquello que nos rodea: el cielo, el suelo, el agua, las plantas, los animales
                        y el resto de las personas que se encuentran donde vivimos y conforman nuestro medio ambiente.
                        Es el elemento en el que vivimos y nos desarrollamos.
                    </strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor ambient-->
<div class="container-fluid  center-block pl-5">
    <div class="row" >
        <div class="col-md-4">
            <h2 class="text-center" id="color"><strong><em><br><br><br>El ambiente sano es bueno para nuestra salud; por eso es un
                        deber cuidar y conservar el ambiente libre de contaminación.</em></strong></h2>
        </div>
            <div class="col-md-8">
                <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/LtZ5SVZ/bh-removebg-preview.png"  width="700" height="450"/>
            </div>
        </div>
</div>

<!-- contenedores de -->
<div class="container-fluid" id="color"><h2 align="center"><em><br>¡Elementos que encontramos en un ambiente libre de contaminación!</em></h2>
    <div class="row">
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/jZRTXh5/images-arb.jpg" width="260" height="200"/>
            <h5  align="center">Árboles verdes</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/pQcXbLL/co.jpg" width="260" height="200"/>
            <h5 align="center">Agua limpia</h5>
        </div>
        <div class="col-md-4"><br>
            <img  class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/PxszWHy/61ld2-JKg-EL-AC-SX466.jpg" width="260" height="200"/>
            <h5 align="center">Animales sanos</h5>
        </div>
    </div>
</div>

<!-- contenedor2 de amb-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/GcqK8kH/yyy.jpg" width="260" height="200"/>
            <h5 align="center">Aire limpio</h5>
        </div>
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/3cpN20T/zoo.jpg" width="260" height="200"/>
            <h5 align="center">Ambiente sin basura</h5><br>
        </div>
    </div>
</div>

<!-- contenedor-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Cuidemos!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/98hvmtH/jhgc-removebg-preview-1.png" width="270"/>
                <h5 class="card-title" align="center">Las plantas</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/k5ZYLVS/ag-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">El agua</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/jWfDcJy/jjj-removebg-preview-1.png" width="230"/>
                <h5 class="card-title" align="center">Los árboles</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor suge-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>Observo y aprendo:</em></h2>
    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/vhGWS2p/fgo.jpg"  width="300" height="240">
                <h5 class="card-title" align="center">Mantengo mi ambiente limpio, deposito la basura en su lugar</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/bFvHgY9/nu.jpg"  width="300" height="240">
                <h5 class="card-title" align="center">Cuido los animalitos, el agua y el ambiente</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/KXB4CZ4/sd.jpg" width="300" height="240">
                <h5 class="card-title" align="center">Disfruto nuestro medio ambiente limpio</h5>
            </div>
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
