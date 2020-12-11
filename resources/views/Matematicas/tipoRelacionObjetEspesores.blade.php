@extends('layouts.app')

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
            background: #FDFD96;
            border: gold 5px solid;
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
            background: gold ;
            border: #FDFD96 12px dotted;


        }



        #color{
            color: darkgreen;

        }

    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concep-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/J7z9d3G/6eb1-removebg-preview.png" width="280" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡RELACIÓN DE OBJETOS!</em></h2>
            <h3 id="color"><em><br>Distingo espesores.</em></h3>
            <p id="color"><em><strong>
                        Los espesores se vinculan a que tan grueso o delgado resulta un objeto.
                        Persona o animal fisicamente (gordo o flaco) en relacion de otro.
                    </strong></em></p><br><br>
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid" id="color" >
    <div class="row">
        <div class="col-md-12" >
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1QtyXDhPsS5RCn4E0xyD_nZTLrCHzuxg3/preview" width="650" height="400"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Observo y aprendo!</em></h2>
    <div class="row m-5" >
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/5RNKHrq/book-removebg-preview.png"
                     width="350" height="300"><p align="center"><strong>Grueso</strong></p>
                <img class="mx-auto d-block" src="https://i.ibb.co/jyKGv8Z/tration-removebg-preview.png"
                     width="350" height="300"><p align="center"><strong>Delgado</strong></p>
                <div class="card-body">
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/Ksws8bm/9a55-removebg-preview.png"
                     width="320" height="300"><p align="center"><strong>Grueso</strong></p>
                <img class="mx-auto d-block" src="https://i.ibb.co/F5qZqw2/lap348-removebg-preview.png"
                     width="350" height="300"><p align="center"><strong>Delgado</strong></p>
                <div class="card-body">
                    <h5 class="card-title" align="center"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Observo y analizo!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/YhJ6cgR/ni-o-removebg-preview.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title">Gordo</h5>
                    <h5 class="card-title" align="center">Flaco</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Aprendo!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/SJf1qTn/torno-removebg-preview.png" width="400" height="350">
                <div class="card-body">
                    <h5 class="card-title">Gato gordo</h5>
                    <h5 class="card-title" align="center">Gata flaca</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de tarjetas -->
<div class="container-fluid center-block pl-5" id="color">
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>¿Cuál es más gordo?</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/93xDC7Q/pez-removebg-preview.png" width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title">Pez 1</h5>
                    <h5 class="card-title" align="center">Pez 2</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Repite en voz alta!</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/sKHTNFt/gordo-flaco1-removebg-preview.png" width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title">El gato 1</h5>
                    <h5 class="card-title" align="center">El gato 2</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" id="color" >
    <div class="row m-5" >
        <div class="col-md-6">
            <h2 id="color"><em><br>Responde en voz alta:</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/HVT42Dw/535-removebg-preview.png" width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title">Mesa 1</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¿Cuál mesa es más gruesa?</em></h2>
            <div class="card" style="width: 28rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/r7LbySg/png-removebg-preview.png" width="400" height="300">
                <div class="card-body">
                    <h5 class="card-title">Mesa 2</h5>
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

@endsection
