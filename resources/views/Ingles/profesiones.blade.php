@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Profesiones</title>
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
            border: FireBrick double 8px;
        }

        #pa{
            text-align: justify;

        }
        #bor{
            border: FireBrick double 5px;
        }
        .card{

            background:LightCoral ;
            border: FireBrick 8px solid;
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
                    <div class="col-md-4  " style="background: 	#FFE4B5" >
                        <img class="mt-4 pl-3 "     src="https://i.ibb.co/GPCrnNy/1-removebg-preview.png"   width="400"  >
                        <br><br>
                    </div>
                    <div class="col-sm-8 " style=" background: 	#FFE4B5;" >


                        <h3 class="mt-5" style="text-align: center; ">Profesiones y oficios</h3>
                        <p class="" id="pa">
                            <strong><br>El concepto de profesión se refiere al empleo o trabajo que alguien ejerce y por el que recibe una retribución económica.
                                <br><br>La profesión requiere de un conocimiento especializado, una capacitación educativa de alto nivel, control sobre el contenido del trabajo, organización propia, autorregulación, altruismo, espíritu de servicio a la comunidad y elevadas normas éticas-
                                <br><br>Un oficio es una actividad laboral que generalmente está vinculada con procesos manuales o artesanales que no requieren estudios formales.

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
                <div class="col-md-12  " id="bor" style="background: #FFE4B5 ">

                    <h3>Profesiones en Inglés Y Español
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- contenedor-->

    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/3p3Bds5/abogado2.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Abogado <br> Lawyer</em></h2>
                <iframe src="https://drive.google.com/file/d/14w5gYFVBWrFGd92pWebFDQOF3uerfFsR/preview" width="300" height="80"></iframe>

            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/QYycnzK/astronautas.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Astronauta <br> Astronaut</em></h2>
                <iframe src="https://drive.google.com/file/d/1n5t5T3b-PyczDAWKjXKvxgrgxUFqzTXv/preview" width="300" height="80"></iframe>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/GkTNJ1B/dentista2.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Dentista<br> Dentist</em></h2>
            </div>
        </div>

    </div>
    </div>



    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/RDR6w5n/piloto2.jpg"    width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Piloto <br> Pilot </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/V9YtZt8/enfermera.png"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Enfermera <br> Nurse </em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/3y3bJp4/maestras1.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Maestra<br> Teacher</em></h2>
            </div>
        </div>

    </div>
    </div>


    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/2vqJfzM/doctor.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Doctor <br> Doctor  </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/HV1TC0c/artista.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Artista <br> Artist</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"    src="https://i.ibb.co/ggSZzBH/policia.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Policía<br> Police</em></h2>
            </div>
        </div>
    </div>
    </div>
    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/xC9TtkH/detective.jpg"    width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Detective <br> Detective  </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"    src="https://i.ibb.co/3RqCYXD/arquitecto1.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Arquitecto <br> Architect</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/d6GqpND/ciemtificos.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Cientifico<br>  Scientist</em></h2>
            </div>
        </div>


    </div>
    </div>
    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row p-5 ">
                <div class="col-md-12  " id="bor" style="background: #FFE4B5">

                    <h3>Oficios en Inglés Y Español
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- contenedor-->

    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"   src="https://i.ibb.co/Y01ySqT/e06f24ab5255adda2b13f9f0c8288a3e.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Carpintero <br> Carpenter</em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/gmwMXcZ/taxista.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Taxista <br>  Taxi driver</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/vLrcjVw/bombero2.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Bombero<br>  Firefighter</em></h2>
            </div>
        </div>

    </div>
    </div>



    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/D9hKC1D/mecanico.jpg"     width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Mecanico <br> Mechanic </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/vDBvQwF/granjero.jpg"    width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Granjero <br> Farmer </em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/KFqvTft/barbero.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Barbero<br>  Barber</em></h2>
            </div>
        </div>

    </div>
    </div>


    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/K6WRgv5/peluuero.jpg"  width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Peluquera <br>  Hairdresser  </em></h2>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"    src="https://i.ibb.co/cCzjn9Q/limpieza.jpg"   width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Limpiadora<br> Cleaner</em></h2>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.ibb.co/pdt3xkZ/pintor1.jpg"    width="300" height="220">
                <h2 class="mx-auto d-block" id="color"><em>Pintor<br> Painter</em></h2>
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

