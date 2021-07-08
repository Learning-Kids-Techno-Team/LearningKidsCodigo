@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Animales Vertebrados</title>
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
            text-align: center;
            font-family: bold, Georgia;

        }
        .card-title{
            color: orangered;
            text-align: center;


        }

        #separadorInferior2 .content{

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



    </style>


</head>
<body >

@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: yellow">
            <div class="row ml-5 mr-5">
                <div class="col-md-7  mt-5" style="background: #CCDDCC">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/tLRHQkT/depositphotos-49912477-stock-illustration-skeletons-of-animals-removebg-preview.png"  width="360"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                    <h4 style="color: #3B5686">Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">Animales Vertebrados</h3>
                    <p class="" id="pa">
                        <em>Los animales vertebrados son todos aquellos que tienen cráneo, cola, y una espina dorsal o columna vertebral que divide su cuerpo en dos partes iguales. Su esqueleto es interno y puede ser óseo o cartilaginoso.

                            Unas 60 mil especies pertenecen al grupo de los vertebrados, incluyendo las especies extintas.</em>
                        <br>
                        <em>

                            Excepto contadas excepciones, la reproducción de los vertebrados es de tipo sexual, y sus aparatos locomotores, circulatorios, respiratorios, endocrinos, nerviosos, digestivos y excretores son de los más complejos conocidos

                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-center" >
    <div class="row" >
        <div class="col-md-12 ">

            <img class="mx-auto db-block" src="https://i.ibb.co/ncRGhxg/66857025-2d-ilustraci-n-de-dibujos-animados-de-esqueletos-de-animales-removebg-preview.png" width="420" >
        </div>
    </div>
</div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Mamiferos</h1>
        </div>
    </div>
</div>

<!-- contenido de los animales  mamiferos-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"  id="bor">
            <h5>
                son terrestres y unos pocos acuaticos
            </h5>
        </div>
        <div class="col-md-3" id="bor" >
            <h5>
                nacen del vientre de la madre y maman
            </h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                La mayoria tiene el cuerpo cubierto de pelos</h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                La mayoria camina y corre </h5>
        </div>
    </div>
</div>

<!-- tarjetas de los animales -->

<div class="container-fluid mt-5" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Perro</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/fSZFX9X/perro-feliz-dibujos-animados-29190-4218-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4  ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Gato</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/qWQwhhc/33-336671-cartoon-katze-imagen-de-gato-animado-clipart-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Oveja</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/pKR8Qz2/depositphotos-123313882-stock-illustration-cute-sheep-cartoon-removebg-preview.png" height="180">

            </div>
        </div>
    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Girafa</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/37Tf6NF/girafa-bonito-dos-desenhos-animados-isolado-no-fundo-branco-29190-4965-removebg-preview.png"    height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Raton</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/YP6KYL6/raton-feliz-dibujos-animados-agitando-29190-4178-removebg-preview.png"     height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Elefante</h2>
                <img  src="https://i.ibb.co/TB5fDZz/14fb9d3ff990c120b018fc6f48a6b2c0-removebg-preview.png"   class="card-img-top mx-auto d-block" height="180">


            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Vaca</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/TgYNvGD/presentacion-feliz-vaca-historieta-aislada-blanco-29190-4897-removebg-preview.png"    height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Ballena</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/jhLmgGR/ilustracion-dibujos-animados-ballena-lindo-33070-2926-removebg-preview.png"      height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Caballo</h2>
                <img  src="https://i.ibb.co/N13cS93/dibujos-animados-caballo-blanco-43633-7163-removebg-preview.png"   class="card-img-top mx-auto d-block" height="180">


            </div>
        </div>

    </div>
</div>

<!-- contenido de las aves-->

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Aves</h1>
        </div>
    </div>
</div>

<!-- contenido de la resta-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="bor">
            <h5>
                Son terrestes y la mayoria vuela.
            </h5>
        </div>
        <div class="col-md-3" id="bor" >
            <h5>
                Nacen en huevos.
            </h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Tienen el cuerpo cubierto de plumas.</h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                tienen dos alas y dos patas algunos no pueden volar </h5>
        </div>
    </div>
</div>

<!-- tarjetas de los animales -->

<div class="container-fluid pt-5" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Aguila</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/nMW9qmB/dibujos-animados-aguila-volando-49499-493-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Cuervo</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/0JTtwSp/cuervo-dibujos-animados-pie-piedra-sobre-blanco-29190-4875-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pavo</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/TYM6kRw/dibujos-animados-lindo-pavo-119631-75-removebg-preview.png" height="180">

            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pavo Real</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/vJPXkhb/489-4898422-imagenes-animadas-de-un-pavo-real-hd-png-removebg-preview.png"    height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Guacamaya</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/jf2sjb4/dibujos-animados-gracioso-guacamayo-volando-29190-4305-removebg-preview.png"     height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Tucan</h2>
                <img src="https://i.ibb.co/m6H96nT/dibujos-animados-lindo-pajaro-tucan-50699-16-removebg-preview.png"   class="card-img-top mx-auto d-block" height="180">


            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pato</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/8csFJf1/pato-dibujos-animados-lindo-29190-3543-removebg-preview.png"   height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Gallina</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/3k3Lgsd/gallina-dibujos-animados-sus-tres-huevos-33070-2909-removebg-preview.png"      height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pajaro</h2>
                <img  src="https://i.ibb.co/D8jHxVb/pajaro-azul-dibujos-animados-sentado-rama-arbol-29190-5361-removebg-preview-1.png"   class="card-img-top" height="180">


            </div>
        </div>
    </div>
</div>

<!-- contenido de los reptiles-->

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Reptiles</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="bor">
            <h5>
                Son terrestes. Algunos no tienen patas.
            </h5>
        </div>
        <div class="col-md-3" id="bor" >
            <h5>
                La mayor parte de ellos nacen de huevos.
            </h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Tienen el cuerpo cubierto de escamas.</h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Para desplazarse reptan.</h5>
        </div>
    </div>
</div>

<!-- tarjetas de los animales -->

<div class="container-fluid pt-5" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Tortuga Terrestre</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/QNvQc4k/depositphotos-6576876-stock-illustration-cute-tortoise-vector-illustration-removebg-preview.png"  height="150">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Camaleon</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/ScNpzph/camaleon-dibujos-animados-rama-29190-768-removebg-preview.png"  height="150">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Iguana</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/D8z4r7B/cute-dibujos-animados-iguana-160606-452-removebg-preview.png" height="150">

            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Tortuga</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/R6XmcCy/dibujos-animados-lindo-tortuga-33070-3103-removebg-preview.png"   height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Cocodrilo</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/Y080tJh/cocodrilo-dibujos-animados-aislado-sobre-fondo-blanco-29190-528-removebg-preview.png"     height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Vibora</h2>
                <img src="https://i.ibb.co/8Y137dT/490a0c4c62808456927b5adc3bb69c32-removebg-preview.png"   class="card-img-top" height="180">

            </div>
        </div>

    </div>
</div>

<!-- anfibios -->

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Anfibios</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="bor">
            <h5>
                Son terrestes. acuaticos o ambos.
            </h5>
        </div>
        <div class="col-md-3" id="bor" >
            <h5>
                Nacen en huevos.
            </h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Su piel es lisa y humeda.</h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Algunos saltan y otros nadan.</h5>
        </div>
    </div>
</div>

<!-- tarjetas de los animales -->

<div class="container-fluid pt-5" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Rana</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/TMB8yLP/a18e8f1df2f8cd2d28386a71126ad85d-removebg-preview.png"  height="160">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Ajolote</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/h72RpBw/59136216-un-personaje-de-dibujos-animados-axolotl-salamandra-mexicana-o-pescado-caminar-con-color-ro.png"  height="160">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Salamandra</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/9p3SxzQ/dd26c95b341140eb1ef59f0ba7f97c49-removebg-preview.png" height="160">
            </div>
        </div>
    </div>
</div>

<!-- peces -->
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Peces</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="bor">
            <h5>
                Son acuaticos.
            </h5>
        </div>
        <div class="col-md-3" id="bor" >
            <h5>
                Casi todos nacen en huevos.
            </h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
                Tienen el cuerpo cubierto de escamas</h5>
        </div>
        <div class="col-md-3" id="bor">
            <h5>
            nadan</h5>
        </div>
    </div>
</div>

<!-- tarjetas de los animales -->

<div class="container-fluid pt-5 " >
    <div  class="row " >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2> Tiburon ballena</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/wc136MM/03be62bd72b754433e9193df0a23f627-removebg-preview.png"  height="160">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pez payaso</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/DCQJ9SJ/dibujos-animados-peces-payaso-lindo-29190-3353-removebg-preview.png"  height="160">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Piraña</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/Sv9KHx2/45766795-pira-a-pescado-removebg-preview.png" height="160">

            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Pez Globo</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/ctd7XFS/dibujos-animados-lindo-pez-globo-43633-25-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Anguila </h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/BtQJBfP/36d4578a8f6f98583936d367719695c4-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Tiburon</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/hgXqHfD/dibujos-animados-divertido-tiburon-posando-29190-2844-removebg-preview.png" height="180">

            </div>
        </div>

    </div>
</div>

<div id="separadorInferior2">
    <div class="content ">

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

@endsection
