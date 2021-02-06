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
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/phWTHjF/dibujos-animados-caballo-blanco-43633-7163-removebg-preview-1.png" width="200" />
                <h2>Caballo: horse</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/H2Nng2M/cartoon-vector-illustration-of-hen-removebg-preview.png"  width="300"/>
            <h2>Gallina: hen</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/1rfMQTF/pato-dibujos-animados-lindo-160606-389-removebg-preview.png" width="100" />
            <h2>Pato: duck</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/YhtC68b/conejo-dibujos-animados-zanahoria-29190-5532-removebg-preview.png" width="125" />
                <h2>Conejo: rabbit</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/M81yLSh/590113bc1998632b4cb01bcce4293fba-removebg-preview.png"  width="150" />
                <h2>Oveja: sheep</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/xmrxcY9/linda-vaca-dibujos-animados-160606-325-removebg-preview.png" width="180"/>
                <h2>Vaca: cow</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/sm8Hp3y/gato-gracioso-dibujos-animados-aislado-29190-4874-removebg-preview.png" width="150" />
                <h2>Gato: cat</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/YpKdK13/perro-gracioso-dibujos-animados-hueso-29190-1660-removebg-preview.png"  width="145" />
                <h2>Perro: dog</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/NLKdKnR/e1b52378ebe42b1f563131aa19dd9f8d-removebg-preview.png"  width="170"/>
                <h2>Burro: donkey</h2>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/PZgzwF6/cerdo-feliz-dibujos-animados-aislado-sobre-fondo-blanco-29190-4224-removebg-preview.png" width="170" />
                <h2>Cerdo: pig</h2>
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12  mb-5" style="background: #B4F97B">
                <h1 style="text-align: center">Animales salvajes en inglés (forest animals)</h1>
            </div>
        </div>
    </div>


    <!-- animales salvajes-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/8ddTVYJ/5231bafa47dc71365cab071feca3dfa8-removebg-preview.png"  width="180" />
                <h2>Koala: koala</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/5MFFB0X/castor-feliz-dibujos-animados-madera-29190-5280-removebg-preview.png"   width="215"/>
                <h2>Castor: beaver</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/TWX2SrP/dibujos-animados-lindo-mapache-29190-4683-removebg-preview.png" width="188" />
                <h2>Mapache: racoon</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"src="https://i.ibb.co/mDvb9c2/depositphotos-19121483-stock-illustration-rainbow-chameleon-removebg-preview.png"  width="222" />
                <h2>Camaleón: chameleon</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/ScD1z0k/raton-feliz-dibujos-animados-agitando-29190-4178-removebg-preview-1.png"   width="150" />
                <h2>Ratón: mouse</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/xGhYjrY/caracol-dibujos-animados-lindo-160606-321-removebg-preview-1.png"   width="215"/>
                <h2>Caracol: snail</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/jZf8TPS/ardilla-dibujos-animados-sosteniendo-nuez-29190-5533-removebg-preview.png"  width="120" />
                <h2>Gato: cat</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/Cb2h6CV/png-clipart-giant-panda-bear-cartoon-panda-mammal-animals-removebg-preview.png"  width="150" />
                <h2>Perro: dog</h2>
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

