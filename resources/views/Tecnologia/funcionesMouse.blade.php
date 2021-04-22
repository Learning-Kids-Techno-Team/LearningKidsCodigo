@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Mouse</title>
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
        :root {

            --heading-height: 100em;
        }


        header::before {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: 13em;
            width: 100%;
            height: calc(var(--heading-height) + 10em);
            z-index: -1;
            transform: skewY(-4.5deg);
            background:
                linear-gradient(rgb(0, 255, 127), rgba(0, 250, 154,0.7)),
                url("https://static.videezy.com/system/resources/thumbnails/000/041/796/original/4K-3.jpg")
                no-repeat center, linear-gradient(#4e4376, #2b5876) ;
            background-size: 150px auto;
            border-bottom: 10px solid yellow;
        }

        h1 {
            text-shadow: .022em .022em .022em #111;

        }

        h4 {
            text-shadow: .022em .022em .022em springgreen;

        }
    </style>

</head>
<body>

<!-- navbar  style="background: #98dfb6 #f5f5f5 #B4F97B "-->
@section('content')
    <br><br>
    <header>
        <h1 class="text-center" style="color: #fde300">El Mouse y sus funciones</h1>
    </header>

    <div class="container-fluid " >
        <div class="container-fluid"   >
            <div class="container-fluid p-5" >
                <div class="col-md-12 " >
                    <div class="row mr-5 " >


                        <br><br><br>
                        <div class="col-md-6 ">
                            <img class="mt-0 mx-auto d-block"
                                 src="http://1rciclovedruna.files.wordpress.com/2013/03/computermousegif.gif"
                                 width="200">
                        </div>
                        <br><br><br>
                        <div class="col-md-6 " >
                            <h4 class="text-justify"  >
                                <br><br><br><br>
                                En Informática se denomina mouse (del inglés ratón).
                                Ratón o apuntador a un dispositivo de entrada de uso manual, diseñado para
                                facilitar la interacción de usuario con las interfaces de sistemas informaticos.
                            </h4>
                        </div>
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
