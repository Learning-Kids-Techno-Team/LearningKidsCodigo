@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>El alfabeto</title>
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
            background:  #dcfecb;
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
            border: lawngreen dashed 8px;
        }

        #pa{
            text-align: justify;

        }
        #bor {
            border: khaki solid 5px;
            background:darksalmon;
        }
        .card{

            background: #B4F97B;


        }
        #play{
            width: 100%;


        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')
    <div class="container-fluid center-block pl-0" style="color: teal" >
    </div>


    <!-- contenedor-->
    <div  class="container-fluid ">
        <div class="row m-5">
            <div class="mx-auto d-block" style="background: #FDFD96; border: turquoise dashed 8px">


                <img  src="https://i.ibb.co/QcdjwW6/ab-removebg-preview.png"   width="280" height="200" class="mx-auto d-block"/>

                <h2 class="text-center" style="color: purple"><strong><em>EL ALFABETO - THE ALPHABET </em></strong></h2>
                <p class="text-center justify-content-center" >
                    <strong><em><br>El abecedario en ingles es de gran importancia para poder
                            pronunciar y escribir bien las palabras y
                            escucharlas de manera correcta cuando otra persona nos habla en este idioma.
                            El abecedario es uno de los puntos básicos para hablar en ingles.
                            Para aprender el abecedario de manera correcta e indicada puedes entrar
                            en  los espacios de nuestra pagina web. Recuerda prestar atención y
                            repetir con frecuencia cada letra.
                        </em></strong> </p>
            </div>
        </div>
    </div>



    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row ">
                <div class="col-md-12  " id="bor"  >

                    <h3>Abecedario en Inglés y Español - Alphabet in english and spanish
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 1-->
    <div class="container-fluid" id="color">
        <div class="row mt-5">
            <div class="col-md-3">
                <!-- cara del gusano-->
                <img src="https://i.ibb.co/myZNVGH/h5-removebg-preview.png"  width="400" height="450">

            </div>

            <div class="col-md-3 "><br><br>
                <!-- letra A-->
                <img class="rounded-circle d-flex justify-content-center  ml-5 "  style="border: lightgreen solid 12px" src="https://i.ibb.co/ZJgXBFC/Captura-de-pantalla-566.png"     width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>A<br>ei</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/A..mp3" controls >
                    </audio>
<br>
                </div>
            </div>



            <div class="col-md-3  "><br><br><br><br>
                <!-- letra B-->
                <img class="rounded-circle d-flex justify-content-center ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/yh8b3wS/Captura-de-pantalla-567.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>B<br>bi </em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/B.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  "><br><br><br>
                <!-- letra C-->
                <img class="rounded-circle d-flex justify-content-center ml-5" style="border: lightgreen solid 12px"  src="https://i.ibb.co/cQJd23S/Captura-de-pantalla-568.png"   width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>C<br>ci</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/C..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 2-->
    <div class="container-fluid " id="color">
        <div class="row ">
            <div class="col-md-3 "><br><br><br><br><br>
                <img class="rounded-circle d-flex ml-5 "  style="border: lightgreen solid 12px" src="https://i.ibb.co/wwj7xgD/Captura-de-pantalla-572.png"    width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>G<br>yi</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/G.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>


            <div class="col-md-3"><br><br><br><br><br>
                <!-- letra f -->
                <img class="rounded-circle d-flex  ml-5"  style="border: lightgreen solid 12px"  src="https://i.ibb.co/tBfbYvZ/Captura-de-pantalla-571.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>F<br>ef</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/F.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>



            <div class="col-md-3 "><br><br><br>
                <!-- letra E -->
                <img class="rounded-circle d-flex  ml-5" style="border:lightgreen solid 12px" src="https://i.ibb.co/6WbQzGQ/Captura-de-pantalla-570.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>E<br>i </em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/E..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  ">
                <!-- letra D -->
                <img class="rounded-circle d-flex  ml-5" style="border: lightgreen solid 12px"  src="https://i.ibb.co/YNxxRhG/Captura-de-pantalla-569.png"  width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>D<br>di</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/D..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor 3-->
    <div class="container-fluid" id="color">
        <div class="row ">

            <div class="col-md-3 "><br><br>
                <!-- letra h-->
                <img class="rounded-circle d-flex  ml-5 "  style="border:lightgreen solid 12px" src="https://i.ibb.co/16stnrP/Captura-de-pantalla-573.png"    width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>H<br>eich</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/H..mp3" controls >
                    </audio>
                    <br>

                </div>
            </div>

            <div class="col-md-3 "><br><br><br><br>
                <!-- letra i-->
                <img class="rounded-circle d-flex ml-5"  style="border: lightgreen solid 12px" src="https://i.ibb.co/37k0bWP/Captura-de-pantalla-598.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>I<br>ai</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/I.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>



            <div class="col-md-3  "><br><br><br><br><br><br><br>
                <!-- letra j-->
                <img class="rounded-circle d-flex ml-5 " style="border: lightgreen solid 12px"  src="https://i.ibb.co/5L6Wwyy/Captura-de-pantalla-594.png" width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>J<br>yei </em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/J.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  "><br><br><br><br><br><br><br><br>
                <!-- letra k-->
                <img class="rounded-circle d-flex ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/h2y62P1/Captura-de-pantalla-575.png"  width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>K<br>kei</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/K.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 4-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-3 "><br><br><br><br><br><br><br><br>
                <img class="rounded-circle d-flex justify-content-center ml-5 "  style="border: lightgreen solid 12px" src="https://i.ibb.co/cF8CTx8/Captura-de-pantalla-579.png"   width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>O<br>ou</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/O.mp3" controls >
                    </audio>
                    <br>

                </div>
            </div>


            <div class="col-md-3 "><br><br><br><br><br><br><br>
                <!-- letra N-->
                <img class="rounded-circle d-flex justify-content-center ml-5"  style="border: lightgreen solid 12px" src="https://i.ibb.co/8Y51nWL/Captura-de-pantalla-578.png"   width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>N<br>en</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/N..mp3" controls >
                    </audio>
                    <br>

                </div>
            </div>



            <div class="col-md-3 pl-5"><br><br><br><br><br>
                <!-- letra M -->
                <img class="rounded-circle d-flex justify-content-center ml-5" style="border:lightgreen solid 12px" src="https://i.ibb.co/KxS7n7V/Captura-de-pantalla-577.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>M<br>em</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/M..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3 "><br><br>
                <!-- letra L-->
                <img class="rounded-circle d-flex justify-content-center ml-5" style="border: lightgreen solid 12px"   src="https://i.ibb.co/cTmnhhm/Captura-de-pantalla-576.png"   width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>L<br>el</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/L..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 5-->
    <div class="container-fluid" id="color">
        <div class="row ">

            <div class="col-md-3"><br><br>
                <!-- letra p-->
                <img class="rounded-circle d-flex  ml-5 "  style="border: lightgreen solid 12px" src="https://i.ibb.co/p41pvTc/Captura-de-pantalla-580.png"     width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>P<br>pi</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/P,.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>

            <div class="col-md-3 "><br><br><br><br>
                <!-- letra q-->
                <img class="rounded-circle d-flex ml-5"  style="border: lightgreen solid 12px" src="https://i.ibb.co/zV5hy2L/Captura-de-pantalla-581.png" width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Q<br>kiu</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/Q.mp3" controls >
                    </audio>
                    <br>

                </div>
            </div>



            <div class="col-md-3  "><br><br><br><br><br><br><br>
                <!-- letra r-->
                <img class="rounded-circle d-flex ml-5" style="border: lightgreen solid 12px"  src="https://i.ibb.co/X31K8xM/Captura-de-pantalla-582.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>R<br>ar</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/R..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  "><br><br><br><br><br><br><br><br>
                <!-- letra s-->
                <img class="rounded-circle d-flex ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/p1TXZq7/Captura-de-pantalla-583.png"  width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>S<br>es</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/S..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 6-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-3"><br><br><br><br><br><br><br><br>
                <img class="rounded-circle d-flex ml-5"  style="border: lightgreen solid 12px" src="https://i.ibb.co/bmdzY3t/Captura-de-pantalla-601.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>W<br>dabliu</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/W.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>


            <div class="col-md-3 "><br><br><br><br><br><br><br>
                <!-- letra V-->
                <img class="rounded-circle d-flex ml-5"  style="border: lightgreen solid 12px"  src="https://i.ibb.co/7NXwy2n/Captura-de-pantalla-586.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>V<br>uvi</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/V.mp3" controls >
                    </audio>
                    <br>

                </div>
            </div>



            <div class="col-md-3 "><br><br><br><br><br>
                <!-- letra u -->
                <img class="rounded-circle d-flex ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/RHBpZp9/Captura-de-pantalla-600.png"   width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>U<br>iu</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/U.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  "><br><br>
                <!-- letra t-->
                <img class="rounded-circle d-flex ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/232xDXG/Captura-de-pantalla-584.png"  width="300" height="300"/><br>
                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>T<br>ti</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/T..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor 7-->
    <div class="container-fluid" id="color">
        <div class="row ">

            <div class="col-md-3 "><br><br>
                <!-- letra x-->
                <img class="rounded-circle d-flex  ml-5 "  style="border: lightgreen solid 12px"  src="https://i.ibb.co/G9KxXJz/Captura-de-pantalla-588.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>X<br>ex</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/X.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>

            <div class="col-md-3 "><br><br><br><br>
                <!-- letra y-->
                <img class="rounded-circle d-flex  ml-5"  style="border: lightgreen solid 12px" src="https://i.ibb.co/PNB0hQ5/Captura-de-pantalla-589.png" width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem ;">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Y<br>uai</em></h2>

                    <audio  id="play" src="AudioIngles/Abecedario/Y.mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>



            <div class="col-md-3  "><br><br><br><br><br><br><br>
                <!-- letra z-->
                <img class="rounded-circle d-flex  ml-5" style="border: lightgreen solid 12px" src="https://i.ibb.co/gSyn006/Captura-de-pantalla-590.png"  width="300" height="300"/><br>

                <div class="card ml-5 " style="width: 10rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Z<br>set</em></h2>
                    <audio  id="play" src="AudioIngles/Abecedario/Z..mp3" controls >
                    </audio>
                    <br>
                </div>
            </div>
            <div class="col-md-3  "><br><br><br><br><br><br><br><br>

                <img class="rounded-circle d-flex justify-content-center bg-success" style="border: lightgreen solid 12px"   width="140" height="150"/><br>

            </div>
        </div>
    </div>



    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row ">

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

