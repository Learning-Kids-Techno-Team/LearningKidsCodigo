@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Partes de la computadora</title>
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
            background:  #dcfecb;
            border: oldlace 6px dashed;
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
            background: #C5FFA0;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }

        #lt{
            color: #123c24 ;
            font-family: bold;
            font-size: 30px;
        }


        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #123c24 ;
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
            background: #C5FFA0;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }

        #bord{
            background:#DCFECB;
            border: coral 15px dashed;
        }

        #tar1{
            background: #fff6af;
            border: yellow 5px dashed;

        }

        #tar2{
            background: #CCEECC;
            border: #4caf50 5px dashed;

        }

        #tar3{
            background: #FFEECC;
            border: coral 5px dashed;

        }

    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor tree-->
    <div  class="container-fluid ">
        <div class="row " style="background: #C5FFA0" >
            <div class="col-md-12  mb-5" style="background:  #dcfecb">
                <h1 style="text-align: center">La Computadora</h1>
            </div>
        </div>
    </div>

    <!-- contenedor text-->
    <div class="container-fluid mt-5 pb-5">
        <div class="card">
            <div class="row m-5">
                <div class="col-md-4">
                    <img src="https://i.ibb.co/nDrDKVj/compu1-removebg-preview.png"  width="350" height="250"/>
                </div>
                <div class="col-md-8">
                    <h2 class="text-center" id="color"><em>Una computadora es una máquina electrónica usada para procesar la información
                            y podemos hacer un trabajo más amplio con las computadoras que apenas cálcular números e imprimir datos.
                            <br>Podemos: Dibujar cuadros, escribimos notas, informes, e incluso <strong>nos comunicamos con otros
                            usuarios de computadoras alrededor del mundo.</strong></em></h2>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor tree-->
    <div  class="container-fluid pb-5">
        <div class="col-md-12  mb-5" style="background:  #dcfecb">
                <h1 style="text-align: center">¡Partes de la Computadora!</h1>
            </div>
        </div>


    <!-- botones-->
    <div class="container-fluid pb-5">
        <div class="row m-3">
            <div class="col-md-4">
                <img src="https://i.ibb.co/Qv6r2VJ/monit-removebg-preview.png" class="mx-auto d-block" width="250"/>
                <h2><em>Monitor</em> (Boton de encendido y pantalla)</h2>
                <h4>Sirve para ver o visualizar en el todo lo que realizamos en la computadora.</h4>
            </div>

            <!-- imagen del centro-->
            <div class="col-md-4">
                <img src="https://i.ibb.co/RTBmnDF/block-image.png" class="mx-auto d-block" width="400"/>
            </div>

            <div  class="col-md-4">
                <img src="https://i.ibb.co/YQm9nbj/cpu2-removebg-preview.png"  class="mx-auto d-block" width="250"/>
                <h2><em>CPU</em> (Unidad Central de Procesos)</h2>
                <h4>Es la parte mas importante de la computadora, sin ella no podriamos hacer nada dentro del computador.</h4>
            </div>

        </div>
        <div class="container-fluid pb-5">
        <div class="row m-3">
            <div class="col-md-6">
                <img src="https://i.ibb.co/njrnRL6/mouse-1-removebg-preview.png" class="mx-auto d-block" width="250"/>
                <h2><em>Mouse</em> (Boton derecho, <br>boton izquierdo y scroll)</h2>
                <h4>Sirve para hacer movimientos mas directos y rapidos en el monitor de la maquina.</h4>
            </div>

            <div class="col-md-6">
                <img src="https://i.ibb.co/2S2cscC/ted-removebg-preview.png"  class="mx-auto d-block" width="300">
                <h2><em>Teclado</em> (Teclado en letras y <br>teclado numerico)</h2>
                <h4>Nos sirve para digitar, escribir o ingresar datos importantes al computador.</h4>
            </div>

        </div>


    </div>
    </div>




    <!-- separador -->
    <div id="separadorInferior">
        <div>
            <img src="https://i.ibb.co/x3HLkSL/ni-os-removebg-preview.png" width="450" height="250">
        </div>
        <div class="content ">
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
