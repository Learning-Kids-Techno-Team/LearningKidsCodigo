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
            background: #fffacc;
            border: #a2e6ef 6px dashed;
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
            border: #FDFD96 15px dashed;
        }

    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #FDFD96">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #a2e6ef ">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/2FHWMP5/med-removebg-preview.png">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Medios de transporte en inglés.</h3>
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
    <div class="container-fluid mt-5"><h2 class="mt-5">Medios de transporte terrestre en inglés (Land Transportation)</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Bicicleta: <strong>bicycle</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/5YhBKHN/bcy-removebg-preview.png" width="300" height="280">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Triciclo: <strong>tricycle</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/7rNybkF/tricicl-removebg-preview.png" width="300" height="220">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Motocicleta: <strong>motorcycle (motorbike)</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/H4kcxhg/mot-removebg-preview.png" width="300" height="220">
                </div>

            </div>
    </div>
    </div>

    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Coche/auto/carro: <strong>car</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/WFYGLGZ/car-removebg-preview.png" width="280" height="200">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Camioneta: <strong>pick-up truck</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/TP6YKHc/camionet-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Descapotable: <strong>convertible</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/rbtT84b/desmontabl-removebg-preview.png" width="290" height="200">
                </div>

        </div>
    </div>
    </div>

    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        autobús: <strong>bus</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/m4JD5wg/bus-removebg-preview.png" width="300" height="250">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Bus escolar: <strong>school bus</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/0Kq1xcS/scho-removebg-preview.png" width="320" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Autobús de dos pisos: <strong>double-decker bus</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/bRDVZDH/busss-removebg-preview.png" width="320" height="250">
                </div>



        </div>
    </div>
    </div>
    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Metro/subterraneo: <strong>subway</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/yR3MPHn/metr-removebg-preview.png" width="400" height="290">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Tranvía: <strong>tram/cable car</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/bJwwBhh/tran2-removebg-preview.png" width="320" height="250">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Tren: <strong>train</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/pyCgVw7/tren-removebg-preview.png" width="300" height="230">
                </div>

        </div>
    </div>
    </div>
    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Camión: <strong>truck</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/4KLjLDw/camio-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Camión de la basura: <strong>garbage truck</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/F7cK1nV/basur-removebg-preview.png" width="350" height="280">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Tractor: <strong>tractor</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/WDVQdRT/tr6-removebg-preview.png" width="300" height="250">
                </div>


            </div>
    </div>
    </div>
    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Ambulancia: <strong>ambulance</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/Vx9zYS6/ambu-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Patrulla de policía: <strong>patrol car</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/L02Cgy2/patrulla-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Taxi: <strong>taxi</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/02b08c4/tx-removebg-preview.png" width="300" height="250">
                </div>


            </div>
    </div>
    </div>
    <!-- contenedor terrestres-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Furgoneta: <strong>van</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/4RSm5sc/furrg-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Limusina: <strong>limousine</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/xH3h5P7/limu-removebg-preview.png" width="300" height="200">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Carro de carrera: <strong>go-cart</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/2yhW6Db/go-removebg-preview.png" width="300" height="250">
                </div>

        </div>
    </div>
    </div>
    <!-- contenedor -->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Motoneta: <strong>scooter</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/qr10fbR/mu-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Moto de nieve: <strong>snowmobile</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/fDXLBBj/aaa-removebg-preview.png"  width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Segway: <strong>Segway</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/pWcKjFD/seg-removebg-preview.png" width="250" height="250">
                </div>

        </div>
    </div>
    </div>
    <!-- contenedor-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Grúa: <strong>tow truck</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/wWhqj8j/gruaa-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Montacargas: <strong>forklift</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/GQw7NwV/monta-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Remolque: <strong>wagon</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/dmGWt7W/remol-removebg-preview.png" width="300" height="250">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor aereo-->
    <div class="container-fluid mt-5 "><h2 class="mt-5">Medios de transporte aéreo en inglés (Air transport)</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Avión: <strong>airplane (plane)</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/dG6C8mR/unnamed-removebg-preview-4.png" width="300" height="250">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Transbordador espacial: <strong>space shuttle</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/mRP1QSY/transbor-removebg-preview.png" width="350" height="270">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Helicóptero: <strong>helicopter</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/2sGVkxn/helic-removebg-preview.png" width="300" height="250">
                </div>


            </div>
    </div>
    </div>
    <!-- contenedor -->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Globo aerostático: <strong>hot air balloon</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/5Rkf0f4/glob-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Cohete: <strong>rocket</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/mHy271s/cohet-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4 mb-5">
                    <h2 class="mt-5">
                        Nave espacial: <strong>spaceship</strong>
                    </h2>
                    <iframe width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/9WYzzjc/nave-removebg-preview.png" width="290" height="230">
                </div>

            </div>
        </div>
    </div>


    <!-- contenedor ACUATICO-->
    <div class="container-fluid mt-5"><h2 class="mt-5">Medios de transporte acuático en inglés (Water transportation)</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Velero: <strong>sailboat</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/GMtdJXw/at-removebg-preview-1.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Crucero: <strong>cruise ship</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/DrCHtz0/crucer-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Submarino: <strong>submarine</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/ysmKTT2/submar-removebg-preview.png" width="300" height="250">
                </div>


        </div>
    </div>
    </div>

    <!-- contenedor ACUA-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-4">
                    <h2 class="mt-5">
                        Barco: <strong>ship</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/2dqyZXv/cap-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Moto de agua: <strong>jet ski</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/PxcMCfN/moa-removebg-preview.png" width="300" height="250">
                </div>

                <div class="col-md-4">
                    <h2 class="mt-5">
                        Balsa: <strong>raft</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                    <img class="mx-auto d-block" src="https://i.ibb.co/z7dbYJ3/balsa-removebg-preview.png" width="300" height="250">
                </div>

            </div>
        </div>
    </div>



    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">
                    Y ahora vamos a ver un video para aprender la correcta pronunciación
                    <br>de los medios de transporte en inglés con esta divertida canción. ¡Vamos a cantar!
                    <br>
                </h2>
                <iframe id="bord" class="mx-auto d-block" width="670" height="390"></iframe>
            </div>

        </div>
    </div>



    <!-- separador -->
    <div id="separadorInferior">
        <div class="content">
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
