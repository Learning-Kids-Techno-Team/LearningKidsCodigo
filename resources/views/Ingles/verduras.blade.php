@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Vegetales (Verduras)</title>
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
            <div class="col-md-12" style="background: coral ">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #fff6af">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/qxH6MXZ/acc-removebg-preview-1.png">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686"><em>Inglés</em></h4>
                        <h3 class="mt-5" style="text-align: center">Vegetales <em>(Vegetables)</em></h3>
                        <p class="" id="pa">
                            <br>Los vegetales, o también llamados verduras, son coloridos y deliciosos, y vienen de muchas formas,
                            colores y con distintas texturas. Los vegetales son una excelente fuente de vitaminas y nutrientes, tanto
                            cocidos como crudos, lo que los convierte en la elección ideal para la alimentación de los niños y también
                            de los adultos.
                            <br>Sin embargo, no siempre resulta sencillo que los niños coman las verduras de buena gana.
                            <br>Aprender los nombres de los vegetales en inglés y español puede ser la oportunidad perfecta para que los
                            niños comiencen a probar nuevas tipos de comida.
                            <br>
                            <br>Conocer los diferentes tipos de verduras no sólo ayuda a los niños a enriquecer su vocabulario,
                            también es una forma genial para ayudarles a crear hábitos alimenticios saludables,
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
                <h2 class="mt-5"><strong><em>¡Nombre de Vegetales en inglés y español!</em></strong></h2><br>
            </div>
        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid mt-5">
        <div  class="row m-5" >
            <div class="col-md-4">
                <!-- tarjeta 1 -->
                <div id="tar1" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/QfQ22j7/zanaho-removebg-preview.png" width="280" height="200" >
                    <div class="card-body" >
                        <h2 class="mt-5">
                            Zanahoria: <strong>Carrot</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/zanah.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" src="https://i.ibb.co/7YHpwXd/brocoli-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Brócoli: <strong>Broccoli</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/brocol.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/T8PqVJv/esparra-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Espárragos:<strong>Asparagus</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/esparrag.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/ZVkWPfB/coliflor-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Coliflor: <strong>Cauliflower</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/colf.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" src="https://i.ibb.co/wzWmW3n/maiz-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Maíz: <strong>Corn</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/maiz.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/rmjdx28/pepp-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Pepino: <strong>Cucumber</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/pepin.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/0CZh3VP/bereng-removebg-preview.png" width="230" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Berenjena: <strong>Eggplant</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/bereng.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/VwgvWyn/frijo-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Frijol / haba: <strong>Bean</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/frij.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/kMsjzwg/cebolla-removebg-preview.png" width="200" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Cebolla: <strong>Onion</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/ceboll.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/nf83FqX/projo-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Pimiento rojo: <strong>Red pepper</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/projo.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" src="https://i.ibb.co/fX31RXj/cham-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Champiñones: <strong>Mushrooms</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/champi.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/PFT2L1d/pimiever-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Pimiento verde: <strong>Green pepper</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/pverd.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/B4yT5qS/papa-removebg-preview-1.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Patata / papa:  <strong>Potato</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/papa.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block"  src="https://i.ibb.co/4K4JfQt/calabaz-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Calabaza: <strong>Pumpkin</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/calab.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/rv2p19Z/lechug-removebg-preview.png" width="240" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Lechuga: <strong>Lettuce</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/lechu.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/LSgmwQr/tomat-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Tomate: <strong>Tomato</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/tomat.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/zZg40kt/remolac-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Remolacha: <strong>Beetroot</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/remol.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/2h1736H/guisantes-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Guisantes: <strong>Peas</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/letej.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/RCKCsk1/raba-removebg-preview.png" width="250" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Rábano: <strong>Radish</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/raban.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" src="https://i.ibb.co/0XQpY3w/puerr-removebg-preview.png" width="250" height="200" >
                    <div class="card-body">
                        <h2 class="mt-5">
                            Puerro:  <strong>Leek</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/puerr.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/FKmqxp7/repollo-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Repollo: <strong>Cabbage</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/repoll.mp3" controls >
                        </audio>
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
                    <img class="mx-auto d-block" src="https://i.ibb.co/0DcHmV1/apio-1-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Apio: <strong>Celery</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/apio.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" >
                    <img class="mx-auto d-block" src="https://i.ibb.co/ct7QBwB/chile-removebg-preview.png" width="220" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Chile / ají: <strong>Chili</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/chile.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card">
                    <img class="mx-auto d-block" src="https://i.ibb.co/J5RdpMF/ajo-removebg-preview.png" width="250" height="200">
                    <div class="card-body">
                        <h2 class="mt-5">
                            Ajo:  <strong>Garlic</strong>
                        </h2>
                        <audio  id="player" src="AudioIngles/frut-ver/ajo.mp3" controls >
                        </audio>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- contenedor -->
    <div class="container-fluid mt-5"><h2 class="mt-5"><strong><em>¡Plantas condimentos en inglés!</em></strong></h2><br>
        <div class="card" id="tar2">
            <div class="row m-3">
                <div class="col-md-3">
                    <h2 class="mt-5">
                        Azafrán: <strong>Saffron</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/azafr.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/zXW6WSC/azafran-removebg-preview.png" width="200" height="220">
                </div>
                <div class="col-md-3">
                    <h2 class="mt-5">
                        Orégano: <strong>Oregano</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/oregan.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/m95b4H0/oregano-removebg-preview.png" width="200" height="220">
                </div>
                <div class="col-md-3">
                    <h2 class="mt-5">
                        Canela: <strong>Cinnamon</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/canel.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/Bj7ZND7/canela-removebg-preview.png" width="200" height="220">
                </div>
                <div class="col-md-3">
                    <h2 class="mt-5">
                        Romero: <strong>Rosemary</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/romer.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/FbTGHK6/romero-removebg-preview.png" width="200" height="220">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor -->
    <div class="container-fluid mt-5 pb-5">
        <div class="card" id="tar3">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Albahaca:  <strong>Basil</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/albac.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/XZmq3sk/albaca-removebg-preview.png" width="200" height="220">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Cilantro: <strong>Coriander</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/cilant.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/kgV0QLf/cilantro-removebg-preview.png" width="200" height="220">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Perejil: <strong>Parsley</strong>
                    </h2>
                    <audio  id="player" src="AudioIngles/frut-ver/perejil.mp3" controls >
                    </audio>
                    <img class="mx-auto d-block" src="https://i.ibb.co/Cv0hQHk/perejil-removebg-preview.png" width="200" height="220">
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

