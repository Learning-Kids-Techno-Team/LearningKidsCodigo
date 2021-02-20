@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Numeros en inglés</title>
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

            background: #d6e9f9;

        }


        .card{

            background:#b8ecf3;
            border:aquamarine 8px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: aquamarine;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {

            border:coral 10px solid;

        }

        #color{
            color: tomato;

        }
        #co{
            color: black;
        }
        #borde{
            border:#009aae 8px dotted;
        }
        h3{
            text-align: center;
            font-family: bold;
            color: #009aae;
        }
        p{
            text-align: justify;

        }





    </style>
</head>


<body>
<!-- navbar-->
@section('content')

    <!-- contenedor del concept-->
    <div class="container-fluid " >
        <div class="row" >
            <div class="col-md-12" >
                <div class="row ml-5 mr-5"  >
                    <div class="col-md-6" >
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/84FrH7C/numeros-ingles-removebg-preview.png"  width="450" height="380" >
                    </div>
                    <div class="col-xl-6  mt-5" style=" background:  #a2e6ef" id="borde">

                        <h3 class="mt-5" style="text-align: center; color: tomato">Números del 1 al 10 en inglés (numbers from 1 to 10)</h3>
                        <p class="" id="pa">
                            <strong><br><br>
                                Los números son la base para entender y realizar diferentes operaciones matemáticas. Los números juegan un papel cada vez más importante en sus vidas, ya que su nivel educativo avanza y sus conocimientos se desarrollan. Al aprender los números, se puede comprender conceptos matemáticos básicos desde temprana edad, lo que tendrá un gran impacto en la confianza que tienen en sus habilidades matemáticas. Esta confianza es la clave para  tengas mucha mayor facilidad de aprendizaje en el futuro. Igualmente, es muy útil para tus habilidades lingüísticas aprender los números en inglés a temprana edad, así crecerán sabiéndolos de forma natural.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>



    <!-- contenedor-->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mt-5">

                        <br><br>
                        <p>
                           <em> <strong>Estos son parte de los números cardinales, que son aquellos que expresan cantidades y sirven para contar en inglés. Tienen muchos usos, como hablar sobre la edad de una persona, o quizás mencionar la cantidad de personas en su familia. </em></p>
                        <h2 style="text-align: center">¡Comencemos!</h2>

                    </div>
                    <div class="col-md-6">
                        <img src="https://i.ibb.co/Ny8JbMM/ninos-dibujos-animados-123-numeros-97632-579-removebg-preview.png" width="500" />
                    </div>
                </div>
            </div>


    <div class="container-fluid  center-block pl-5" >
        <br><br>
        <div class="container-fluid d-flex justify-content-center  " >
            <div class="row  ">
                <div class="col-md-12">


                </div>
            </div>
        </div>

        <div class="row m-5 d-flex justify-content-center" >
            <div class="col-md-4">
                <div class="card" >

                    <img class="mx-auto d-block" src="https://i.ibb.co/nRwsv5g/Captura-de-pantalla-495-removebg-preview.png"   width="200" height="200">

                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block" src="https://i.ibb.co/C2PTpNw/Captura-de-pantalla-496-removebg-preview.png"   width="200" height="200">

                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block" src="https://i.ibb.co/g4RgpsV/Captura-de-pantalla-497-removebg-preview.png"  width="200" height="200">

                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid  center-block pl-5" >

        <div class="row m-5" >
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">

                    <img class="mx-auto d-block" src="https://i.ibb.co/dM6fvTV/Captura-de-pantalla-498-removebg-preview.png"   width="200" height="200">


                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/ZKyz8Sz/Captura-de-pantalla-499-removebg-preview.png" width="200" height="200">

                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block" src="https://i.ibb.co/h1dkNWr/Captura-de-pantalla-500-removebg-preview.png"  width="200" height="200">

                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid  center-block pl-5" >

        <div class="row m-5" >
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">

                    <img class="mx-auto d-block"  src="https://i.ibb.co/m6pxPSG/Captura-de-pantalla-501-removebg-preview.png"    width="200" height="200">



                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block"    src="https://i.ibb.co/XxYNFs3/Captura-de-pantalla-502-removebg-preview.png"    width="200" height="200">

                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 20rem;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/xMrBnpH/Captura-de-pantalla-503-removebg-preview.png"   width="200" height="200">

                </div>
            </div>
        </div>


        <div class="container-fluid  d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block"    src="https://i.ibb.co/TBNM53s/Captura-de-pantalla-504-removebg-preview.png"   width="200" height="200">

            </div>
        </div>
        </div>


        <div  class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-12  mb-5" style="background: #55ecff">
                    <h1 style="text-align: center">Números ordinales en inglés (Ordinal numbers)</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mt-5">

                    <p>
                        Los números ordinales se usan para hablar de posiciones, cuando un evento pasa antes que otro, por ejemplo, y también se usan para hablar de fechas de cumpleaños u otras fechas importantes.
                    </p>

                </div>
                <div class="col-md-4 ">
                    <img class="mx-auto d-block " src="https://i.ibb.co/P6ykpJg/67653424-medallistas-cabritos-que-se-colocan-en-la-competencia-podio-ganador-con-el-primer-segundo-y.png" width="300"  />
                </div>
            </div>
        </div>


        <div class="container-fluid  center-block pl-5" >
            <br><br>
            <div class="container-fluid d-flex justify-content-center  " >
                <div class="row ">
                    <div class="col-md-12">


                    </div>
                </div>
            </div>

            <div class="row m-5 d-flex justify-content-center" >
                <div class="col-md-4">
                    <div class="card" >

                        <img class="mx-auto d-block" src="https://i.ibb.co/xHGm1L7/285227de039749550860eb8c369b4935-removebg-preview.png"    width="130" height="130">
                        <h3>First – primero</h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block" src="https://i.ibb.co/d4xdwTq/numero2-removebg-preview.png"    width="130" height="130">
                        <h3>Second – segundo </h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"  src="https://i.ibb.co/DVc6Pds/numero3-removebg-preview.png"  width="130" height="130">
                        <h3>Third – tercero </h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid  center-block pl-5" >

            <div class="row m-5" >
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">

                        <img class="mx-auto d-block"   src="https://i.ibb.co/rkLdKdG/numero4-removebg-preview.png"  width="130" height="130">

                        <h3>Fourth – cuarto </h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"  src="https://i.ibb.co/4tXRWB9/numero5-removebg-preview.png"  width="130" height="130">
                        <h3>Fifth – quinto </h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"   src="https://i.ibb.co/stfH4Wz/fb3c7cda93ef5c384bf4290b71fcee9b-removebg-preview.png"  width="130" height="130">
                        <h3>Sixth – sexto </h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid  center-block pl-5" >

            <div class="row m-5" >
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">

                        <img class="mx-auto d-block"  src="https://i.ibb.co/Hh91RLf/numero7-removebg-preview.png"    width="130" height="130">
                        <h3>Seventh – séptimo</h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"    src="https://i.ibb.co/7V11c5b/numero8-removebg-preview.png"      width="130" height="130">
                        <h3>Eighth – octavo </h3>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"  src="https://i.ibb.co/89NXfQh/78d944e2b65596a06335b51dc93aea22-removebg-preview.png"    width="130" height="130">
                        <h3>Ninth – noveno</h3>
                    </div>
                </div>
            </div>


            <div class="container-fluid  d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img class="mx-auto d-block"   src="https://i.ibb.co/ns8j1bv/numero10-removebg-preview.png"   width="130" height="130">
                       <h3>Tenth – décimo</h3>
                    </div>
                </div>
            </div>


            <div  class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-12  mb-5" style="background: #55ecff">
                        <h1 style="text-align: center">Otros numeros</h1>
                    </div>
                </div>
            </div>




                <div class="row m-5 d-flex justify-content-center" >
                    <div class="col-md-4">
                        <div class="card" >

                            <img class="mx-auto d-block" src="https://i.ibb.co/h7v2gTq/Captura-de-pantalla-509-removebg-preview.png"     width="200" height="200">
                            <h3>Cien - hundred</h3>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card" style="width: 20rem;">
                            <img class="mx-auto d-block" src="https://i.ibb.co/bW7V8zH/Captura-de-pantalla-510-removebg-preview.png"    width="200" height="200">
                            <h3>Mil - one thousand </h3>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card" style="width: 20rem;">
                            <img class="mx-auto d-block" src="https://i.ibb.co/tCJjQHP/Captura-de-pantalla-512-removebg-preview.png"    width="200" height="200">
                            <h3>Un millon  - one million</h3>
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
