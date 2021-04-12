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
            border: #409444 15px dotted;
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


        h3{
            font-family: bold;
            text-decoration-color: #18381a;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #2a9055 ;
            font-family: bold;
        }


        .navbar{
            background: #C5FFA0;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
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
                    <h3 class="text-center" id="color"><em><strong>Una computadora</strong> es una máquina electrónica usada para procesar la información
                            y podemos hacer un trabajo más amplio con las computadoras que apenas cálcular números e imprimir datos.
                            <br>Podemos: Navegar en internet, dibujar cuadros, escribimos notas, informes, e incluso <strong>nos comunicamos con otros
                            usuarios de computadoras alrededor del mundo.</strong></em></h3>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor tree-->
    <div  class="container-fluid pb-5">
        <div class="col-md-12  mb-5" style="background:  #C5FFA0">
                <h1 style="text-align: center">¡Partes de la Computadora!</h1>
            </div>
        </div>


    <!-- botones-->
    <div class="container-fluid pb-5">
        <div class="row m-3">
            <div class="col-md-4">
                <img src="https://i.ibb.co/Qv6r2VJ/monit-removebg-preview.png" class="mx-auto d-block" width="250"/>
                <h2><em>Monitor</em> (Botón de encendido y pantalla)</h2>
                <h3>Sirve para ver o visualizar en él todo lo que realizamos en la computadora.</h3>
            </div>

            <!-- imagen del centro-->
            <div class="col-md-4">
                <img src="https://i.ibb.co/RTBmnDF/block-image.png" class="mx-auto d-block" width="400"/>
            </div>

            <div  class="col-md-4">
                <img src="https://i.ibb.co/YQm9nbj/cpu2-removebg-preview.png"  class="mx-auto d-block" width="250"/>
                <h2><em>CPU</em> (Unidad Central de Procesos)</h2>
                <h3>Es la parte más importante de la computadora, sin ella no podriamos hacer nada dentro del computador.</h3>
            </div>

        </div>
        <div class="container-fluid pb-5">
        <div class="row m-3">
            <div class="col-md-6">
                <img src="https://i.ibb.co/njrnRL6/mouse-1-removebg-preview.png" class="mx-auto d-block" width="250"/>
                <h2><em>Mouse</em> (Botón derecho, <br>botón izquierdo y scroll)</h2>
                <h3>Sirve para hacer movimientos más directos y rápidos en el monitor de la máquina.</h3>
            </div>

            <div class="col-md-6">
                <img src="https://i.ibb.co/2S2cscC/ted-removebg-preview.png"  class="mx-auto d-block" width="300">
                <h2><em>Teclado</em> (Teclado en letras y <br>teclado numérico)</h2>
                <h3>Nos sirve para digitar, escribir o ingresar datos importantes al computador.</h3>
            </div>

        </div>


    </div>
    </div>

    <!-- contenedor funciones-->
    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #C5FFA0">
                <h1 style="text-align: center">¡Sigamos aprendiendo!</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>¿Por qué es importante la computadora?</h2>
                <p><br>
                    Porque muchas labores se pueden realizar de una manera más sencilla y rápida con su ayuda.
                    Los computadores se han convertido en una de las herramientas más importantes del hombre en la actualidad.
                    <br>Con un computador puedes realizar cálculos y diseños, escribimos textos, guardamos y/o enviamos información,
                    agregamos palabras o párrafos en cualquier sitio de tu tarea, o mover textos de un lado a otro.
                    <br>Accedemos a cursos de nuestro interés, <strong>navegamos en internet,</strong> entre otras cosas.
                    <br>
                </p>
                <h2>Usos y funciones:</h2>
                <h4>El Monitor</h4>
                <p>
                    A la pantalla también se le llama "monitor", y sirve para que el ordenador nos muestre letras o los datos,
                    instrucciones y dibujos (gráficos).
                    El monitor es muy importante porque gracias a él podemos ver y leer las cosas
                    que hace el ordenador.
                    Como las pantallas sirven para que el ordenador nos muestre datos, se le llama <strong>"periférico de salida".
                    </strong> Los tamaños disponibles son: 14, 15, 17, 19 y 21 pulgadas.
                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/dpbTYDv/ccc-removebg-preview.png" width="400" >
            </div>
            <div class="col-md-12 mb-5">
                <h4>El CPU</h4>
                <p><strong>Unidad Central de Procesos</strong> Se encarga de interpretar y ejecutar instrucciones
                    que se dan a través del teclado, el mouse, etc.
                    <br>El CPU es la pieza fundamental de todo dispositivo, es considerado el cerebro de un sistema.
                    Interpreta todos los datos que provienen del dispositivo, tanto de los programas como la información que
                    envía el usuario a través de aplicaciones.
                    Además, controla el buen funcionamiento de cada componente del sistema para que todas las acciones sean
                    realizadas en tiempo y forma.
                    <br>Todos los procesos que realizamos con la computadora se resume en: <strong>Entrada de datos, proceso y salida
                        de datos.</strong>
                </p>
                <h4>El Teclado</h4>
                <p>Es un dispositivo hardware de entrada que utizamos para el ingreso de información al computador
                    y se encuentra compuesto por tres partes: <strong>Teclas de Función, teclas alfanuméricas y teclas
                        numéricas.</strong>
                </p>
                <h4>El Mouse</h4>
                <p>
                    Es el dispositivo de entrada más utilizado. El mouse o ratón es arrastrado en una superficie plana
                    para maniobrar el puntero que podemos visualizar en la pantalla del monitor.
                    Tiene dos botones: derecho y un izquierdo. Algunos tienen una rueda en el centro que sirve para
                    desplazar rápidamente el puntero del mouse en el monitor y es llamado scroll.
                    <strong>La acción de presionar los botones del mouse se le conoce como "Click".</strong>
                <br>
                </p>

            </div>
            </div>
    </div>



    <!-- separador -->
    <div id="separadorInferior">
        <div class="col-md-12">
            <img class="mx-auto d-block" src="https://i.ibb.co/x3HLkSL/ni-os-removebg-preview.png" width="450" height="250">
        </div>
        <div class="content">
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
@endsection
