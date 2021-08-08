@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Partes de la casa</title>
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
        .navbar{
            background: aquamarine;
        }

        body{

            background:#d6e9f9;

        }


        #pa{
            text-align: justify;

        }


        p{
            text-align: justify;


        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }


        h1{

            size: 80px;
            color: #d6e9f9;

        }
        h3{
            font-style:italic;


        }
        h4{

            text-align: center;
        }
        h2{
            text-align: center;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

        h5{

            padding-top: 20px;
            text-align: center;
        }
        li{
            text-align: justify;
        }
        #play{
            width: 100%;
        }



    </style>


</head>
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" style="background:#009aae">
                <div class="row ml-5 mr-5">
                    <div class="col-xl-7  mt-5" style="background: #CCDDCC">
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/CVnn1pF/casa.jpg"  width="330"  >
                        <br><br>

                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #d6e9f9"  >
                        <br>
                        <h4 class="text-center">Inglés</h4>
                        <h3  style="text-align: center">Partes de la casa</h3>
                        <p class="" id="pa">
                            <em>Es importante para nuestros niños comenzar a aprender desde casa a una temprana edad, y uno de los temas que con mayor facilidad se puede aprender en el hogar son las partes de la casa en inglés y en español, ya que desde el momento de su nacimiento comienzan a conocer el sitio donde habitan.
                            </em><br>

                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 p-2">
                <h2>
                    ¿Por qué es importante aprender las partes de la casa?
                </h2>
                <p>
                    A medida que los niños crecen, se hace más relevante para su proceso de aprendizaje el enseñarles las diferentes habitaciones de una casa en inglés y español, ya que ésto no solo amplia sus vocabularios en ambos idiomas, sino que también les ayuda a prepararse mejor para comenzar su educación.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-xl-5 p-2">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/X2qcqvV/casa3.jpg"   width="400" />
            </div>
        </div>
    </div>




    <div  class="container-fluid">
        <div class="row">
            <div class="col-xl-12  p-2" style="background: #009aae">
                <h1 style="text-align: center">Las partes de la casa en inglés  (The parts of the house)</h1>
            </div>
        </div>
    </div>


    <!-- animales domesticos-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/wd3b4KN/dormitorio-Principal.jpg"  width="280" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/dormitorioPrincipal.mp3" controls >
                </audio>
                <h2>Dormitorio principal:
                    Master bedroom
                </h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/7JMZn67/dormitorio.jpg"   width="260"/>
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/dormitorio.mp3" controls >
                </audio>
                <h2>Dormitorio: Bedroom</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
<br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"   src="https://i.ibb.co/r61tSWp/banio.jpg"   width="300" />
              <div class="text-center">
                  <br>
                <audio  id="player" src="AudioIngles/casa/baño.mp3" controls >
                </audio>
                <h2>Cuarto de baño: Bathroom</h2>
              </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/qrth15K/sala.png"  width="278" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/sala.mp3" controls >
                </audio>
                <h2>Sala: Living room</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/G3vF3Kn/comedor.jpg"
                      width="250" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/comedor.mp3" controls >
                </audio>
                <h2>Comedor: Dinning room</h2>
            </div>
            </div>
            <div class="col-xl-3 p-2" >
              <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"
                      src="https://i.ibb.co/k4HFRSM/Kitchen-interior-witn-furniture-cartoon-vector-illustration-Home-cooking-room-with-wooden-dining-tab.jpg"
                      width="250"/>
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/cocina.mp3" controls >
                </audio>
                <h2>Cocina: Kitchen room</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"
                      src="https://i.ibb.co/m5qYYrd/jardin.jpg" width="250" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/jardin.mp3" controls >
                </audio>
                <h2>Jardin: Garden</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/vctZnZZ/cochera.jpg"
                      width="300" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/cochera.mp3" controls >
                </audio>
                <h2>Cochera: Garage</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-3 p-2">
                <br>
                <img class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/PjxXsnT/ventana2.jpg"
                     width="250"/>
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/ventana.mp3" controls >
                </audio>
                <h2>Ventana: Window</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/s1kDMDz/puerta-Principal.jpg"  width="250" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/puertaPrincipal.mp3" controls >
                </audio>
                <h2>Puerta principal: Front door</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"   src="https://i.ibb.co/zHzWqWL/techo3-removebg-preview.png"   width="250" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/techo.mp3" controls >
                </audio>
                <h2>Techo: Roof</h2>
                </div>
            </div>
            <div class="col-xl-3">
                <br><br><br><br>
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/nz7kghC/piso.jpg"
                      width="283" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/piso.mp3" controls >
                </audio>
                <h2>Piso: Floor</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-6 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/nCLk7Yy/pared.jpg"   width="300" />
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/pared.mp3" controls >
                </audio>
                <h2>Pared: Wall</h2>
                </div>
            </div>
            <div class="col-xl-6 p-2">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/HxSxZdF/escalera.jpg"    width="300"/>
                <div class="text-center">
                    <br>
                <audio  id="player" src="AudioIngles/casa/escaleras.mp3" controls >
                </audio>
                <h2>escaleras: Stairs</h2>
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

