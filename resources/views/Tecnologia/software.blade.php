@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sotfware</title>
    <style>
        body {
            background:  #dcfecb;

        }
        #separadorInferior{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background:  #C5FFA0;
        }

        .navbar{
            background:  #C5FFA0;

        }


        #c{
            background: springgreen;
        }
        #a {
            border: turquoise 50px solid;
            border-image-source: url("https://i.ibb.co/d4SwJPg/mar-removebg-preview.png");
            border-image-slice: 160;
            border-image-repeat: round;

            padding: 10px;
            text-align: justify;
        }

        .card{
            background: whitesmoke;
            border:#00a5bb 8px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }



        h2{
            background: #98dfb6;
        }


    </style>
</head>
<body>
@section('content')
    <!-- contenedor-->
    <div class="container-fluid "  id="c">
        <div class="container-fluid p-5">
            <div class="col-md-12 " >
                <div class="row ml-2 "  >

                    <div class="col-md-7  " style="background: #98dfb6">

                        <img class="mt-5 mx-auto d-block"
                             src="https://i.ibb.co/3sXtyq0/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-removebg-preview.png"
                             width="380"  >
                    </div>
                    <div class="col-xl-5 " style=" background: #98dfb6"  >
                        <br>
                        <h1 class="text-center">Software</h1>
                        <p class="text-center " id="a" >


                            <strog>
                                El software es el contenido intangible del sistema: el conjunto de programas, instrucciones y lenguajes que llevan a cabo las tareas y sirven de interfaz con el usuario.

                                </strog>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- titulo de las categorias-->
    <div>
        <br><br><br>
        <h1  style="text-align: center">A su vez, el software puede clasificarse de acuerdo a su función principal en: </h1>
        <br>
    </div>


    <div>
        <br>
        <h2  style="text-align: center">Software de sistema o básico (sistema operativo) </h2>
        <br><br><br>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 pb-5">

                <p style="text-align: justify">
                    Un Sistema Operativo (SO) es un programa o conjunto de programas de un sistema informático, que administra los recursos físicos (hardware), los protocolos de ejecución del resto del contenido (software), así como la interfaz de usuario.
                </p>

            </div>
            <div class="col-xl-6 pb-5">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/LQbTDKG/best-operative-system-eve-removebg-preview.png" width="420"/>

            </div>
        </div>
    </div>



    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://1000marcas.net/wp-content/uploads/2020/01/Unix-Logo.png"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>UNIX </em></h3>
               <p style="text-align: justify">Este sistema operativo portable, multitarea y multiusuario fue desarrollado tempranamente en 1969, y a lo largo de los años sus derechos de copyright han pasado de una empresa a otra.<br><br> En realidad se trata de una familia de SO semejantes, muchos de los cuales han hecho vida comercial y otros son de formato libre, todos a partir del núcleo Linux.
                   </p>

            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://presslatam.cl/wp-content/uploads/2020/11/Microsoft-logo.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Microsoft Windows </em></h3>
            <p style="text-align: justify"><br>Sin duda el más popular de los SO, aunque realmente se trate de un conjunto de distribuciones <bR>(un entorno operativo) construidas para brindar a Sistemas Operativos más antiguos (como el MS-DOS)<bR>de una interfaz gráfica de soporte y un conjunto de herramientas de software.
            <br><br><br>
            </p>
            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://m1.paperblog.com/i/416/4161390/tienes-razones-sobra-usar-gnulinux-L-hBG2hE.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>GNU/Linux</em></h3>
            <p style="text-align: justify"><br>Este término alude a la utilización combinada del kernel libre de la familia de Unix llamado “Linux”, junto a la distribución GNU, también libre. <br><br>El resultado es uno de los principales protagonistas del desarrollo de software libre, cuyo código fuente puede ser empleado, modificado y redistribuido a libertad.

            </p>
            </div>
        </div>

    </div>
    </div>



    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://moodle2020-21.ua.es/moodle/pluginfile.php/159888/mod_resource/content/14/1.12.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>MacOS </em></h3>
                <p style="text-align: justify">El sistema operativo de la Machintosh, también conocido como O S X o Mac OS X, cuyo entorno está basado en el Unix y es desarrollado y vendido como parte de los computadores de la marca Apple desde 2002. <br><br>Parte de esta familia de software fue liberada por Apple como un Sistema Operativo abierto y de código libre llamado Darwin, al que luego añadieron componentes como el Aqua y el Finder, para obtener la interfaz en que se basa el Mac OS X, su versión más reciente.


                </p>

            </div>
        </div>
        <div class="col-xl-4 pb-5">
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://revistadigital.inesem.es/informatica-y-tics/files/2015/03/ubuntu-INESEM-1024x768.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Ubuntu </em></h3>
                <p style="text-align: justify">Basado en GNU/Linux, este Sistema Operativo libre y de código abierto toma su nombre de la filosofía surafricana enfocada en la lealtad del hombre hacia el resto de la especie.<br><br> En ese sentido, Ubuntu está orientado hacia la facilidad y la libertad de uso, si bien Canonical, la empresa británica que posee sus derechos, subsiste en base a servicios técnicos vinculados con el programa.
<br><br><br>
                   </p>
            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="http://images.techhive.com/images/article/2014/11/fedora-logo-100528469-large.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Fedora</em></h3>
                <p style="text-align: justify"><br>Se trata esencialmente de una distribución de Linux para propósitos generales, surgida luego de la descontinuación de Red Hat Linux, con la cual está muy vinculado pero que surgió como un proyecto comunitario. <br><br>Es otro nombre indispensable a la hora de hablar de software libre y códigos abiertos, en sus tres versiones principales: Workstation, Cloud y Server.
                <br><br><br>
                </p>
            </div>
        </div>

    </div>
    </div>





    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://cdn.worldvectorlogo.com/logos/beos.svg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>BeOS </em></h3>
                <p style="text-align: justify">Desarrollado en 1990 por Be Incorporated, es un Sistema Operativo para PC orientado a la maximización del rendimiento multimedia.<br> <br>Se ha dicho que estaba basado en Unix, debido a la inclusión de la interfaz de comandos Bash, pero no es así:<br> BeOs cuenta con un micronúcleo modular original, sumamente optimizado para el manejo de audio, video y gráficos animados. Además, a diferencia de Unix, es monousuario.

                </p>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/0014/2494/brand.gif?itok=ydgAJhHd"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Haiku </em></h3>
                <p style="text-align: justify"><br>Sistema Operativo de código abierto centrado en los aspectos personales de la informática y en el multimedia, inspirado en el BeOS (Be Operating System), con el que es compatible. <br>Su gran particularidad estriba en la posibilidad de generar las propias distribuciones de cada usuario.<br> Se encuentra actualmente en desarrollo.

                    <br><br><br><br>
                </p>
            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://www.expertosdecomputadoras.com/wp-content/uploads/2012/04/como%20%20encontrar%20archivos%20en%20solaris.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Solaris</em></h3>
                <p style="text-align: justify">Otro Sistema Operativo tipo Unix, creado en 1992 por Sun Microsystems y empleado hoy en día para arquitecturas de sistema SPARC<br> (Scalable Processor Architecture) y x86, frecuentes en servidores y estaciones de trabajo. <br>Es una versión oficialmente certificada de Unix cuya versión liberada se llama OpenSolaris.

                    <br><br><br><br>
                </p>
            </div>
        </div>

    </div>
    </div>







    <!-- titulo de las categorias-->


    <div style="color: #0b3251;">
        <br>
        <h2  style="text-align: center">Software de aplicación </h2>
        <br><br><br>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">

                <p style="text-align: justify">
                    Todos aquellos programas adicionales que pueden incorporarse al computador una vez instalado el sistema operativo y que permiten llevar a cabo un sinfín de tareas posibles, desde procesadores de texto hasta navegadores de internet o herramientas de diseño o videojuegos.

                    </p>

            </div>
            <div class="col-xl-6 pb-5">

                <img class="d-block mx-auto" src="https://i.ibb.co/D8wVTSR/desktop-564f6cc6-9c6d-477e-8a61-a355574859e1-removebg-preview.png" width="300"/>

            </div>
        </div>
    </div>



    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="http://www.brandemia.org/wp-content/uploads/2013/07/logo_firefox2013.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Mozilla Firefox</em></h3>


            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://winphonemetro.com/files/2017/05/PowerPoint-Logo.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Microsoft Power Point </em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://www.muypymes.com/wp-content/uploads/2013/07/Apache-OpenOffice-Logo-1280x720.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Open Office</em></h3>

            </div>
        </div>

    </div>
    </div>



    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://teorema-rd.com/wp-content/uploads/2020/05/logo-excel-1024x576.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Microsoft Excel</em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://i.blogs.es/c554bd/portada/450_1000.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>MSN Messenger</em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://brandemia.org/sites/default/files/logo_avast_portada.jpg"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Avast</em></h3>

            </div>
        </div>

    </div>
    </div>




    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://teorema-rd.com/wp-content/uploads/2020/05/Microsoft-Project-logo.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>MS Project</em></h3>


            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Adobe_Photoshop_Express_logo.svg/1051px-Adobe_Photoshop_Express_logo.svg.png"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Adobe Photoshop</em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://movilforum.com/wp-content/uploads/2020/08/Audacity-icono.jpg"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Audacity</em></h3>

            </div>
        </div>

    </div>
    </div>



    <div class="row m-5" >
        <div class="col-xl-4 pb-5" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://1000logos.net/wp-content/uploads/2020/08/Opera-Logo.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Opera</em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://1000marcas.net/wp-content/uploads/2020/02/Google-Chrome-Logo.png"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Google Chrome </em></h3>

            </div>
        </div>
        <div class="col-xl-4 pb-5">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/4NNnXN8/microsoft-word.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Microsoft Word</em></h3>


            </div>
        </div>

    </div>
    </div>






    <br><br>
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
