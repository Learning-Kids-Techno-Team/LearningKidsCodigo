@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tecnologia</title>
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
        body {
            background: azure;
        }
        h4{
            text-align: center;
            font-family: bold;
        }

        h1{
            background: #C5FFA0;
        }


        .card{
            background: #f9f9f9;
            border-bottom-left-radius: 50%;
            border: black 8px solid;


        }


        .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;



        }




        .navbar{
            background: #C5FFA0;

        }


        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #C5FFA0;
        }







    </style>
</head>
<body>

@section('content')



<!-- carrousel-->
<div class="row">
    <!-- contenedor-->
    <div class="col-md-12">
        <div class="carousel slide" id="carousel-896190">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-896190" class="active" >
                </li>
                <li data-slide-to="1" data-target="#carousel-896190"  >
                </li>
                <li data-slide-to="2" data-target="#carousel-896190"  >
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item  active ">
                    <img class="d-block w-100" src="https://cpal.edu.pe/uploads/articulos-antares/anatres-detalle-2.jpg">
                    <div class="carousel-caption">
                        <h4 class=" mx-auto d-block">

                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item  ">
                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://image.freepik.com/vector-gratis/ilustracion-vectorial-tecnologia-ninos_29937-985.jpg" alt="carr" height="650">
                    <div class="carousel-caption">
                        <h4 class=" mx-auto d-block">
                        </h4>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="carousel-item  ">
                    <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://image.freepik.com/vector-gratis/ilustracion-vectorial-tecnologia-ninos_29937-701.jpg">
                    <div class="carousel-caption">
                        <h4 class=" mx-auto d-block">
                        </h4>


                    </div>
                </div> <a class="carousel-control-prev" href="#carousel-896190" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-896190" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row" id="color">
            <div class="col-md-4">

                <img class="mx-auto d-block"   src="https://i.ibb.co/1dc9BfY/uso-tecnologia-educacion-o-negocios-29937-5000-removebg-preview.png"   width="400">

            </div>
            <div class="col-md-8" >
                <br>
                <br>
                <br>
                <p>

                    <strong><br>
                        La Tecnología es la combinación de conocimientos y saberes científicos (ciencia) y habilidades (técnica) que aplicados de forma ordenada permiten al ser humano satisfacer sus necesidades o resolver sus problemas.
                    </strong>
            </div>
        </div>

        <!-- titulo de las categorias-->
        <div style="color: #0a6ebd;">
            <h1 style="text-align: center">Categorias de la clase de tecnología</h1>
            <br><br><br>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/partesDeLaCompu') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/CzhxH0m/pngtree-computer-vector-illustration-in-cartoon-style-png-image-2222574-removebg-preview-1.png" class="rounded-circle mx-auto d-block img-thumbnail" style=" background: #C5FFA0" width="150"/>
                    <h4>Partes de
                        la computadora </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/sW9WnF7/hardware-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail " style=" background: #C5FFA0" width="150" />
                    <h4>Computadora y su dispositivo hardware </h4>
                    </a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/vx5SyyB/e6fe1f2a743943cb45eff1ea9cceb7dc-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail" style=" background: #C5FFA0" width="150" />
                    <h4>Computadora y sus dispositivos software </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/teclado') }}">
                    <img alt="Bootstrap Image Preview" src="https://us.123rf.com/450wm/vvadyabb/vvadyabb1705/vvadyabb170500005/78563222-manos-planas-escribiendo-en-el-teclado-blanco-con-el-rat%C3%B3n-y-el-vector-de-fondo-en-colores-pastel.jpg?ver=6" class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0" />
                    <h4>Partes del teclado </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://www.top-password.com/blog/wp-content/uploads/2018/05/taskbar-context-menu.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0" />
                    <h4>Ventana
                        de windows </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/mD86dFr/dise-o-de-personajes-dibujos-animados-mouse-en-un-gesto-sorpresa-ilustraci-n-del-vector-169360635-re.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0"/>
                    <h4>Funciones del mouse </h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://mantenimientobios.com/wp-content/uploads/2019/05/How-to-Open-Right-Click-Menu-for-Icons-on-Taskbar-in-Windows-10-Pic-5.png"  class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0"/>
                    <h4> Barra de tareas windows  </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/yXx1J7d/coleccion-aparatos-electronicos-1294-17-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0"/>
                    <h4>Aparatos electrónicos  </h4>
                    </a>
                </div>

                <div class="col-md-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href=" {{ url('/') }}">
                    <img alt="Bootstrap Image Preview" src="https://i.ibb.co/61qytsZ/8ff43fc791f074b4532e3c71b1d4ac62-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" style=" background: #C5FFA0" />
                    <h4>Actividades</h4>
                    </a>
                </div>

            </div>
        </div>

</div>
</div>

    <!-- separador -->
    <div id="separadorInferior">
        <div class="content ">

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

@endsection

