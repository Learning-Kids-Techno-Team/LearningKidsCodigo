<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Animales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>

        body {
            background: #FFEECC;
        }


        .card{
            background: #CCEECC;
            border-bottom-left-radius: 50%;
            border: #60A71B 8px solid;


        }


        .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 80%;
            border-top-right-radius:80%;


        }


        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background: #FDFD96;
        }



        .navbar{
            background: #FDFD96;

        }

        #separadorDePagina{
            background: lightblue ;
            border: cornflowerblue 10px dashed;
        }


        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }



        .btn {

            background: #FDFD96;
            border: gold 1px solid;
        }

        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
            background: #FFEECC;

        }

        #dif {
            background: #FDFD96;
        }

        #im {
            border: #60A71B 5px dotted;

        }


    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
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

<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row" >
        <div class="col-md-12" id="fondo">
            <img src="https://i.ibb.co/wgQ9vgp/bio-removebg-preview.png" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/4dxbpDV/jls-removebg-preview.png"  width="250" height="200" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Quiénes son los animales?
                </em></h2>

            <p class="text-center">
                <strong><em><br>Son aquellos seres vivos que se mueven por su propio impulso, sienten y cumplen el ciclo vital de nacer,
                        crecer, reproducirse, morir, y alimentarse. Se diferencian de los seres humanos por la falta de razón.<br>
                        Además se pueden dividir en dos grandes grupos: animales vertebrados y animales invertebrados.
                    </em></strong> </p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" style="background: #FFEECC"><h2 align="center"><em><br>¡Tipos de Animales!</em></h2>
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/zPdVHCs/et.jpg"  width="445" height="280">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Vertebrados!</h5>
                    <a href="http://learningkidscodigo.test/animalesvertebrados" class="btn">Leer</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 30rem;">
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/8KGQR9w/inv.jpg" width="445" height="280">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Invertebrados!</h5>
                    <a href="http://learningkidscodigo.test/animalesinvertebrados" class="btn">Leer</a>
                </div>
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
