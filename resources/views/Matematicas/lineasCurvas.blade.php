@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Lineas Curvas</title>
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
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background: #d5f5fa;
        }
        h1{
            text-align: center;


        }





        .card{
            background:#d5f5fa;
            border:  #3B5686 5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }
        #separadorDePagina {
            background: #d5f5fa;
            border: #FDFD96 15px double;
        }

        p{
            text-align: center;
        }



        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;

        }

    </style>
</head>
<body style=" background: #FF7E5A;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-xl-12 p-2" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/VJxsw18/curvas-removebg-preview.png" width="350"
                 class=" mx-auto d-block"/>
        </div>
    </div>
</div>

<!-- titulo de las curvas-->
<div style="color: #D8E2F3;">
    <h1>Lineas curvas abiertas</h1>
    <p><strong>Las curvas abiertas son las que siguiendo esa sucesión de puntos con un lápiz y sin levantarlo del papel, nunca llegamos al punto desde el que comenzamos.</strong> </p>
</div>

<!-- tarjetas-->
<div class="container-fluid">

    <div class="row"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-xl-3 p-2" >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/F3hhtQw/onduladas.jpg" alt="onduladas" class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Curva ondulada</h1>
                    <h5 class="card-title" align="center">
                        <br>
                    </h5>
                </div>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-xl-3 p-2">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <br>
                <img src="https://i.ibb.co/2ZnqxNh/quebrada.jpg" alt="quebrada"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1> Curva Quebrada</h1>
                    <h5 class="card-title" align="center">
                        <br>
                    </h5>
                </div>
            </div>
        </div>
            <!-- tarjeta3-->
            <div class="col-xl-3 p-2">
                <div class="card mx-auto d-block" style="width: 18rem;">
                    <br>
                    <img src="https://i.ibb.co/bbBD7dv/espiral.jpg" alt="espiral" class="card mx-auto d-block"   height="150" width="200">
                    <div class="card-body">
                        <h1> Curva en espiral</h1>
                        <h5 class="card-title" align="center">
                            <br>
                        </h5>
                    </div>
                </div>
            </div>
                <!-- tarjeta4 -->
                <div class="col-xl-3 p-2">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/wNP365M/curva.png" alt="curva"  class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1> Curva abierta</h1>
                            <h5 class="card-title" align="center">
                                <br>
                            </h5>
                        </div>
                    </div>
                </div>

               <!-- tarjeta5 -->
        <div  class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bg-info p-2">
                    <h1 style="text-align: center">Líneas curva cerrada</h1>
                </div>
            </div>
        </div>
        <div  class="container-fluid">
             <div class="row" style="background: #FFCDA0">
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/JQvrX1c/Estrella-removebg-preview.png" alt="Estrella-removebg-preview" class="card mx-auto d-block"  height="150" width="180">
                        <div class="card-body">
                            <h1>Estrella</h1>
                            <h5 class="card-title" align="center"></h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta4 -->
                <div class="col-xl-3 p-3">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <br>
                        <img src="https://i.ibb.co/mcbkTbJ/circulo-removebg-preview.png" alt="circulo-removebg-preview"   class="card mx-auto d-block"   height="150" width="180">
                        <div class="card-body">
                            <h1>Círculo</h1>
                            <h5 class="card-title" align="center"></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-3 p-3">
                     <div class="card mx-auto d-block" style="width: 18rem;">
                         <br>
                         <img src="https://i.ibb.co/KmNZmPJ/corazon-removebg-preview.png" alt="corazon-removebg-preview"  class="card mx-auto d-block"   height="150" width="180">
                         <div class="card-body">
                             <h1>Corazón</h1>
                             <h5 class="card-title" align="center"></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 p-3">
                     <div class="card mx-auto d-block" style="width: 18rem;">
                         <br>
                         <img src="https://i.ibb.co/XbYKsXr/luna-removebg-preview.png" alt="luna-removebg-preview" class="card mx-auto d-block"   height="150" width="210">
                         <div class="card-body">
                             <h1>Media Luna</h1>
                             <h5 class="card-title" align="center"></h5>
                         </div>
                     </div>
                 </div>
              </div>
           </div>
    </div>
    <!-- separador -->
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
