@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Medios Comunicaci</title>
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

            background: #dcfecb;

        }


        .card{

            background: #D2FFB5;
            border:springgreen 8px solid;
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

            border:coral 10px solid;

        }

        #color{
            color: tomato;

        }
        #co{
            color: black;
        }
        #borde{
            border: forestgreen 8px dotted;
        }





    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid " >
    <div class="row" >
        <div class="col-md-12" >
            <div class="row ml-5 mr-5"  >
                <div class="col-md-6" >
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/zFBJr4s/comuni-removebg-preview.png"  width="450" height="380" >
                </div>
                <div class="col-xl-6  mt-5" style=" background:  #C5FFA0" id="borde">

                    <h3 class="mt-5" style="text-align: center; color: tomato">Medios de Comunicación</h3>
                    <p class="" id="pa">
                        <strong><br><br>
                            Es un instrumento o forma de contenido por el cual se realiza el proceso de comunicación. Usualmente se emplea el término para hacer referencia a los medios de comunicación de masas, sin embargo, otros medios de comunicación, como el teléfono, no son masivos sino interpersonales. Desde que los medios de comunicación nacieron y se desarrollaron, se han vuelto una gran fuente de poder e influencia social a nivel mundial.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contenedor-->
<div class="container-fluid  center-block pl-5" >
    <br><br>
    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row p-5 ">
            <div class="col-md-12  " id="bor" style="background: #FDFD96">

                <h3>Algunos ejemplos de medios de comunicación:
                </h3>
            </div>
        </div>
    </div>

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/9HwNMh7/telefono-removebg-preview.png"   width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Celular</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/0QkT3bG/televisor-removebg-preview.png"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Televisor</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/yYwdfW3/radio-removebg-preview.png" width="300" height="240">
                <h2 class="mx-auto d-block" id="color"><em>Radio</em></h2>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/gWj6Rc8/xsocial-media-810x456-jpg-pagespeed-ic-v63w-TQP3fh-removebg-preview.png"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Redes sociales</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/j3CTF60/carta.jpg" width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Carta</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/GPY39Hz/periodico-removebg-preview.png"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Periódico</em></h2>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid  center-block pl-5" >

    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">

                <img class="mx-auto d-block"  src="https://i.ibb.co/Hhxk4Zy/F-removebg-preview.png"    width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Fax</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"    src="https://i.ibb.co/Jp0xkzQ/correo-electronico-removebg-preview.png"    width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Correo electrónico</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/THKTxt1/tel-removebg-preview.png"  width="300" height="240">
                <h2 class="mx-auto d-block" id="color"><em>Teléfono tradicional </em></h2>
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
