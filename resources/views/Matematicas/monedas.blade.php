@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Monedas</title>
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
            background: #FFEECC;
        }


        .card{
            background: #CCEECC;
            border-bottom-left-radius: 50%;
            border: darkgreen 8px solid;


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
            background: #FF7E5A;
        }



        .navbar{
            background: #FF7E5A;

        }

        #separadorDePagina{
            background:  #FDFD96;
            border: yellow 10px dashed;
        }


        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;

        }



        .btn {

            background: #FDFD96;
            border: gold 1px solid;
        }

        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
            background: #FFEECC;

        }

        #dif {
            background: #FF7E5A;
        }

        #im {
            border: darkgreen 5px dotted;

        }


    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- imagen -->
<div class="container-fluid" id="dif">
    <div class="row" >
        <div class="col-md-12" id="fondo">
            <img src="https://i.ibb.co/cx08HrZ/ka-removebg-preview.png" class=" mx-auto d-block"
            width="400"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid">
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/pJcjtXf/unnamed-3-removebg-preview.png"
                 width="300"
                 class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Qué es la moneda?
                </em></h2>

            <p class="text-center">
                <strong><em><br>Cualquier tipo de dinero que está en circulación en una economía.
                        <br>Comúnmente, la palabra moneda hace referencia a cualquier forma de dinero utilizado por
                        todo el público y que se encuentra en circulación.
                        Actualmente, la moneda contiene generalmente dos monedas:
                        el dinero duro (las monedas propiamente dichas) y el dinero blando (el papel, los billetes). <br>
                    </em></strong> </p>
        </div>
    </div>
</div>




<!-- contenedor de las tarjetas -->
<div class="container-fluid " style="background: #FFEECC"><h2 align="center"><em><br>¡Tipos de Moneda!</em></h2>
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 25rem;">
                <br>
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/GWbjNL2/monedas-honduras-removebg-preview.png"
                     width="300">
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Monedas!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/monedas') }}" class="btn">Leer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-2">
            <h2 ><em></em></h2>
            <div class="card mx-auto d-block" style="width: 25rem;">
                <br>
                <img id="im" class="mx-auto d-block" src="https://i.ibb.co/HP6hNh0/unnamed-2.jpg"
                     width="230" >
                <div class="card-body">
                    <h5 class="card-title" align="center">¡Billetes!</h5>
                    <div class="text-center">
                    <a href=" {{ url('/billetes') }}" class="btn">Leer</a>
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
