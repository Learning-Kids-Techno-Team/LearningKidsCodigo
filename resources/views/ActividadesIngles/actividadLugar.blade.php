@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Actividad Lugares de la Ciudad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: aquamarine;
        }

        body{

            background:#16A085;

        }




        #banderin{


            margin-top: auto;
            height:90px;

        }
        #color{
            color: white;
            height: 80px;



        }
        p{
            text-align: center;

        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: turquoise;
        }
        h1{
            font-family: Brush Script MT;
            size: 80px;

        }


    </style>


</head>
<body >
@section('content')
    <script style="justify-content: center">
        swal("Hola, ¡Bienvenido(a)  a las actividades","En la pantalla se mostrará un mensaje que dice:\n¿Deseas continuar por donde dejaste el juego?\ntendrás dos opciones SI(YES) Y NO(NO).Si tu respuesta es SI(YES) la actividad se reiniciará y si eliges la opción NO(NO) Continuará donde lo dejaste.",
            "info");

    </script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-m-12" style="background: antiquewhite;">
                <div >
                    <h1 style="text-align: center">Actividad de lugares de la ciudad</h1>
                </div>

                <div>

                    <iframe src="https://eomweezz5vxhz8pwddk6ug-on.drv.tw/Juegos/places%20of%20the%20city%20(Published)/" width="1347" height="700"></iframe>

                </div>

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

