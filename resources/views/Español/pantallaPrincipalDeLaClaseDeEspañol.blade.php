@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Español</title>


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
            background: #4aa0e6;
        }

        h3{
            text-align: center;
            font-style: italic;
        }

        h1{
            text-align: center;

        }
        p{
            text-align: justify;
            font-size: large;
        }
        #color{
            background:  #D8E2F3;

        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background: #B8DA97;
        }

    </style>

</head>
<body style=" background: #4aa0e6;">

<!-- Navbar-->
@section('content')

<!-- carrousel-->
<div class="row">
    <!-- contenedor-->
    <div class="col-md-12">
        <div class="carousel slide" id="carousel-896190" >
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-896190" class="active" data-interval="100">
                </li>
                <li data-slide-to="1" data-target="#carousel-896190" >
                </li>
                <li data-slide-to="2" data-target="#carousel-896190" >
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://static.vecteezy.com/system/resources/previews/000/931/916/non_2x/cartoon-kids-with-a-frame-with-copy-space-vector.jpg">
                    <div class="carousel-caption">
                        <h4 class=" mx-auto d-block">

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://i.ibb.co/rv9B8tG/carr.jpg" alt="carr" height="650">
                    <div class="carousel-caption">
                        <h4>

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://static.vecteezy.com/system/resources/previews/000/913/537/non_2x/little-students-playing-with-pencil-vector.jpg">
                    <div class="carousel-caption">
                        <h4>

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
            </div> <a class="carousel-control-prev" href="#carousel-896190" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-896190" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
</div>
<!-- contenedor-->
<div class="container-fluid">
    <div class="row" id="color">
        <div class="col-md-4">
            <img class="mx-auto d-block" src="https://i.ibb.co/5h5mBC2/nino-chico-llevando-dibujos-animados-libro-33070-1881-removebg-preview-1.png" width="400">
        </div>
        <div class="col-md-8">
            <h3><br>Español</h3>

            <p style="text-align: center">
                <strong><br>
                    <br>
                    En esta asignatura  desarrollarás habilidades hablar, escuchar, escribir y leer; es decir, tenemos que dominar las cuatro habilidades lingüísticas: expresión oral, comprensión auditiva, expresión escrita y comprensión lectora que son parte de este proceso para que nuestros niños
                fomenten la lectura.<br>
                <br>
                </strong></p></div>
        </div>
    </div>
    <!-- titulo de las categorias-->
    <div style="color: #D8E2F3;">
        <h1>Categorías de la clase de español</h1>
    </div>

    <!-- botones-->

    <div class="container-fluid pb-5" style="background: #bce0ee">
        <div class="row">

            <div class="col-xl-12 mt-5">
                <a href=" {{ url('/cuento') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/tMXgL6r/Fondocampa-removebg-preview-1.png" class="rounded-circle mx-auto d-block bg-info" width="150"/><h3>Cuentos</h3>
            </a>
            </div>
        </div>

        <div class="row ">
            <div class="col-xl-4 mt-5">
                <a href=" {{ url('/Chistes') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/hfNtqSh/pngtree-laughing-child-sitting-on-the-stone-bench-image-1374223-removebg-preview.png" class="rounded-circle mx-auto d-block  bg-info " width="150" /><h3>Chistes</h3>
                </a>
            </div>
            <div class="col-xl-4">

            </div>
            <div class="col-md-4 mt-5">
                <a href=" {{ url('/Rondas') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/z7NXMQX/31436891-Los-ni-os-tomados-de-la-mano-Foto-de-archivo-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info " width="150" href="http://learningkidscodigo.test/Rondas"/><h3>Rondas</h3>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 mt-5">
                <a href=" {{ url('/Adivinanzas') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/S09m0JM/10c5bb1e1c8a3da7ae25d3184fa841d7-removebg-preview.png" class="rounded-circle mx-auto d-block  bg-info" width="150" /><h3>Adivinanzas</h3>
                </a>
            </div>
            <!-- imagen del centro de todos los botones-->
            <div class="col-xl-4 mt-5">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/k9FxZTk/ninos-dibujos-animados-leyendo-libro-29190-1823-removebg-preview.png " class=" mx-auto d-block" width="450" />
            </div>
            <div class="col-xl-4 mt-5">
                 <a href=" {{ url('/Bombas') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/px8MQB5/images-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info " width="150"/><h3>Bombas</h3>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mt-5">
                <a href=" {{ url('/refranes') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/Pc35C0R/3ff9640b218444e507fefa887cc6843a-removebg-preview.png"  class="rounded-circle mx-auto d-block bg-info" width="150"/><h3>Refranes</h3>
                </a>
            </div>
            <div class="col-xl-6 mt-5">
                <a href=" {{ url('/trabalenguas') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/Fz74vcj/d27af2109d6725ca8b9a1417772b16aa-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info " width="150"><h3>Trabalenguas</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- separador -->
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
