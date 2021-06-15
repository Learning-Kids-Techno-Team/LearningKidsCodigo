@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Refranes</title>
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
            background:#4aa0e6;
        }

        body{

            background: #D8E2F3;

        }


        .card{
            background:aliceblue;
            border:steelblue 5px  solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        #color{
            color: darkcyan;
            text-align: center;



        }
        p{
            text-align: justify;
        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background:#4aa0e6;
        }

        #h{
            background:lightblue;

            border-bottom-right-radius: 50%;
        }
        #player{
            width: 100%;

        }


    </style>
</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid" id="h">
    <div class="row">
        <div class="col-md-8 ">
            <h2 id="color">Refranes</h2>
            <p>
                Los refranes son dichos populares y anónimos pero la finalidad de ellos es transmitir una enseñanza o mensaje instructivo, moral o de sabio estimulando en el individuo la reflexión moral e intelectual. Asimismo, los refranes se caracterizan por estar estructurados en versos y rima en asonancia o consonancia.
            </p>
            <h2>¿Cuál es la función y propósito de los refranes?</h2>
            <p>
                La función del refrán es captar palabras del lenguaje popular y transformarlas para explicar diferentes temas, mientras que su propósito es expresar y dejar clara una idea con palabras representativas, haciendo relación con hechos o personajes de la vida cotidiana.

              <br> Tambien sirve Para expresar y transmitir ideas es necesario recopilar palabras y pensamientos que reflejen las costumbres y formas de vida de una sociedad, permitiendo que sean difundidas de generación en generación con funciones que añadan beneficios al ser humano.

            </p>


        </div>
        <div class="col-md-4 " >

            <img src="https://i.ibb.co/92ptbM5/2c2d6365a017568bc041de51a2aecb0f-removebg-preview.png" width="200" class="mx-auto d-block">

        </div>
    </div>
</div>

<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://cdn5.dibujos.net/dibujos/pintados/201631/hora-de-levantarse-la-casa-la-habitacion-10758156.jpg" width="280" height="200" class="card-img-top"  alt="...">
                <div class="card-body">
                    <h5 class="card-title">A quien madruga, Dios le ayuda.</h5>
                    <p class="card-text">Levantarse temprano y aprovechar el día te ayudará a realizar muchas tareas.</p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran1.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/nino-lupa-buscando-algo_7710-97.jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><br> El que busca encuentra.</h5>
                    <p class="card-text"> Significa que hay que esforzarse por conseguir lo que uno quiere. <br>
                        <br></p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran2.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/originals/4c/0a/8e/4c0a8e4a542c70990621b2c10e1e46a5.jpg"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Más vale pájaro en mano que ciento volando.</h5>
                    <p class="card-text">Aprecia lo que tienes en lugar de anhelar otros bienes que tienen los demás.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran3.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/pareja-ninos-hablando-ellos_7710-121.jpg"   width="280" height="200"  alt="...">
                <div class="card-body">
                    <h5 class="card-title"> A buen entendedor pocas palabras bastan.</h5>
                    <p class="card-text"><br> A buen entendedor pocas palabras bastan </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran4.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/nino-tiene-monedas_160901-1500.jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">No es oro todo lo que reluce</h5>
                    <p class="card-text"> No te fíes de las apariencias, lo que hay detrás puede ser bien distinto.  </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran5.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://img.freepik.com/vector-gratis/feliz-nino-lindo-nino-hacer-proceso-vestir_97632-1134.jpg?size=626&ext=jpg"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vísteme despacio que tengo prisa</h5>
                    <p class="card-text">Las prisas pueden entretenerte más que si haces las cosas con cuidado y despacio.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran6.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/nino-pensando-mientras-escribe-algo-papel_7710-167.jpg"   width="280" height="200" class="card-img-top"  alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Rectificar es de sabios.</h5>
                    <p class="card-text">Todo el mundo puede equivocarse, pero solo el que reconoce su error, es sabio.</p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran7.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/originals/3c/92/2d/3c922d45aea03fd4a9eb2e534e0c9acd.jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> A falta de pan, buenas son tortas.</h5>
                    <p class="card-text"><br> Confórmate con lo que tienes. </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran8.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.pekelandia.com/wp-content/uploads/2011/03/mas-vale-mana-que-fuerza.jpg"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Más vale maña que fuerza</h5>
                    <p class="card-text"><br>Conviene pensar y razonar antes que realizar algo.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran9.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/nino-tapandose-oidos-ruido_7710-138.jpg"  class="card-img-top" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A palabras necias oídos sordos.</h5>
                    <p class="card-text">Esto quiere decir que no atender cuando otro niño le critique o le diga determinadas palabras negativas.</p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran10.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/474x/2f/3b/c5/2f3bc5166d54d4610bff98b05d07dacc.jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">En boca cerrada no entran moscas.</h5>
                    <p class="card-text"><br><br> En ocasiones, es preferible no decir nada. </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran11.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://previews.123rf.com/images/yupiramos/yupiramos1709/yupiramos170927441/87020359-reloj-de-alarma-kawaii-hora-de-alerta-hora-de-dibujos-animados-vector-ilustraci%C3%B3n-de-dibujos-animados.jpg"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Más vale tarde que nunca.</h5>
                    <p class="card-text"><br>No dejes algo simplemente porque no lo has hecho a tiempo, más vale intentarlo que no haberlo hecho nunca.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran13.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://previews.123rf.com/images/lenm/lenm1503/lenm150300111/37686359-ilustraci%C3%B3n-de-un-ni%C3%B1o-que-pone-dinero-sobre-la-mesa.jpg"  class="card-img-top"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cuando más se tiene, más se quiere</h5>
                    <p class="card-text">quiere decir cuando los niños no suelen valorar lo que poseen y siempre desean tener más. </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran14.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/escena-nina-triste-llorando-habitacion_1308-43362.jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> No hay mal que por bien no venga</h5>
                    <p class="card-text"> <br>Incluso de las malas experiencias, puede extraerse algo bueno. </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran15.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.pngkit.com/png/detail/160-1608359_dibujo-de-molino-de-agua.png"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Agua pasada no mueve molino</h5>
                    <p class="card-text"><br>Lo que está hecho, hecho está y no se puede cambiar.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran16.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/vector-gratis/dibujos-animados-nina-nino-sonriendo_24911-13695.jpg"  class="card-img-top" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Al mal tiempo, buena cara</h5>
                    <p class="card-text"><br>Hay que ser positivos en la vida e incluso, en los malos momentos, intentar sonreír. </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran17.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <img src="https://img.freepik.com/vector-gratis/personajes-nino-nina-ojos-vendados-jugar-juegos-infantiles_124715-4.jpg?size=626&ext=jpg" width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> No hay más ciego que el que no quiere ver</h5>
                    <p class="card-text"> En ocasiones, tienes la verdad delante de tus ojos y, aun así, no quieres reconocerla.  </p>

                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran18.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://us.123rf.com/450wm/lenm/lenm1002/lenm100200010/6437488-muchacho-meti%C3%A9ndose-boca-.jpg?ver=6"  width="280" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">El que calla, otorga</h5>
                    <p class="card-text"><br>Si te acusan de algo y no te defiendes, estás afirmando tu culpa.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/refranes/refran19.mp3" controls >

                </audio>
            </div>
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
