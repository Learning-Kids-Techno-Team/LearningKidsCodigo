@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Tipos de cuadrilatero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #FF7800;
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
            border:  #FF7800 5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }
        #separadorDePagina {
            background: #d5f5fa;
            border: #FF7800 15px double;
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
<body style=" background: #FF7800;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-md-12" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/pdq2Dh9/cuadri-removebg-preview.png" alt="cuadri-removebg-preview"    class=" mx-auto d-block"/>
        </div>
    </div>
</div>
<!-- separador -->
<div class="container-fluid">
    <div id="separadorInferior2">
        <div class="content ">

        </div>
    </div>
</div>
<!-- titulo de las categorias-->
<div style="color: #D8E2F3;">
    <h1> Paralelogramos:</h1>
    <p class="">
        <strong><em>
                Es un cuadrilátero que tiene los dos pares de lados opuestos paralelos y los ángulos opuestos iguales.
            </em></strong> </p>
</div>

<!-- tarjetas tipos de triangulo-->
<div class="container-fluid">
    <div class="row"  style="background: #FFCDA0" >
        <!-- tarjeta1 -->
        <div class="col-md-3 p-3" >
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/vHq1X2C/cuadrado-removebg-preview.png" alt="cuadrado-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Cuadrado:</h1>
                    <h5 class="card-title" align="center"> Es una figura geométrica que pertenece a los paralelogramos porque tiene 4 lados. Los 4 lados miden lo mismo y son paralelos dos a dos.Los 4 ángulos internos de un cuadrado miden 90º.
                        <br>
                    </h5>
                </div>
                <iframe src="https://drive.google.com/file/d/1dk2zFbduJza1JbVtZ9l4nLYZ43pne4yl/preview" width="280" height="100"></iframe>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/ysH26t9/rectangulos.png" alt="rectangulos"  class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>  Rectángulo:</h1>
                    <h5 class="card-title" align="center"><br><br><br>Tiene los cuatro ángulos iguales (de 90º) y los lados iguales dos a dos, siendo diferentes los lados adyacentes.
                        <br>
                    </h5>
                </div>
                <iframe src="https://drive.google.com/file/d/1AQtaS9tjUf9OcI_HJbeYeE5gB4jcTOhA/preview"  width="280" height="100"></iframe>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/fG59kgj/rombo3-removebg-preview.png" alt="rombo3-removebg-preview"   class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Rombo: </h1>
                    <h5 class="card-title" align="center">Todos los lados son iguales pero los ángulos son diferentes dos a dos, de manera que los ángulos adyacentes son diferentes y cada ángulo es igual al ángulo no adyacente.</h5>
                </div>
                <iframe src="https://drive.google.com/file/d/17tFZqB1VZfuVtLL6cnBHGGKqbBgBLCrj/preview" width="280" height="100"></iframe>
            </div>
        </div>
        <!-- tarjeta4 -->
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/xM0PmKt/romboide2-removebg-preview.png" alt="romboide2-removebg-preview"   class="card mx-auto d-block"   height="150" width="200">
                <div class="card-body">
                    <h1>Romboide: </h1>
                    <h5 class="card-title" align="center"><br><br>Tiene sus lados y ángulos iguales dos a dos. <br><br>El romboide también es denominado paralelogramo no regular.</h5>
                </div>
                <iframe src="https://drive.google.com/file/d/1dY5pv8vA0QUFAF2aBj0eJmYuXPuQyrCy/preview" width="280" height="100"></iframe>
            </div>
        </div>

        <!-- tarjeta5 -->
        <div class="container-fluid">
            <!-- titulo de las categorias-->
            <div style="color: #FF7800; background: #D8E2F3">
                <h1>Trapecios: </h1>
                <p class="">
                    <strong><em>
                            Cuadrilátero convexo con dos de sus lados paralelos y desiguales.
                        </em></strong> </p>
            </div>
            <div class="row" style="background: #FFCDA0">
                <div class="col-md-4 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/JBRYSgP/tescaleno-removebg-preview.png" alt="tescaleno-removebg-preview"  class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h1> Trapecio rectángulo: </h1>
                            <h5 class="card-title" align="center"><br>Se caracteriza por tener dos lados paralelos y dos ángulos consecutivos rectos (de 90º).</h5>
                        </div>
                        <iframe src="https://drive.google.com/file/d/17gmAOp91uh0PhXr7mK_9JcG9j2W5IwDD/preview" width="280" height="100"></iframe>
                    </div>
                </div>
                <!-- tarjeta6 -->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/VtPK1Gv/tisocel-removebg-preview.png" alt="tisocel-removebg-preview"  class="card mx-auto d-block"   height="150" width="200">
                        <div class="card-body">
                            <h1>Trapecio isósceles: </h1>
                            <h5 class="card-title" align="center">Los ángulos son iguales dos a dos. Tiene dos lados paralelos y dos oblicuos y de igual longitud.</h5>
                        </div>
                        <iframe src="https://drive.google.com/file/d/1hFi3hgSrPfxW89ZVX8uQkUyCh65ziOUy/preview" width="280" height="100"></iframe>
                    </div>
                </div>
                <!-- tarjeta7 -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/wd7CNDc/escat-removebg-preview.png" alt="escat-removebg-preview"class="card mx-auto d-block"  height="150" width="200">
                        <div class="card-body">
                            <h1> Trapecio escaleno: </h1>
                            <h5 class="card-title" align="center">  <br><br>Los cuatro ángulos interiores <br>son desiguales.</h5>
                        </div>
                        <iframe src="https://drive.google.com/file/d/1GVFp6TY53MVWGU6tJSNEWc_cSTio5_Eb/preview" width="280" height="100"></iframe>
                    </div>
                </div>
            </div>
                <!-- titulo de las tipos-->
                <div style="color: #FF7800; background: #D8E2F3">
                    <h1>Trapezoides:</h1>
                </div>

                <div class="container-fluid">
                    <div class="row"  style="background: #FFCDA0" >
                        <!-- tarjeta1 -->
                        <div class="col-md-12 pb-3" >
                            <div class="card mx-auto d-block" style="width: 18rem;">
                                <img src="https://i.ibb.co/thQrnPr/traprezoide3-removebg-preview-1.png" alt="traprezoide3-removebg-preview-1"   class="card mx-auto d-block"   height="150" width="200">
                                <div class="card-body">
                                    <h1>Trapezoides:</h1>
                                    <h5 class="card-title" align="center"> es un cuadrilátero en el que no hay ningún lado paralelo a otro.
                                        <br>
                                    </h5>
                                </div>
                                <iframe src="https://drive.google.com/file/d/14Z7ERg0whhTm0gl1S5ZF1HGk59if7OIn/preview" width="280" height="100"></iframe>
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
