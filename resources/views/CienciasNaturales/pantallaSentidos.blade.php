@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Sentidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>

        .navbar{
            background: #FDFD96;
        }

        body{

            background: #F8FEBE;


        }

        .card{
            background: #D8E2F3;
            border:crimson 6px double;
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
            background: #FF7800;
        }
        #titulo{
            text-align: center;
            color: #FF7800;
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


    </style>
</head>
<body >

<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-info ">
            <div class="row ml-5 mr-5 ">
                <div class="col-md-7  mt-5 mx-auto d-block" style="background: #FDFD96;">
                    <img src="https://i.ibb.co/gv5GxKb/sen-removebg-preview-1-removebg-preview-2.png"  height="500" width="600" class="mx-auto d-block" >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: #D8E2F3;"  >
                    <h4>Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">Los sentidos</h3>
                    <p class="" id="pa">
                        <em>Los sentidos son el mecanismo fisiológico de la sensación,<br>y permiten obtener información de lo que está a nuestro alrededor así como determinados estados internos del organismo.
                            <br> <br> Los seres humanos cuentan, tradicionalmente, con cinco sentidos.

                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center p-5" >
    <div class="row " >
        <div class="col-md-12 ">
            <div class="card" style="width: 40rem;">
                <iframe src="https://drive.google.com/file/d/1EX7dI9gQnsMVVUKymOA9iwh9iOkdvGhH/preview"  width="628" height="300"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Los sentidos</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5" style="background: #F79458;">
            <h1 style="text-align: center">¿Cuáles son los 5 sentidos?</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row"  style="background: #F8FEBE" >
        <!-- tarjeta1 -->
        <div class="col-md-4 p-5" >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/NpX0Dmd/oido.jpg" alt="oido" class="card mx-auto d-block"   height="180" width="180">
                <div class="card-body">
                    <h1 style="text-align: center">Oído</h1>
                    <h5 class="card-title" align="center">Sentido corporal que permite percibir y distinguir los sonidos. <br>El oído humano puede percibir frecuencias a partir de 20 Hz, que es un sonido grave, y hasta 28,000 Hz que son sonidos muy agudos, con un volumen de intensidad 5 a 15 decibelios.
                        <br>
                    </h5>
                </div>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-md-4 p-5">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/27MLMkx/vista.png" alt="vista"  class="card mx-auto d-block"   height="180" width="180">
                <div class="card-body">
                    <h1 style="text-align: center">Vista</h1>
                    <h5 class="card-title" align="center">Es probablemente el sentido más desarrollado en los seres humanos. <br><br>Es tan importante que se puede imponer sobre la lógica. <br><br>Cuando la vista se bloquea o elimina, se ponen en alerta el resto de los sentidos.
                        <br>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-5">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/RQ7F6py/olfato.jpg" alt="olfato"   class="card mx-auto d-block"   height="180" width="180">
                <div class="card-body">
                    <h1 style="text-align: center">Olfato</h1>
                    <h5 class="card-title" align="center"><br>Es el sentido corporal que permite percibir y distinguir los olores.<br><br><br> A diferencia de muchos animales, el sentido del olfato <br>se encuentra menos desarrollado en los seres humanos.</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="background: #F8FEBE">
                <div class="col-md-6 p-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/xfVwDKk/tacto.jpg" alt="tacto" class="card mx-auto d-block"  height="180" width="180">
                        <div class="card-body">
                            <h1 style="text-align: center">Tacto</h1>
                            <h5 class="card-title" align="center"><br><br>Sentido corporal mediante el cual se perciben el contacto o la presión de las cosas sobre<br> la piel y se distinguen ciertas cualidades que tienen, como la forma, <br>el tamaño, la textura,<br> la dureza o la temperatura.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta5-->
                <div class="col-md-6 p-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/ZhkgbKZ/gusto.jpg" alt="gusto" class="card mx-auto d-block"  height="180" width="180">
                        <div class="card-body">
                            <h1 style="text-align: center">Gusto</h1>
                            <h5 class="card-title" align="center"> Es el sentido que permite identificar sabores por medio de la lengua.<br>El ser humano es capaz de percibir un abanico amplio de sabores, dulces o salados, ácidos o amargos, y la combinación de varios estímulos, entre ellos textura, temperatura, olor y gusto.</h5>
                        </div>
                    </div>
                </div>
                <div  class="container-fluid">
                    <div class="row">
                        <div class="col-md-12  mb-5" style="background: #F79458;">
                            <h1 style="text-align: center">Desarrollando el sentido del Oído</h1>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-center p-5" >
                        <div class="row " >
                            <div class="col-md-12 ">
                                <div class="card" style="width: 40rem;">
                                    <iframe src="https://drive.google.com/file/d/1KLbqQmGZ6K2mpG6Y-dorjwkGVi5yHnVl/preview"  width="628" height="300"></iframe>
                                    <div class="card-body" id="im">
                                        <h5 class="card-title">Identificó los sonidos</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="container-fluid">
                        <div class="row">
                            <div class="col-md-12  mb-5" style="background: #F79458";>
                                <h1 style="text-align: center">Desarrollando el sentido de la vista</h1>
                            </div>
                        </div>
                        <div class="container-fluid d-flex justify-content-center p-5" >
                            <div class="row " >
                                <div class="col-md-12 ">
                                    <div class="card" style="width: 40rem;">
                                        <iframe src="https://drive.google.com/file/d/1jkC6A-mE7lMExmtwBEjD2kteoIg89703/preview"   width="628" height="300"></iframe>
                                        <div class="card-body" id="im">
                                            <h5 class="card-title"> Sentido de la vista </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="container-fluid">
                            <div class="row">
                                <div class="col-md-12  mb-5" style="background: #F79458";>
                                    <h1 style="text-align: center">Desarrollando el sentido del Tacto</h1>
                                </div>
                            </div>
                            <div class="container-fluid d-flex justify-content-center p-5" >
                                <div class="row " >
                                    <div class="col-md-12 ">
                                        <div class="card" style="width: 40rem;">
                                            <iframe src="https://drive.google.com/file/d/1PhckBpOuYxOfcwN2kvEw64_ML6dpR1Q4/preview"  width="628" height="300"></iframe>
                                            <div class="card-body" id="im">
                                                <h5 class="card-title">Texturas</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mb-5" style="background: #F79458";>
                                        <h1 style="text-align: center">Desarrollando el sentido del Gusto</h1>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row"  style="background: #F8FEBE" >
                                        <!-- tarjeta1 -->
                                        <div class="col-md-6 p-4" >
                                            <div class="card mx-auto d-block" style="width: 18rem;">
                                                <img src="https://i.ibb.co/6m5RmX1/dulce.jpg" alt="dulce" class="card mx-auto d-block"   height="180" width="180">
                                                <div class="card-body">
                                                    <h1 style="text-align: center">Dulce</h1>
                                                    <h5 class="card-title" align="center">
                                                        Paletas <br>
                                                        Confites<br>
                                                        Helados <br>
                                                        Postres <br>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- tarjeta2 -->
                                        <div class="col-md-6 p-4">
                                            <div class="card mx-auto d-block" style="width: 18rem;">
                                                <img src="https://i.ibb.co/x15yMjK/salados.jpg" alt="salados"  class="card mx-auto d-block"   height="180" width="180">
                                                <div class="card-body">
                                                    <h1 style="text-align: center">Salado</h1>
                                                    <h5 class="card-title" align="center">
                                                        Papas<br>
                                                        Sal  <br>
                                                        Soyas <br>
                                                        Pollo <br>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row"  style="background: #F8FEBE" >
                                                <!-- tarjeta1 -->
                                                <div class="col-md-6 p-4" >
                                                    <div class="card mx-auto d-block" style="width: 18rem;">
                                                        <img src="https://i.ibb.co/R051KyT/amargos.jpg" alt="amargos"  class="card mx-auto d-block"   height="180" width="280">
                                                        <div class="card-body">
                                                            <h1 style="text-align: center">Amargo</h1>
                                                            <h5 class="card-title" align="center">
                                                                Café<br>
                                                                Chocolate<br>
                                                                Vinagre <br>
                                                                Berengena<br>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tarjeta2 -->
                                                <div class="col-md-6 p-4">
                                                    <div class="card mx-auto d-block" style="width: 18rem;">
                                                        <img src="https://i.ibb.co/whXf9r5/acidos.jpg" alt="acidos"  class="card mx-auto d-block"   height="180" width="280">
                                                        <div class="card-body">
                                                            <h1 style="text-align: center">Acídos</h1>
                                                            <h5 class="card-title" align="center">
                                                                Limóm<br>
                                                                Naranja<br>
                                                                Toronja<br>
                                                                Mandarina <br>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12  mb-5" style="background: #F79458";>
                                                        <h1 style="text-align: center">Desarrollando el sentido del Olfato</h1>
                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="row"  style="background: #F8FEBE" >
                                                        <!-- tarjeta1 -->
                                                        <div class="col-md-6 p-4" >
                                                            <div class="card mx-auto d-block" style="width: 18rem;">
                                                                <img src="https://i.ibb.co/XkwkQVC/agradable1-removebg-preview.png" alt="agradable1-removebg-preview"  class="card mx-auto d-block"   height="180" width="180">
                                                                <div class="card-body">
                                                                    <h1 style="text-align: center">Agradable</h1>
                                                                    <h5 class="card-title" align="center">Aroma de las flores
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- tarjeta2 -->
                                                        <div class="col-md-6 p-4">
                                                            <div class="card mx-auto d-block" style="width: 18rem;">
                                                                <img src="https://i.ibb.co/0jhK52Y/agradable2-removebg-preview.png" alt="agradable2-removebg-preview" class="card mx-auto d-block"   height="180" width="180">
                                                                <div class="card-body">
                                                                    <h1 style="text-align: center">Agradable</h1>
                                                                    <h5 class="card-title" align="center">Aroma del Perfume
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid">
                                                            <div class="row"  style="background: #F8FEBE" >
                                                                <!-- tarjeta1 -->
                                                                <div class="col-md-6 p-4" >
                                                                    <div class="card mx-auto d-block" style="width: 18rem;">
                                                                        <img src="https://i.ibb.co/Rbyfw1T/desagradable2.jpg" alt="desagradable2"  class="card mx-auto d-block"   height="180" width="250">
                                                                        <div class="card-body">
                                                                            <h1 style="text-align: center">Desagradable</h1>
                                                                            <h5 class="card-title" align="center">Mal Aliento
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- tarjeta2 -->
                                                                <div class="col-md-6 p-4">
                                                                    <div class="card mx-auto d-block" style="width: 18rem;">
                                                                        <img src="https://i.ibb.co/7nt2mrT/desagradable1-removebg-preview.png" alt="desagradable1-removebg-preview"  class="card mx-auto d-block"   height="180" width="180">
                                                                        <div class="card-body">
                                                                            <h1 style="text-align: center">Desagradable</h1>
                                                                            <h5 class="card-title" align="center">Mal Olor de los desechos
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</div>
</body>
</html>
@endsection
