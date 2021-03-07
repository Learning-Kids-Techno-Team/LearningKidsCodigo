@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <title>Partes del Cuerpo</title>
    <style>
        body {
            background: #F8FEBE;
        }


        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background: aquamarine;
        }

        .navbar{
            background: aquamarine;

        }


        .caja_columna .texto{

            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 8px dashed tomato;
            height: 80%;
            margin: 30px;
            padding: 10px;
            background: #98dfb6;
        }
        #c{
            background: url("https://i.ibb.co/0jML89p/man2.jpg" );
        }
        #bor {

            background: orange;
        }



        .card {
            background-color: #222831;
            height: 30rem;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: plum solid 10px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            color: white;
        }

        .card__name {
            margin-top: 15px;
            font-size: 1.5em;
        }

        .card__image {
            height: 250px;
            width: 250px;
            border-radius: 40%;
            border: 8px solid #272133;
            margin-top: 20px;

            box-shadow: 0 10px 50px rgba(285, 20, 220, 8);
        }


        .im{
            color: black ;
            font-family: bold;
            font-size: 30px;
        }
        .card__imag {
            height: 280px;
            width: 280px;

            border: 8px solid mediumspringgreen;
            margin-top: 20px;

            box-shadow: 0 10px 50px rgba(285, 20, 220, 8);
        }



    </style>
</head>
<body>

<!-- navbar  style="background: #98dfb6 #f5f5f5 "-->
@section('content')
    <div class="container-fluid center-block pl-0"  >
    </div>
    <div class="container-fluid "  id="c">
        <div class="container-fluid p-5">
            <div class="row" style="border: mediumaquamarine 12px solid; border-top-left-radius: 30px;
             border-bottom-right-radius: 30px; border-bottom-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="col-md-7 mt-0" style="background: #fff6a1;">
                    <h2 style="text-align: center">
                        <br>
                        El Cuerpo Humano y sus partes /The human body and its parts
                    </h2>
                    <p>
                        <strong><br><br>
                            Es importante no solo porque nos permita caminar, comer,
                            ver, tocar, sino también porque es nuestra principal
                            herramienta de comunicación, de sentir, de vivir experiencias y
                            disfrutar de la vida.
                            Aprender las partes del cuerpo en ingles no sólo hace que
                            aumenten su vocabulario en este idioma, sino que también
                            les ayuda a desarrollar habilidades motrices y coordinación,
                            dos cosas muy necesarias para su crecimiento.
                        </strong></p>
                </div>
                <div class="col-md-5 mt-0" style="background:   #fff6a1;">
                    <img class=" mx-auto d-block ml-0" src="https://i.ibb.co/ckq9K8z/cuer-removebg-preview.png"   width="450" />
                </div>
            </div>
        </div>
    </div>

    <!-- contendor imagen  -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <img class=" mx-auto d-block " style="border: #9561e2 dashed 8px" alt="Bootstrap Image Preview" src="https://static.vecteezy.com/system/resources/previews/001/312/591/non_2x/body-parts-of-girl-for-kids-learning-vector.jpg"  width="450" />
            </div>

        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  mt-5" id="bor"  >

                <h3>Partes de la cara en Inglés y Español - parts  in english and spanish
                </h3>
            </div>
        </div>
    </div>
    <div class="container-fluid " style="background:  #f5f5f5; ">
        <div class="row m-3">
            <div class="col-md-6" >
                <p class="im"><strong>
                        <br> <br>
                        ¿sabrías decir qué partes contiene la cara?<br><br>
                        ¡Vamos a aprenderlas!
                    </strong></p>
            </div>

            <div class="col-md-6 mb-5" >
                <img class="mx-auto d-block card__imag" src="https://i.ibb.co/CbRbYMk/car3.png" >



            </div>
        </div>
    </div>


    <!-- contenedor 1 -->

    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img   src="https://i.ibb.co/L0S2WK6/cw.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Cabeza<br>head</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/FDVyH9Z/ceja1.jpg" class="card__image">
                        <h1 class="card__name text-center"><strong>Ceja <br> eyebrown</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/JjdycPK/ojo.jpg" alt="ojo"  class="card__image">
                        <h1 class="card__name text-center"><strong>Ojo<br>eye</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- contenedor 2 -->
    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/fHLCfZB/nariz.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Nariz<br>nose</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/34cpczJ/boca.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Boca <br>mouth</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/X4V5Nvj/pelo.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Pelo<br>hair</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  " style="background: orange"  >

                <h3>Partes del tronco en Inglés y Español - Parts of the trunk in English and Spanish
                </h3>
            </div>
        </div>
    </div>



    <div class="container-fluid " style="background:  #f5f5f5; ">
        <div class="row m-3">
            <div class="col-md-6" >
                  <p class="im"><strong>
                      Va desde la cabeza hasta la cintura, y<br>
                      es la región más importante del cuerpo<br>
                      ¿sabrías decir qué partes contiene el tronco?<br><br>
                          ¡Vamos a aprenderlas!
                      </strong></p>
            </div>

            <div class="col-md-6 mb-5" >
                <img class="mx-auto d-block card__imag" src="https://i.ibb.co/NKgN91F/Captura-de-pantalla-606.png"

                     width="350" height="250">

            </div>
        </div>
    </div>


    <!-- contenedor 1 -->

    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/Ws6cQQ1/cade.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Cintura<br>waist</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img  src="https://i.ibb.co/bjtKzHx/cos.jpg" class="card__image">
                        <h1 class="card__name text-center"><strong>Costilla<br>rib</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img  src="https://i.ibb.co/ctrzgFc/espal.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Espalda<br>back</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- contenedor 2 -->
    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                       <img src="https://i.ibb.co/zN3FXCN/omb.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Ombligo<br>navel </strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/TPWJmxG/pecho.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Pecho<br>chest</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/Q9Bz266/column.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Columna vertebral<br>spine</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  " style="background: orange"  >

                <h3>Extremidades Inglés y Español - Extremities English and Spanish
                </h3>
            </div>
        </div>
    </div>

    <!-- contenedor 1 -->

    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/9VJFLrp/bra.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Brazo<br>arms</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/vJRm44f/Illustration-of-greeting-with-elbow-to-elbow.jpg  " class="card__image">
                        <h1 class="card__name text-center"><strong>Codo<br>elbow</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/7bV4zRr/dedo.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Dedo de la mano<br>finger</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  " style="background: orange"  >

                <h3>Partes de la pierna en Inglés y Español - Leg parts in English and Spanish
                </h3>
            </div>
        </div>
    </div>

    <!-- contenedor 1 -->

    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/ydWwbVP/pierrna.jpg"    class="card__image">
                        <h1 class="card__name text-center"><strong>Pierna<br>leg</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/R4Nv3R1/pieq.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Pie<br>foot</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/MCWghJM/pies.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Pies<br>feet</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- contenedor 2 -->
    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/jrzwWtZ/fem-t-r-p-en-fot.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Dedo del pie<br>toe</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/rGrKvxG/rod.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Rodilla<br>knee</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/0CH8k2F/tob.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Tobillo<br>ankle</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  " style="background: orange"  >

                <h3>Partes internas del cuerpo en Inglés y Español - Internal body parts in English and Spanish
                </h3>
            </div>
        </div>
    </div>


    <div class="container-fluid " style="background:  #f5f5f5; ">
        <div class="row m-3">
            <div class="col-md-6" >
                <p class="im"><strong><br>
                        Las partes internas del cuerpo, esas que no se ven,
                        pero realizan las acciones esenciales del
                        cuerpo humano como transportar la sangre,
                        sostener el cuerpo, crear el oxígeno necesario
                        o transportar las órdenes del cerebro.
                    </strong></p>
            </div>

            <div class="col-md-6 mb-5" >
                <img class="mx-auto d-block card__imag" src="https://i.ibb.co/KD968mJ/org.webp"

                     width="350" height="250">

            </div>
        </div>
    </div>

    <!-- contenedor 1 -->

    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/WkGwYSY/hue.jpg"    class="card__image">
                        <h1 class="card__name text-center"><strong>Hueso<br>bone</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/vVSR8xN/hig.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Higado<br>liver</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/cDmjvP3/mus.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Músculo<br>muscle</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- contenedor 2 -->
    <div class="container-fluid ">

        <div class="container-fluid mt-4">

            <div class="row m-5" >
                <div class="col-md-4">
                    <!-- tarjeta 1 -->
                    <div class="card ">
                        <img src="https://i.ibb.co/dKw4fD7/pul.jpg"  class="card__image">
                        <h1 class="card__name text-center"><strong>Pulmón<br>lung</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-4  ">
                    <div class="card ">
                        <img src="https://i.ibb.co/HzYXcKD/ven.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Vena<br>vein</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
                    </div>
                </div>
                <!-- tarjetas3 -->
                <div class="col-md-4">
                    <div class="card ">
                        <img src="https://i.ibb.co/bH8SbMw/cor.jpg"   class="card__image">
                        <h1 class="card__name text-center"><strong>Corazón<br>heart</strong></h1>
                        <br>
                        <iframe src="https://drive.google.com/file/d/1rAiGEMtD5teX3HVkGK4ppJSaYRfKqkhP/preview"  width="318" height="60"></iframe>
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

