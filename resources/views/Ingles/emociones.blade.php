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
            background: aquamarine;
        }




        .navbar{
            background: aquamarine;

        }



        #bor {

            background: orange;
        }



        p {
            border: turquoise 50px solid;
            border-image-source: url("https://i.ibb.co/d4SwJPg/mar-removebg-preview.png");
            border-image-slice: 160;
            border-image-repeat: round;

            padding: 10px;
            text-align: justify;
        }



    </style>
</head>
<body>

<!-- navbar  style="background: #98dfb6 #f5f5f5 "-->
@section('content')
    <div class="container-fluid center-block pl-0"  >
    </div>
    <br>
    <br>
    <h2 style="text-align: center; color:blue" >

        Sentimientos y Emociones en ingles /Feelings and Emotions in English
    </h2>
    <br>

    <div class="container-fluid; "    >
        <div class="container-fluid p-5; "  >
            <div class="row  " >
                <div class="col-md-5 mt-0"  >
                    <img class=" mx-auto d-block ml-0; "
                         src="https://i.ibb.co/vmh7VdY/cvv-removebg-preview.png" alt="cvv-removebg-preview"
                         width="550" />
                </div>
                <div class="col-md-7 mt-0" >
<br>
                    <p style="background: mediumspringgreen" >
                        <strong >
                            Las emociones son parte importante de todas las personas.
                            Todos tenemos diferentes sentimientos,y es común que una
                            persona experimente varias emociones a lo largo del día
                            con las diferentes situaciones vividas.
                            Los sentimientos y las emociones no son iguales, tienen
                            algunas diferencias clave como la duración que tienen o
                            cómo se producen, aunque ambos estén relacionados.
                            Según estudios , los niños a temprana edad
                            ya comienzan a reconocer las emociones básicas tales
                            como felicidad, rabia, miedo, sorpresa o tristeza.
                        </strong></p>
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
