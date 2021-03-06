@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Bombas</title>
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
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-bottom-left-radius:80%;
            border-top-right-radius: 80%;
            background: #B8DA97;
        }


        .card{
            background:aliceblue;
            border: #16D3C8  5px  double;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        p{
            text-align: center;
        }


        #color{
            color: blue;
            text-align: center;
        }
        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;

        }

    </style>
</head>
<body style="background: #4aa0e6;">
<!-- navbar-->
@section('content')

<!-- imagen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-xl-12" style="background: #D8E2F3" id="fondo" >
            <img  src="https://i.ibb.co/Z6GGgFS/bombas-removebg-preview.png" alt="bombas-removebg-preview"  width="450"  class=" mx-auto d-block"/>
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
<div class=" mx-auto d-block" style="background:#D8E2F3 ">
   <img src="https://i.ibb.co/2trCm9k/img11-removebg-preview.png" alt="img11-removebg-preview" height="300" class="mx-auto d-block "/>
    <h2 class="text-center" >
       ¿Qué son las Bombas?
    </h2>

    <p class="">
        <strong><em>
                <br>Las bombas folkloricas son un tipo de lenguaje o coplas que se recitan durante celebraciones culturales o recreativas entre dos personas especialmente hombre y mujer frente a sus compañeros.
                Generalmente, las bombas folkloricas son frases aprendidas y algunas veces improvisadas llenas de humor, coqueteria, picardia, insultos y algunas veces de romanticismo. La forma original de comenzar a «lanzar bombas» es parar las danzas o cancion folklorica que este sonando con el grito «Bomba».
                La mujer comienza lanzando la bomba hacia su compañero y éste debera contestarle de la mejor manera posible para no quedar avergonzado frente a todos y asi continuan hasta que hayan participado los que deseen o hasta que les acabe el ingenio.
            </em></strong> </p>
</div>
<div class="container-fluid d-flex justify-content-center" >
    <div class="row " >
        <div class="col-xl-12 ">
            <div class="card" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1IZVKVeQxQT399Yre9qVskcjCta2v5bqL/preview" width="405" height="200"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Explicación de las bombas y ejemplo de su declamación</h5>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- tarjetas tipos de cuentos -->


<div class="container-fluid">
    <div class="row"  style="background: #bce0ee" >
        <!-- tarjeta1 -->
        <div class="col-xl-3 pb-3 pt-5 " >
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img  src="https://i.ibb.co/0QCXMrg/img12.jpg" alt="img12"  class="card mx-auto d-block"   height="170" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">
                        – El: de un tronco nació una rosa
                        y del agua un caracol
                        de los ojos de esta joven
                        nacen los rayos del sol.<br>

                        <br>– Ella: del cielo cayo una rosa
                        y del pueblo una pared
                        que dicha fuera la mía
                        si yo cayera en su red.
                        <br>
                    </h5>
                </div>

            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-xl-3 pb-3 pt-5">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img src="https://i.ibb.co/SP3PMHs/img11.jpg" alt="img11" class="card mx-auto d-block"   height="170" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">– El: Desde lejos he venido
                        rodando como tusa
                        solo por venirte a ver
                        niña ojitos de guatusa.<br>

                        <br>– Ella: Si desde lejos as venido
                        a mi no me digas eso
                        mejor anda báñate
                        y te quitas esas costras del pescueso.
                    </h5>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-xl-3 pb-3 pt-5">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img  src="https://i.ibb.co/vZMtf2v/img9.jpg" alt="img9"  class="card mx-auto d-block"   height="170" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">– Ella: En la puerta de mi casa
                        voy a sembrar un romero
                        para los hombres sinvergüenzas
                        que enamoran sin dinero.<br>

                        <br>– El: Desde mi casa he venido
                        atrrastrando este capote;
                        Solo por venir a ver
                        Canillas de zopilote.</h5>
                </div>
            </div>
        </div>
        <!-- tarjeta4 -->
        <div class="col-xl-3 pb-3 pt-5">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <img  src="https://i.ibb.co/9yFDpGf/img10.jpg" alt="img10"   class="card mx-auto d-block"   height="170" width="200">
                <div class="card-body">
                    <h5 class="card-title" align="center">– El: aquí te traigo niñita
                        una ramita de albahaca,
                        no te la traje más grande
                        porque se la comió la vaca.<br>
                        – Ella: esta ramita de albahaca
                        que usted me trae, buen mozo;
                        no se la comió la vaca
                        fue este burro e’ Sinforoso.</h5>
                </div>
            </div>
        </div>

        <!-- tarjeta5 -->
        <div class="container-fluid">
            <div class="row" style="background: #bce0ee">
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img  src="https://i.ibb.co/k4nc06d/img7.jpg" alt="img7"  class="card mx-auto d-block"  height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">-El:

                                Si regreso sano y salvo

                                Dios me deje regresar;

                                prepárate niña mía

                                que nos vamos a casar.<br>
                                -Ella:

                                Si me matan en la guerra

                                y termina mi ilusión,

                                yo te pido aquí una lágrima

                                un suspiro, una oración.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta6 -->
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/wSLRsk1/img6.jpg" alt="img6"  class="card mx-auto d-block"   height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">– El: ayer me dijiste que hoy,
                                hoy me decís que mañana,
                                cuando me digas que sí
                                ya no voy a tener ganas.<br>

                                – Ella: yo no te he dicho que sí,
                                indio curtido y mugroso;
                                como bien lo ves a ti,
                                no te quiero por piojoso.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta7 -->
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/KwqKcVB/img5.jpg" alt="img5"  class="card mx-auto d-block"  height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">– El: la mujer que ama a dos hombres
                                no es tonta sino entendida
                                si una vela se le apaga
                                la otra ya está encendida.<br>

                                – Ella: un hombre con dos mujeres
                                de papo se pasa a veces
                                no cumple con sus deberes
                                y al final paga con creces.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta8 -->
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img  src="https://i.ibb.co/72TKSbB/img4.jpg" alt="img4" class="card mx-auto d-block"  height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center"> -El:

                                Como tengo una fortuna

                                que la hice honradamente;

                                busco una mujer de cuna

                                muy honrada y bien decente.<br>



                                -Ella:

                                Ya calláte Cayetano

                                y no hables que tenés pisto

                                si venís a pedir mi mano

                                mejor prefiero a Evaristo. </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- tarjeta9 -->
            <div class="row" style="background: #bce0ee">
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img  src="https://i.ibb.co/f1jph6x/img3.jpg" alt="img3" class="card mx-auto d-block"   height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center"> – El: viene la luna hermosa
                                con su lucero en campaña
                                qué triste se mira un hombre
                                cuando su mujer lo engaña.<br>

                                <br>– Ella: a los ángeles del cielo
                                voy a mandarles a pedir
                                una pluma de sus alas
                                para poderte escribir.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta10 -->
                <div class="col-xl-3 pb-3  pt-5" >
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img src="https://i.ibb.co/qMb0ksP/img2.jpg" alt="img2"  class="card mx-auto d-block"  height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center"> – El: la mujer con quien me case
                                llenará esta condición
                                será la flor que se deshace
                                perfumando el corazón.<br>

                                – Ella: el hombre que me aprisione
                                llenará esta condición
                                permitirme que lo ahogue
                                el caudal de mi pasión.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta11 -->
                <div class="col-xl-3 pb-3  pt-5" >
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img  src="https://i.ibb.co/dBQmq7L/img1.jpg" alt="img1"  class="card mx-auto d-block"   height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center">-El:
                                Las mujeres de este tiempo

                                son como el café molido,

                                apenas tienen quince años

                                ya quieren tener marido.<br>
                                -Ella:
                                Los muchachos de este tiempo

                                son como el café tostado

                                se  la tiran de jailosos

                                y andan todos acabados.</h5>
                        </div>
                    </div>
                </div>
                <!-- tarjeta12 -->
                <div class="col-xl-3 pb-3  pt-5">
                    <div class="card mx-auto d-block" style="width: 18rem;">
                        <img  src="https://i.ibb.co/jv2B4kP/img8.jpg" alt="img8"class="card mx-auto d-block"  height="170" width="200">
                        <div class="card-body">
                            <h5 class="card-title" align="center"> -El:

                                Las piñas en el piñal

                                de maduras se pasan,

                                así te pasará a vos

                                si tu mama no te casa.<br>
                                <br>-Ella:

                                Si mi mama no me ha casao

                                es porque no me ha convenido,

                                si no me caso con vos

                                no es de tu cuenta, metido.</h5>
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
