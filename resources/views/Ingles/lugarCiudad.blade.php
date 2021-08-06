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

        h2 {

            text-align: center;
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
            border: teal dashed 8px;
        }


      #bor{
          border: teal solid 5px;
      }
        .card{

            background: #f4b0af;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }
        #player{
            width: 100%;

        }



    </style>
</head>
<body>
<!-- navbar-->
@section('content')
    <!-- contenedor-->
    <div class="container-fluid mt-5"  >
        <div class="row">
            <div class="col-xl-12">
                <div class="row ml-5 mr-5" id="borde" >
                    <div class="col-xl-5  " style="background: #FDFD96" >
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/yVLFJgj/ciudad.png"  width="320"  >
                        <br><br>
                    </div>
                    <div class="col-xl-7 " style=" background: #FDFD96;" >


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

    <div class="container-fluid  center-block pb-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-xl-12  " id="bor" style="background: lightgreen ">

                    <h3>Edificios y Lugares en la Ciudad en Inglés Y Español – Buildings and Places in the city
                    </h3>
                </div>
            </div>
        </div>
</div>

    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle  bg-warning mx-auto d-block "  style="border: teal double 12px" src="https://i.ibb.co/Cnnfnp3/supe.jpg" width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Supermercado <br> Supermarket</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/superme.mp3" controls >
                    </audio>

                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/Tq2y1Lf/escue.jpg"   width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Escuela <br> School</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/escu.mp3" controls >
                    </audio>
                </div>
            </div>

            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/r4t428V/mer.jpg"  width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2   id="color"><em>Mercado<br> Market</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/mer.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/y52s5c7/igle.jpg"  width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2   id="color"><em>Catedral <br> Cathedral </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/cate.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/xFpDGT6/ceme.jpg"  width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2   id="color"><em>Cementerio <br> Cemetery </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/ceme.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/ftFDDK4/monu.jpg"   width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Monumento<br> Monument</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/monu.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px"  src="https://i.ibb.co/LZc9Sdk/an.jpg"   width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Asilo de ancianos <br> Old people’s home  </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/anci.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/bFwG5KW/parq.jpg"   width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2   id="color"><em>Parque <br> Park </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/par.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/0Bc6w7x/pris.jpg"   width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2   id="color"><em>Cárcel<br> Prison</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/pri.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/f2wkxGD/isometric-view-of-a-small-town-square.jpg"  width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Plaza <br> Square </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/plaza.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/Rcnd3V9/esta.jpg"  width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Estadio <br> Stadium </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/estadio.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/tLtsj2j/resi.jpg"    width="300" height="200"/><br>
                <div class="card mx-auto d-block "style="width: 20rem; ">

                    <h2   id="color"><em>Zona Residencial<br> Residential area</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/resi.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid  center-block pb-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5">
                <div class="col-xl-12  " id="bor" style="background: lightgreen ">

                    <h3>Servicios en la Ciudad en Inglés Y Español–Services in the city
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/MnNM8zg/pan.jpg"   width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Panadería <br> Bakery </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/pana.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/yYXbzGB/ban1.jpg" width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Banco <br> Bank</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/banco.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/FHSsPzQ/cine.jpg"     width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Cine<br>Cinema</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/cine.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid" >
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/wB2PcMt/hotel.jpg"    width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Hotel<br> Hotel</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/hotel.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/fQgtTgR/hos.jpg" width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2 id="color"><em>Hospital <br>Hospital</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/hos.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/M86MW5r/far.jpg"   width="300" height="200"/><br>
                <div class="card mx-auto d-block "style="width: 20rem; ">

                    <h2 id="color"><em>Farmacia<br>Pharmacy</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/far.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/qMLhRY8/res.jpg"   width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2 id="color"><em>Restaurante<br> Restaurant</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/rest.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/hDKG7wp/ti.jpg" width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2 id="color"><em>Tienda <br> Store</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/tienda.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/VH0NWwN/Children-playing-in-the-circus-illustration.jpg"  width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Circo<br>Circus</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/circo.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  center-block pb-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-xl-12  " id="bor" style="background: lightgreen ">

                    <h3>Otros – Others
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/Lp1tkLK/bas.jpg"    width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Basura<br> Litter </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/basura.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/Tr38pRR/age.jpg" width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2 id="color"><em>Agente de Polícia<br> Policeman </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/poli.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/yfK8r7g/cabin.jpg"  width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Cabina telefónica<br>Telephone kiosk</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/cabina.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/G0WJfSH/turi.jpg"    width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Turista <br> Tourist </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/turis.mp3" controls >
                    </audio>
                </div>
            </div>


            <div class="col-xl-4 pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/C5QKn4X/arb.jpg"  width="310" height="200"/><br>

                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Arboles<br>Trees </em></h2>
                    <audio  id="player" src="AudioIngles/lugares/arbol.mp3" controls >
                    </audio>
                </div>
            </div>
            <div class="col-xl-4  pb-5">
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"    src="https://i.ibb.co/tcMjfDF/Cartoon-Illustration-of-Discharged-Smart-Phone-or-Mobile-and-Retro-Phones-Laughing.jpg"   width="300" height="200"/><br>
                <div class="card mx-auto d-block " style="width: 20rem; ">

                    <h2  id="color"><em>Teléfonos<br>Telephones</em></h2>
                    <audio  id="player" src="AudioIngles/lugares/tele.mp3" controls >
                    </audio>
                </div>
            </div>
        </div>
    </div>
<br> <br>

    <div class="container-fluid ">
        <div class="row pt-5" >
            <div class="col-xl-12" id="separadorInferior">

                <img  src="https://i.ibb.co/12npptf/ic1-removebg-preview.png" height="120">


            </div>
        </div>
    </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
