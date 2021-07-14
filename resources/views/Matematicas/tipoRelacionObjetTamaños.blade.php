@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Tamaños</title>
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
            background:#FF7E5A;
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

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #FF7E5A;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }


        #tar2{
            background: darkgreen;
            border: #CCEECC 12px dotted;

        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor Concept-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-xl-4 p-3" >
            <img class="mx-auto d-block" src="https://i.ibb.co/GnFWc8T/jhk-removebg-preview.png" width="250" />

        </div>
        <div class="col-xl-8 p-3">
            <h2 class="text-center">¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center">Distingo tamaños.</h3>
            <p class="text-justify"><strong>
                    Los tamaños se vinculan a que tan pequeño o grande resulta un objeto, persona o animal fisicamente.
                    </strong></p><br><br>
        </div>
    </div>
</div>

<!-- contenedor videoS-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-6 p-3">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1AT7B8YuaggSVKFIpg5gpiMOaTFHSDgUc/preview"
                    width="350" ></iframe>
            <h5 align="center"></h5>
        </div>
        <div class="col-xl-6 p-3">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1GZPJQk2A3bjUbkI7u_LeCwth_SwbSCb7/preview"
                    width="350" ></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>
<br>
<!-- contenedor de las tarjetas -->
<div class="container-fluid" >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/M5cMXCJ/ee97-removebg-preview.png"
                     width="200" >
                <br>
                <p align="center"><strong>Grande</strong></p>
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/NmFhxd3/b82d-removebg-preview.png"
                     width="200" height="150"><p align="center"><strong>Pequeño</strong></p>
                <div class="card-body">
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/5Tk8x4b/i81-removebg-preview.png"
                     width="180" >
                <br>
                <p align="center"><strong>Grande</strong></p>

                <img class="mx-auto d-block" src="https://i.ibb.co/qy2Ptdj/ugju-removebg-preview.png"
                     width="248" ><p align="center"><strong>Pequeño</strong></p>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid "  >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <h2 class="text-center" ><br>¿Cuál es más grande?</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/sWhrw3Q/eading-removebg-preview.png"
                     width="200" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¿El oso o el conejo?</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¡Repite en voz alta!</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/bRz7Xd4/unnamed-removebg-preview-1.png"
                     width="215" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¿El león o el ratón?</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¿Cuál es más pequeño?</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/ckbWp1f/hjk-removebg-preview.png"
                     width="300" >
                <div class="card-body">
                    <p class="text-center"><strong>Pelota 1-Pelota </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¡Repite en voz alta!</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/fDZGn53/zzz-removebg-preview.png"
                     width="264" >
                <div class="card-body">
                    <p class="text-center"><strong>La mamá-La niña</strong></p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <h2 class="text-center"><br>¡Tan grande (pequeño) como...!</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/FKRWbfR/mjk-removebg-preview.png"
                     width="300" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Las ranas tienen igual tamaño!</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <h2  class="text-center"><br>¡Igual que...!></h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/D7s9qtT/houses-removebg-preview.png"
                     width="210" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Las casas son de igual tamaño!</h5>
                </div>
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

@endsection
