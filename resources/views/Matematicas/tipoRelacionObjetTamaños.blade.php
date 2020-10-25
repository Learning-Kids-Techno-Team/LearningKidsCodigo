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

            background: #FFEECC;

        }


        .card{
            background: #CCEECC;
            border:darkgreen 5px solid;
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
            background: darkgreen;
            border: #CCEECC 12px dotted;

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

<!-- contenedor Concept-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/GnFWc8T/jhk-removebg-preview.png" width="250" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡RELACIÓN DE OBJETOS!</em></h2>
            <h3 id="color"><em><br>Distingo tamaños.</em></h3>
            <p id="color"><em><strong>
                    Los tamaños se vinculan a que tan pequeño o grande resulta un objeto, persona o animal fisicamente.
                    </strong></em></p><br><br>
        </div>
    </div>
</div>

<!-- contenedor videoS-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1AT7B8YuaggSVKFIpg5gpiMOaTFHSDgUc/preview" width="500" height="350"></iframe>
            <h5 align="center"></h5>
        </div>
        <div class="col-md-6">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1GZPJQk2A3bjUbkI7u_LeCwth_SwbSCb7/preview" width="500" height="350"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/M5cMXCJ/ee97-removebg-preview.png"
                     width="400" height="350"><p align="center"><strong>Grande</strong></p>
                <img class="mx-auto d-block" src="https://i.ibb.co/NmFhxd3/b82d-removebg-preview.png"
                     width="200" height="150"><p align="center"><strong>Pequeño</strong></p>
                <div class="card-body">
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/5Tk8x4b/i81-removebg-preview.png"
                     width="380" height="350"><p align="center"><strong>Grande</strong></p>
                <img class="mx-auto d-block" src="https://i.ibb.co/qy2Ptdj/ugju-removebg-preview.png"
                     width="400" height="280"><p align="center"><strong>Pequeño</strong></p>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  center-block pl-5" id="color" >
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>¿Cuál es más grande?</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/sWhrw3Q/eading-removebg-preview.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title" align="center">¿El oso o el conejo?</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Repite en voz alta!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/bRz7Xd4/unnamed-removebg-preview-1.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title" align="center">¿El león o el ratón?</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>¿Cuál es más pequeño?</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/ckbWp1f/hjk-removebg-preview.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title">Pelota 1</h5>
                    <h5 class="card-title" align="center">Pelota 2</h5>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><em><br>¡Repite en voz alta!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/fDZGn53/zzz-removebg-preview.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title">La mamá</h5>
                    <h5 class="card-title" align="center">La niña</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <h2><em><br>¡Tan grande (pequeño) como...!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/FKRWbfR/mjk-removebg-preview.png"width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Las ranas tienen igual tamaño!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Igual que...!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/D7s9qtT/houses-removebg-preview.png" width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Las casas son de igual tamaño!</h5>
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
