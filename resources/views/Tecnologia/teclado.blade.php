@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>El Teclado</title>
    <style>
        body {
            background:  #dcfecb;

        }
        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background:  #C5FFA0;
        }

        .navbar{
            background:  #C5FFA0;

        }


        #c{
            background: springgreen;
        }
        #a {
            border: turquoise 50px solid;
            border-image-source: url("https://i.ibb.co/d4SwJPg/mar-removebg-preview.png");
            border-image-slice: 160;
            border-image-repeat: round;

            padding: 10px;
            text-align: justify;
        }

        .card{
            background: whitesmoke;
            border:#ffed4a 8px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }


    </style>
</head>
<body>
@section('content')
    <!-- contenedor-->
    <div class="container-fluid "  id="c">
        <div class="container-fluid p-5">
            <div class="col-md-12 " >
                <div class="row ml-2 "  >

                    <div class="col-md-7  " style="background: #ffed4a">
                        <img class="mt-5 mx-auto d-block"
                             src="https://i.ibb.co/tZGg9kD/6f3f87bfbbda3fcfd0637d96b54c9504.png"
                             width="500"  >
                    </div>
                    <div class="col-xl-5   " style=" background: #ffed4a"  >
                        <br>
                        <h1 class="text-center">El Teclado</h1>
                        <p class="text-center " id="a" >


                            <strog>
                                Un teclado es un periférico de entrada en el ordenador, PC o computadora, como quieras llamarlo.
                                Es decir, es un componente externo (periférico) al ordenador y que se conecta al ordenador mediante algún puerto.
                            </strog>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="container-fluid " >
    <div class="row m-3">

        <div class="col-md-6" >
            <h1 class="text-center"> ¿Sabías qué?</h1>
            <p class="text-center" ><strong>

                    <br><br>
                    Un teclado Tiene entre 101 y 108 teclas aproximadamente y
                    esta dividido en 4 bloques, como veremos más adelante.
                </strong></p>
        </div>

        <div class="col-md-6 mb-5" >
            <img class="mx-auto d-block" src="https://i.ibb.co/YRnsswL/qw-removebg-preview.png"
                 width="300">



        </div>

    </div>
    </div>





    <div class="grey-bg container-fluid">
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h1 class="text-center" >Tipos de Teclado</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card" style="background:lightgreen; border: #ffed4a solid 8px">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media-body align-text-center ">
                                <h4>Teclado Ergonómico</h4>

                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <img src="https://i.ibb.co/wJFbg0N/haq-removebg-preview.png"
                                         width="230">

                                    <p class="text-center"> <strong><br>Es un teclado que como su propia palabra dice está diseñado para
                                            trabajar con el de la forma más cómoda y menos cansada. </strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card" style="background:lightgreen; border: #ffed4a solid 8px">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media-body text-center">
                                <h3>Teclado Multimedia</h3>
                                <br>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <img src="https://i.ibb.co/TkjXQ9N/js-removebg-preview.png"  width="250"
                                         height="200">
                                    <br><br>
                                    <p class="text-center"><strong>Diseñados con teclas especiales que dan
                                            acceso directo al volumen, la calculadora,
                                            el lector de CD-ROM, y otros elementos multimedia (video y sonido).</strong> </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card" style="background:lightgreen; border: #ffed4a solid 8px">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media-body text-center">
                                <h4>Teclado Inalámbrico</h4>
                                <br>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <br>
                                    <img src="https://i.ibb.co/ygXR0QH/ja-removebg-preview.png" width="260">
                                    <p class="text-center"><strong> Son aquellos que en lugar de conectar el teclado al ordenador mediante
                                            cables, se conectan con una pequeña antena y transmite la información por
                                            medio de ondas electromagnéticas por el aire. </strong></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card" style="background:lightgreen; border: #ffed4a solid 8px">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media-body text-center">
                                <h3>Teclado Flexible</h3>
                                <br>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <img src="https://i.ibb.co/wgTWqzG/ka-removebg-preview.png"
                                         width="250" >
                                    <br> <br><br>
                                    <p class="text-center"><strong>Están fabricados con goma siliconada o plástico.
                                            Son muy flexibles, de poco peso, delgados y resistentes al agua y otros líquidos.</strong>
                                    </p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid " >
        <div class="row m-3">

            <div class="col-md-6" >
<br><br>
                <h1 class="text-center">Partes del teclado</h1>

            </div>

            <div class="col-md-6 mb-5" >
                <img src="https://i.ibb.co/F3NTqr3/21-removebg-preview.png" width="200">



            </div>

        </div>
    </div>

    <!-- contendor imagen  -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <img class=" mx-auto d-block " style="border: #9561e2 solid 8px"
                     src="https://jsequeiros.com/archivos/computacion/teclado/conocimiento-del-teclado.png"
                     width="750" />
            </div>

        </div>
    </div>
<br>

        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h1 class="text-center">Bloque de funciones </h1>

            </div>
        </div>

       <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-6 col-md-12"  >
                <div class="card overflow-hidden" style="background:     #f5f5f5 ; border: greenyellow dashed 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <h4 class="text-center">Tecla de funciones</h4>
                            <br>
                            <div class="media align-items-stretch">

                                <div class="media-body">
                                    <img class="mx-auto d-block" src="https://i.ibb.co/FKCT4F9/pas.jpg" alt="pas" border="0"
                                    width="300">
                                    <br>
                                    <p class="text-center"> <strong>Va desde la tecla F1 a F12, en tres bloques de cuatro:
                                            de F1 a F4, de F5 a F8 y de F9 a F12. </strong></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card" style="background:     #f5f5f5 ; border: greenyellow dashed 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch">

                                <div class="align-self-center">
                                    <h4 class="text-center">Tecla de escape o ESC</h4>

                                   <img class="mx-auto d-block" src="https://i.ibb.co/JsygVW2/11-removebg-preview.png"
                                        width="205">

                                    <p class="text-center"> <strong>Se utiliza generalmente para cancelar
                                            operaciones a nivel de usuario y para abandonar
                                            programas o secciones de éstos.

                                         </strong></p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-6 col-md-12"  >
                <div class="card overflow-hidden" style="background:     #f5f5f5 ; border: greenyellow dashed 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <h4 class="text-center">Tecla Bloqueo Desplazamiento o Scroll Lock</h4>
                            <br>
                            <div class="media align-items-stretch">

                                <div class="media-body">
                                    <img class="mx-auto d-block"  src="https://i.ibb.co/p0yRppB/1388602-removebg-preview.png"
                                         width="205">
                                    <br>
                                    <p class="text-center"> <strong>Trata de una tecla de bloqueo,
                                            es decir, que su pulsación sucesiva activa o desactiva sus hipotéticas
                                            funciones. </strong></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card" style="background:     #f5f5f5 ; border: greenyellow dashed 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch">

                                <div class="align-self-center">
                                    <h4 class="text-center">
                                        Tecla Pausa, Pause o Break</h4>

                                    <img class="mx-auto d-block"  src="https://i.ibb.co/FgK6ngC/pau.jpg"
                                         width="205">

                                    <p class="text-center"> <strong>
                                            En Windows la tecla Pausa no tiene ningún uso como interruptora de procesos.

                                        </strong></p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h1 class="text-center">Bloque alfanumérico </h1>

        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class=" col-md-12"  >
                <div class="card overflow-hidden"style="background:lightgray; border: greenyellow solid 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <h4 class="text-center">Tecla de funciones</h4>
                            <br>
                            <div class="media align-items-stretch">

                                <div class="media-body">
                                    <img class="mx-auto d-block"  src="https://i.ibb.co/GJx5d3d/gd.gif"
                                         >
                                    <br>
                                    <p class="text-center"> <strong> Está ubicado en la parte inferior del bloque de funciones,
                                            contiene los números arábigos del 1 al 0 y
                                            el alfabeto organizado como en una máquina de escribir,
                                            además de algunas teclas especiales.</strong></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h1 class="text-center">Bloque especial </h1>

        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class=" col-md-12"  >
                <div class="card overflow-hidden" style="background:lightgray; border: greenyellow solid 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <h4 class="text-center">Tecla especiales</h4>
                            <br>
                            <div class="media align-items-stretch">

                                <div class="media-body">
                                    <img class="mx-auto d-block" src="https://i.ibb.co/3rk8GSS/nj.jpg"
                                     >
                                    <br>
                                    <p class="text-center"> <strong> Está ubicado a la derecha del bloque alfanumérico,
                                            contiene algunas teclas especiales como Imp Pant, Bloq de desplazamiento,
                                            pausa, inicio, fin, insertar, suprimir, Repag, Avpag y las flechas direccionales
                                            que permiten mover el punto de inserción en las cuatro direcciones.</strong></p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h1 class="text-center">Bloque Numerico </h1>

        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class=" col-md-12"  >
                <div class="card overflow-hidden" style="background:lightgray; border: greenyellow solid 8px">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <h4 class="text-center">Tecla especiales</h4>
                            <br>
                            <div class="media align-items-stretch">

                                <div class="media-body">
                                    <img class="mx-auto d-block" src="https://i.ibb.co/1X2ktJS/tas.jpg"
                                    >
                                    <br>
                                    <p class="text-center"> <strong>
                                            Está ubicado a la derecha del bloque especial,
                                            se activa cuando al presionar la tecla Bloq Num,
                                            contiene los números arábigos organizados como en
                                            una calculadora con el fin de facilitar la digitacion de cifras,
                                            además contiene los signos de las cuatro operaciones básicas como
                                            suma +, resta -, multiplicación * y división /

                                        </strong></p>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <div class="container-fluid " >
        <div class="row m-3">
            <div class="col-md-6 mb-5" >
                <img class="mx-auto d-block"  src="https://i.ibb.co/JdZjZzP/dd.jpg"
                     width="300">



            </div>
            <div class="col-md-6" >
<br><br>
                <h1 class="text-center">Atajos del teclado</h1>

            </div>



        </div>
    </div>

    <div class="row m-5 d-flex justify-content-center" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <br>

                <img class="mx-auto d-block" src="https://i.ibb.co/Gv9WJKm/co1.jpg"    width="150" height="150">
                <br>
                <h4 class="mx-auto d-block">Para copiar texto</h4>

            </div>
        </div>
        <div class="col-md-4">

            <div class="card" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/h8YXxWL/ctrlv.jpg"    width="150" height="150">
                <br>
                <h4 class="mx-auto d-block">Para pegar el texto copiado </h4>

            </div>
        </div>
        <div class="col-md-4">

            <div class="card" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block"  src="https://i.ibb.co/fv9hgQG/asz.jpg"  width="150" height="150">
                <br>
                <h4>Deshacer el último cambio</h4>

            </div>
        </div>

    </div>
    </div>

    <div class="row m-5 d-flex justify-content-center" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <br>

                <img class="mx-auto d-block" src="https://i.ibb.co/crxD7sP/fs.jpg"    width="150" height="150">
                <br>
                <h4 class="text-center">Abre la Búsqueda en cualquier programa.</h4>

            </div>
        </div>
        <div class="col-md-4">

            <div class="card" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/VpcbyX6/cs.png"    width="150" height="150">
                <br>
                <h4 class="text-center"> Guarda el archivo con el que estamos trabajando. </h4>

            </div>
        </div>
        <div class="col-md-4">

            <div class="card" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block"  src="https://i.ibb.co/VjsNdS0/aa.jpg"  width="150" height="150">
                <br>
                <h4 class="text-center">Mueve el cursor al principio o al final de documento.</h4>

            </div>
        </div>

    </div>
    </div>


    <div class="container-fluid  d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <br>
                <img class="mx-auto d-block"   src="https://i.ibb.co/W3DsLL2/Ctrp.png"   width="150" height="150">

                <h3 class="text-center">Nos abre una vista previa de la impresión del documento.</h3>

            </div>
        </div>
    </div>


    <br><br>
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
