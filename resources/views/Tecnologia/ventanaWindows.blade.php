@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Ventana de Windows</title>
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
            background: #a1cbef;
            border: #fff6af 15px double;
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

        #c{
            background: coral;
        }
        #a {
            border: turquoise 50px solid;
            border-image-source: url("https://i.ibb.co/d4SwJPg/mar-removebg-preview.png");
            border-image-slice: 160;
            border-image-repeat: round;

            padding: 10px;
            text-align: justify;
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
            color: #2a9055;
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

        #bord{
            background: #fff6af;
            border: coral 10px dashed;
        }


    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid "  id="c">
        <div class="container-fluid p-5">
            <div class="col-md-12 " >
                <div class="row ml-2 "  >

                    <div class="col-md-7  " style="background: #fff6af ">

                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/jMmVMF5/com-removebg-preview.png"
                             width="500">
                    </div>
                    <div class="col-xl-5" style=" background:#fff6af"  >
                        <br>
                        <h1 class="text-center">Ventana de Windows</h1>
                        <p class="text-center " id="a" >


                            <strog>
                                Cuando empiezas con tu COMPUTADORA, la primera cosa que ves en tu pantalla es el escritorio de WINDOWS.
                                En Windows la comunicación con el ordenador se realiza a través de un elemento que se
                                conoce como <strong>ventana.</strong> Una <strong>ventana</strong> es un rectángulo que aparece en la pantalla al ejecutar una aplicación o ver el contenido de un icono.
                            </strog>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contenedor funciones-->
    <div  class="container-fluid">
        <div class="row pb-5">
            <div class="col-md-12 " style="background: #fff6af">
                <h1 style="text-align: center">¡El escritorio y entorno de Windows!</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row m-3">
            <div class="col-md-12 pb-5">
                    <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/Gx5ZBdM/otr.png">
                </div>
            <div class="col-md-12">
                <h2>El escritorio de Windows</h2>
                <p style="text-align: center">El escritorio es el area que puedes usar para navegar por tu computadora.
                    <br>Existen varias funciones disponibles muy utiles que puedes usar.
                </p>
            </div>
                <div class="col-md-6">
                <h2>El entorno:</h2>
                <h4>Iconos</h4>
                <p>
                    Los iconos del escritorio se activan haciendo doble clic con el ratón o con el dedo en pantallas táctiles.
                    Pueden ser de tres tipos: <strong>Programas, carpetas</strong> que contienen archivos, o bien, <strong>archivos</strong> que, al ser pulsados,
                    abren el programa con el que fueron creados y con la información que contienen. También tenemos otro tipo de
                    iconos que se llaman <strong>Accesos directos.</strong>
                    Sin embargo, estos accesos directos finalmente apuntan también a programas, carpetas o archivos.
                    <br>
                </p>
                </div>
                <div class="col-md-6 pb-5">
                    <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/9vjDxm2/iconos-escritorio.png" width="500">
                </div>
                <p>
                    A su vez, de manera predeterminada (ya que podemos moverla a cualquier lado de la pantalla), en la parte inferior
                    tenemos una barra que contiene diversos elementos. En la parte izquierda, el botón del menú <strong>Inicio.</strong>

                    Luego, a su derecha, tenemos la caja de búsqueda que es una de las novedades de Windows 10.
                    A la derecha de la caja de búsqueda, tenemos otro elemento novedoso: el botón <strong>Vista de tareas,</strong> el cual,
                    dependiendo de nuestra dinámica de trabajo, puede llegar a ser muy útil. Enseguida tenemos iconos de acceso rápido.
                    Esta área, por supuesto,también es personalizable. De modo predeterminado contiene tres iconos: <strong>El del nuevo navegador
                        de Internet,</strong> llamado Edge, otro que sirve para abrir el Explorador de archivos y otro más que nos lleva a la tienda de
                    aplicaciones de Microsoft. En la imagen hemos añadido un icono más, el del navegador Chrome, sólo para ilustrar que podemos
                    añadir los iconos de los programas que deseemos, así tendremos un acceso inmediato a ellos.
                </p>

            <div class="col-md-2 pb-5">
                <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/4VQhtKB/boton-inici.gif">
                <h3>Boton de Inicio</h3>
            </div>
            <div class="col-md-4">
                <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/kK27BLs/program.gif">
                <h3>Barra de tareas</h3>
            </div>
            <div class="col-md-6">
                <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/F8mBY6r/Captura.png">
                <h3>Elementos Funcionamiento del sistema</h3>
            </div>

        </div>
    </div>

    <!-- contenedor expl-->
    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12 " style="background: #fff6af">
                <h1 style="text-align: center">¡Explorador de Windows!</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid  mt-5">
        <div class="row m-3">
            <div class="col-md-12 pb-5">
                <img id="bord" class="mx-auto d-block" src="https://i.ibb.co/2PHtHSS/explw.png">
            </div>
            <p>A continuación explicamos las distintas áreas que componen esta ventana:</p>
            <ol>
                <li><strong>Barra de herramientas de acceso rápido:</strong> son los botones que se encuentran en la esquina superior izquierda de las ventanas del Explorador.
                    La idea es que en esa barra se encuentren los botones de los comandos que más utilicemos. Por ello, podemos modificarla para dejar ahí los botones que elijamos.
                    De modo predeterminado presenta dos botones: Propiedades y Carpeta Nueva.</li>
                <br><li><strong>Cinta de opciones:</strong> La Cinta de opciones contiene todos los comandos que podemos llegar a utilizar sobre las carpetas, archivos,
                    unidades y otros elementos de nuestro ordenador organizados en fichas y, dentro de cada una de éstas, en secciones.</li>
                <br><li><strong>Botones de navegación:</strong>permiten ir hacia atrás (a la carpeta de la que venimos), hacia adelante
                    (que sólo se activa si hemos utilizado el botón atrás) y a la carpeta de nivel superior (arriba).
                    Es decir, ese botón nos lleva siempre a la carpeta o unidad contenedora de la carpeta en la que nos encontremos en ese momento.</li>
                <br><li><strong>Barra de direcciones:</strong>Esta barra nos indica dónde estamos situados y qué otras carpetas están en el mismo nivel jerárquico.</li>
                <br><li><strong>Caja de búsqueda:</strong>Este cuadro inicia la búsqueda de forma automática al escribir la primera letra, sin necesidad de pulsar en ningún botón.
                    Busca en la carpeta en que estamos situados y en todas sus subcarpetas, si es que las tiene. Por ejemplo, en este caso podríamos
                    buscar cualquier contenido de la carpeta Imágenes pero no encontraría información de la carpeta Música o Documentos.</li>
                <br><li><strong>Panel de navegación:</strong>En este panel sólo aparecen unidades y carpetas, no archivos. Las vemos ordenadas jerárquicamente y distinguimos qué carpeta
                    pertenece a qué otra gracias a una leve tabulación a la derecha. Es decir, tiene estructura de árbol, con sus ramificaciones.</li>
                <br><li><strong>Ventana de archivos:</strong>En esta zona aparece la lista de los archivos contenidos en la carpeta en que estamos situados,
                    es decir, la carpeta que se indica en la Barra de direcciones.</li>
                <br><li><strong>Barra de estado:</strong>Nos muestra información breve acerca de la carpeta seleccionada (como el número de elementos que contiene).
                   y si tenemos o no tenemos elementos seleccionados con un click, y cual es su tamaño.</li>
            </ol>
            </div>

    </div>


    <!-- separador -->
    <div id="separadorInferior">
        <div class="col-md-12">
            <img class="mx-auto d-block" src="https://i.ibb.co/85jHY4G/ab.png" width="400" height="250">
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

