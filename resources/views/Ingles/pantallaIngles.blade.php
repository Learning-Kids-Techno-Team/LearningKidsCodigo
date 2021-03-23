@extends('layouts.app')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Ingles</title>
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
             background: aquamarine;
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


        #separadorInferior2 .content{

            background: aquamarine;
        }



        .navbar{
            background: aquamarine;

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
                        <img class="d-block w-100" src="https://uybdantealighierisf.org.ar/wp-content/uploads/2018/02/Ingles.jpg">
                        <div class="carousel-caption">
                            <h4 class=" mx-auto d-block">

                            </h4>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="carousel-item  ">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.guiadelnino.com/var/guiadelnino.com/storage/images/educacion/aprender-a-leer-y-escribir/como-usar-las-letras-de-lija/7611279-4-esl-ES/como-usar-las-letras-de-lija_w1140.png" alt="carr" height="650">
                        <div class="carousel-caption">
                            <h4 class=" mx-auto d-block">
                            </h4>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="carousel-item  ">
                        <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.vedoque.com/blog/wp-content/uploads/2019/05/numeros-2Banimados.jpg">
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
                <img class="mx-auto d-block"  src="https://i.ibb.co/N7ZLtTh/nina-leyendo-libro-en-ingles-500x403-removebg-preview.png"  width="400">

            </div>
            <div class="col-md-8" >
                <br>
                <br>
                <br>
                <p>

                    <strong><br>
                        Hablar inglés te permitirá conocer otras culturas y estilos de vida. Podrás conocer gente nueva alrededor del mundo, comprender sus hábitos y costumbres. Además saber inglés nos ayudará a entender mejor nuestra propia cultura, nuestras costumbres y nuestro idioma.
                    </strong>
            </div>
        </div>

    <!-- titulo de las categorias-->
    <div style="color: #0a6ebd;">
        <h1 style="text-align: center">Categorias de la clase de Ingles</h1>
    </div>



    <div class="container-fluid">
        <div class="row mb-5 mt-5">
            <div class="col-md-12">
                <a href="{{url('/pTiempo')}}">
                <img  style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/44cpB8M/13410301-calendario-de-dibujos-animados-removebg-preview.png"  class="rounded-circle   img-thumbnail  mx-auto d-block"  width="150" />
                <h4>Tiempo </h4>
                </a>
            </div>
        </div>


            <div class="row mb-5">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <a href="{{url('/lugarCiudad')}}">
                    <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/Zhqx8pH/edificios-publicos-ciudad-23-2147522547-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" />
                    <h4>Lugares de la ciudad </h4>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/profesionesIng')}}">
                    <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/MZ7VFFN/conjunto-profesiones-personas-101903-1467-removebg-preview.png"  class="rounded-circle mx-auto d-block   img-thumbnail" width="150"/>
                        <h4>Profesiones </h4>
                    </a>
                </div>
                <div class="col-md-3">
                </div>
        </div>
        </div>




    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-4">
                <a href="{{url('/inglesAnimales')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/F8f8QxB/20754030-conjunto-de-animales-de-colecci-n-cabeza-de-dibujos-animados-removebg-preview.png"   class="rounded-circle mx-auto d-block  img-thumbnail" width="150" />
                    <h4>Los animales </h4>

                </a>
            </div>
            <div class="col-md-4">
                <a href="{{url('/mediosTra')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/rwvYbCk/1649a406132586d9d8d9001cdf21f42d-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail " width="150" />
                    <h4>Medios de transporte </h4>

                </a>
            </div>
            <div class="col-md-4">
                <a href="{{url('/alfabeto')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/SyfBVNG/45092986-pequenas-crian-as-felizes-com-bloco-de-alfabeto-removebg-preview.png" class="rounded-circle mx-auto d-block  img-thumbnail"  width="150" />
                    <h4>Abecedario</h4>

                </a>
            </div>
        </div>
    </div>
        <div class="row mb-5">
            <div class="col-md-3">
                <a href="{{url('/inglesColores')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/SssjzCN/54086510-dibujado-a-mano-alzada-l-pices-de-colores-textura-de-dibujos-animados-removebg-preview.png" class="rounded-circle mx-auto d-block img-thumbnail" width="150" />
                    <h4>Colores </h4>


                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/numerosI')}}">
                <img  style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/1mDpDjv/ninos-dibujos-animados-123-numeros-97632-620-removebg-preview.png"  class="rounded-circle mx-auto d-block  img-thumbnail" width="150" />
                    <h4>Números </h4>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/miembros')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/gvXfHG1/depositphotos-126531952-stock-illustration-family-members-happy-faces-flat-removebg-preview.png" class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Miembros de la familia </h4>

                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/partes')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/Tbn1H41/conjunto-iconos-colores-partes-cuerpo-humano-106317-22-removebg-preview.png"  class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Partes del cuerpo </h4>

                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">
                <a href="{{url('/vestimenta')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview"src="https://i.ibb.co/cyCfQ3W/85414090-colecci-n-de-iconos-de-ropa-de-mujer-varias-prendas-de-vestir-para-mujeres-para-trabajar-ca.png" class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Prendas de vestir </h4>

                </a>
            </div>
            <div class="col-md-2">
                <a href="{{url('/utiles')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview"  src="https://i.ibb.co/8bMzXFT/86383784-conjunto-de-vector-de-tiles-escolares-fondo-de-regreso-a-la-escuela-con-papeler-a-removebg.png"  class="rounded-circle mx-auto d-block  img-thumbnail" width="150" />
                    <h4>Útiles escolares </h4>

                </a>
            </div>
            <div class="col-md-2">
                <a href="{{url('/pantallaAlimentos')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/ysgM7Hh/fondo-frutas-verduras-diseno-plano-23-2148100345-removebg-preview-1.png"  class="rounded-circle mx-auto d-block  img-thumbnail" width="150" />
                    <h4>Frutas y verduras </h4>

                </a>
            </div>
            <div class="col-md-2">
                <a href="{{url('/emociones')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/b63GL20/Captura-de-pantalla-2017-09-11-a-las-00-18-30-removebg-preview.png"  class="rounded-circle mx-auto d-block  img-thumbnail" width="150" />
                    <h4>Emociones </h4>

                </a>
            </div>
            <div class="col-md-2">
                <a href="{{url('/partesDeLaCasa')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/mC3JX3r/partes-casa-e1512554637817-removebg-preview.png"  class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Partes de la casa </h4>

                </a>
            </div>
            <div class="col-md-2">
                <a href="{{url('/figuras')}}">
                <img style="background: aquamarine" alt="Bootstrap Image Preview"  src="https://i.ibb.co/B3cwHzQ/formas-geometricas-de-acrilico-removebg-preview.png" class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Figuras geométricas </h4>

                </a>
            </div>

        </div>
    </div>

    <div class="container-fluid " id="banderin" >
        <div class="row " >
            <div class="col-md-8">
                <img src="https://i.ibb.co/D7L6jV4/tren-removebg-preview.png"  height="150" >
            </div>

            <div class="col-md-4">
                <a href="{{url('/actividadIngles')}}">
                    <img style="background: aquamarine" alt="Bootstrap Image Preview" src="https://i.ibb.co/Ssvn24c/md-da49defeff45b5d8311aba88332ed9a0-removebg-preview.png"    class="rounded-circle mx-auto d-block   img-thumbnail" width="150" />
                    <h4>Actividades </h4>

                </a>
            </div>
        </div>
    </div>

    </div>
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

