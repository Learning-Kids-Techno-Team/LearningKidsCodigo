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

    <title>Actividades Español</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<style>

    .card{

        border-bottom-left-radius: 50%;
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
        background: #d5f5fa;
    }


    p{
        margin-left:15%;
        margin-right: 15%;
        text-align: justify;
        font-style: italic;

    }
    body{
        background: #FF7800;
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

<body style="background: #FF7800;">
<!-- navbar -->
@section('content')
<!-- iamgen -->
<div class="container-fluid">
    <div class="row pb-5">
        <div class="col-md-12" style="background: #FEB472" id="fondo" >
            <img   src="https://i.ibb.co/zZHbhMn/happy-children-playing-in-the-park-vector-removebg-preview.png"   width="600" class=" mx-auto d-block"/>
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
    <div class="row pt-5  "  style="background: #FEB472">
        <!-- tarjeta 1 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center" >
            <div class="card"  style="width: 18rem;" >

                <img src="https://i.pinimg.com/736x/97/f1/27/97f127dd93502ff7dc23c88abfe9ff88.jpg" class="card mx-auto d-block" height="150" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad Lineas</h5>
                    <a href=" {{ url('/lineaA') }}" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>


        <!-- tarjeta2 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://static.vecteezy.com/system/resources/previews/000/298/916/non_2x/young-children-playing-with-an-abacus-vector.jpg" class="card mx-auto d-block" height="150" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad Restas</h5>
                    <a href=" {{ url('/restaA') }}" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-4 pb-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/ninos-aprendiendo-matematicas-abaco_1639-6893.jpg" class="card mx-auto d-block" height="160" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Actividad Sumas</h5>
                    <a href=" {{ url('/sumaA') }}" class="btn btn-danger" >ver</a>
                </div>
            </div>
        </div>




        <div class="container-fluid">
            <div class="row pb-5  "  style="background: #FEB472">
                <!-- tarjeta 1 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center" >
                    <div class="card"  style="width: 18rem;" >

                        <img  src="https://i.ibb.co/K5z45Vs/juguetes.jpg"  class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Relación de  Objetos</h5>
                            <a href=" {{ url('/relacion') }}" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>


                <!-- tarjeta2 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/q9C0DFT/figura.jpg" class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Figuras Geometricas</h5>
                            <a href=" {{ url('/figuraA') }}" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>
                <!-- tarjeta3 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img  src="https://i.ibb.co/Qkc6Q54/Numeros-Ordinales.png" class="card mx-auto d-block" height="160" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad numeros Ordinales</h5>
                            <a href=" {{ url('/ordinales') }}" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row pb-5  "  style="background: #FEB472">
                <!-- tarjeta 1 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center" >
                    <div class="card"  style="width: 18rem;" >


                        <img  src="https://i.ibb.co/XxtgFXt/natural.jpg"  class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad De números naturales</h5>
                            <a href=" {{ url('/natural') }}" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>


                <!-- tarjeta2 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/SKmNjxQ/1594a.jpg"  class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Símbolos de igualdad</h5>
                            <a href=" {{ url('/simbolos2') }}" class="btn btn-danger" >ver</a>
                        </div>
                    </div>
                </div>
                <!-- tarjeta3 -->
                <div class="col-md-4 pb-5 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img  src="https://i.ibb.co/DpVby1r/mmm.png"  class="card mx-auto d-block" height="160" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Actividad Longitud</h5>
                            <a href=" {{ url('/longitud2') }}" class="btn btn-danger" >ver</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
@endsection

