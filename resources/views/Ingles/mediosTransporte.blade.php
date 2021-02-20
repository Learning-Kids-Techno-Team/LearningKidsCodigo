@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Medios de transporte</title>
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

        body{

            background:lightyellow;

        }

        .card{
            background: #d7f3e3;
            border: #FDFD96 6px dashed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        #pa{
            text-align: justify;


        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

        .navbar{
            background: aquamarine;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }

        #bord{
            background: lightblue;
            border: #fff6af 15px dashed;
        }

    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #d7f3e3">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #FDFD96">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/9yzGBk8/est-removebg-preview.png">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Medios de transporte. ()</h3>
                        <p class="" id="pa">
                            <br>¡Autobuses, botes, y trenes! ¿Cuál de los medios de transporte es el favorito de tu niño?
                            Existen muchas formas de transporte distintas que permiten desplazarnos de un lugar del mundo a otro.
                            <br>Una de las primeras cosas que los niñoss aprenden de forma natural es a expresar cómo ir de un
                            lugar a otro, esto es desde que apenas comienzan a hablar y a comunicar sus ideas con familiares
                            y amigos.
                            <br>De este modo, hablar sobre los diferentes tipos de transporte en inglés y español se torna natural para los peques de casa,
                            y es también una herramienta útil para continuar su educación bilingüe.
                            <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 "><h2 class="mt-5">Medios de transporte terrestre (Land Transportation)</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Bicicleta: <strong>bicycle</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Coche/auto/carro: <strong>car</strong>
                    </h2>
                    <iframe src="https://drive.google.com/file/d/1AfLfFPzPjqnPaLrXdsHv99VoJ-IIYgRn/preview" width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        autobús: <strong>bus</strong>
                    </h2>
                    <iframe src="https://drive.google.com/file/d/1AfLfFPzPjqnPaLrXdsHv99VoJ-IIYgRn/preview" width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  width="300" height="250">
                </div>


            </div>
        </div>
    </div>





    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">
                    Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                    <br>de los días en inglés con esta divertida canción. ¡Vamos a cantar!
                    <br>
                </h2>
                <iframe id="bord" class="mx-auto d-block" src="https://drive.google.com/file/d/1YIGCenZnFDLYhgCUH8OiHyw2Y1NKDNEd/preview" width="670" height="390"></iframe>
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