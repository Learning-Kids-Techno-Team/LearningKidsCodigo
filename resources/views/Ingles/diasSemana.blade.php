@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Dias de la semana</title>
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

        body{

            background:lightyellow;

        }

        .card{
            background: #d7f3e3;
            border: #FDFD96 6px dashed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        #pa{
            text-align: justify;


        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

        .navbar{
            background: aquamarine;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }
        li{
            text-align: justify;
        }



    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #FDFD96">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #d7f3e3 ">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/9yzGBk8/est-removebg-preview.png">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Días de la semana. (Days of the week)</h3>
                        <p class="" id="pa">
                            <br>Es muy importante para los niños aprender los días de la semana en inglés,
                            ya que es una forma importante de medir el tiempo.

                            <br>Los días de la semana son 7 en total, se pueden dividir en dos categorías: <strong>weekdays y weekend.</strong>
                            Los weekdays son los días de entre semana, usualmente los días laborales o <strong>workdays,</strong>
                            <br>y son cinco: <strong>Monday, Tuesday, Wednesday, Thursday y Friday;</strong>
                            <br>mientras que el fin de semana, o <strong>weekend,</strong> se compone de <strong>Saturday y Sunday.</strong>
                            <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 "><h2 class="mt-5">Días en inglés</h2>
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Lunes:
                    </h2>
                    <h3> Monday - (Mon.)</h3>
                    <iframe src="https://drive.google.com/file/d/1NjXxzXaTYNjVSI2ZHrMLNnyb073RHMRw/preview" width="200" height="80"></iframe>
                    <p>
                        <br>Tanto en español como en inglés, el nombre de este día significa «día de la Luna», o <strong>«Moon’s Day».</strong>
                        <br>
                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/9n1GdGG/mond-removebg-preview.png" width="350" height="150">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Martes:
                    </h2>
                    <h3>Tuesday - (Tue.)</h3>
                    <iframe src="https://drive.google.com/file/d/1njEKjZObnMh2xXK__vjAFvJJfsfsExOP/preview" width="200" height="80"></iframe>
                    <p>
                        <br>En inglés, el nombre de este día proviene del dios nórdico Týr, mientras que en
                        español se asocia a al <strong>dios romano Marte.</strong>


                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/DrCnngH/Captura-removebg-preview.png" width="330" height="120">
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Miércoles:
                    </h2>
                    <h3>Wednesday – (Wed.)</h3>
                    <iframe src="https://drive.google.com/file/d/14cm1GonhtSnD7VOzuTrwM1IFz8V-8Ixv/preview" width="200" height="80"></iframe>
                    <p>
                        <br>Toma su nombre en inglés del dios nórdico Odín.
                        En español, es el <strong>«día de Mercurio»,</strong> el dios romano.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/ccmwBg9/wednesd-removebg-preview.png" width="360" height="170" >
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Jueves:
                    </h2>
                    <h3>Thursday – (Thu.)</h3>
                    <iframe src="https://drive.google.com/file/d/1lcGV47hSs5xhuqJvRUTJ4Q1-a9BJIx76/preview" width="200" height="80"></iframe>
                    <p>
                        <br>Nombrado en inglés <strong>«día de Thor»,</strong> por el dios nórdico.
                        En español se relaciona con Júpiter.


                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/qW7wYZf/unnamed-removebg-preview-3.png" width="350" height="150">
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Viernes:
                    </h2>
                    <h3>Friday – (Fri.)</h3>
                    <iframe src="https://drive.google.com/file/d/1sT0k8tbVZcwgEk1DccSxjGMsczB8MERe/preview" width="200" height="80"></iframe>
                    <p>
                        <br>Es el <strong>«día de Venus»,</strong> la diosa romana de la belleza,
                        cuyo equivalente nórdico «Frigg», le da el nombre en inglés.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/8M9X2CM/friyd-removebg-preview.png" width="340" height="140">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Sábado:
                    </h2>
                    <h3>Saturday – (Sat.)</h3>
                    <iframe src="https://drive.google.com/file/d/1rvxHftoockJN3UGAr6MSl6TdoOY41wNR/preview" width="200" height="80"></iframe>
                    <p>
                        <br>En inglés significa <strong>«día de Saturno»,</strong> mientras que su nombre en español significa «día de reposo».
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/GTR2bp6/satur-removebg-preview.png" width="360" height="160">
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor de los meses-->
    <div class="container-fluid mt-5 ">
        <div class="card">
            <div class="row m-3">
                <div class="col-md-6 ">
                    <h2 class="mt-5">
                        Domingo:
                    </h2>
                    <h3>Sunday- (Sun.)</h3>
                    <iframe src="https://drive.google.com/file/d/1Xt9K6vzvPPJc1PqWLXwfklcC52gsZU1t/preview" width="200" height="80"></iframe>
                    <p>
                        <br>Llamado <strong>«día del Sol»</strong> en inglés, en honor al más brillante astro de nuestro Sistema Solar.
                        <br>

                </div>

                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/nrz5snJ/su-removebg-preview.png" width="350" height="140">
                </div>
            </div>
        </div>
    </div>


    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">
                    Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                    <br>de los días en inglés con esta divertida canción. ¡Vamos a cantar!
                    <br>
                </h2>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1YIGCenZnFDLYhgCUH8OiHyw2Y1NKDNEd/preview" width="650" height="400"></iframe>
            </div>

        </div>
    </div>




    <!-- separador -->
    <div id="separadorInferior">
        <div class="content ">

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
