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

        h1{
            font-family: Brush Script MT;
            size: 80px;

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
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
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
                    <div class="col-md-7  mt-5" style="background:#fff6af ">
                        <img class="mx-auto d-block" src="https://i.ibb.co/6gs7h4D/cc-removebg-preview.png">
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
    <div class="container-fluid mt-5 ">
        <div class="row m-3">
            <div class="col-md-12" style="background: coral">
                <h2 class="mt-5"><strong><em>¡Nombre de frutas en inglés y español!</em></strong></h2><br>
            </div>
        </div>
    </div>
    <!-- contenedor de las tarjetas -->
    <div class="container-fluid mt-5">
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/hf0mq73/uva1-removebg-preview.png" width="280" height="200" >
                    <div class="card-body" >
                        <h2 class="mt-5">
                            Uvas: <strong>Grapes</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1T9gTtw4QaRmoU2PRPzSRoU1yKHUpjRXQ/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block"  src="https://i.ibb.co/sbTdsn5/cerez-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Cereza: <strong>Cherry</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1tPRriDWt3Otl_hIuWE8SG9Qkrsd8cseX/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/2qzZKGJ/arand-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Arándano: <strong>Blueberry</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/19clwyP2cCaygguUH2b9mDlpTHJgQlp7f/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor 2 -->
    <div class="container-fluid mt-5" >
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 4 -->
                <div id="tar1" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/y8PbhSS/lemon-removebg-preview.png" width="300" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Lima: <strong>Lime</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1MhY_K4Iuo9NYW0WR1JZwqKfLoviF70-t/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/gZXj37n/limo1-removebg-preview.png" width="300" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Limón: <strong>Lemon</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1fHdx8dyALpDlFvMYRde1qOAvddViMizi/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1X4Gf7r/banana-removebg-preview.png" width="200" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Plátano: <strong>Banana</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1ZhNoX7VuVneU7jhTG0OcNpAMnbDKUaWu/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- contenedor3 -->
    <div class="container-fluid mt-5" >
        <div  class="row m-5" >
            <div class="col-md-4">
                <!-- tarjeta 7-->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/rdhVjzg/manzana-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Manzana: <strong>Apple</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1-TULYmIL5b569OpzmE3Lj1dW_LDM4SlZ/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/L5mh44b/sandia1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Sandia: <strong>Watermelon</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1VLux1FEqUywa9vC_9G-gRb_X1SCTZfU1/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/GTCKJgK/melon-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Melocotón: <strong>Peach</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1GsCdvFx1zg3q1HFGzOrRpsoTpe5tINtM/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid mt-5">
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/q56xP07/pi-a-removebg-preview.png" width="250" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Piña: <strong>Pineapple</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1h7LgbwWdxaY46Gl4SH7g6TD17BuZHHXI/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/p2skX8Y/fre1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Fresa: <strong>Strawberry</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1roDyRSxu3uCwJnHpxrq-kz2vULIEUC42/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/NyfnM8h/naran-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                           Naranja: <strong>Orange</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1qiiI-PxFzQKUSqMixEn7ky0mPTotEULj/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor 2 -->
    <div class="container-fluid mt-5" >
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 4 -->
                <div id="tar1" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/KWmzSKD/coco-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                           Coco: <strong>Coconut</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1qzKiioDH-KFs2D6BLHHsYdW6LHFzZ_hy/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1zx7tG0/per1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Pera: <strong>Pear</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1Nyojju9yfmFmopk9kaSlSkQ3ZtKjVyPg/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/Vg9z4zy/aguacat-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Aguacate: <strong>Avocado</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1zuz6iGFYeeRWxS4fdGuE4jofbVrvj5xd/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- contenedor3 -->
    <div class="container-fluid mt-5" >
        <div  class="row m-5" >
            <div class="col-md-4">
                <!-- tarjeta 7-->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/G2SfrZY/pom1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Pomelo: <strong>Grapefruit</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/13qa5cLArFC__sOzmXLWjSkYxg1A0kBiB/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/1fQg4RV/kiw1-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Kiwi: <strong>Kiwi</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/12aHUdq7-44DZ81bgtqEsMqhmBJ_w0q7N/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/QKykXVr/man-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Mango: <strong>Mango</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1vet9gfvyhF8HZpe5KW9CyhxJ3RmTNrK9/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid mt-5">
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/Zzpv1Gc/higo-removebg-preview.png" width="300" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Higo: <strong>Fig</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1fSmj-HfMbxXE4FxStA8HyvXu0prsQye4/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/PGzk1FK/ciruela-removebg-preview.png" width="300" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Ciruela: <strong>Plum</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/18vi7EXmtvAeYy7e-B7-L_vCQVqlqpY95/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/DQyPrVJ/mandarina-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Mandarina: <strong>Tangerine</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1LR1VvYyXk7iDb9EKEEBKiWpVycmr7hJr/preview" width="250" height="80"></iframe>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid mt-5">
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/LxMQHzG/maracu-removebg-preview.png" width="200" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Maracuyá: <strong>Passion fruit</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1HOgQ8GsD78hMTn76rM_72VsTPMvyDNsy/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/d4vwL9m/granada-removebg-preview.png" width="280" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                             Granada: <strong>Pomegranate</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1tqzxMZuCx-mp2kLrBeGxVPHElakfAdBT/preview" width="250" height="80"></iframe>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" id="im" src="https://i.ibb.co/J2WxQMh/fram-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Frambuesa: <strong>Raspberry</strong>
                        </h2>
                        <iframe src="https://drive.google.com/file/d/1j9ZAN3KfFIuQ_ReGOOYJ9aQDS5uonxim/preview" width="250" height="80"></iframe>
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


