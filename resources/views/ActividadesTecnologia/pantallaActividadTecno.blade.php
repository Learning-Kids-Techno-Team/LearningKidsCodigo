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

    <title>Actividades Tecnologia</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <style>

        .navbar{
            background: #C5FFA0;
        }

        .card{

            border-bottom-left-radius: 50%;
            border-color: #2a9055;
            border: double 5px #2a9055;
            background-color: #dcfecb;
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
            background:  lightyellow;
        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #C5FFA0;
        }

        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }
        body{
            background: #C5FFA0;
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

            background: #C5FFA0;
            border: #2a9055 2px solid;
        }

    </style>
</head>

<body>
<!-- navbar -->
@section('content')
    <!-- iamgen -->
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-md-12" style="background:  lightyellow" id="fondo" >
                <img  src="https://i.ibb.co/1bTrwfM/acttec-removebg-preview.png" width="600" class=" mx-auto d-block"/>
            </div>
        </div>
    </div>


    <div  class="container-fluid ">
        <div class="row " style="background: #C5FFA0" >
            <div class="col-md-12  mb-5" style="background: lightyellow">
                <h1 style="text-align: center">Actividades</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row pt-5  "  style="background: lightyellow">
            <!-- tarjeta 1 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center" >
                <div class="card"  style="width: 18rem;" >

                    <img src="https://i.ibb.co/xFPk4kq/ct-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Actividad La Computadora</h5>
                        <a href=" {{ url('/actividadCompu') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>


            <!-- tarjeta2 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img  src="https://i.ibb.co/Qd0dhbs/compu1.gif" class="card mx-auto d-block" height="170" width="210">
                    <div class="card-body">
                        <h5 class="card-title"  align="center">Actividad<br> Computadora y su dispositivos hardware</h5>
                        <a href=" {{ url('/pantallaDispositivosHardware') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>
            <!-- tarjeta3 -->
            <div class="col-md-4 pb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ibb.co/JR3SSPH/sofw.png" class="card mx-auto d-block" height="180" width="200">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Actividad<br> Computadora y sus dispositivos software</h5>
                        <a href=" {{ url('/actividadSoftware') }}" class="btn">Ver</a>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row pt-5  "  style="background: lightyellow ">
                    <!-- tarjeta 1 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center" >
                        <div class="card"  style="width: 18rem;" >

                            <img src="https://i.ibb.co/t2TZJf5/unnamed-3-removebg-preview-1.png" class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad<br> Partes del teclado </h5>
                                <a href=" {{ url('/actividadTeclado') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- tarjeta2 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/xF9st8C/wi.jpg" class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad Ventana de windows</h5>
                                <a href=" {{ url('/actividadWindows') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>
                    <!-- tarjeta3 -->
                    <div class="col-md-4 pb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.ibb.co/8YtV29Y/act3-removebg-preview.png"  class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad<br> Funciones del mouse </h5>
                                <a href=" {{ url('/') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row pt-5  "  style="background: lightyellow">
                    <!-- tarjeta 1 -->
                    <div class="col-md-6 pb-5 d-flex justify-content-center" >
                        <div class="card"  style="width: 18rem;" >

                            <img src="https://i.ibb.co/cQJzgmw/Barra-de-tareas.jpg" class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad Barra de tareas windows </h5>
                                <a href=" {{ url('/') }}" class="btn">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- tarjeta2 -->
                    <div class="col-md-6 pb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img  src="https://i.ibb.co/gRQRpLP/activ-removebg-preview-1.png"  class="card mx-auto d-block" height="180" width="200">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Actividad Aparatos electrónicos </h5>
                                <a href=" {{ url('/') }}" class="btn">Ver</a>
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

