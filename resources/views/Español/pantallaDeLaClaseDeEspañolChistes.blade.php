@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Chistes</title>
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
            text-align: justify;
            font-style: italic;
            margin-left:15%;
            margin-right: 15%;

        }


        #color{
            color: blue;
            text-align: center;
        }
        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;

        }
        #player{
            width: 100%;

        }

    </style>
</head>
<body style="background: #4aa0e6;">
<!-- navbar-->
@section('content')

<!-- iamgen -->
<div class="container-fluid">
    <div class="row" id="fondo">
        <div class="col-xl-12" style="background: #D8E2F3" id="fondo" >
            <img  src="https://i.ibb.co/BVnXLvN/grupo-ninos-graciosos-saltando-29937-5030-removebg-preview.png"   width="450" class=" mx-auto d-block"/>
        </div>
    </div>
</div>
<!-- separador  de pagina -->
<div class="container-fluid">
<div id="separadorInferior2">
    <div class="content ">
    </div>

<div class=" mx-auto d-block" style="background:#D8E2F3 ">
    <img src="https://i.ibb.co/VMTYwS7/nino-riendo-carcajadas-43633-2782-removebg-preview.png" height="150" class="mx-auto d-block "/>
    <h2 class="text-center" >
        ¿Qué son los Chistes?
    </h2>

            <p class="text-center">
                <strong><em>
                        <br>Un chiste o chascarrillo es una narración oral o escrita breve, ficticia y humorística que es graciosa y suscita a la risa.
                        A veces también puede ser satírico, irónico, crítico o burlesco.
                        Contiene un juego verbal o conceptual capaz de mover a risa y fundado en el humor. Muchas veces se presenta ilustrado por un dibujo (chiste gráfico) y constituye uno de los principales géneros jocosos.
                        Se debe distinguir de la broma, que consiste en crear una situación cómica a partir de una persona, una situación o un evento real.
                    </em></strong> </p><br>
        </div>
    </div>
</div>

<!-- tarjetas tipos de cuentos -->
<div class="container-fluid">
<div class="row"  style="background: #bce0ee" >
    <!-- tarjeta1 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/0n1bJXt/doc3.jpg" alt="doc3" class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Era una señora que va al medico y le dice:
                    <br>
                    - Doctor me siento mal.<br>
                    Y el médico le contesta:
                    - Pues siéntese bien, mujer.
                    <br>
                </h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste1.mp3" controls >

            </audio>
        </div>
    </div>
    <!-- tarjeta2 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/h8Q1q6D/doc5.jpg" alt="doc5"  class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">- ¡Doctor, doctor, tengo un hueso afuera! <br>
                    Y el doctor le dice:<BR>
                    - Pues hágalo pasar, por favor.
                    <br>
                </h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste2.mp3" controls >

            </audio>
        </div>
    </div>
    <!-- tarjeta3 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img   src="https://i.ibb.co/Np55gL8/doc6.jpg" alt="doc6"  class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">- Doctor, doctor,<br> ¿qué puedo hacer para que me hijo no se orine en la cama?
                    - Que se duerma en el baño.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste3.mp3" controls >

            </audio>
        </div>
    </div>
    <!-- tarjeta4 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/VDNrYGk/doc4-removebg-preview.png"  class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">- Doctor<br>, ¿Cómo conservo el poco pelo que me queda?<br>
                    - Fácil, métalo en una cajita.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste4.mp3" controls >

            </audio>
        </div>
    </div>
</div>
</div>

<!-- tarjeta5 -->
    <div class="container-fluid">
<div class="row" style="background: #bce0ee">
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img  src="https://i.ibb.co/FwPC45g/maes.jpg" alt="maes" class="card mx-auto d-block"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Jaimito le pregunta a la maestra:
                    - Maestra, ¿usted me castigaría por algo que yo no hice?
                    - Claro que no, Jaimito.
                    -  Ahh, pues que bueno, porque yo no hice mi tarea.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste5.mp3" controls >

            </audio>
        </div>
    </div>
    <!-- tarjeta6 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img   src="https://i.ibb.co/NCQS6Dw/maes2.jpg" alt="maes2"  class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">- A ver Jaimito, <BR>dime una palabra que tenga 5 ies.<BR>
                    Y Jaimito le responde:<BR>
                    - Pero profesora, eso es dificilísimo.<BR>
                    - Muy bien Jaimito, muy bien.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste6.mp3" controls >
            </audio>
             </div>
    </div>
    <!-- tarjeta7 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/92DGJJk/maes3.jpg" alt="maes3" class="card mx-auto d-block"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> El profesor de lengua descubre a María distraída mirando por la ventana. Se dirige a ella y le pregunta:
                    - A ver, María, dime dos pronombres.
                    - ¿Quién? ¿Yo?</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste7.mp3" controls >

            </audio>
            </div>
    </div>

    <!-- tarjeta8 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block " style="width: 18rem;">
            <img  src="https://i.ibb.co/R753RXv/maes4.jpg" alt="maes4"  class="card mx-auto d-block"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> La profesora a Pepito:<BR>
                   <BR> - Pepito,<BR> ¿no te da vergüenza ser el último de la clase?<BR>
                    <BR>- Alguien debe sacrificarse... </h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste8.mp3" controls >
            </audio>
        </div>
    </div>
</div>
    </div>


<!-- tarjeta9 -->
    <div class="container-fluid">
<div class="row" style="background: #bce0ee">

    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img   src="https://i.ibb.co/pnVkFvg/pioj.jpg" alt="pioj"  class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> Están dos piojos en la cabeza de un señor calvo,<br> y uno le dice al otro:
                    <br>- Alfredo, vámonos de aquí que este terreno ya está pavimentado.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste9.mp3" controls>
            </audio>
        </div>
    </div>
    <!-- tarjeta10 -->
    <div class="col-xl-3 pb-4" >
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/dtRrCZV/riendo2.jpg" alt="riendo2" class="card mx-auto d-block"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> <br> - ¿Qué le dice un gusano a otro gusano?<br>
                    <br> - Me voy a dar una vuelta a la manzana.</h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste10.mp3" controls>
            </audio>
        </div>

    </div>
    <!-- tarjeta11 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img  src="https://i.ibb.co/pWCKh5v/riendo4.jpg" alt="riendo4"   class="card mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> <br>Un ratón le dice a una rata:<br>
                    - ¿Qué haces ahí sentada?<br>
                    - Estoy esperando un ratito<br></h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste11.mp3" controls>
            </audio>
        </div>
    </div>
    <!-- tarjeta12 -->
    <div class="col-xl-3 pb-4">
        <div class="card mx-auto d-block" style="width: 18rem;">
            <img src="https://i.ibb.co/rxPqG44/roendo6.jpg" alt="roendo6" class="card mx-auto d-block"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center"> <br><br>-¿Qué le dice un pato a otro pato?<br>
                    <br>¡Estamos empatados!<br></h5>
            </div>
            <audio  id="player" src="AudiosEspañol/chistes/chiste12.mp3" controls >

            </audio>
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
