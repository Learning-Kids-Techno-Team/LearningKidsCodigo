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

                    <h3>Edificios y Lugares en la Ciudad en Inglés Y Español – Buildings and Places in the city
                    </h3>
                </div>
            </div>
        </div>
</div>

    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/Cnnfnp3/supe.jpg" width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Supermercado <br> Supermarket</em></h2>

                    <iframe src="https://drive.google.com/file/d/1MA08lrhRn8YpIPqQMLcAwRcDv9nTgz9i/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/Tq2y1Lf/escue.jpg"   width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Escuela <br> School</em></h2>
                    <iframe src="https://drive.google.com/file/d/1p7q5fR3FdM-i6Jh6l5ami6l96xzGuEdQ/preview" width=318 height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/r4t428V/mer.jpg"  width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Mercado<br> Market</em></h2>
                    <iframe src="https://drive.google.com/file/d/1T-4wI_vBibdn4u2dN6O1G3NMjsOL_v8e/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/y52s5c7/igle.jpg"  width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Catedral <br> Cathedral </em></h2>
                    <iframe src="https://drive.google.com/file/d/1-jZtrOgGNchXWsmlrZq6YbsqprEKWL0q/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/xFpDGT6/ceme.jpg"  width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Cementerio <br> Cemetery </em></h2>
                    <iframe src="https://drive.google.com/file/d/1fqj2TzOaCxi-ZnFhy0W0bsG6LT1SFqur/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/ftFDDK4/monu.jpg"   width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Monumento<br> Monument</em></h2>
                    <iframe src="https://drive.google.com/file/d/1OP4Y0JDE7EZuPhy-9dd8PLI8Vb2A2nrA/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px"  src="https://i.ibb.co/LZc9Sdk/an.jpg"   width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Asilo de ancianos <br> Old people’s home  </em></h2>
                    <iframe src="https://drive.google.com/file/d/1Jaj0KcZXoVVvk03kqIACPWe8XyhbAHvg/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/bFwG5KW/parq.jpg"   width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Parque <br> Park </em></h2>
                    <iframe src="https://drive.google.com/file/d/11ZO9kf4FhJLlBSqkl0XUU_i2X7kNihuT/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/0Bc6w7x/pris.jpg"   width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Cárcel<br> Prison</em></h2>
                    <iframe src="https://drive.google.com/file/d/1OEYuFqglnk9a3EgiKlb08tiecfuGQE3x/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/f2wkxGD/isometric-view-of-a-small-town-square.jpg"  width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Plaza <br> Square </em></h2>
                    <iframe src="https://drive.google.com/file/d/1ag__Okncgx7uINmvnP6wkLaw6NKKoCah/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/Rcnd3V9/esta.jpg"  width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Estadio <br> Stadium </em></h2>
                    <iframe src="https://drive.google.com/file/d/1YgFbcel7-thI_wgTNZscZplGjfv4CH_N/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"  src="https://i.ibb.co/tLtsj2j/resi.jpg"    width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Zona Residencial<br> Residential area</em></h2>
                    <iframe src="https://drive.google.com/file/d/1f-a1l9vBBZ9sAy5Cw4y6WIQVEBfp9ww8/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-md-12  " id="bor" style="background: lightgreen ">

                    <h3>Servicios en la Ciudad en Inglés Y Español–Services in the city
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/MnNM8zg/pan.jpg"   width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Panaderia <br> Bakery </em></h2>
                    <iframe src="https://drive.google.com/file/d/1vpWgXVcObhFmX7odtKfk6YhV5AoBl_Sx/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/yYXbzGB/ban1.jpg" width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Banco <br> Bank</em></h2>
                    <iframe src="https://drive.google.com/file/d/1D1W5WIGa6KOEHUB0aPRJyeA6dRHALzxM/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/FHSsPzQ/cine.jpg"     width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Cine<br>Cinema</em></h2>
                    <iframe src="https://drive.google.com/file/d/1ux1pcT_TREb1O23y7yuqujcJw8p5YVCZ/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/wB2PcMt/hotel.jpg"    width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Hotel<br> Hotel</em></h2>
                    <iframe src="https://drive.google.com/file/d/10i22aMPaJhaQwAcfurlmvpJeizjoTj2n/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/fQgtTgR/hos.jpg" width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Hospital <br>Hospital</em></h2>
                    <iframe src="https://drive.google.com/file/d/1bxVvcxCbYy87-OMjPfLkW2g4m62xJrZD/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/M86MW5r/far.jpg"   width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Farmacia<br>Pharmacy</em></h2>
                    <iframe src="https://drive.google.com/file/d/1xPzsOJ98DNgiQaOx5J0n80hQt3x8qU4w/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>



    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/qMLhRY8/res.jpg"   width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Restaurante<br> Restaurant</em></h2>
                    <iframe src="https://drive.google.com/file/d/1RCTsejmb2LSyxHk9iOp54oPs5aeZOmq1/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/hDKG7wp/ti.jpg" width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Tienda <br> Store</em></h2>
                    <iframe src="https://drive.google.com/file/d/1DdYiIrFHjLRwkC8hZz_b4zDC6TjW9tgW/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/VH0NWwN/Children-playing-in-the-circus-illustration.jpg"  width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Circo<br>Circus</em></h2>
                    <iframe src="https://drive.google.com/file/d/1EXKRev0lDHLTwt-E5M8U_cPHQJ2xFcMn/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-md-12  " id="bor" style="background: lightgreen ">

                    <h3>Otros – Others
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-1"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/Lp1tkLK/bas.jpg"    width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Basura<br> Litter </em></h2>
                    <iframe src="https://drive.google.com/file/d/1xPHqAarZbrj26QWpQIrZmQzhZ7SSqA4K/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/Tr38pRR/age.jpg" width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Agente de Polícia<br> Policeman </em></h2>
                    <iframe src="https://drive.google.com/file/d/1c2wcGTTwBsN_GLd7CAA5ichrlztjs0Jj/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"   src="https://i.ibb.co/yfK8r7g/cabin.jpg"  width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Cabina telefónica<br>Telephone kiosk</em></h2>
                    <iframe src="https://drive.google.com/file/d/1UH7W7ZV4Rd_kP0T4RTb1KdHdJnkflisV/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedores-->
    <div class="container-fluid" id="color">
        <div class="row ">
            <div class="col-md-4 pl-5"><br>
                <img class="rounded-circle d-flex justify-content-center bg-warning  "  style="border: teal double 12px" src="https://i.ibb.co/G0WJfSH/turi.jpg"    width="310" height="200"/><br>

                <div class="card ml-0" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Turista <br> Tourist </em></h2>
                    <iframe src="https://drive.google.com/file/d/1BL9qVRKBUiEnXSuSrlVvvfRb2Ecz-NQs/preview" width="318" height="60"></iframe>
                </div>
            </div>


            <div class="col-md-4 pl-5"><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px" src="https://i.ibb.co/C5QKn4X/arb.jpg"  width="310" height="200"/><br>

                <div class="card ml-3" style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Arboles<br>Trees </em></h2>
                    <iframe src="https://drive.google.com/file/d/1jf8f3alCspBsDTtvPtYzHLhllsj5fBKq/preview" width="318" height="60"></iframe>
                </div>
            </div>
            <div class="col-md-4  pl-5 "><br><br><br><br><br><br><br>
                <img class="rounded-circle mx-auto d-block bg-warning" style="border: teal double 12px"    src="https://i.ibb.co/tcMjfDF/Cartoon-Illustration-of-Discharged-Smart-Phone-or-Mobile-and-Retro-Phones-Laughing.jpg"   width="300" height="200"/><br>
                <div class="card ml-4  " style="width: 20rem; ">

                    <h2 class="container-fluid d-flex justify-content-center"  id="color"><em>Teléfonos<br>Telephones</em></h2>
                    <iframe src="https://drive.google.com/file/d/1FINNLVVZcGHqQrfnCvCoVqbciTjogehZ/preview" width="318" height="60"></iframe>
                </div>
            </div>
        </div>
    </div>
<br> <br>

    <div class="container-fluid ">
        <div class="row pt-5" >
            <div class="col-md-12" id="separadorInferior">

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
