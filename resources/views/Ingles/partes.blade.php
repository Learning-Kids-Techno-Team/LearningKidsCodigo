@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
            background: url("https://lh3.googleusercontent.com/proxy/5DX0ohkJDdJf7BBqKohXlhPQrY5WJvTaHuCScwHim8a4lxWpAH5UffEJ2yKNPvelfg5rTbaqw2lGfC1YYD8VHBknYO2yIw");
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


    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  mt-5" id="bor"  >

                <h3>Partes de la cara en Inglés y Español - parts  in english and spanish
                </h3>
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

