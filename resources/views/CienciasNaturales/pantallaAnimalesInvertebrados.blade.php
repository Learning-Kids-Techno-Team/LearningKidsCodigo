@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Animales Invertebrados</title>
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
            font-family: bold, Georgia;
            text-align: center;


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
        #bord{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:#FEB472;
        }

    </style>


</head>
<body >

<!-- NAVRBAR-->
@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: yellow">
            <div class="row ml-5 mr-5">
                <div class="col-md-7  mt-5" style="background: #CCDDCC">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/QFzthKr/05aa418c4249670739ebf93cb0608c4a-removebg-preview.png"    width="300"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                    <h4 style="color: #3B5686">Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">Animales Invertebrados</h3>
                    <p class="" id="pa">
                        <em>
                            Los invertebrados son animales que no tienen columna vertebral y no poseen un esqueleto interno articulado. Alrededor del 95% de los animales son invertebrados.
                            Los animales invertebrados son ovíparos (se reproducen mediante huevos)</em>
                        <br>
                        <em>

                           <br><strong>Los invertebrados se clasifican en varios grupos:</strong><br>

                            <br><strong>Los invertebrados CON protección corporal</strong>

                            <br>Artrópodos
                            <br>Moluscos
                            <br>Equinodermos

                            <br><strong>Los invertebrados SIN protección corporal</strong>

                            <br>Gusanos
                            <br>Poríferos (Esponjas)
                            <br> Celentéreos




                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-center pt-5 pb-4" >
    <div class="row" >
        <div class="col-md-12 ">

            <img class="mx-auto db-block" src="https://www.retina21.com/media/2012/09/mariposas_animadas.gif" width="400" >
        </div>
    </div>
</div>
</div>


<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" style="background: #FDFD96">
            <h1 style="text-align: center">Los invertebrados CON protección corporal </h1>

        </div>
    </div>
</div>

<!-- contenido de los animales  mamiferos-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="bor">
            <h3>
                Artrópodos
            </h3>
            <p>Los artrópodos tienen las patas articuladas y un cuerpo dividido en partes distintas como una cabeza, tórax y abdomen. Viven en todos los medios.

                Los artrópodos se pueden dividir en 4 grupos:</p>
        </div>

    </div>
</div>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12" id="bord">
            <h3>
                Insectos
            </h3>
            <p>
                Los insectos son los animales más diversos de nuestro planeta, con millones de especies y aparecen en grandes números. Se estima que más del 90% de las formas de vida del planeta Tierra son insectos.
                Su cuerpo está divido en tres partes: La cabeza, el tórax y el abdomen.
                Tienen tres pares de patas y un par de antenas. </p>


    </div>
</div>
</div>
    <!-- tarjetas de los animales -->

<div class="container-fluid pt-5" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Abeja</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/TbPbYsD/3f5ce78f9d0cd5587cdebd8be6533247-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4 ">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Mariposa</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/Xkm0tRJ/dibujos-animados-mariposa-119631-99-removebg-preview.png"  height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Escarabajo</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/8zRF0TR/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview.png" height="180">

            </div>
        </div>

    </div>
</div>




<div class="container-fluid" >
    <div  class="row" >
        <div class="col-md-4 pb-4">

            <!-- tarjeta 1 -->
            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Mosquito</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/LnD0vHx/depositphotos-53337739-stock-illustration-angry-mosquito-cartoon-removebg-preview.png"   height="180">

            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 pb-4">
            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Hormiga</h2>
                <img class="mx-auto d-block" src="https://i.ibb.co/n8YxRLN/e39b0f222d1f2c0110a1420e2b7d8a14-removebg-preview.png"     height="180">

            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4 pb-4">
            <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                <h2>Mosca</h2>
                <img src="https://i.ibb.co/1Tky0YM/png-clipart-trachoma-fly-blindness-eye-what-can-i-help-you-with-cartoon-fictional-character-removebg.png"   class="card-img-top " height="180">


            </div>
        </div>

    </div>
</div>

    <!--Aracnidos -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12" id="bord">
                <h3>
                     Arácnidos
                </h3>
                <p>
                    Los arácnidos son el segundo grupo más numeroso del reino animal.
                    Su cuerpo está divido en dos partes: el cefalotórax (la unión de la cabeza y el tórax) y el abdomen.
                    Los arácnidos tienen cuatro pares de patas y no tienen antenas.
                   </p>


            </div>
        </div>

        <!-- tarjetas de los animales -->



        <div class="container-fluid pt-5" >
            <div  class="row" >
                <div class="col-md-4 pb-4">

                    <!-- tarjeta 1 -->
                    <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                        <h2>Garrapata</h2>
                        <img class="mx-auto d-block" src="https://i.ibb.co/PjCGbhF/depositphotos-74794459-stock-photo-tick-insect-removebg-preview.png" height="160">

                    </div>
                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4 pb-4">
                    <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                        <h2>Escorpión</h2>
                        <img class="mx-auto d-block" src="https://i.ibb.co/sQBG901/escorpion-dibujos-animados-aislado-29190-4770-removebg-preview.png"  height="160">

                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4 pb-4">
                    <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                        <h2>Araña</h2>
                        <img class="mx-auto d-block" src="https://i.ibb.co/R7NLdpb/f51e0647579d60a8b44920bac099d735-removebg-preview.png" height="160">

                    </div>
                </div>

            </div>
        </div>

<!-- Los miriápodos -->

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12" id="bord">
                    <h3>
                        Miriápodos
                    </h3>
                    <p>
                        Los miriápodos tienen una cabeza y un tronco largo formado por muchos segmentos.
                        Tienen una multitud de pares de patas y también tienen antenas y mandíbulas.
                    </p>

                </div>
            </div>
        </div>

            <!-- tarjetas de los animales -->
        <div class="container-fluid d-flex justify-content-center  pt-5 ">
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                <h2>1000 pies</h2>
                                <img class="mx-auto d-block" src="https://i.ibb.co/m6N9Bkm/54954875-ilustraci-n-del-milpi-s-ciempi-s-ciempi-s-de-dibujos-animados-presentaci-n-aislada-de-insec.png" height="180">

                            </div>
                        </div>
                        <div class="col-md-6 pb-4">
                            <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                <h2>100 pies</h2>
                                <img class="mx-auto d-block" src="https://i.ibb.co/ZV5CrdY/70147842-cute-ciempi-s-animal-vector-de-personaje-de-dibujos-animados-removebg-preview.png"  height="180">

                            </div>
                        </div>
                    </div>
                </div>

<!-- Los crustáceos -->
        <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-12" id="bord">
                            <h3>
                                Crustáceos
                            </h3>
                            <p>Los crustáceos son casi todos acuáticos.
                                En general tienen desde 5 a 10 pares de patas. Algunos crustáceos tienen las patas delanteras transformadas en pinzas.
                                Son los únicos artrópodos con dos pares de antenas.
                            </p>


                        </div>
                    </div>

                    <!-- tarjetas de los animales -->



                    <div class="container-fluid pt-5" >
                        <div  class="row" >
                            <div class="col-md-4 pb-4">

                                <!-- tarjeta 1 -->
                                <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Camaron</h2>
                                    <img src="https://i.ibb.co/0hJN2T2/camarones-dibujos-animados-lindo-29190-3514-removebg-preview.png" height="180">

                                </div>
                            </div>
                            <!-- tarjeta 2 -->
                            <div class="col-md-4 pb-4 ">
                                <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Langosta</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/Y4Sfxn3/3338-removebg-preview.png"   height="180">

                                </div>
                            </div>
                            <!-- tarjetas3 -->
                            <div class="col-md-4 pb-4">
                                <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Cangrejo</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/NtcJN7M/dibujos-animados-cangrejo-119631-101-removebg-preview.png" height="180">

                                </div>
                            </div>

                        </div>
                    </div>
            <!-- Moluscos -->

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" id="bor">
                                <h3>
                                    Moluscos
                                </h3>
                                <p>Los Moluscos son los invertebrados más numerosos después de los artrópodos.
                                    Tienen el cuerpo blando y muchos protegido por una concha calcárea dura de simetría bilateral. Son los únicos animales con un pie muscular.
                                </p>
                            </div>

                        </div>
                    </div>


                    <div class="container-fluid pt-5" >
                        <div  class="row" >
                            <div class="col-md-4 pb-4">

                                <!-- tarjeta 1 -->
                                <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Pulpo</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/s6pMvFL/cute-dibujos-animados-pulpo-33070-3430-removebg-preview.png"  height="180">

                                </div>
                            </div>
                            <!-- tarjeta 2 -->
                            <div class="col-md-4 pb-4 ">
                                <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Calamar</h2>
                                    <img  class="mx-auto d-block" src="https://i.ibb.co/g388pKR/dibujos-animados-calamar-22350-414-removebg-preview.png" height="180">
                                </div>
                            </div>
                            <!-- tarjetas3 -->
                            <div class="col-md-4 pb-4">
                                <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Babosa</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/SQv1mSp/25726188-slug-removebg-preview.png" height="180">

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid " >
                        <div  class="row" >
                            <div class="col-md-4 pb-4">

                                <!-- tarjeta 1 -->
                                <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Caracol</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/WgmFgdg/caracol-dibujos-animados-lindo-160606-321-removebg-preview.png"  height="180">

                                </div>
                            </div>
                            <!-- tarjeta 2 -->
                            <div class="col-md-4 pb-4">
                                <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Almeja</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/W31WZvt/76151747-mejillones-en-c-scara-ilustraci-n-aislada-de-mariscos-sobre-fondo-blanco-removebg-preview.png"  height="180">

                                </div>
                            </div>
                            <!-- tarjetas3 -->
                            <div class="col-md-4 pb-4">
                                <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                                    <h2>Ostra</h2>
                                    <img class="mx-auto d-block" src="https://i.ibb.co/HPP7NRW/274-2741355-full-resolution-ostra-de-mar-animado-png-removebg-preview.png" height="180">

                                </div>
                            </div>

                        </div>
                    </div>

            <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" id="bor">
                                <h3>
                                    Equinodermos
                                </h3>
                                <p>Todos los equinodermos viven en el mar (no viven en agua dulce).
                                    Tienen el cuerpo áspero con simetría radial. Tiene dos lados bien definidos, uno en la parte inferior donde esta su boca, y el otro el parte superior más duro.
                                    El cuerpo de una estrella de mar está dividido en cinco regiones que se disponen alrededor de un disco central. Si uno de sus brazos se rompe, fácilmente se regenera.
                                    Los erizos tienen el cuerpo más redondo y está cubierto de espinas o púas.</p>
                            </div>

                        </div>
                    </div>

                        <div class="container-fluid pt-5">
                            <div class="row">
                                <div class="col-md-6 pb-4">
                                    <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Estrella de mar</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/MhDvgkK/dibujos-animados-estrellas-mar-119631-114-removebg-preview.png"   height="180">

                                    </div>
                                </div>
                                <div class="col-md-6 pb-4">
                                    <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">

                                        <h2>Erizo de mar</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/gDyprXM/dibujos-animados-erizo-119631-33-removebg-preview.png" height="180">

                                    </div>
                                </div>
                            </div>
                        </div>

            <div  class="container-fluid">
                            <div class="row">
                                <div class="col-md-12  mb-5" style="background: #FDFD96">
                                    <h1 style="text-align: center">Los invertebrados CON protección corporal </h1>

                                </div>
                            </div>
                        </div>


<!-- Gusanos -->
            <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col-md-12" id="bord">
                                    <h3>
                                        Gusanos
                                    </h3>
                                    <p>Tienen el cuerpo blando y alargado. Se desplazan reptando.
                                    </p>

                                </div>
                            </div>
                        </div>


            <div class="container-fluid pt-5" >
                            <div  class="row " >
                                <div class="col-md-4 pb-4">

                                    <!-- tarjeta 1 -->
                                    <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Tenia (solitaria).</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/V2qBm3f/66857749-2d-ilustraci-n-de-dibujos-animados-de-la-tenia-removebg-preview.png"  height="180">

                                    </div>
                                </div>
                                <!-- tarjeta 2 -->
                                <div class="col-md-4 pb-4 ">
                                    <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Sanguijuela.</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/9nqwR05/16533204-dibujos-animados-sanguijuela-removebg-preview.png" height="180">

                                    </div>
                                </div>
                                <!-- tarjetas3 -->
                                <div class="col-md-4 pb-4">
                                    <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Lombriz</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/4dgTs4h/png-clipart-cartoon-earthworm-cartoon-earthworm-thumbnail-removebg-preview.png" height="180">

                                    </div>
                                </div>

                            </div>
                        </div>

            <!-- Celentéreos -->

                        <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col-md-12" id="bord">
                                    <h3>
                                        Celentéreos
                                    </h3>
                                    <p>Hay dos formas de celentéreos, las medusas que pueden moverse de forma libre y los pólipos que están fijos en un lugar.
                                    </p>

                                </div>
                            </div>
                        </div>




                        <div class="container-fluid pt-5 " >
                            <div  class="row " >
                                <div class="col-md-4 pb-4">

                                    <!-- tarjeta 1 -->
                                    <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Coral</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/QrFCtht/jellyfish-shrimp-life-coral-reef-cartoon-under-the-sea-vector-removebg-preview.png"  height="180">

                                    </div>
                                </div>
                                <!-- tarjeta 2 -->
                                <div class="col-md-4 pb-4 ">
                                    <div id="tar2" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Anemona</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/nPMwnth/an-mona-de-mar-anaranjada-18233426-removebg-preview.png" height="180">

                                    </div>
                                </div>
                                <!-- tarjetas3 -->
                                <div class="col-md-4 pb-4">
                                    <div id="tar3" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Medusa</h2>
                                        <img class="mx-auto d-block" src="https://i.ibb.co/5M54XQr/d9d60cb38388b44d033c01373c9bee75-removebg-preview.png" height="180">

                                    </div>
                                </div>

                            </div>
                        </div>

            <!-- Poríferos / Esponjas -->

                        <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col-md-12" id="bord">
                                    <h3>
                                        Poríferos / Esponjas
                                    </h3>
                                    <p>Los poríferos son más conocidos como las esponjas. Tienen aspecto de planta y viven en el mar sujetas a las rocas u otros objetos sumergidos.
                                        Su cuerpo tiene muchos orificios o poros pequeños.
                                        Tienen el cuerpo irregular sin simetría.
                                        Los poríferos son los invertebrados más sencillos, no tienen órganos, ni cerebro, ni sistema nervioso. Usan ciertas células para capturar partículas de alimento que están en el agua que entra por sus poros.
                                    </p>

                                </div>
                            </div>
                        </div>


                        <div class="container-fluid pt-5" >
                            <div  class="row " >
                                <div class="col-md-12 pb-4">
                                    <!-- tarjeta 1 -->
                                    <div id="tar1" class="card mx-auto d-block" style="width: 18rem;">
                                        <h2>Esponja Tubular</h2>
                                        <img class="mx-auto d-block" src="https://i.pinimg.com/originals/15/6a/c9/156ac957edcb29fc3e649afaafa2aed1.jpg"  height="180">

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
