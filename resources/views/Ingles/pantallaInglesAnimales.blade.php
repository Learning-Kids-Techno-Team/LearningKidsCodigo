@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Animales</title>
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
        .navbar{
            background: aquamarine;
        }

        body{

            background:#F8FEBE;

        }


        #pa{
            text-align: justify;

        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #B4F97B
        }

        #titulo{
            text-align: center;
            color: red;
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

        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }
        li{
            text-align: justify;
        }



    </style>


</head>
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #B4F97B">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #CCDDCC">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/Wt54FNq/gratis-png-animales-de-dibujos-animados-removebg-preview.png"     width="500"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background:#F8FEBE "  >
                        <h4 style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Los Animales</h3>
                        <p class="" id="pa">
                            <em>Algunos nadan, otros vuelan, y existen miles de especies de diferentes tamaños y formas. Los animales están en todas partes del mundo, ¡y todos son fascinantes! A los peques les encantan los animales desde temprana edad, especialmente aquellos que viven en hábitats diferentes a lo que ven usualmente, y que tienen características particulares como la habilidad de volar o nadar. Enseñar los animales en inglés para niños es una excelente forma para ayudarles aprender este divertido tema.
                            </em><br>

                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h2>
                    ¿Por qué es importante aprender el nombre de los animales?
                </h2>
                <p>
                    Aprender los nombres de los animales en inglés es excelente para la educación de los peques. No sólo les ayuda a mejorar su vocabulario en español e inglés, sino que les ayuda también a mejorar sus habilidades lingüísticas en ambos idiomas. Además, conocer los animales ayuda a los peques a tener más conciencia sobre el medio ambiente para así cuidarlo y preservarlo.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-md-5">
                <img class=" mx-auto d-block" src="https://i.ibb.co/jZ8LF2c/gratis-png-dibujos-animados-de-pequenos-animales-pintados-a-mano-removebg-preview.png"  width="450" />
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #B4F97B">
                <h1 style="text-align: center">Animales domésticos en inglés (farm animals)</h1>
            </div>
        </div>
    </div>


<!-- animales domesticos-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
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

