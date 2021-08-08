@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>
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
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
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


        #play {
            width: 100%;

        }

        #tar2{
            background: #CCEECC;
            border: #4caf50 5px dashed;

        }



    </style>
</head>
<body>

<!-- navbar  style="background: #98dfb6 #f5f5f5 "-->
@section('content')
    <div class="container-fluid  "  >
    </div>
    <br>
    <br>
    <h2 class="text-center"  >

        Sentimientos y Emociones en ingles /Feelings and Emotions in English
    </h2>
    <br>

    <div class="container-fluid "  >
        <div class="container-fluid"  >
            <div class="row  " >
                <div class="col-xl-5 p-2"  >
                    <br><br>
                    <img class=" mx-auto d-block ; "
                         src="https://i.ibb.co/vmh7VdY/cvv-removebg-preview.png" alt="cvv-removebg-preview"
                         width="400" />
                </div>
                <div class="col-xl-7 p-2" >
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

    <div class="container-fluid" >
        <div class="row ">
            <br>
            <div class="col-xl-12 p-2 " style="background: orange"  >


                <h3 class="text-center">Emociones en ingles y español - Emotions in english and spanish
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/80WB1NZ/car8-removebg-preview.png" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Feliz<br>happy

                            </h3>
                            <br><br>
                            <audio  id="player" src="AudioIngles/emo/feliz.mp3" controls >
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br><br>
                    <img class="mx-auto d-block" src="https://i.ibb.co/B3CH1pQ/gg-removebg-preview.png" width="240"
                         height="190">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Felicidad<br>happiness </h3>
                                <br>
                                <audio  id="player" src="AudioIngles/emo/felicidad.mp3" controls >
                                </audio>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/7VvPDSd/fp-removebg-preview.png" width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Triste<br>sad

                                <br>
                                <br>


                                <audio  id="player" src="AudioIngles/emo/triste.mp3" controls >
                                </audio>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block" src="https://i.ibb.co/Mg2FjY0/cars-removebg-preview.png" width="240"
                         height="181">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Tristeza<br>sadness</h3>

                                <br>
                                <br>


                                <audio  id="player" src="AudioIngles/emo/tristeza.mp3" controls >
                                </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/b7dMtt4/enu-removebg-preview.png" width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Enojado<br> angry

                                <br>
                                <br>
                                <br>
                                <audio  id="player" src="AudioIngles/emo/Enojado.mp3" controls >
                                </audio>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/yYnmpcH/asq-removebg-preview.png" width="240"
                         height="200">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Enojo<br>anger

                                <br>
                                <br>
                                <br>


                                <audio  id="player" src="AudioIngles/emo/Enojo.mp3" controls >
                                </audio>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/wyNWnZN/ff-removebg-preview.png"  width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Asustado<br> scared

                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Asustado.mp3" controls >
                                </audio>

                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/JtkfGGD/hl.png" width="240"
                         height="200">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Miedo<br>afraid

                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Miedo.mp3" controls >
                                </audio>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid  " >
        <div class="row ">
            <div class="col-xl-12 p-2 "   >

                <h3 class="text-center">Estados de ánimo en inglés -Moods in english
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid "  >
        <div class="row ">


            <div class="col-md-6 " >
                <img class="mx-auto d-block card__imag"  src="https://i.ibb.co/r622Fnj/hhp-removebg-preview.png" width="400">



            </div>
            <div class="col-md-6" >
                <p class="im"><strong>
                        Las emociones,  son respuestas breves a estímulos externos,
                        como esa sensación particular cuando te hacen una fiesta sorpresa,
                        o la sensación de dicha al terminar un proyecto importante.
                    </strong></p>
            </div>


        </div>
    </div>



    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/N15j4N7/af-removebg-preview.png" width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Alegría<br>joy
                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Alegría.mp3" controls >
                                </audio>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/Tqj1ZtH/ai-removebg-preview.png" width="240"
                         height="200">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Confusión<br>confusion

                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Confusión.mp3" controls >
                                </audio>


                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/mN49Fm2/dx.png" width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Aburrimiento<br>boredon
                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Aburrimiento.mp3" controls >
                                </audio>

                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block"  src="https://i.ibb.co/2FNLr1d/ma-removebg-preview.png"  width="240"
                         height="200">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="text-center">Simpatía<br>sympathy

                                <br>
                                <br>
                                <br>

                                <audio  id="player" src="AudioIngles/emo/Simpatía.mp3" controls >
                                </audio>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid ">
        <div  class="row m-5" >
            <div class="col-xl-6 p-2 " >
                <!-- tarjeta 1 -->
                <div  class="card" id="tar2" >
                    <br>
                    <img class="mx-auto d-block"   src="https://i.ibb.co/zHwMzcW/asi-removebg-preview.png" width="250" height="200" />
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 class="text-center">Asombro<br>astonishment
                                <br>
                                <br>
                                <br>
                                <audio  id="player" src="AudioIngles/emo/Asombro.mp3" controls >
                                </audio>

                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2 -->
            <div class="col-xl-6 p-2 ">
                <div id="tar2" class="card" >
                    <br>
                    <img class="mx-auto d-block" src="https://i.ibb.co/Tt96zxz/sd-removebg-preview.png"  width="240"
                         height="200">
                    <div class="card-body">
                        <div class="text-center">

                            <h3 class="text-center">Envidia<br>envy

                                <br>
                                <br>
                                <br>
                                <audio  id="player" src="AudioIngles/emo/Envidia.mp3" controls >
                                </audio>

                            </h3>
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
