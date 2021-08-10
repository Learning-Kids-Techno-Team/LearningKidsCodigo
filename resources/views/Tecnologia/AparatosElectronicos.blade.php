@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Aparatos Electronicos</title>
    <style>
        body {
            background:  #dcfecb;

        }
        #separadorInferior{

            width: 100%;
            height: 100px;

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
        h3{
            text-align: center;
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

                             src="https://i.ibb.co/7kFQK40/los-artilugios-electr-nicos-vector-dispositivos-de-las-multimedias-la-electr-nica-pc-tecnolog-a-icon.png"
                             width="300"  >
                    </div>
                    <div class="col-xl-5   " style=" background: #98dfb6"  >
                        <br>
                        <h1 class="text-center">Aparatos Electronicos</h1>
                        <p class="text-center " id="a" >


                            <strog>
                                Los dispositivos electrónicos están compuestos por transistores, circuitos integrados, válvulas termoiónicas y muchos otros elementos que combinados entre sí permiten la generación y detección de señales de distintas frecuencias y todas aquellas funciones que se pueden realizar mediante señales eléctricas.
                            </strog>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="row mt-5" >
        <div class="col-md-4 pb-3 " >
            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">

                <img class=" mx-auto d-block"   src="https://i.ibb.co/PmMjPt5/png-transparent-template-information-mobile-phone-cartoon-material-business-holding-a-mobile-phone-g.png"   width="250" height="220">
                <h3 class="mx-auto d-block"><em>Teléfono móvil</em></h3>
                <p style="text-align: justify">Fáciles de llevar a cualquier lado, y con la posibilidad tanto de usar datos propios como aprovechar la conexión WiFi. Además de permitir estar siempre localizable, los smartphones son uno de los dispositivos electrónicos más utilizados como plataformas de juegos gracias al gran número de apps disponibles.
                </p>
                <br><br><br><br>

            </div>
        </div>
        <div class="col-md-4 pb-3">


            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">

                <img class="mx-auto d-block"   src="https://image.freepik.com/vector-gratis/ordenador-portatil_53876-43921.jpg" width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Portátil y ordenador de mesa </em></h3>
                <p style="text-align: justify">Los dispositivos electrónicos más utilizados tanto para ocio como para tareas de trabajo. Aun cuando mucha gente trabaja fuera de casa, termina llevándose parte del trabajo a casa. O necesita utilizar programas de facturación, contabilidad, hojas de cálculo, etcétera. Y si tenemos en cuenta el caso de los autónomos o freelance, la presencia de un ordenador, ya sea un PC o un portátil, es casi indispensable.
                </p>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">
                <img class="mx-auto d-block" src="https://i.ibb.co/WfBjt8p/gratis-png-camara-de-dibujos-animados-fotografia-camara-de-dibujos-animados-removebg-preview.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Cámara inalámbrica</em></h3>
                <p style="text-align: justify">Muy empleada tanto en tareas de vigilancia y seguridad como de videoportero para saber quién está llamando. Una cámara inalámbrica es accesible tanto desde un PC, una tablet o un smartphone de manera remota.
                </p>
                <br><br><br><br><br><br>
            </div>
        </div>

    </div>
    </div>


    <div class="row " >
        <div class="col-md-4 pb-3" >
            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">

                <img class=" mx-auto d-block"  src="https://i.ibb.co/NY8Yvzx/tecnologias-inteligentes-robot-aspirador-piso-blanco-ilustracion-174496-151-removebg-preview.png"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Robot aspirador de limpieza </em></h3>
                <p style="text-align: justify">Uno de los dispositivos más usados en el hogar y mejor valorados. El robot aspirador es uno de los objetos inteligentes que más recomendados están por quienes tienen uno de ellos debido al tiempo que ahorra en las tareas de limpieza de suelos.
                    <br><br><br><br><br>
                </p>

            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">
                <img class="mx-auto d-block"  src="https://i.ibb.co/pRv5h3T/consejos-trucos-comprar-robot-cocina-0-removebg-preview.png"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Robot de cocina </em></h3>
                <p style="text-align: justify">El Internet de las cosas también llega a la cocina. Desde una tablet o el smartphone se puede tanto programar y realizar una comida como saber si falta algún ingrediente que añadir.<br><br><br>
                </p>
                <br><br><br><br><br>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem; height: 580px">
                <img class="mx-auto d-block" src="https://i.ibb.co/dQXzTPd/51-Rj-Kw-Lo1-L-AC-SY355-removebg-preview.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Enchufes en hogar inteligente</em></h3>
                <p style="text-align: justify">Quizá uno de los objetos inteligentes más llamativos dentro de la domótica para quienes aún no están puestos en los dispositivos preparados para la Internet de las cosas. Estos aparatos permiten controlar a distancia o programar el uso de los enchufes para adaptarlos a nuestras necesidades. Desde apagar una tele en 15 minutos, o un ventilador o calefactor que deseemos mantener encendido durante un tiempo más.
                </p>
            </div>
        </div>

    </div>
    </div>



 <div class="row " >
        <div class="col-md-4 pb-3 " >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block" src="https://i.ibb.co/dfw9bwB/png-clipart-ipad-flat-design-cartoon-business-tablet-pc-cartoon-character-electronics-removebg-previ.png"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Tablet </em></h3>
                <p style="text-align: justify">Similares a un teléfono móvil en su uso práctico. Permiten tener una mayor pantalla con la que poder realizar una lectura más cómoda de la información, por lo que es una excelente herramienta de apoyo para las tareas de estudio o para ver una película a mayor tamaño.
                </p>
                <br>

            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://us.123rf.com/450wm/vvadyabb/vvadyabb1705/vvadyabb170500005/78563222-manos-planas-escribiendo-en-el-teclado-blanco-con-el-rat%C3%B3n-y-el-vector-de-fondo-en-colores-pastel.jpg?ver=6"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Teclado inalambrico</em></h3>
                <p style="text-align: justify">Un teclado inalámbrico funciona exactamente de la misma manera que un mouse inalámbrico; conecta un receptor en uno de los puertos USB de su computadora. Luego, el receptor envía una señal a su teclado a batería.
                    <br><br><br>
                </p>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/wg4K2zQ/icono-conexion-inalambrica-internet-wifi-router-48369-2505-removebg-preview.png"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Router</em></h3>
                <p style="text-align: justify">Un router es un dispositivo de hardware que permite la interconexión de ordenadores en red. El router o enrutador es un dispositivo que opera en capa tres de nivel de 3. Así, permite que varias redes u ordenadores se conecten entre sí y, por ejemplo, compartan una misma conexión de Internet.
                </p>
            </div>
        </div>

    </div>
    </div>







    <div class="row " >
        <div class="col-md-4 pb-3" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://images.philips.com/is/image/PhilipsConsumer/FM64FD65B_97-IMS-es_PA?$jpglarge$&wid=960"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>USB</em></h3>
                <p style="text-align: justify">El Pen Drive es una unidad de almacenamiento de datos que puedes conectar a ordenadores u otros dispositivos electrónicos, desde móviles hasta televisores o consolas, mediante su conector USB, de ahí que se le conozca principalmente como memoria USB.
                </p>
                <br><br><br>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://image.freepik.com/vector-gratis/tv-plasma-noticias-mujer_24877-17142.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>T.V</em></h3>
                <p style="text-align: justify">Básicamente, un Smart TV es un televisor con un sistema operativo que permite hacer uso de diferentes aplicaciones y conectarse a Internet.
                    <br><br><br><br><br><br><br>
                </p>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://jet-web.s3.us-west-1.amazonaws.com/images/cache/catalog/pro_59061918_3-500x500.jpg"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Auriculares bluetooth</em></h3>
                <p style="text-align: justify">Los auriculares inalámbricos son auriculares que se conectan a un dispositivo, por ejemplo un smartphone, un altavoz estéreo, un televisor, una consola de videojuegos, un ordenador u otro dispositivo electrónico, sin utilizar cables. Los auriculares inalámbricos transmiten la señal de audio por señales de radio o de infrarrojos (IR) dependiendo del dispositivo.
                </p>
            </div>
        </div>

    </div>
    </div>






    <div class="row " >
        <div class="col-md-4 pb-3" >
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class=" mx-auto d-block"  src="https://roselin.es/pub/media/catalog/product/cache/26fad7f0116a4604dd5965b833befd85/8/5/85.050.007.1_noapp__1.jpg"    width="300" height="220">
                <h3 class="mx-auto d-block"><em>Smartwatch</em></h3>
                <p style="text-align: justify">Un smartwatch o reloj inteligente es un aparato tecnológico de pulsera que posee funcionalidades que van mas allá de las de un reloj y que hacen de él un dispositivo móvil multifunción. Los smartwatch funciones se pueden sincronizar con smartphones y/o tablets, o bien de modo independiente.
                </p>
                <br><br><br>

            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block"   src="https://www.get-digital.es/web/getdigital/gfx/products/__generated__resized/1100x1100/SoundLocator-main.jpg"   width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Localizador de llaves</em></h3>
                <p style="text-align: justify">Uno de los dispositivos tecnológicos de la era digital que solo se valoran cuando se necesitan. Aunque en su caso no es uno de los objetos inteligentes que más destaque, nos puede salvar de más de un apuro. Resulta tan simple como parece, este aparato permite localizar con nuestro smartphone donde se encuentra el localizador – generalmente, llaves o cartera – mediante tecnología Bluetooth, GPS o WiFi.



                </p>
            </div>
        </div>
        <div class="col-md-4 pb-3">

            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.blogs.es/b767f5/switch-xbox-one-ps4.jpg.optimal/1366_2000.jpeg"  width="300" height="220">
                <h3 class="mx-auto d-block" id="color"><em>Consola de videojuegos</em></h3>
                <p style="text-align: justify">consola de videojuegos o videoconsola, que es el dispositivo que ejecuta juegos electrónicos contenidos en discos compactos, cartuchos, tarjetas de memoria u otros formatos.
                    <br><br><br><br><br><br><br>
                </p>
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
