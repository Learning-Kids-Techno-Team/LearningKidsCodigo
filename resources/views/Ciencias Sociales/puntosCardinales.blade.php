<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Puntos Cardinales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #60A71B;
        }


        body{

            background:#dcfecb;

        }


        .card{
            background: lightblue;
            border: cornflowerblue 8px solid;
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
            background: lightblue;
            border: cornflowerblue 10px dashed;

        }

        #color{
            color: #3B5686;

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

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/QdqbS2w/img-removebg-preview.png"  width="400" />

        </div>
        <div class="col-md-8">
            <h2 id="color" class="text-center"><em><br>¡Puntos Cardinales!</em></h2>
            <h3 id="color" ><em><br>¿Qué son los puntos cardinales?</em></h3>
            <p id="color" class="text-center"><em><strong>Los puntos cardinales son los cuatro sentidos que conforman un sistema de referencia cartesiano para representar la orientación en un mapa o en la propia superficie terrestre.
                    </strong></em></p><br><br><br><br>
        </div>
    </div>
</div>


<!-- contenedor clima-->
<div class="container-fluid  center-block pl-5">
    <div class="row" >
        <div class="col-md-4">
            <h2 class="text-center" id="color"><strong><em>Los cuatro puntos son:<br></em></strong><br>
                        <ul><li><strong>Norte: </strong>Se representa con la letra<strong>(N)</strong></li>
                    <li><strong>Sur: </strong>Se representa con la letra<strong>(S)</strong></li>
                    <li><strong>Este:</strong>Se representa con la letra<strong>(E)</strong></li>
                            <li><strong>Oeste:</strong>Se representa con la letra<strong>(O)</strong></li></ul></h2>
        </div>
        <div class="col-md-8 ">
            <img id="bor"  src="https://i.ibb.co/ZfYvyk3/rosa3-removebg-preview.png"  width="680" height="460"/>
        </div>
    </div>
</div>



<!-- contenedor suge-->
<div class="container-fluid  center-block pl-3" id="color"><h2><em><br>Observo y aprendo:</em></h2>
    <div class="row">
        <div class="col-md-3 p-2">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/qNWmGp0/norte.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Norte!</h5>
                <p>Es el punto cardinal que indica, sobre un meridiano, la dirección al polo norte geográfico. En el hemisferio norte, se corresponde con el punto del horizonte cuya perpendicular pasa por la estrella polar. <br>A la ubicación o a la dirección norte se les llama septentrional o boreal.</p>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/5YwR3cx/sur.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Sur!</h5>
                <p><br>Es el punto cardinal que indica, sobre un meridiano, la dirección al Polo Sur geográfico.<br> <br><br>Es uno de los cuatro puntos cardinales, situado diametralmente opuesto al norte. </p>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/y0kyxnn/este.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Este!</h5>
                <p>Es uno de los cuatro puntos cardinales.La perpendicular a la meridiana corta al horizonte en los puntos este y oeste.<br>También recibe el nombre de oriente o levante. Se corresponde aunque no exactamente con el punto del horizonte por donde sale el Sol, de ahí el nombre de levante (zona donde el Sol se levanta).</p>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/wpSLm4z/oeste.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Oeste!</h5>
                <p>El oeste es uno de los cuatro puntos cardinales.<br> También recibe el nombre de occidente o poniente u ocaso, ya que es en el oeste donde se pone el Sol. <br><br>Como adjetivo se suele emplear occidental.</p>
            </div>
        </div>
    </div>
</div>
<br>



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

