@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<title>Matematicas</title>

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
     background: #FF7E5A;
  }
  body{
   background: #FFC897;


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


  #separadorInferior2 .content{

      width: 100%;
      height: 100px;
      margin-left: 0px;
      border-top-left-radius:150%;
      border-top-right-radius: 150%;
      background: #FF7E5A;
  }
        #color{
           background: #F7EBEB;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 100px;
            border: #FF7E5A 8px dashed;

        }

    </style>

</head>
<body>

<!-- navbar-->
@section('content')

<!-- carrousel-->
<div>
    <!-- contenedor-->
    <div class="col-xl-12 p-2">
        <div class="carousel slide" id="carousel-896190">
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
                    <img class="d-block w-100"   src="https://i.ibb.co/khGYmKG/gusano1.jpg" height="500">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100"  src="https://i.ibb.co/C1bQcTG/unnamed.png" height="500" >
                    <div class="carousel-caption">


                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="https://i.ibb.co/WtDPKf2/kids.jpg" height="500">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div> <a class="carousel-control-prev" href="#carousel-896190" data-slide="prev"><span
                    class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#carousel-896190" data-slide="next"><span
                    class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
</div>


<!-- contenedor-->
<div class="container-fluid">
    <div class="row" id="color">
        <div class="col-xl-4">
            <img class="mx-auto d-block"  src="https://i.ibb.co/pWct8ST/dos-removebg-preview.png"  width="350">
        </div>
        <div class="col-xl-8 p-2">
            <h3>Matemáticas</h3>
            <p><strong>

                ¿Por qué es importante la matemáticas en tus hijos?<br>
                    <br>Las matemáticas son fundamentales para el desarrollo
                    intelectual de los niños, les ayuda a ser lógicos, a
                    razonar ordenadamente y a tener una mente preparada
                    para el pensamiento, la crítica y la abstracción.<br>
                    <br>Las matemáticas configuran actitudes y valores en los
                    alumnos pues garantizan una solidez en sus fundamentos,
                    seguridad en los procedimientos y confianza en los
                    resultados obtenidos.
                    Todo esto crea en los niños una disposición consciente
                    y favorable para emprender acciones que conducen a la solución
                    de los problemas a los que se enfrentan cada día.
                </strong></p>
        </div>
    </div>


    <!-- titulo de las categorias-->
    <div>
        <h1>Jugando con las Matemáticas</h1>
    </div>
    <div class="container-fluid" style="background: moccasin">
        <div class="row ">
            <div class="col-xl-12 p-2">
                <a href=" {{ url('/figura') }}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/s2k0frX/Iconos-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info color2" width="150"><h3>Figuras Geométricas</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style=" background: moccasin">
        <div class="row ">
            <div class="col-xl-6 p-2">
                <a href=" {{ url('/numerosNaturales') }}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/bdRWHpK/numero-removebg-preview.png"  class="rounded-circle mx-auto d-block bg-info"width="150"><h3>Números Naturales</h3>
                </a>
            </div>
            <div class="col-xl-6 p-2">
                <a href=" {{ url('/NumerosOrdinales') }}">
                <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/k59g6vt/grado-removebg-preview.png"    class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Números Ordinales</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid"style="background: moccasin">
        <div class="row">
            <div class="col-xl-4 p-2">
                <a href=" {{ url('/restas') }}">
                <img alt="Vista previa de la imagen de Bootstrap"
                     src="https://i.ibb.co/YbJVtYV/resta-removebg-preview.png"
                     class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Restas</h3>
                </a>
            </div>
            <div class="col-xl-4 p-2">
                <img alt="Vista previa de la imagen de Bootstrap"
                     src="https://i.ibb.co/F38tjLG/dibujos4-removebg-preview.png"
                     class="mx-auto d-block" width="400" >
            </div>
            <div class="col-xl-4 p-2">
                <a href=" {{ url('/sumas') }}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://arbolabc.nyc3.cdn.digitaloceanspaces.com/New-Math-Area-Icons/Juegos_de_sumas.jpg"  class="rounded-circle mx-auto d-block bg-info"width="150"> <h3>Sumas</h3>
                </a>
        </div>
    </div>
    <div class="container-fluid" style="background: moccasin">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <a href=" {{ url('/relacionObjetos') }}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/Gsn8yNC/relacion-removebg-preview.png"   class="rounded-circle  mx-auto d-block bg-info" width="150"><h3>Relación Objetos</h3>
                </a>
            </div>
            <div class="col-xl-3 p-2">

            </div>
            <div class="col-xl-3 p-2">

            </div>
            <div class="col-xl-3 p-2">
                <a href=" {{ url('/lineas') }}">
                <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/0BkzSGt/coleccion-removebg-preview.png"  class="rounded-circle  mx-auto d-block  bg-info" width="150"><h3>Las líneas</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: moccasin">
        <div class="row ">
            <div class="col-xl-4 p-2 ">
                <a href=" {{ url('/simbolos') }}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/zG6gz8B/sfn-removebg-preview.png"   class="rounded-circle mx-auto d-block bg-info"width="150"><h3>Menor que <br>y <br> mayor que </h3>
                </a>
            </div>
            <div class="col-xl-4 p-2">
            </div>
            <div class="col-xl-4 p-2" align="right">
                <a href=" {{ url('/moneda') }}">
                <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/MngXsLY/coins-removebg-preview.png"     class="rounded-circle mx-auto d-block bg-info"width="150"><h3>La moneda</h3>
                </a>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 p-2">

                </div>
                <div class="col-xl-3 p-2">
                    <a  href=" {{ url('/longitud') }}">
                    <img alt="Vista previa de la imagen de Bootstrap"   src="https://i.ibb.co/8KYJhD6/metro-removebg-preview.png"  class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Longitud</h3>
                    </a>
                </div>
                <div class="col-xl-3 p-2">
                    <a href=" {{ url('/pantallaA') }}">
                    <img alt="Vista previa de la imagen de Bootstrap"
                         src="https://i.ibb.co/KymRv4b/80386333-ilustraci-n-vectorial-de-ni-o-de-la-escuela-con-un-libro-con-l-piz-gigante-removebg-preview.png"
                         class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Actividades</h3>
                    </a>
                </div>
                <div class="col-xl-3 p-2">

                </div>
            </div>
        </div>






    </div>
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>
</div>


</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </div>
</body>
</html>

@endsection
