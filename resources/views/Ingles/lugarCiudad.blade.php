@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Lugares de la Ciudad</title>
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
            background: lightcyan;
        }




        .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 80%;
            border-top-right-radius:80%;


        }


        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background: aquamarine;
        }



        .navbar{
            background: aquamarine;

        }




        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }
        #borde{
            border: tomato dashed 8px;
        }

        #pa{
            text-align: justify;

        }
      #bor{
          border: tomato solid 5px;
      }
        .card{

            background: sandybrown;
            border: tomato 8px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }



    </style>
</head>
<body>
<!-- navbar-->
@section('content')
    <!-- contenedor-->
    <div class="container-fluid mt-5"  >
        <div class="row">
            <div class="col-md-12"  >
                <div class="row ml-5 mr-5" id="borde" >
                    <div class="col-md-4  " style="background: #FDFD96" >
                        <img class="mt-4 pl-3 "    src="https://i.ibb.co/yVLFJgj/ciudad.png"  width="450"  >
                        <br><br>
                    </div>
                    <div class="col-sm-8 " style=" background: #FDFD96;" >


                        <h3 class="mt-5" style="text-align: center; ">Lugares en la Ciudad</h3>
                        <p class="" id="pa">
                            <strong><br>Una ciudad es un asentamiento de población con atribuciones y funciones políticas,
                                administrativas, económicas y religiosas, a diferencia de los núcleos rurales que carecen
                                de ellas, total o parcialmente.

                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-md-12  " id="bor" style="background: lightgreen ">

                    <h3>Edificios y Lugares en la Ciudad en Inglés Y Español
                    </h3>
                </div>
            </div>
        </div>
</div>
    <!-- contenedor-->

        <div class="row m-5" >
            <div class="col-md-4" >
                <div class="card" style="width: 20rem;">

                    <img class=" mx-auto d-block"   src="https://i.ibb.co/Cnnfnp3/supe.jpg" width="305" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Supermercado <br> Supermarket</em></h2>


                </div>
            </div>
            <div class="col-md-4">
                <h2 ><em><br></em></h2>
                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/Tq2y1Lf/escue.jpg"   width="300" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Escuela <br> School</em></h2>
                </div>
            </div>
            <div class="col-md-4">
                <h2 ><em><br><br></em></h2>
                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/r4t428V/mer.jpg"  width="300" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Mercado<br> Market</em></h2>
                </div>
            </div>

        </div>
    </div>



    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/y52s5c7/igle.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Catedral <br> Cathedral </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/xFpDGT6/ceme.jpg"  width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Cementerio <br> Cemetery </em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/ftFDDK4/monu.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Monumento<br> Monument</em></h2>
            </div>
        </div>

    </div>
    </div>


    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/y52s5c7/igle.jpg"  width="305" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Asilo de ancianos <br> Old people’s home  </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/bFwG5KW/parq.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Parque <br> Park </em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/0Bc6w7x/pris.jpg"   width="300" height="200">
                <h2 class="mx-auto d-block" id="color"><em>Cárcel<br> Prison</em></h2>
            </div>
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
