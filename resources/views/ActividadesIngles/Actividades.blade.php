@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Actividades Ingles</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <style>

        .navbar{
            background: aquamarine;
        }

        .card{

            border-bottom-left-radius: 50%;
            border-color: aquamarine;
            border: double aquamarine;
        }


        #separadorInferior .content{
            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }

        #separadorInferior2 .content{
            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background:  aquamarine;
        }


        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }
        body{
            background:aquamarine ;
        }


        h1 {
            font-family: Brush Script MT;
            size: 80px;
        }

        #fondo {
            border-bottom-left-radius: 50%;
            border-top-right-radius: 50%;
        }

        .btn {

            background: aquamarine;
            border: aquamarine 2px solid;
        }

    </style>
</head>

<body>
<!-- navbar -->
@section('content')
    <!-- iamgen -->
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-md-12" style="background:  #dcfecb" id="fondo" >
                <img src="https://i.ibb.co/m84zYZM/bb369e79d17758d92afb978dbbf866d8-removebg-preview.png"   width="600" class=" mx-auto d-block"/>

            </div>
        </div>
    </div>


    <div  class="container-fluid ">
        <div class="row " style="background: aquamarine" >
            <div class="col-md-12  mb-5" style="background:  #dcfecb">
                <h1 style="text-align: center">Actividades</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row pt-5  "  style="background: #dcfecb">
            <!-- tarjeta 1 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center" >
                <div class="card"  style="width: 18rem;" >

                    <img src="https://i.ibb.co/93kyTr0/ninos-pequenos-reloj-29937-4342-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Actividad del tiempo</h5>
                        <a href=" {{ url('/actividadMeses') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>


            <!-- tarjeta2 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ytimg.com/vi/ynLYpd2sMsc/maxresdefault.jpg" class="card mx-auto d-block" height="180" width="200">
                    <div class="card-body">
                        <h5 class="card-title"  align="center">Actividad lugares de la ciudad</h5>
                        <a href=" {{ url('/actividadLugar') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>
            <!-- tarjeta3 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img img src="https://i.ibb.co/BspywvW/personajes-dibujos-animados-diferentes-profesiones-29937-4353-removebg-preview.png"  class="card mx-auto d-block" height="180" width="200">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Actividad de las profesiones</h5>
                        <a href=" {{ url('/actividadProfesiones') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row pt-5  "  style="background: #dcfecb ">
                    <!-- tarjeta 1 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center" >
                        <div class="card"  style="width: 18rem;" >

                            <img src="https://i.ibb.co/yQmVT1H/conjunto-coleccion-animales-dibujos-animados-29190-2951-removebg-preview-1.png" class="card mx-auto d-block" height="180" width="220">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad los animales</h5>
                                <a href=" {{ url('/actividadanimales') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- tarjeta2 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/TvzdRnT/depositphotos-7406445-stock-illustration-cartoon-vehicles-removebg-preview.png"   class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad medios de transporte</h5>
                                <a href=" {{ url('/actividadTransportes') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>
                    <!-- tarjeta3 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/2nPTVQ7/716p-Et88i-L-AC-SY450-removebg-preview.png"   class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad abecedario</h5>
                                <a href=" {{ url('/actividadAbecedario') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row pt-5"  style="background: #dcfecb ">
                            <!-- tarjeta 1 -->
                            <div class="col-md-4 pb-5 d-flex justify-content-center" >
                                <div class="card"  style="width: 18rem;" >

                                    <img src="https://i.ibb.co/7gtRW7S/gran-coleccion-lapices-colores-estilo-dibujos-animados-ilustracion-sobre-fondo-blanco-257455-978-rem.png"   class="card mx-auto d-block" height="180" width="220">
                                    <div class="card-body">
                                        <h5 class="card-title" align="center">Actividad los colores</h5>
                                        <a href=" {{ url('/actividadColores') }}" class="btn">Ver</a>
                                    </div>
                                </div>
                            </div>

                            <!-- tarjeta2 -->
                            <div class="col-md-4 pb-5 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.ibb.co/khf5MMG/mascot-illustration-featuring-numbers-1-260nw-413888401-removebg-preview.png"  class="card mx-auto d-block" height="180" width="200">
                                    <div class="card-body">
                                        <h5 class="card-title" align="center">Actividad los numeros</h5>
                                        <a href=" {{ url('/actividadnumeros') }}" class="btn">Ver</a>
                                    </div>
                                </div>
                            </div>

                            <!-- tarjeta3-->
                            <div class="col-md-4 pb-5 d-flex justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img  class="card mx-auto d-block" src="https://i.ibb.co/hFn3G31/jop.jpg" height="180" width="200">
                                    <div class="card-body">
                                        <h5 class="card-title" align="center">Actividad miembros de la familia</h5>
                                        <a href=" {{ url('/') }}" class="btn">Ver</a>
                                    </div>
                                </div>
                            </div>



                            <div class="container-fluid">
                                <div class="row pt-5  "  style="background: #dcfecb">
                                    <!-- tarjeta 1 -->
                                    <div class="col-md-4 pb-5 d-flex justify-content-center" >
                                        <div class="card"  style="width: 18rem;" >

                                            <img  class="card mx-auto d-block" src="https://i.ibb.co/M12q3jL/abcd.jpg" height="180" width="200">
                                            <div class="card-body">
                                                <h5 class="card-title" align="center">Actividad partes del cuerpo</h5>
                                                <a href=" {{ url('/actividadParte') }}" class="btn">Ver</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- tarjeta2 -->
                                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                                        <div class="card" style="width: 18rem;">
                                            <img  class="card mx-auto d-block" src="https://i.ibb.co/zmjH3zL/ab.jpg" height="180" width="200">
                                            <div class="card-body">
                                                <h5 class="card-title"  align="center">Actividad prendas de vestir</h5>
                                                <a href=" {{ url('/actividadPrendas') }}" class="btn">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tarjeta3 -->
                                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                                        <div class="card" style="width: 18rem;">
                                            <img   class="card mx-auto d-block" src="https://i.ibb.co/TRppNHH/abc.jpg" height="180" width="200">
                                            <div class="card-body">
                                                <h5 class="card-title" align="center">Actividad utiles escolares</h5>
                                                <a href=" {{ url('/actividadUtiles') }}" class="btn">Ver</a>
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

            <div  id="separadorInferior2">
                <div class="content ">

                </div>
            </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
@endsection
