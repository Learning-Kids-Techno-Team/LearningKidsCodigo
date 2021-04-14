@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>barra de tareas windows</title>
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
            background: #C5FFA0;
        }

        body{

            background:#E5F5FF ;

        }


        #pa{
            text-align: justify;

        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }



        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background:  #206B99
        }



        h1{
            font-family: Brush Script MT;
            size: 80px;
            color: #d6e9f9;

        }
        h3{
            font-style:italic;


        }
        h4{
            text-decoration-color: #206B99;
            text-align: center;
        }
        h2{
            text-align: center;
            color: #206B99;
            font-family: bold;
        }
        #bor{
            border: #206B99 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
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
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background:#206B99">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #CCDDCC">
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/hdGhBhk/11-removebg-preview.png"    width="500"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #91D5FF"  >
                        <h4 style="color: #3B5686">Tecnología</h4>
                        <h3 class="mt-5" style="text-align: center">Barra de tareas windows</h3>
                        <p class="" id="pa"> <em>  En informática, se denomina barra de tareas a la barra que sirve para encontrar y controlar aplicaciones de diversos sistemas operativos, entre ellos Microsoft Windows, Linux y Mac OS X. En Microsoft Windows la barra de tareas es generada por el escritorio y este a su vez por el proceso explorer.exe.
                            </em><br>

                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h2>
                    ¿En que consiste la barra de tareas de windows?
                </h2>
                <p>
                    Consiste en un área donde aparecen en forma de botones los programas en ejecución y del mismo los accesos directos a programas, otras barras y diversas notificaciones durante la sesión de trabajo por parte del usuario.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-md-5">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/sQpsF6c/todo-removebg-preview.png"  width="550" />
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #206B99">
                <h1 style="text-align: center">Partes de la barra de tareas de windows</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    1. Botón de inicio

                </h2>
                <p>
                    Identificado con el logo de windows, nos da acceso al menú de inicio, quie nos brinda acceso a todas la opciones del sistema operativo.

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/xSxXxGS/inicio-removebg-preview.png"  width="200" >
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    2. Botones de ventanas y aplicaciones abiertas

                </h2>
                <p>
                  Indican las ventanas abiertas,que aparecen agrupadas por aplicaciones


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/2Kxg86R/abiertas-2-removebg-preview.png"     width="400" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    3. Área de notificaciones

                </h2>
                <p>
                    Contiene pequeños iconos que aportan informacion contextual sobre programas en ejecución. A l pulsar sobre el icono triangular podemos ampliar la información sobre otras que se encuentran en ejecución en nuestro equipo.

                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/7rsksB6/notificaciones.png"     width="300" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    4. Mostrar el escritorio

                </h2>
                <p>Este botón unntanto escondido, nos permite mostrar en el escritorio. Pasandi el ratón(mouse) encima, nos ofrece una vista previa. Si pinchamos, todas la ventanas y programas abiertos serán minimizados a la barra de tareas.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block"  src="https://i.ibb.co/m58j5MG/mostrar-el-escritorio.jpg"      width="300" >
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


