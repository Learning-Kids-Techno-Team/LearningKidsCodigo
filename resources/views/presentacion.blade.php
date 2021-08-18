@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Presentacion</title>
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
            background: url("https://i.ibb.co/xD7Xfy5/fon1.jpg");

            background-repeat: no-repeat;
            background-size: cover;


        }

        h1{
            text-align: center;
            font-style:italic;
           color: #3f1048;
        }


        h2{
           text-align: center;
            font-style:italic;
            color: #3f1048;
        }


        p{
            text-align: justify;
            color: #3f1048;

        }


        #color{
            color: black;
        }

        .navbar{
            background: #D4F0F0;
        }

        :root {

            --heading-height: 100em;
        }


        header::before {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: 13em;
            width: 100%;
            height: calc(var(--heading-height) + 10em);
            z-index: -1;
            transform: skewY(-4.5deg);
            background:
                linear-gradient(rgb(0, 255, 127), rgba(0, 250, 154,0.7)),
                no-repeat center, linear-gradient(#4e4376, #2b5876) ;
            background-size: 250px auto;
            border-bottom: 10px solid #AFDDD5;
        }


        .card {
            background: #CFEAE4;

            height: 450px;
            width: 450px;
            margin: 0 auto;
            box-shadow: 0px 15px 50px 10px rgba(100, 45, 200, 100);
            margin-top: 5%;


        }

        .left {

            height: 300px;
            width: 300px;
            display: flex;
            align-items: center;
            background-color: #AFDDD5;
            border-radius: 0% 50% 50% 0%;

            position: absolute;

            z-index: 5;
        }

        .left img {
            margin-left: -68px;
            margin-top: 50px;
        }




    </style>


</head>
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-12 pb-5">
                <h1><br><br>Desarrolladores:</h1>
            </div>
        </div>
    </div>


    <!-- contenedor-->

    <div class="container-fluid p-4">
        <div class="row ml-2 ">
            <div class="col-xl-6">
                <h1 class="text-center"><br>Daniela Zelaya</h1><br>
                <div class="card">
                    <div class="left">
                        <img src="https://i.ibb.co/MZSw8g4/DaniM.jpg"

                             width="400" height="400">

                    </div>
                </div>
            </div>

            <div class="col-xl-6 ">
                <h1 class="text-center"><br>Héctor López</h1><br>
                <div class="card">
                    <div class="left">
                        <img src="https://i.ibb.co/CvmzTXw/HL.jpg"
                             width="400" height="400">
                    </div>
                </div>

            </div>

        </div>
    </div>

<!-- contenedor-->

<div class="container-fluid p-5">
    <div class="row ml-2 ">
        <div class="col-xl-6">
            <h1 class="text-center"><br>Luz Bonilla</h1><br>
            <div class="card">
                <div class="left">

                    <img src="https://i.ibb.co/m9jdhBS/Alee.jpg"
                        width="400" height="400">

                </div>
            </div>
        </div>

        <div class="col-xl-6 ">
            <h1 class="text-center"><br>Sindy Galindo</h1><br>
            <div class="card">
                <div class="left">
                    <img src="https://i.ibb.co/Y2pd9Fc/pameG.jpg"
                        width="400" height="400">
                </div>
            </div>

        </div>

    </div>
</div>



<!-- contenedor-->



<!-- contenedor-->
<div class="container-fluid" id="color" >
    <div class="row" >
        <div class="col-md-12">
            <h2><em><br><br><br><br><br><br>¡Acerca de la página!</em></h2><br>
            <p ><em><strong>Es una forma divertida y gratuita para que los niños aprendan, refuercen y/o desarrollen hábilidades
                        sobre seis materias básicas (español, matemática, ciencias naturales y ciencias sociales). Todo el contenido
                        acerca de educación básica preescolar recopilado en una sola plataforma con el objetivo de lograr una mayor facilitación
                        de enseñanza y aprendizaje para los niños. Este espacio es una herramienta útil para reforzar el conocimiento
                        no solo de nuestros pequeños sino tambien permite una mayor didáctica si eres educador o maestro; por ello que la
                        información de esta página web está abierta para todo tipo de usuario.
                    </strong></em></p><br><br><br>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <nav class="float-left"><br><br>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <i class="material-icons"></i>
            <p>¡Nunca te des por vencido, las grandes cosas llevan tiempo!</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection

