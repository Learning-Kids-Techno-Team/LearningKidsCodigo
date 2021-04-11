@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Emociones</title>
    <style>
        body {
            background:  #dcfecb;

        }
        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background:  #C5FFA0;
        }

        .navbar{
            background:  #C5FFA0;

        }

        p {
            border: turquoise 50px solid;
            border-image-source: url("https://i.ibb.co/d4SwJPg/mar-removebg-preview.png");
            border-image-slice: 160;
            border-image-repeat: round;

            padding: 10px;
            text-align: justify;
        }


        #c{
            background: springgreen;
        }


    </style>
</head>
<body>
@section('content')
    <!-- contenedor-->
    <div class="container-fluid "  id="c">
        <div class="container-fluid p-5">
            <div class="col-md-12 " >
                <div class="row ml-2 "  >

                    <div class="col-md-7  " style="background: #ffed4a">
                        <img class="mt-5 mx-auto d-block"
                             src="https://userscontent2.emaze.com/images/8307a578-6e35-4295-9f50-083721d672c7/6f3f87bfbbda3fcfd0637d96b54c9504.png"
                             width="500"  >
                    </div>
                    <div class="col-xl-5   " style=" background: #ffed4a"  >
                        <br>
                        <h1 class="text-center">El Teclado</h1>
                        <p class="text-center " >


                            <strog>
                                Un teclado es un periférico de entrada en el ordenador, PC o computadora, como quieras llamarlo.
                                Es decir, es un componente externo (periférico) al ordenador y que se conecta al ordenador mediante algún puerto.
                            </strog>
                        </p>
                    </div>
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
