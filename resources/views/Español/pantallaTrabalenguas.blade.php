@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Trabalenguas</title>



    <!-- Seguimiento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWFFJETEMQ');
    </script>





    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
            background: #B8DA97;

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
            <h2 id="color">Trabalenguas</h2>
            <p>
                El trabalenguas es un juego oral a base de palabras muy parecidas, colocadas de una manera difícil
                de pronunciar. Los trabalenguas cortos siempre tienen el mismo objetivo: ayudar a quien los dice,
                a tener una mejor desenvoltura en el lenguaje y en su dicción.
            </p>
            <p>
                1.Desarrolla la imaginación: la pronunciación o la propia elaboración de los trabalenguas hace
                que la imaginación de los niños se desarrolle para realizar juegos cada vez más difíciles así
                como su entusiasmo por el lenguaje y por encontrar nuevas palabras que completen su propio trabalenguas.<br>
                2.Sirve de terapia: resultan también terapéuticos ya que ayuda a los niños a realizar una correcta
                pronunciación cuando tienen problemas para pronunciar determinadas letras.
                <br>3.Ayuda a la memoria: estimulan la memoria ya que han de ser memorizados para poderlos decir rápidamente
                y sin confundirse. Adquieren también por lo tanto una habilidad especial para hablar más rápido en oraciones
                con cierta dificultad. Le ayuda a hablar con precisión y a pensar lo que tienen que decir mientras lo dicen
                rápido y correctamente.<br>
                4.Sirve de diversión: y lo mejor de todo. ¡Son fuente de risas y buenos momentos en familia!

            </p>
            <h3 align="center">¡Ahora a divertirse aprendiendo!</h3>

        </div>
        <div class="col-md-4 " >

            <img src="https://i.ibb.co/MCMvBGc/feliz-nino-lindo-nino-signo-interrogacion-97632-2484-removebg-preview.png" width="300">

        </div>
    </div>
</div>



<!-- contenedor de las tarjetas -->
<div class="container-fluid pt-5 " id="colorTarjetas">
    <div class="row" >
        <!-- tarjeta 1 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;" >
                <div class="card-body">
                    <p class="card-text">El Lunes le dijo al Martes,

                        que fuera a casa del Miércoles

                        para que le pregunte al Jueves

                        si era verdad que Viernes

                        le dijo al Sábado

                        que el Domingo era fiesta.</p>

                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua1.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->

        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 255px" >
                <div class="card-body">
                    <p class="card-text">La bruja piruja prepara un brebaje con cera de abejas,
                        dos dientes de ajo,
                        cuatro lentejas
                        y pelos de pura oveja.
                    </p>
                    <br>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua2.mp3" controls >
                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text"> Un limón y medio limón,
                        dos limones y medio limón,
                        tres limones y medio limón,
                        cuatro limones y medio limón,
                        cinco limones y medio limón.</p>
                </div>
                  <br>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua3.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<!-- contenedor 2 -->
<div class="container-fluid " id="colorTarjetas">
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> Erre con erre, guitarra;
                        erre con erre, carril:
                        rápido ruedan los carros,
                        rápido el ferrocarril.</p>
                    <br>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua4.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block " style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> El perro de San Roque no tiene rabo
                        porque Ramón Rodríguez se lo ha robado.”</p>
                    <br>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua5.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 219px">
                <div class="card-body">

                    <p class="card-text"> Se sienta el que tiene sesenta, se sienta el que se encuentra cansado. Si sientes que tienes sesenta, el asiento te has ganado. </p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua6.mp3" controls >

                </audio>
            </div>

        </div>

    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">
                         <br>
                    <p class="card-text"> A Cuesta le cuesta subir la cuesta,
                        y en medio de la cuesta,
                        ¡Cuesta va y se acuesta!</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua7.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> Pepe pela patatas
                        para una tortilla
                        y para la ensalada.
                        Pepa pela que pela,
                        pela que pela.
                        Y se empapa.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua8.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> Los cojines de la reina,
                        los cajones del sultán.
                        ¡Qué cojines!
                        ¡Qué cajones!
                        ¿En qué cajonera van?</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua9.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid " >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> Cuando cuentes cuentos
                        cuenta cuantos cuentos cuentas,
                        porque si no cuentas
                        cuantos cuentos cuentas
                        nunca sabrás cuántos cuentos sabes contar.</p>
                </div>

                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua10.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 225px">
                <div class="card-body">

                    <p class="card-text"> Mariana Magaña
                        desenmarañará mañana
                        la maraña que enmarañara
                        Mariana Mañara</p>
                    <br>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua11.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 225px">
                <div class="card-body">

                    <p class="card-text"> El perro en el barro, rabiando rabea: su rabo se embarra
                        cuando el barro barre, y el barro a arrobas le arrebosa el rabo.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua12.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> El hipopótamo Hipo
                        está con hipo.
                        ¿Quién le quita el hipo
                        al hipopótamo Hipo?</p>
                    <br>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua13.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 215px">
                <div class="card-body">

                    <p class="card-text"> Había una caracatrepa
                        con tres caracatrepitos.
                        Cuando la caracatrepa trepa,
                        trepan los tres caracatrepitos
                    </p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua14.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem; height: 215px">
                <div class="card-body">

                    <p class="card-text"> Pedro Pérez Pita pintor perpetuo
                        pinta paisajes por poco precio
                        para poder partir
                        pronto para Paris
                    </p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua15.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid " >
    <div class="row " >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text">
                        <br>Tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua16.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body"><br><br>
                    <p class="card-text"> El que compra pocas capas
                        pocas capas paga
                        como yo compré pocas capas
                        pocas capas pago</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua17.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text">
                        María Chuchena su choza techaba,
                        y un techador que por allá pasaba,
                        le dijo:
                        - Chuchena,
                        ¿tú techas tu choza,
                        o techas la ajena?</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua19.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid " >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"><br></br>Una, dola,

                        tela, catola,

                        quile quilete,

                        estaba la reina

                        en su gabinete,

                        vino Gil

                        y apagó el candil.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua20.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"><br><br>Juan tuvo un tubo,

                        y el tubo que tuvo se le rompió.

                        Y, para recuperar el tubo que tuvo,

                        tuvo que comprar un tubo igual.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua21.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> <br>Nadie pica piedra como Pedro Pica Piedra

                        Por que si alguien pica piedra como Pedro pica Piedra,

                        es por que Pedro Pica Piedra,

                        le enseñó a picar piedra.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua22.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text">¿Por qué a la cama se llama cama,

                        y a la cómoda cómoda,

                        siendo la cómoda menos cómoda que la cama,

                        y la cama más cómoda que la cómoda?</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua23.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"><br>Luengas lenguas hace falta para no trabalenguarse,

                        el que no tenga una luenga lengua,

                        bien podrá trabalenguarse.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua24.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"><br> Te quiero porque me quieres,

                        ¿quieres que te quiera más?

                        Te quiero más que me quieres,

                        ¿qué más quieres?¿quieres más?</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua25.mp3" controls >

                </audio>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"><br> <br>Yo no quiero que me quieras porque yo te quiero a ti.

                        Queriéndome o sin quererme, yo te quiero por que sí.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua26.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text">Tengo una muñeca despescuecipelicrespa,

                        ¿quién me la despecuecipelicrespará?

                        El despelicuecipelicrespador

                        que me la despescuecipelicrepe,

                        buen despelicuecipelicrespador será.</p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua27.mp3" controls >

                </audio>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-xl-4 p-3">
            <!-- tarjeta 1 -->
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">

                    <p class="card-text"> <br> <br>El dragón tragón tragó carbón y quedó panzón.

                        Panzón quedó el dragón por tragón.

                        ¡Qué dragón tan panzón! </p>
                </div>
                <audio  id="player" src="AudiosEspañol/trabalenguas/trabalengua28.mp3" controls >

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
