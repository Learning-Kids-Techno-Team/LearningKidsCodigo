@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>

    <title>El cuerpo humano</title>
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

        body{

            background:lightyellow;

        }

        .card{
            background:cornsilk;
            border:yellow 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }


        #pa{
            text-align: justify;


        }
        #banderin{


            margin-top: auto;
            height:90px;

        }
        #color{
            color: white;
            height: 80px;



        }
        p{
            text-align: justify;
            font-family: bold, Georgia;

        }
        .card-title{
            color: orangered;
            text-align: center;


        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #FDFD96;
        }
        #titulo{
            text-align: center;
            color: red;
        }
        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

        .navbar{
            background: #FDFD96;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }
        li{
            text-align: justify;
        }



    </style>


</head>
<body>

@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 " style="background: yellow">
            <div class="row">
                <div class="col-xl-4  mt-5" style="background: #CCDDCC">
                    <img class="m-5 mx-auto d-block" src="https://i.ibb.co/VSyKtkY/cuerpo-humano-nino-scaled-removebg-preview.png"     width="430"  >
                </div>
                <div class="col-xl-8  mt-5 " style=" background: lightyellow"  >
                    <h4  class="mt-5" style="color: #3B5686">Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">El cuerpo humano</h3>
                    <p class="" id="pa">
                       <br> El cuerpo humano realiza muchas funciones, unas son más importantes que otras.
                        Se pueden dividir en dos grandes grupos: funciones vitales y funciones no vitales.

                        Funciones vitales son aquellas que son necesarias para vivir, sin ellas moriríamos.
                        Se dividen en funciones : de nutrición, de relación y de reproducción.<br>

                        <br>De nutrición: son las relacionadas con la respiración y alimentación de las células: respiración, alimentación, circulación de la sangre y excreción.<br>

                        <br>De relación: son las relacionadas con el control del cuerpo por parte del cerebro y sistema nervioso.<br>

                        <br>De reproducción: no es vital para un individuo pero la reproducción es necesaria para la conservación de la especie.<br>

                        <br>Funciones no vitales son aquellas que siendo importantes no son vitales, no nos morimos si no las hacemos.
                        Por ejemplo el movernos. Hay gente que puede vivir pero no puede andar.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col-xl-6 ">
            <h2 class="mt-5">
                Nuestro cuerpo
            </h2>
            <p>
                <br>Está formado por <strong>cabeza, tronco y extremidades.</strong>
                <br>Las extremidades superiores son los brazos.
                <br>Las extremidades inferiores son las piernas
                <br> En la cabeza están el cráneo y la cara.
                <br> En el tronco están el cuello, la espalda, el pecho, la cintura y el abdomen.<br>

        </div>

        <div class="col-xl-6 mb-5">
            <img class="mx-auto d-block"  src="https://i.ibb.co/3dBBJq3/lucia-presentacin-cuerpo-humano-2-728-removebg-preview.png"  width="430" >
        </div>


        <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-12">
                <img class=" mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/1QpW3D5/e8464e67-ad99-4864-8e0f-5cadadee9728-removebg-preview-1.png"  width="400" />
            </div>

        </div>
    </div>

    <div class="container-fluid mb-5 mt-5">
        <div class="row">
            <div style="text-align: center" class="col-xl-12">
                <h2 class="mb-5">
                    ¿Qué habilidades tengo?

                </h2>
                <p style="text-align: center">
                    La forma de nuestro cuerpo nos permire realizar diversas actividades sin dañarños.
                    <br>Podemos caminar correr, saltar, estar parados, sentarnos y agacharnos.
                </p>
            </div>

        </div>
    </div>

        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-xl-3">
                    <img class="mx-auto d-block" src="https://i.ibb.co/9cbGs3Y/ilustracion-dibujos-animados-nino-atar-cordones-zapatos-24381-49-removebg-preview.png" width="200">
                </div>
                <div class="col-xl-3">
                    <img class="mx-auto d-block" src="https://i.ibb.co/zbsC4N0/nino-sentado-piso-61103-141-removebg-preview.png" width="400">
                </div>
                <div class="col-xl-3">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Q83tvkK/dibujos-animados-nino-africano-caminando-61103-294-removebg-preview.png" width="400">
                </div>
                <div class="col-xl-3">
                    <img class="mx-auto d-block" src="https://i.ibb.co/GQVZYNB/nino-feliz-saltando-cuerda-29937-4007-removebg-preview.png" width="300">
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5 mt-5">
            <div class="row">
                <div style="text-align: center" class="col-xl-6">
                    <h2 class="mb-5">
                        ¡Todos crecemos y cambiamos!

                    </h2>
                    <p style="text-align: center">
                        durante la vida, pasamos por diferentes etapas mientras crecemos.
                        <ul>
                        <li>Primera infancia</li>
                        <li>Primera niñez</li>
                        <li>Niñez media</li>
                        <li>Adolescencia</li>
                        <li>Juventud</li>
                        <li>Madurez</li>

                    </ul>
                    </p>
                </div>
                <div class="col-xl-6">
                    <img src="https://i.ibb.co/gry068Y/etapas-del-desarrollo-humano-lifeder-2-removebg-preview.png" width="430">

                </div>

            </div>
        </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-xl-6 mt-5">
                <h2>
                    Los huesos de nuestro cuerpo

                </h2>
                <p> <br><strong>Toca tu cuerpo y responde.</strong><br>
                    <br><strong>¿Dónde hay huesos? ¿cómo son?</strong><br>
                    <br>Los huesos son las partes duras de nuestro cuerpo. El conjunto de huesos se llama
                    <br>esqueleto.
                    El esqueleto sostiene el cuerpo, le da forma y, además, protege los
                    <br>órganos internos
                    Nuestro cuerpo tiene 206 huesos diferentes. Algunos son planos, otros cortos, y otros
                    <br>largos.
                    <br><strong>Los huesos principales son:</strong>
                    <ul>
                   <li>Los huesos de la cabeza, como el cráneo</li>
                    <li> Los huesos del tronco, como la columna vertebral, las costillas y el esternón.</li>
                    <li>  Los huesos de las extremidades, como el fémur y los huesos de la mano</li>
                </ul>
                    Es importante que, al dormir y sentarte, mantengas una buena postura para que los huesos
                    no sufran desviaciones o se dañen

                </p>
            </div>
            <div class="col-xl-6 mt-5">
                <img class=" mt-5 mx-auto d-block" src="https://i.ibb.co/ws9Kdn6/hqdefault-removebg-preview.png"      width="420" >
            </div>
        </div>
    </div>
    </div>
</div>

    <div id="separadorInferior">
        <div class="content ">

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
