@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Unidades Corporales</title>
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
        #banderin{

            margin-bottom: auto;


            height: 140px;

        }


        .card{
            background: #d5f5fa;
            border:#3B5686 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }


        #pa{
            text-align: justify;


        }

        #color{
            color: white;
            height: 80px;



        }
        #separadorInferior2 .content{

            width: 100%;
            height: 200px;



            background: #FF7E5A;
        }
        p{
            text-align: center;

        }
        .card-title{
            color: indianred;
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
        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
        }
        #borde{
            border: blue 8px dotted;
        }




    </style>

</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->

<div class="container-fluid mt-5"  >
    <div class="row">
        <div class="col-xl-12 p-2"  >
            <div class="row ml-5 mr-5" id="borde">
                <div class="col-xl-4 p-2 bg-info " >
                    <br>
                    <img class="mx-auto d-block" src="https://i.ibb.co/VvRTRg6/Captura-de-pantalla-343-removebg-preview-1.png"
                         height="200"
                    >
                </div>
                <div class="col-xl-8 p-2" style=" background: #d5f5fa;"  >
                    <br>
                    <h3 class="text-center" style="text-align: center">Longitud</h3>
                    <p class="text-justify" >
                        <br>
                        <strong>
                            En la antigüedad no tenían unidades de medida como tenemos hoy día, pero surge
                            la necesidad de comenzar a medir ciertas distancias y cantidades.<br>
                            Surge la necesidad de comenzar a medir las distancias de las presas que iban a cazar.<br>
                            Cuanto necesitaban esperar para poder recoger lo sembrado.<br>

                            Más tarde surgen las actividades comerciales y con ello la necesidad de cuantificar los productos
                            que iban a intercambiar. <br>De esta forma comenzaron a utilizar como primeras unidades de medida su propio cuerpo.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>




<br>
            <h1 class="text-center">Mido con las partes del cuerpo</h1>


<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img   src="https://i.ibb.co/RyGGXQQ/pn1.jpg"   class=" mx-auto d-block" width="305"
                       >
                <div class="card-body">
                    <h5 class="text-center">Jeme</h5>
                    <p><strong><br>Medida de longitud equivalente a la distancia que media entre
                            la extremidad del dedo pulgar y la del dedo índice, separando todo lo posible uno del otro.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/6mDHNDf/pulgada.jpg"  width="305"
                    >
                <div class="card-body">
                    <br>
                    <h5 class="text-center">Pulgada</h5>
<br>
                    <p><strong> Una pulgada es una medida de longitud.
                            Pulgada equivale a 2.54 cm.
                            Unidad de longitud que en un principio correspondía a la medida promedio de la primera falange del pulgar de un hombre adulto. .</strong></p>
                </div>
            </div>
        </div>


    </div>
</div>
<br><br>

<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/8s6qGYz/64.png"  class=" mx-auto d-block" width="300"
                      >
                <div class="card-body">
                    <h5 class="text-center">Cuarta</h5>
                    <p><strong>Medida de longitud que equivale a unos 21 cm, que es aproximadamente
                            la distancia que hay desde el extremo del pulgar de una mano abierta y
                            extendida hasta la yema del dedo.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6 p-2 ">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/fqGpHkG/mano.jpg"   width="300"
                     >
                <div class="card-body">
                    <h5 class="text-center">Mano</h5>
<br>
                    <p><strong> Medida llamada palmus, que es el ancho de la palma de la mano, sin contar el pulgar,
                            que equivale a cuatro digítos, es decir, 7,3925 centímetros.</strong></p>
                    <br>
                </div>
            </div>
        </div>


    </div>
</div>
<br><br>
<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/k8pfpcg/86.png"   class=" mx-auto d-block" width="300" height="200"  >
                <div class="card-body">
                    <br>
                    <h5 class="text-center">Brazada</h5>
                    <br>
                    <p><strong>Se llama braza porque equivale a la longitud de un par de brazos extendidos, aproximadamente dos metros, o 6 pies.</strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6 p-2 ">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/WgZ9H7Y/v4.jpg"   width="303">
                <div class="card-body">
                    <h5 class="text-center">Paso</h5>

                    <p><strong>El paso es una medida de intervalo.
                            El paso se cree que era de seis pies o dos varas aunque no se puede asegurar.
                          </strong></p>
                </div>
            </div>
        </div>


    </div>
</div>

<br><br>
<div class="container-fluid  " >
    <div class="row " >
        <div class="col-xl-6 p-2">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/m52wBF2/cd.png" class=" mx-auto d-block" width="300"  >
                <div class="card-body">
                    <h5 class="text-center">Pie</h5>
                    <p><strong><br>El pie es una unidad de longitud,<br> basada en el pie humano,<br> ya utilizada por las civilizaciones antiguas.
                        <br> <br></strong></p>
                </div>
            </div>
        </div>


        <div class="col-xl-6 p-2 ">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img src="https://i.ibb.co/K7hkw9S/co.jpg"  width="303" height="208" >
                <div class="card-body">
                    <h5 class="text-center">Codo</h5>

                    <p><strong>El codo fue una unidad de longitud empleada en muchas culturas por su origen antropométrico.
                            En casi todas ellas era la distancia que mediaba entre el codo y el final de la mano abierta o a puño cerrado.
                        </strong></p>
                </div>
            </div>
        </div>


    </div>
</div>

    </div>
<div class="container-fluid " id="banderin" >
    <div class="row pt-5" >
        <div class="col-md-12">
            <img  src="https://image.flaticon.com/icons/png/512/30/30386.png"  height="150">

        </div>


    </div>
</div>
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
