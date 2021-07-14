@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Derechos y Deberes</title>
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
            background: #60A71B;
        }

        body{

            background: #dcfecb;

        }


        .card{
            background: #FFEECC ;
            border: #C5FFA0 12px dashed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #60A71B;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #bor {
            background: #bce0ee ;
            border: #FDFD96 10px solid;

        }

        #color{
            color: darkgreen;

        }

        #let{
            color: darkred;
        }


    </style>

</head>
<body>
<!-- navbar-->
@section('content')


<!-- contenedor text-->
<div class="container-fluid" id="color"><br><br><br><h2 class="text-center"><strong><em>DERECHOS Y DEBERES DE LOS NIÑOS Y NIÑAS.</em></strong></h2><br><br><br>
    <div class="card">
        <div class="row ">
            <div class="col-xl-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/yF8rLXw/prof-removebg-preview.png" width="300" height="200"/>
            </div>
            <div class="col-xl-8">
                <h2 class="text-justify" id="color"><br><em>Todas y todos tenemos derechos, pero los niños y las niñas tienen derechos
                        especiales. Sus derechos son muchos, y han sido agrupados así: <strong><em>supervivencia, desarrollo,
                            protección y participación.</em></strong></em></h2><br>
            </div>
        </div>
    </div>
</div>


<!-- contenedor image-->
<div class="container-fluid " id="color"><h2 style="text-align: center" id="let"><em><br>¡Supervivencia!</em></h2><br>
    <div class="row">
        <div class="col-xl-6">
            <h3><strong>Derecho:</strong></h3><br>
            <ul><strong>
                <li>Al mejor nivel de salud y nutrición.</li>
                <li>A la seguridad social.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/tX616qH/dere-removebg-preview.png" width="300" height="200"/>
        </div>
        <div class="col-xl-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/jrW6W9K/comi-removebg-preview.png" width="350" height="300"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="color"><h2><em></em></h2>
    <div class="row">
        <div class="col-xl-4">
            <ul><strong>
                    <li>Al desarrollo físico, mental, espiritual, moral y social.</li>
                    <li>A jugar y descansar.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/4VJgypt/ni-o-removebg-preview-1.png" width="300" height="250"/>
        </div>
        <div class="col-xl-4">
            <img class="mx-auto d-block" src="https://i.ibb.co/sKLdpK9/cuerd-removebg-preview.png" width="350" height="250"/>
        </div>
        <div class="col-xl-4">
            <img class="mx-auto d-block" src="https://i.ibb.co/ysk0Pq5/jugar-removebg-preview.png" width="350" height="250"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="color"><h2 style="text-align: center" id="let"><em>¡Desarrollo!</em></h2>
    <div class="row ">
        <div class="col-xl-5">
            <h3><strong>Derecho:</strong></h3><br>
            <ul><strong>
                    <li>A ser queridos y comprendidos.</li>
                    <li>A que el padre y la madre se responsabilicen de nuestra crianza y desarrollo.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block " src="https://i.ibb.co/K6tBnLb/segu-removebg-preview.png" width="350" height="280"/>
        </div>
        <div class="col-xl-7">
            <img class="mx-auto d-block" src="https://i.ibb.co/br1qdjy/so-removebg-preview.png" width="350" height="350"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="color"><h2><em></em></h2>
    <div class="row">
        <div class="col-xl-12">
            <ul><strong>
                    <li>A recibir educación de buena calidad.</li>
                    <li>A vivir con la familia en un ambiente de seguridad.</li>
                    <li>A un nombre, una nacionalidad y ser protegidos por sus padres.</li>
                </strong>
            </ul>
        </div>
    </div>
</div>
<!-- contenedor image ambient-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-xl-6">
            <h3  align="center">AMBIENTE SEGURO</h3>
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/hWb1S1m/segur.jpg" width="400" height="300"/>
        </div>
        <div class="col-xl-6">
            <h3  align="center">AMBIENTE INSEGURO</h3>
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/zR3qKwL/imag.jpg" width="400" height="300"/>
        </div>
    </div>
</div>
<div class="container-fluid" id="color"><h2 style="text-align: center" id="let"><em>¡Protección!</em></h2>
    <div class="row">
        <div class="col-xl-5">
            <h3><strong>Derecho:</strong></h3><br>
            <ul><strong>
                    <li>A no ser discriminado ni maltratado.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/Kr2NzRt/tr-removebg-preview.png" width="350" height="280"/>
            <img class="mx-auto d-block" src="https://i.ibb.co/nsKpmqP/xx-removebg-preview.png" width="350" height="240"/>
        </div>
        <div class="col-xl-7">
            <img class="mx-auto d-block" src="https://i.ibb.co/310cfmv/malo-removebg-preview.png" width="350" />
            <img class="mx-auto d-block" src="https://i.ibb.co/fX04C5M/mal-removebg-preview.png" width="400" height="300"/>
        </div>
    </div>
</div>
<div class="container-fluid " id="color"><h2><em></em></h2>
    <div class="row ">
        <div class="col-xl-6">
            <ul><strong>
                    <li>A recibir atención especial en caso de que haya sido víctima de maltrato.</li>
                    <li>A ser protegido de la explotación económica o de un trabajo nocivo.</li>
                    <li>A un interés especial de los adultos para el cumplimiento de los derechos
                        de los niños y niñas.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/NF4Y8Jg/sal-removebg-preview.png" width="400" height="300"/>
        </div>
        <div class="col-xl-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/pfLtMb8/coc-removebg-preview.png" width="400" height="300"/>
        </div>
    </div>
</div>
<div class="container-fluid " id="color"><h2 style="text-align: center" id="let"><em>¡Participación!</em></h2>
    <div class="row">
        <div class="col-xl-5">
            <h3><strong>Derecho:</strong></h3><br>
            <ul><strong>
                    <li>A expresar su opinión y que se le tome en cuenta.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/x5zwG8q/dgh-removebg-preview.png" width="350" height="250"/>
        </div>
        <div class="col-xl-7">
            <img id="bor" class="mx-auto d-block" src="https://i.ibb.co/bBPSqKf/part.jpg" width="300" height="300"/>
        </div>
    </div>
</div>
<div class="container-fluid" id="color"><h2><em></em></h2>
    <div class="row">
        <div class="col-xl-6">
            <ul><strong>
                    <li>A tener acceso a la información.</li>
                    <li>A tener libertad de asociación.</li>
                    <li>A la libertad de pensamiento y religión.</li>
                    <li>A recibir atención especial cuando padezco de un impedimento físico.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/3RBbZDh/soll-removebg-preview.png" width="400" height="300"/>
        </div>
        <div class="col-xl-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/wM2bWkG/sill-removebg-preview.png" width="400" height="300"/>
            <img class="mx-auto d-block" src="https://i.ibb.co/s3D1gdM/igles-removebg-preview.png" width="400" height="300"/>
        </div>
    </div>
</div>
<div class="container-fluid" id="color"><h2><em>¡DEBERES DE LOS NIÑOS Y NIÑAS!</em></h2>
    <div class="row">
        <div class="col-xl-6">
            <h3><strong>Deber:</strong></h3><br>
            <ul><strong>
                    <li>Respetar a sus padres, maestros (as) y a todas las personas.</li>
                    <li>Respetarse a ellos mismos.</li>
                    <li>Aprender a respetar las opiniones de las demás personas aunque no las compartan.</li>
                    <li>Respetar la patria y así convertirse en los ciudadanos que el país necesita.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/wdQTzxh/kj-removebg-preview.png" width="380" height="200"/>
        </div>
        <div class="col-xl-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/nnbBK1B/maest-removebg-preview.png" width="350" height="300"/>
            <img class="mx-auto d-block" src="https://i.ibb.co/7tb0HZH/ni-removebg-preview-1.png"/>
        </div>
    </div>
</div>
<div class="container-fluid" id="color"><h2><em></em></h2>
    <div class="row ">
        <div class="col-xl-6">
            <h3><strong>Deber:</strong></h3><br>
            <ul><strong>
                    <li>Preparo los libros que necesito para las tareas.</li>
                    <li>Hago los deberes de la escuela fijandome bien en lo que me piden.</li>
                    <li>Recojo todo lo que he utilizado y preparo la mochila para el siguiente día.</li>
                    <li>Ayudo en las actividades de casa.</li>
                </strong>
            </ul>
            <img class="mx-auto d-block" src="https://i.ibb.co/hsqTBLd/tare-removebg-preview.png" width="400" height="300"/>
        </div>
        <div class="col-xl-6">
            <img class="mx-auto d-block" src="https://i.ibb.co/K2Tg4bV/hom-removebg-preview.png" width="350" height="250"/>
            <img class="mx-auto d-block" src="https://i.ibb.co/1QdGqwd/ho-removebg-preview.png" width="400" height="300"/>
        </div>
    </div>
</div>


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
