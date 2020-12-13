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

    <title>Actividades Ciencias Naturales</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



<style>
    .navbar{
        background: #FDFD96;
    }
    .card{

        border-bottom-left-radius: 50%;
        border-color: #FF7800;
        border: double #FF7800;
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
        background: #FEB472;
    }


    p{
        margin-left:15%;
        margin-right: 15%;
        text-align: justify;
        font-style: italic;

    }
    body{
        background: #F8FEBE;
    }
    #fondo{
        border-bottom-left-radius:50%;
        border-top-right-radius: 50%;

    }
    h1 {
        font-family: Brush Script MT;
        size: 80px;
    }



</style>
</head>
<body>
<!-- navbar -->
@section('content')



<!-- iamgen -->
<div class="container-fluid">
    <div class="row pb-5">
        <div class="col-md-12" style="background: #FEB472" id="fondo" >
            <img src="https://i.ibb.co/5Rn4hjN/pasted-image-0-removebg-preview.png"  width="600" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<div  class="container-fluid ">
    <div class="row " style="background: #FEB472">
        <div class="col-md-12 bg-warning mb-5 ">
            <h1 style="text-align: center">Actividades</h1>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row pt-5  "  style="background: #F8FEBE">
        <!-- tarjeta 1 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center" >
            <div class="card"  style="width: 18rem;" >

                <img src="https://i.ibb.co/80WJS4q/original-removebg-preview.png"  class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad Animales</h5>
                    <a href="http://learningkidscodigo.test/animalesT" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>


        <!-- tarjeta2 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/r7fbT3P/cinco-sentidos-oir-tocar-sabor-vista-olfato-removebg-preview.png"  class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title"  align="center">Actividad Sentidos</h5>
                    <a href="http://learningkidscodigo.test/lsentidos" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9hn9ZkJ/parts.jpg" alt="parts" class="card mx-auto d-block" height="180" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad Partes del cuerpo</h5>
                    <a href="http://learningkidscodigo.test/partesC" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>




        <div class="container-fluid">
            <div class="row pt-5  "  style="background: #F8FEBE">
                <!-- tarjeta 1 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center" >
                    <div class="card"  style="width: 18rem;" >

                        <img src="https://i.ibb.co/W2dWX00/higiene.jpg"   class="card mx-auto d-block" height="180" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Normas de higiene</h5>
                            <a href="http://learningkidscodigo.test/normasH" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>


                <!-- tarjeta2 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img  src="https://i.ibb.co/dJvh0xN/iii.jpg"  class="card mx-auto d-block" height="180" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Partes de la planta</h5>
                            <a href="http://learningkidscodigo.test/plantaActividad" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>
                <!-- tarjeta3 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img   src="https://i.ibb.co/kccVkhm/SER.jpg"   class="card mx-auto d-block" height="180" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Seres vivos y no vivos</h5>
                            <a href="http://learningkidscodigo.test/seresActividad" class="btn btn-danger" >ver</a>
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
