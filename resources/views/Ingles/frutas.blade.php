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
            border: #fff6af 15px dashed;
        }

        #tar1{
            background: #CCEECC;
            border:darkgreen 5px solid;

        }

        #tar2{
            background: #f1DAFF;
            border: fuchsia 5px solid;

        }

        #tar3{
            background: #FFEECC;
            border: darkorange 5px solid;

        }

    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #fff6af ">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #DCFECB">
                        <img class="mt-5 mx-auto d-block" >
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686"><em>Inglés</em></h4>
                        <h3 class="mt-5" style="text-align: center">Frutas <em>(Fruits)</em></h3>
                        <p class="" id="pa">
                            <br>
                            <br>
                            <br>
                            <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de las tarjetas -->
    <div class="container-fluid mt-5" >
        <div  class="row m-5" >
            <div class="col-md-4">

                <!-- tarjeta 1 -->
                <div id="tar1" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjetas3 -->
            <div class="col-md-4">
                <div id="tar3" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

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
                <div id="tar1" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjeta 5 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjeta 6 -->
            <div class="col-md-4">
                <div id="tar3" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

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
                <div id="tar1" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjeta 8 -->
            <div class="col-md-4 ">
                <div id="tar2" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>
            <!-- tarjeta 9 -->
            <div class="col-md-4">
                <div id="tar3" class="card" style="width: 18rem;">
                    <img class="mx-auto d-block" id="im">
                    <div class="card-body">
                        <h2 class="mt-5"></h2>
                        <iframe  width="300" height="80"></iframe>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center"><strong><em>
                            Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                            <br>de las frutas en inglés con esta divertida canción. ¡Vamos a cantar!
                            <br></em></strong>
                </h2>
                <iframe id="bord" class="mx-auto d-block"
                        width="670" height="390"></iframe>
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


