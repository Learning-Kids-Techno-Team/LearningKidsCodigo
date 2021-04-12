@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Computadora y dispositivos hardware</title>
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
            background: #C5FFA0;
        }

        body{

            background:#EAF7E1 ;

        }


        #pa{
            text-align: justify;

        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }



        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background:  #16A085
        }



        h1{
            font-family: Brush Script MT;
            size: 80px;
            color: #d6e9f9;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #16A085;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #16A085;
            font-family: bold;
        }
        #bor{
            border: #16A085 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
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
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background:#16A085">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #CCDDCC">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/j3NBsVS/compu-removebg-preview.png"     width="500"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #ABEBC6"  >
                        <h4 style="color: #3B5686">Tecnología</h4>
                        <h3 class="mt-5" style="text-align: center">Computadora y sus dispositivos hardware</h3>
                        <p class="" id="pa"> <em>  El hardware (equipo) es la parte fisica de la computadora que componen el ordenador, posibilitando el funcionamiento y complementando el software. .
                            </em><br>

                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h2>
                    ¿Por qué es importante aprender el nombre de los dispositivos hardware?
                </h2>
                <p>
                    Es importante distinguir dentro de la informática y el mundo de los ordenadores entre el hardware y software. No es lo único, pero sí dos de las partes más importantes de los equipos informáticos. Vamos a centrarnos en el primero de ellos.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-md-5">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/9qbrkWc/compu2-removebg-preview.png" width="450" />
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #16A085">
                <h1 style="text-align: center">Dispositivos Hardware </h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Monitor

                </h2>
                <p>
                    El monitor, también llamado monitor de ordenador, pantalla. Es el principal dispositivo de salida (interfaz), que muestra datos o información a todos los usuarios.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/SfYtRp1/monitor-removebg-preview.png"  width="300" >
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Teclado

                </h2>
                <p>
                    Un teclado es un dispositivo o periférico de entrada, en parte inspirado en el teclado de las máquinas de escribir, que utiliza un sistema de botones o teclas, para que actúen como palancas mecánicas o interruptores electrónicos que envían toda la información a la computadora.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/FHQ3fRK/teclado-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Mouse

                </h2>
                <p>
                    Es un dispositivo apuntador utilizado para facilitar el manejo de un entorno gráfico en una computadora. Generalmente está fabricado en plástico, y se utiliza con una de las manos. Detecta su movimiento relativo en dos dimensiones por la superficie plana en la que se apoya, reflejándose habitualmente a través de un puntero, cursor o flecha en el monitor. El ratón se puede conectar de forma cableada (puertos PS/2 y USB), o inalámbricamente por medio de un adaptador USB que se conecta a la computadora y esta recibe la señal del ratón, aunque también pueden ser por medio de conectividad Bluetooth o infrarrojos.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/6ZRPqxr/mouse-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Impresora

                </h2>
                <p>es un dispositivo periférico de salida, del ordenador que permite producir una gama permanente de textos o gráficos de documentos almacenados en un formato electrónico, imprimiéndolos en medios físicos, normalmente en papel, utilizando cartuchos de tinta o tecnología láser (con tóner).


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/qFq6v2W/impresora-removebg-preview.png"     width="300" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Disquete

                </h2>
                <p>Disco para el almacenamiento de datos informáticos, de pequeño tamaño y menor capacidad que el disco duro, que está protegido por una funda de la que no se extrae, y que se introduce en la computadora en el momento de grabar o recuperar información.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/MRKGTB4/disquete-removebg-preview.png"     width="200" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                     Memoria USB

                </h2>
                <p> Conocida también con los nombres locales: lápiz de memoria, dedo, pincho, lápiz USB, memoria externa, pendrive, memocápsula. Es un tipo de dispositivo de almacenamiento de datos que utiliza circuitos de estado sólido para guardar datos e información.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/RDrjs9K/usb-removebg-preview.png"     width="150" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    CD-ROM

                </h2>
                <p>Es un disco compacto con el que utilizan rayos láser para leer información en formato digital. El CD-ROM estándar fue establecido en 1985 por Sony y Philips. Pertenece a un conjunto de libros de colores conocido como Rainbow Books, que contiene las especificaciones técnicas para todos los formatos de discos compactos.

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/0D02DFK/cd-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    DVD

                </h2>
                <p>Es un disco óptico para el almacenamiento digital de imagen, sonidos y datos, con mayor capacidad que un disco compacto o CD. DVD son las siglas de Digital Versatile Disc, ​expresión inglesa que podemos traducir como "disco versátil digital".

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/mTxC1JH/dvd-removebg-preview.png"   width="300" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    SD

                </h2>
                <p>Secure Digital (SD) es un dispositivo en formato de tarjeta de memoria para dispositivos portátiles, por ejemplo: cámaras digitales (fotográficas o videograbadoras), teléfonos móviles, teléfonos inteligentes, computadoras portátiles y videoconsolas (de sobremesa y portátiles), tabletas y entre muchos otros.

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/cksgpVk/sd-removebg-preview.png"     width="300" >
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    CPU

                </h2>
                <p>La unidad central de procesamiento (conocida por las siglas CPU, del inglés Central Processing Unit) es el hardware dentro de una computadora u otros dispositivos programables.

                    Su trabajo es interpretar las instrucciones de un programa informático mediante la realización de las operaciones básicas aritméticas, lógicas y externas (provenientes de la unidad de entrada/salida). Su diseño y avance ha variado notablemente desde su creación, aumentando su eficiencia y potencia, y reduciendo aspectos como el consumo de energía y el costo.

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/1ztr7ry/cpu-removebg-preview.png"      width="300" >
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

