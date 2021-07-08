@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ciencias Sociales</title>



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
            background: #D8E2F3;
        }

    </style>

</head>
<body style=" background: #60A71B">

<!-- navbar-->
@section('content')


<!-- carrousel-->
<div class="row">
    <!-- contenedor-->
    <div class="col-md-12">
        <div class="carousel slide" id="carousel-896190">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-896190" class="active">
                </li>
                <li data-slide-to="1" data-target="#carousel-896190" >
                </li>
                <li data-slide-to="2" data-target="#carousel-896190" >
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"   src="https://i.ibb.co/nRNrmXD/maxresdefault.jpg" height="600" >
                    <div class="carousel-caption">
                        <h4 class=" mx-auto d-block">

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://i.ibb.co/nz9ZDwX/dia-internacional-nino.jpg"  border="0">
                    <div class="carousel-caption">
                        <h4>

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://i.ibb.co/GkT9yw9/vector-happy-children-playing-in-park.jpg"  height="600">
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
            <img class="mx-auto d-block"  src="https://i.ibb.co/HgY9BDX/sociales1-removebg-preview.png"  width="400">
        </div>
        <div class="col-md-8" >
            <h3><br>Ciencias Sociales</h3>
            <p>

                <strong><br>
                    <br>
                    Las ciencias sociales son aquellas que se relacionan con el comportamiento humano y la sociedad en general.

                    <br>Se les conoce como ciencias ya que, si bien se centran en las humanidades, llevan a cabo sus actividades,
                    labores y estudios por medio de métodos científicos..<br>
                    <br>
                </strong>
        </div>
    </div>
    <!-- titulo de las categorias-->
    <div style="color: #B8DA97;">
        <h1>Categorías de la clase de Ciencias Sociales</h1>
    </div>

    <!-- botones-->
    <div class="container-fluid" style="background: #B8DA97">
        <div class="row  p-5">
            <div class="col-md-12">
                <a href=" {{ url('/familia')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/bmXKXbm/familia-removebg-preview-1.png" class="rounded-circle mx-auto d-block bg-info" width="150"><h3>La Familia</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #B8DA97">
        <div class="row pb-5">
            <div class="col-md-6">
                <a href=" {{ url('/ambiente')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/1b1cyDg/Vector-set-with-nature-and-animals-in-the-children-s-cartoon-style-Lovely-crawfish-and-fish-on-water.jpg"   class="rounded-circle mx-auto d-block bg-info"width="150"><h3>El Ambiente</h3>
                </a>
            </div>
            <div class="col-md-6">
                <a href=" {{ url('/cicloAgua')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/Wz8YVPr/3d92321c07f6ea6ad4bc750525fdb56b-removebg-preview-1.png"   class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Ciclo Del Agua</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid"style="background: #B8DA97">
        <div class="row">
            <div class="col-md-4 pb-5">
                <a href=" {{ url('/sentimientos')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/VDkYKBP/los-sentiminetos-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Los Sentimientos</h3>
                </a>
            </div>
            <div class="col-md-4">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/tcpvYgs/ciencias-sociales-removebg-preview.png" class="mx-auto d-block" width="450" >
            </div>
            <div class="col-md-4">
                <a href=" {{ url('/derechosYDeberes')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/h8Q1q6D/doc5.jpg" class="rounded-circle mx-auto d-block bg-info"width="150"><h3>Los Derechos y deberes<br> de los niños y niñas</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #B8DA97">
        <div class="row pb-5">
            <div class="col-md-3">
                <a href=" {{ url('/cardinales')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/Yhps9yZ/ninos-dibujos-animados-traje-explorador-acampando-naturaleza-43633-7348.jpg"   class="rounded-circle  mx-auto d-block bg-info" width="150"><h3>Puntos Cardinales</h3>
                </a>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3 pb-5">

            </div>
            <div class="col-md-3">
                <a href=" {{ url('/ocupaciones')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/tCBq5X3/doc-removebg-preview.png" class="rounded-circle  mx-auto d-block  bg-info" width="150"><h3>Ocupaciones</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #B8DA97">
        <div class="row ">
            <div class="col-md-4 ">
                <a href=" {{ url('/mediosT')}}">
                <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/3RqB5sL/diseno-medios-transporte-1196-141.jpg" class="rounded-circle mx-auto d-block bg-info"width="150"><h3>Medios de Transpote</h3>
                </a>
            </div>
            <div class="col-md-4 pb-5">

            </div>
            <div class="col-md-4" align="right">
                <a href=" {{ url('/estaciones')}}">
                <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/SsD9Rmq/estaciones-removebg-preview.png" class="rounded-circle mx-auto d-block bg-info"width="150"><h3>Estaciones del año</h3>
                </a>
            </div>
        </div>
        <div class="container-fluid" style="background: #B8DA97">
            <div class="row  pb-5">
                <div class="col-md-6">
                    <a href=" {{ url('/comunicacion')}}">
                    <img alt="Vista previa de la imagen de Bootstrap" src="https://i.ibb.co/s35TyZD/comuni.jpg" class="rounded-circle mx-auto d-block bg-info" width="150"><h3>Medios de comunicación</h3>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href=" {{ url('/actividadesCCSS')}}">
                        <img alt="Vista previa de la imagen de Bootstrap"  src="https://i.ibb.co/pxh9kWw/gr89.jpg" class="rounded-circle mx-auto d-block bg-info" width="150" height="150"><h3>Actividades</h3>
                    </a>
                </div>
            </div>
                </div>
            </div>

    <!-- separador -->
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

@endsection
