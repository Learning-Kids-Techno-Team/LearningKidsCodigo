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


        #gradient {

            margin: 0 auto;
            margin-top: 10px;

        }

        #gradient:after {
            content: "";
            position: absolute;
            background: tomato;
            left: 50%;
            margin-top: -180px;
            margin-left: -270px;
            padding-left: 20px;
            border-radius: 5px;
            width: 550px;
            height: 285px;
            z-index: -1;
        }

        #card {
            position: relative;
            width: 505px;
            height: 250px;
            padding: 35px;
            left: 50%;
            top: 85px;
            margin-left: -250px;
            background: palegreen;
            box-shadow: -20px 0 35px -25px yellow, 20px 0 35px -25px aqua;
            border: dashed 8px seagreen;

        }

        #card img {
            width: 175px;
            float: left;

            margin-right: 2px;

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
    <h2 style="text-align: center; color: tomato" >

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

    <div class="container-fluid d-flex justify-content-center  " >
        <div class="row ">
            <div class="col-md-12  " style="background: orange"  >

                <h3 >Emociones en ingles y español - Emotions in english and spanish
                </h3>
            </div>
        </div>
    </div>



    <div class="container-fluid  " >

        <div class="container-fluid m-4" >

            <div class="row "  >
                <div class="col-md-6" id="gradient">
                    <!-- tarjeta 1 -->
                    <div id="card">

                        <img src="https://i.ibb.co/80WB1NZ/car8-removebg-preview.png" />
                            <h3 class="text-center">Feliz<br>happy
                            <br>
                            <br>
                            <br>

                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>

                    </div>

                </div>

                <!-- tarjeta 2 -->
                <div class="col-md-6" id="gradient">
                    <div id="card">

                        <img src="https://i.ibb.co/B3CH1pQ/gg-removebg-preview.png" />
                        <h3 class="text-center">Felicidad<br>happiness

                            <br>
                            <br>
                            <br>

                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container-fluid  " >

        <div class="container-fluid m-4" >

            <div class="row "  >
                <div class="col-md-6" id="gradient">
                    <!-- tarjeta 1 -->
                    <div id="card">

                        <img src="https://o.remove.bg/downloads/638c2985-6bcd-4098-8f44-34863cf15890/fp-removebg-preview.png" />

                        <h3 class="text-center">Triste<br>sad

                            <br>
                            <br>
                            <br>

                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>

                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-6" id="gradient">
                    <div id="card">

                        <img src="https://i.ibb.co/Mg2FjY0/cars-removebg-preview.png"  />
                        <h3 class="text-center">Tristeza<br>sadness

                            <br>
                            <br>
                            <br>


                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container-fluid  " >

        <div class="container-fluid m-4" >

            <div class="row "  >
                <div class="col-md-6" id="gradient">
                    <!-- tarjeta 1 -->
                    <div id="card">

                        <img src="https://i.ibb.co/b7dMtt4/enu-removebg-preview.png" >

                        <h3 class="text-center">Enojado<br> angry

                            <br>
                            <br>
                            <br>

                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>

                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-6" id="gradient">
                    <div id="card">

                        <img src="https://i.ibb.co/yYnmpcH/asq-removebg-preview.png">
                        <h3 class="text-center">Enojo<br>anger

                            <br>
                            <br>
                            <br>


                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container-fluid  " >

        <div class="container-fluid m-4" >

            <div class="row "  >
                <div class="col-md-6" id="gradient">
                    <!-- tarjeta 1 -->
                    <div id="card">

                        <img src="https://i.ibb.co/wyNWnZN/ff-removebg-preview.png" alt="ff-removebg-preview" border="0">

                        <h3 class="text-center">Asustado<br> scared

                            <br>
                            <br>
                            <br>

                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>

                    </div>

                </div>
                <!-- tarjeta 2 -->
                <div class="col-md-6" id="gradient">
                    <div id="card">

                        <img src="https://i.ibb.co/JtkfGGD/hl.png" alt="hl" border="0">
                        <h3 class="text-center">Enojo<br>anger

                            <br>
                            <br>
                            <br>


                            <iframe src="https://o.remove.bg/downloads/74812df6-ffc7-444e-a685-6b25c28dc0b6/sss-removebg-preview.png" width="318" height="55"></iframe>

                        </h3>


                    </div>
                </div>
            </div>
        </div>
    </div>








    <br>
    <br>
    <br><br>
    <br><br>
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
