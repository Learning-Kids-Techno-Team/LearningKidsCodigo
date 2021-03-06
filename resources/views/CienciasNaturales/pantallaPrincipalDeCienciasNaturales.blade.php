@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Ciencias Naturales</title>


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
            background: #FDFD96;

        }

        body {
            background: #FFEECC;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            background: #FDFD96;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }

        h3{
            text-align: center;
        }

        h1{
            text-align: center;
        }
        p{
            text-align: justify;
        }
        #color{
            background: #FDFD96 ;
            border: yellow 15px double;

        }

    </style>

</head>


<body>

<!-- Navbar -->

@section('content')

<!-- carrousel-->
<div>
    <!-- contenedor-->
    <div class="col-xl-12 p-2">
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
            <img   src="https://i.ibb.co/GW9ck76/animals.jpg"  class="d-block w-100" height="550">
            <div class="carousel-caption">

            </div>
        </div>

        <div class="carousel-item">
            <img  src="https://i.ibb.co/3SL5yHT/happy-s.jpg" class="d-block w-100" height="550">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.ibb.co/Zm87WQ5/maxresdefault-2.jpg"  class="d-block w-100" height="550">
            <div class="carousel-caption">

            </div>
        </div>

    </div> <a class="carousel-control-prev" href="#carousel-896190" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#carousel-896190" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
</div>

    <!-- contenedor-->




<!-- contenedor-->
<div class="container-fluid">
    <div class="row" id="color">
        <div class="col-xl-4">
            <img class="mx-auto d-block" src="https://i.ibb.co/hR7rTBW/feliz-nino-li-removebg-preview.png"  width="400">
        </div>
        <div class="col-xl-8 ">
            <h3><br><br><em>Ciencias Naturales</em></h3>
            <p>
                <br>
                <br><em>
                    ¿Por qué es importante las ciencias naturales en el mundo de los niños?... En la vida cotidiana de los niños hay infinidades de vivencias que pueden favorecer
                    a una actitud científica hacia el conocimiento. Un día de lluvia, el crecimiento de las plantas, un objeto que flota, entre otros, son sucesos y
                    oportunidades de las que se pueden extraer muchos conocimientos y partiendo de estos sucesos y situaciones que se dan en la vida cotidiana de los
                    niños podrían ser fuente de motivación en la mayoría de los casos.<br><br>
                    Al enseñar ciencias conducimos a nuestros niños a ver los fenómenos y situaciones experimentales de una forma especial, y ellos serán capaces
                    de generalizar sus propias conclusiones. Por lo mismo es importante desarrollar estas habilidades científicas en nuestros niños y que de mejor
                    forma que no sea a través de las ciencias.
                </em></p>
        </div>
    </div>
    <!-- titulo de las categorias-->
    <div>
        <h1><em>¡Categorías de la clase: Ciencias Naturales!</em></h1>
    </div>

    <!-- botones-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 pb-3">
                <a href=" {{ url('/cuerpo') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/myQDSJG/dibujos-anima-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info" width="150"/><h3><em>Cuerpo humano</em></h3>
                </a>
            </div>
        </div>
        <div  class="row">
            <div class="col-xl-4 pb-3">
                <a href=" {{ url('/sentidos') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/Rjxb9LB/senyi.jpg" class="rounded-circle mx-auto d-block  bg-info " width="160" height="150"/><h3><em>Los sentidos</em></h3>
                </a>
            </div>
            <div class="col-xl-4 pb-3">

            </div>
            <div class="col-xl-4 pb-3">
                <a href=" {{ url('/planta') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/HqPhHxk/planta-119-removebg-preview-1.png"  class="rounded-circle mx-auto d-block bg-info " width="150" height="150"/><h3><em>Partes de las plantas</em></h3>
                </a>
            </div>
        </div>
        <div  class="row">
            <div class="col-xl-4 pb-3">
                <a href=" {{ url('/PseresVivos') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/xSgSCvL/descarga-removebg-preview.png" class="rounded-circle mx-auto d-block  bg-info" width="150" height="150"/><h3><em>Los seres vivos<br>y no vivos</em></h3>
                </a>
            </div>
            <!-- imagen del centro de todos los botones-->
            <div class="col-xl-4 pb-3">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/3NBd0DK/together-removebg-preview.png" class="mx-auto d-block" width="400" />
            </div>
            <div  class="col-xl-4 pb-3">
                <a href=" {{ url('/LaSalud') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/6YQrwZK/hhjojih-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info " width="150" height="150"/><h3><em>La salud</em></h3>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 pb-3">
                <a href=" {{ url('/LosAnimales') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/261nY4f/Animales-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info" width="150"/><h3><em>Los animales</em> </h3>
                </a>
            </div>
            <div class="col-xl-6 pb-3" >
                <a href=" {{ url('/ElClima') }}">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/wBgnRwC/ilus-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info " width="150"><h3><em>El clima</em></h3>
                </a>
            </div>
        </div>
            <div class="col-xl-12 pb-3">
                <a href=" {{ url('/actividadesC') }}">
                    <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/7YkMQwS/observacion.jpg"    class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Actividades</h3>
                </a>
            </div>
    </div>

</div>
</div>

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
