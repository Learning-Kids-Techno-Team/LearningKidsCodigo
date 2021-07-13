@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Números Naturales</title>
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
            background: #FF7E5A;
        }

        body{

            background: #FFC897;

        }



        .card{
            background: #DCFECB;
            border:green 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }


        #banderin{


            margin-top: auto;
           height:90px;

        }
        #color{
            color: white;
            height: 80px;
            text-align: center;


        }
        p{
            text-align: justify;

        }
        .card-title{
            color: orangered;
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;

            background: #FF7E5A;
        }
        #titulo{
          text-align: center;
            color: red;
        }


    </style>
</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 " >
            <img   src="https://i.ibb.co/BnBsrtz/arbol-removebg-preview.png" height="300">
        </div>

        <div class="col-md-8"><br>
            <h2 id="color">Números Naturales</h2>

            <p id="pa"><strong><em>
                       Los números son signos o conjuntos de signos que permiten expresar una cantidad con relación a su unidad. Los números naturales son aquellos que permiten contar
                        los elementos de un conjunto. Se trata del primer conjunto de números que fue utilizado por los seres humanos para contar objetos.
                        El 1, 2, 3, 4, 5, 6, 7, 8, 9 son números naturales.


                    </em></strong></p>

            <img src="https://i.ibb.co/Jt1t6MY/manzanaaa-removebg-preview.png" height="49">
            <img src="https://i.ibb.co/nQqwBp3/manzana2-removebg-preview.png"  height="49" >

            <img  src="https://i.ibb.co/Jt1t6MY/manzanaaa-removebg-preview.png"  height="49">
            <img  src="https://i.ibb.co/nQqwBp3/manzana2-removebg-preview.png"  height="49" >
        </div>
    </div>
</div>

<!-- contenedor de la estrella-->
<div class="container-fluid  " id="titulo" >
    <div class="row " >
        <div class="col-xl-12 p-5">
        <h1 >Aprendamos Cantando</h1>

            </div>
    </div>
</div>
<div class="container-fluid" >
    <div class="row " >
        <div class="col-xl-12">
            <div class="card mx-auto d-block" style="width: 40rem;">
                <iframe src="https://drive.google.com/file/d/1wSQtHW0mBUC3g71LIxz8bUD8yq541dJQ/preview" width="628" height="300"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Canción de los números </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-5 " id="titulo" >
    <div class="row" >
        <div class="col-md-12">
            <h1 >Aprendamos Contando</h1>

        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img  src="https://i.ibb.co/mX2NvWz/nido.jpg"  width="468" height="250">
                <div class="card-body" id="im">
                    <h5 class="card-title">Número Cero </h5>

                    <p><strong>
                     Símbolo: 0    <br>   Escritura: Cero

                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
               <img src="https://i.ibb.co/V221ZVc/nido1.jpg" width="468" height="250">
                <div class="card-body">
                    <h5 class="card-title">Número Uno</h5>

                    <p><strong>
                            Símbolo:1 <br> Escritura: Uno
                        </strong>

                    </p>

                </div>
            </div>
        </div>


    </div>
    </div>

<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img  src="https://i.ibb.co/LN7N2p3/dos-p-jaros-azules-con-la-ramificaci-n-de-rbol-22763086.jpg"   width="468" height="250">
                <div class="card-body" id="im">
                    <h5 class="card-title">Número Dos </h5>

                    <p><strong>
                            Símbolo: 2    <br>   Escritura: Dos

                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img src="https://i.ibb.co/Bgtd57k/mama-pajaro-sus-dos-bebes-nido-29190-4080.jpg"  width="468" height="250">
                <div class="card-body">
                    <h5 class="card-title">Número Tres</h5>

                    <p><strong>
                            Símbolo: 3 <br> Escritura: Tres
                        </strong>

                    </p>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img   src="https://i.ibb.co/m4p7NPc/depositphotos-11060922-stock-illustration-bird-family.jpg"    width="468" height="250">
                <div class="card-body" id="im">
                    <h5 class="card-title">Número Cuatro </h5>

                    <p><strong>
                            Símbolo: 4    <br>   Escritura: Cuatro

                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img  src="https://i.ibb.co/HV1Vf18/conjunto-dibujos-animados-coleccion-aves-azules-29190-1865.jpg"   width="468" height="250" >
                <div class="card-body">
                    <h5 class="card-title">Número Cinco</h5>

                    <p><strong>
                            Símbolo: 5 <br> Escritura: Cinco
                        </strong>

                    </p>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img  src="https://i.ibb.co/Pwm4c0N/pajaros-azules-rama-sobre-fondo-blanco-1639-14720.jpg"   width="468" height="250">
                <div class="card-body" id="im">
                    <h5 class="card-title">Número Seis</h5>

                    <p><strong>
                            Símbolo: 6    <br>   Escritura: Seis

                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img src="https://i.ibb.co/q9w6QtD/sie.jpg"  width="468" height="250">
                <div class="card-body">
                    <h5 class="card-title">Número Siete</h5>

                    <p><strong>
                            Símbolo: 7 <br> Escritura: Siete
                        </strong>

                    </p>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img src="https://i.ibb.co/z42YCm9/aves-cielo-1639-5633.jpg"  width="468" height="250">
                <div class="card-body" id="im">
                    <h5 class="card-title">Número Ocho </h5>

                    <p><strong>
                            Símbolo: 8   <br>   Escritura: Ocho

                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-5">
            <div class="card mx-auto d-block" style="width: 30rem;">
                <img   src="https://i.ibb.co/72Cqgqq/nuevv.jpg"  width="468" height="250">
                <div class="card-body">
                    <h5 class="card-title">Número Nueve</h5>

                    <p><strong>
                            Símbolo: 9 <br> Escritura: Nueve
                        </strong>

                    </p>



                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid " id="banderin" >
    <div class="row " >
        <div class="col-md-12">
            <img src="https://i.ibb.co/D7L6jV4/tren-removebg-preview.png"  height="150" >
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
