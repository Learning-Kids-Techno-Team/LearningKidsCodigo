@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Frutas</title>
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



        #lt{
            color: #123c24 ;
            font-family: bold;
            font-size: 30px;
        }


        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #123c24 ;
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


        #bord{
            background:#DCFECB;
            border: coral 15px dashed;
        }

        #tar1{
            background: #fff6af;
            border: yellow 5px dashed;

        }

        #tar2{
            background: #CCEECC;
            border: #4caf50 5px dashed;

        }

        #tar3{
            background: #FFEECC;
            border: coral 5px dashed;

        }

        #play{
            width: 100%;
        }



    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: coral">
                <div class="row ml-5 mr-5">
                    <div class="col-xl-7  mt-5" style="background:#fff6af ">
                        <br><br><br><br>
                        <img class="mx-auto d-block" src="https://i.ibb.co/6gs7h4D/cc-removebg-preview.png"
                        width="350">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow">
                        <h4  class="mt-5" style="color: #3B5686"><em>Inglés</em></h4>
                        <h3 class="mt-5" style="text-align: center">Frutas <em>(Fruits)</em></h3>
                        <p class="" id="pa">
                            <br>Algunas son dulces, otras un poco más ácidas, pero la mayoría son perfectas para tomar un refrigerio saludable.
                            Las frutas son unas de las maravillas de la naturaleza, hay mucha variedad y vienen en diferentes formas y colores,
                            ¡así que es seguro que habrá una para cada gusto!
                            <br>
                            <br>Debido a lo variadas que pueden ser las diferentes frutas tanto en colores y texturas como en sabores,
                            se convierten en unos de los alimentos más divertidos para probar.
                            <br>Aprender los nombres de las frutas puede ser muy divertido, aquí encontrarás una lista con los nombres de frutas
                            en inglés y español para practicar con los niños.
                            <br>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor tree-->
    <div class="container-fluid  ">
        <div class="row m-3">
            <div class="col-xl-12 p-2" style="background: coral">

                <br>
                <h2 class="text-center"><strong><em>¡Nombre de frutas en inglés y español!</em></strong></h2><br>
            </div>
        </div>
    </div>
    <!-- contenedor de las tarjetas -->
    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/hf0mq73/uva1-removebg-preview.png" width="280" height="200" >
                    <div class="card-body" >
                        <div class="text-center">
                        <h2 class="text-center">
                            Uvas: <strong>Grapes</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/uva.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-4 p-2 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block"  src="https://i.ibb.co/sbTdsn5/cerez-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Cereza: <strong>Cherry</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/cerez.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/2qzZKGJ/arand-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Arándano: <strong>Blueberry</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/aranda.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor 2 -->
    <div class="container-fluid " >
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 4 -->
                <div id="tar1" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/y8PbhSS/lemon-removebg-preview.png" width="300" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Lima: <strong>Lime</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/lima.mp3" controls >
                        </audio>
                    </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-xl-4 p-2 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/gZXj37n/limo1-removebg-preview.png" width="300" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Limón: <strong>Lemon</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/limon.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1X4Gf7r/banana-removebg-preview.png" width="200" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Plátano: <strong>Banana</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/banan.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- contenedor3 -->
    <div class="container-fluid " >
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">
                <!-- tarjeta 7-->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/rdhVjzg/manzana-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Manzana: <strong>Apple</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/manza.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-xl-4 p-2 ">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/L5mh44b/sandia1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Sandia: <strong>Watermelon</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/sandi.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            </div>
            <!-- tarjeta 9 -->

            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/GTCKJgK/melon-removebg-preview.png"
                         width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Melocotón: <strong>Peach</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/melon.mp3" controls >
                        </audio>

                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/q56xP07/pi-a-removebg-preview.png" width="250" height="200" >
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Piña: <strong>Pineapple</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/piña.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-4 p-2 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/p2skX8Y/fre1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Fresa: <strong>Strawberry</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/fresa.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/NyfnM8h/naran-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                           Naranja: <strong>Orange</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/naranj.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor 2 -->
    <div class="container-fluid " >
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 4 -->
                <div id="tar1" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/KWmzSKD/coco-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                           Coco: <strong>Coconut</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/coco.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-xl-4  p-2">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1zx7tG0/per1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Pera: <strong>Pear</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/pera.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/Vg9z4zy/aguacat-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Aguacate: <strong>Avocado</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/aguaca.mp3" controls >
                        </audio>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- contenedor3 -->
    <div class="container-fluid " >
        <div  class="row  m-5" >
            <div class="col-xl-4 p-2">
                <!-- tarjeta 7-->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/G2SfrZY/pom1-removebg-preview.png" width="250" height="200">

                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Pomelo: <strong>Grapefruit</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/pomel.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-xl-4  p-2">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1fQg4RV/kiw1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Kiwi: <strong>Kiwi</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/kiw.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/QKykXVr/man-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Mango: <strong>Mango</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/mang.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/Zzpv1Gc/higo-removebg-preview.png"
                         width="300" height="200" >
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Higo: <strong>Fig</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/higo.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-4  p-2">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/PGzk1FK/ciruela-removebg-preview.png" width="300"
                         height="200" >
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Ciruela: <strong>Plum</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/ciruel.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-xl-4  p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/DQyPrVJ/mandarina-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Mandarina: <strong>Tangerine</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/mandar.mp3" controls >
                        </audio>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-4 p-2">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/LxMQHzG/maracu-removebg-preview.png" width="200" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Maracuyá: <strong>Passion fruit</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/maracu.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-4 p-2">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/d4vwL9m/granada-removebg-preview.png" width="280" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                             Granada: <strong>Pomegranate</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/granad.mp3" controls >
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-xl-4 p-2">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/J2WxQMh/fram-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <div class="text-center">
                        <h2 class="text-center">
                            Frambuesa: <strong>Raspberry</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/framb.mp3" controls >
                        </audio>
                    </div>
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


