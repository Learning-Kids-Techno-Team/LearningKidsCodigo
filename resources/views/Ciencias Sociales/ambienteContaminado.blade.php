@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>ambiente contaminado</title>
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
            background: #60A71B;
        }

        body{

            background: #dcfecb;

        }


        .card{
            background: #FDFD96;
            border: gold 5px double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: #FFEECC;
            border:gold 10px solid;

        }

        #color{
            color: darkgreen;

        }





    </style>
</head>
<body>

<!-- contenedor navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-4"><br>

            <img class="mx-auto d-block" src="https://i.ibb.co/3sgdbRQ/original-removebg-preview.png" width="400" />


        </div>
        <div class="col-md-8" style="text-align: justify;">
            <h2 id="color" class="text-center"><em><br>¡El Medio Ambiente!</em></h2>
            <h3 id="color" style="text-align: center "><br>Ambiente Contaminado</h3>
            <p id="color" style="text-align:justify; font-size: large"><strong>Contaminación ambiental a la presencia de componentes nocivos
                        (ya sean químicos, físicos o biológicos) en el medio ambiente (entorno natural y artificial),
                        que supongan un perjuicio para los seres vivos que lo habitan, incluyendo a los seres humanos
                        y animales.<br>
                        La contaminación ambiental está originada principalmente por causas derivadas de la actividad humana.
                </strong>
                    </p><br><br>
        </div>
    </div>
</div>


<!-- contenedor ambient-->
<div class="container-fluid ">
    <div class="row" >
        <div class="col-xl-7">
            <h2 id="color" style="text-align: justify">
                <strong><em><br>
                        La contaminación es la presencia o acumulación de sustancias
                        en el medio ambiente que afectan negativamente el entorno y las condiciones de vida,
                        así como la salud o la higiene de los seres vivos.
                    </em></strong></h2>
        </div>
        <div class="col-xl-5">
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/ZSYk69d/cote.jpg"  width="500" height="440"/>
        </div>
    </div>
</div>

<!-- contenedor text-->
<div class="container-fluid " id="color"><h2><em><br></em></h2>
    <div class="card mx-auto d-block">
        <div class="row " style="text-align: justify" >
            <div class="col-xl-12">
                <h2 id="color"><strong><em>Si nosotros echamos basura en las calles, esa basura es arrastrada
                        por las corrientes y obstruyen los tragantes; entonces, el agua corre por las calles y se
                        producen inundaciones.</em></strong></h2>
            </div>
        </div>
    </div>
</div>

<!-- contenedores-->
<div class="container-fluid" id="color"><h2><em><br>¿Qué encontramos en un ambiente contaminado?</em></h2>
    <div class="row">
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/SVG2N0g/parq.jpg" width="260" height="200"/>
            <h5  align="center">Basura</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/1qKxZZR/contaminacion-del-agua.jpg" width="260" height="200"/>
            <h5 align="center">Agua contaminada</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/RBKckGr/ah.jpg" width="260" height="200"/>
            <h5 align="center">Un ambiente sin árboles</h5>
        </div>
    </div>
</div>
<!-- contenedor2 de colres-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/WDBzJDf/ssd.gif" width="260" height="200"/>
            <h5 align="center">Desechos humanos</h5>
        </div>
        <div class="col-md-6"><br>
            <img class="rounded-circle mx-auto d-block bg-info" src="https://i.ibb.co/D5xKBsC/dkl-removebg-preview-1.png" width="260" height="200"/>
            <h5 align="center">Humo en el aire</h5><br>
        </div>
    </div>
</div>


<!-- contenedor de imag-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Contaminantes de nuestro ambiente!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/7yrw1zh/insec-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">Insecticidas</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/WzXQ5Cw/ak-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">Humo</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/ZcnNd0W/aer-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">Aerosoles</h5>
            </div>
        </div>
    </div>
</div>

<!-- contenedor-->
<div class="container-fluid " id="color">
    <br>
    <h2 class="text-center"><em></em>Los contaminantes en el agua y desechos de basura</h2>
    <br>
    <div class="row" >
        <div class="col-xl-6 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/hcrW3dz/ko.png" width="310">
            </div>
        </div>
        <div class="col-xl-6 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/vmSVhnM/aas.jpg" width="310">
            </div>
    </div>
</div>

<!-- contenedor suge-->
<div class="container-fluid" id="color"><h2 class="text-center"><em><br>El ambiente también se contamina y se destruye cuando:</em></h2><bR><bR>
    <div class="row" >
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/cccwxMg/o.jpg"  width="310" height="240">
                <h5 class="card-title" align="center">Se queman los bosques</h5>
            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/vJv2tk2/petro.jpg" width="310" height="240">
                <h5 class="card-title" align="center">Hay derrame de petróleo</h5>
            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/dK4PBcJ/tala.jpg" width="310" height="240">
                <h5 class="card-title" align="center">Se talan los árboles</h5>
            </div>
        </div>

    </div>
</div>

<!-- separador -->
<div id="separadorInferior">
    <div class="content">
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
