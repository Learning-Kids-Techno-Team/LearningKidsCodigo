@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Puntos Cardinales</title>
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

            width: 100%;
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
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-xl-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/QdqbS2w/img-removebg-preview.png"  width="400" />

        </div>
        <div class="col-xl-8">
            <h2 id="color" class="text-center"><em><br>¡Puntos Cardinales!</em></h2>
            <h3 id="color" ><em><br>¿Qué son los puntos cardinales?</em></h3>
            <p id="color" class="text-center"><em><strong>Los puntos cardinales son los cuatro sentidos que conforman un sistema de referencia cartesiano para representar la orientación en un mapa o en la propia superficie terrestre.
                    </strong></em></p><br><br><br><br>
        </div>
    </div>
</div>


<!-- contenedor clima-->
<div class="container-fluid">
    <div class="row" >
        <div class="col-xl-4">
            <h2 class="text-center" id="color"><strong><em>Los cuatro puntos son:<br></em></strong><br>
                        <ul><li><strong>Norte: </strong>Se representa con la letra<strong>(N)</strong></li>
                    <li><strong>Sur: </strong>Se representa con la letra<strong>(S)</strong></li>
                    <li><strong>Este:</strong>Se representa con la letra<strong>(E)</strong></li>
                            <li><strong>Oeste:</strong>Se representa con la letra<strong>(O)</strong></li></ul></h2>
        </div>
        <div class="col-xl-8 ">
            <img id="bor"  class="mx-auto d-block" src="https://i.ibb.co/ZfYvyk3/rosa3-removebg-preview.png"  width="400" />
        </div>
    </div>
</div>



<!-- contenedor suge-->
<div class="container-fluid" id="color"><h2><em><br>Observo y aprendo:</em></h2>
    <div class="row">
        <div class="col-xl-3 p-2 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/qNWmGp0/norte.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Norte!</h5>
                <p>Es el punto cardinal que indica, sobre un meridiano, la dirección al polo norte geográfico. En el hemisferio norte, se corresponde con el punto del horizonte cuya perpendicular pasa por la estrella polar. <br>A la ubicación o a la dirección norte se les llama septentrional o boreal.</p>
            </div>
        </div>
        <div class="col-xl-3 p-2 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/5YwR3cx/sur.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Sur!</h5>
                <p><br>Es el punto cardinal que indica, sobre un meridiano, la dirección al Polo Sur geográfico.<br> <br><br>Es uno de los cuatro puntos cardinales, situado diametralmente opuesto al norte. </p>
            </div>
        </div>
        <div class="col-xl-3 p-2 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/y0kyxnn/este.png"  width="260" height="240">
                <h5 class="card-title" align="center">¡Este!</h5>
                <p>Es uno de los cuatro puntos cardinales.La perpendicular a la meridiana corta al horizonte en los puntos este y oeste.<br>También recibe el nombre de oriente o levante. Se corresponde aunque no exactamente con el punto del horizonte por donde sale el Sol, de ahí el nombre de levante (zona donde el Sol se levanta).</p>
            </div>
        </div>
        <div class="col-xl-3 p-2 d-flex justify-content-center">
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

@endsection
