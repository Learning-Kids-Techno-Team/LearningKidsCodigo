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

    <title>Actividades Ciencias Sociales</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



<style>

    .navbar{
        background: #60A71B;
    }

    .card{

        border-bottom-left-radius: 50%;
        border-color: #60A71B;
        border: double #60A71B;
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
        background:  #dcfecb;
    }


    p{
        margin-left:15%;
        margin-right: 15%;
        text-align: justify;
        font-style: italic;

    }
    body{
        background:#60A71B ;
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
        border: #60A71B 2px solid;
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
            <img src="https://i.ibb.co/yF8rLXw/prof-removebg-preview.png"  width="600" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<div  class="container-fluid ">
    <div class="row " style="background: #60A71B" >
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

                <img src="https://i.ibb.co/jWfDcJy/jjj-removebg-preview-1.png" class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad El Ambiente</h5>
                    <a href=" {{ url('/actividadAmbiente') }}" class="btn">Ver</a>
                </div>
            </div>
        </div>


        <!-- tarjeta2 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/brvg05d/m1-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title"  align="center">Actividad<br> Medios de transporte</h5>
                    <a href=" {{ url('/transporteActividad') }}" class="btn">Ver</a>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/VDkYKBP/los-sentiminetos-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad<br> Los Sentimientos</h5>
                    <a href=" {{ url('/sentimientoActividad') }}" class="btn">Ver</a>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row pt-5  "  style="background: #dcfecb ">
                <!-- tarjeta 1 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center" >
                    <div class="card"  style="width: 18rem;" >

                        <img src="https://i.ibb.co/3sgdbRQ/original-removebg-preview.png" class="card mx-auto d-block" height="180" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Derechos y deberes<br> de los niños y las niñas</h5>
                            <a href=" {{ url('/DerechosY') }}" class="btn">Ver</a>
                        </div>
                    </div>
                </div>

                <!-- tarjeta2 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/mN4BBzq/ocupaciones-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Ocupaciones</h5>
                            <a href=" {{ url('/ocupacionesActividad') }}" class="btn">Ver</a>
                        </div>
                    </div>
                </div>
                <!-- tarjeta3 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/YkJqSNj/guja-removebg-preview.png" class="card mx-auto d-block" height="180" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad<br> Estaciones del año</h5>
                            <a href=" {{ url('/actividadEstaciones') }}" class="btn">Ver</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="container-fluid">
                    <div class="row pt-5  "  style="background: #dcfecb ">
                        <!-- tarjeta 1 -->
                        <div class="col-md-6 pb-5 d-flex justify-content-center" >
                            <div class="card"  style="width: 18rem;" >

                                <img src="https://i.ibb.co/zFBJr4s/comuni-removebg-preview.png"  class="card mx-auto d-block" height="180" width="220">
                                <div class="card-body">
                                    <h5 class="card-title" align="center">Actividad medios de comunicación</h5>
                                    <a href=" {{ url('/actividadComunicacion') }}" class="btn">Ver</a>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta2 -->
                        <div class="col-md-6 pb-5 d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="https://i.ibb.co/9cmWkfD/3d92321c07f6ea6ad4bc750525fdb56b.jpg"  class="card mx-auto d-block" height="180" width="200">
                                <div class="card-body">
                                    <h5 class="card-title" align="center">Actividad ciclo del agua</h5>
                                    <a href=" {{ url('/actividadCiclo') }}" class="btn">Ver</a>
                                </div>
                            </div>
                        </div>
                 </div>
             </div>



        <div  id="separadorInferior2">
            <div class="content ">

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
@endsection
