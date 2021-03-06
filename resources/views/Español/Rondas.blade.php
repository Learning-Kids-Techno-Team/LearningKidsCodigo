@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Rondas</title>



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

            background: url("https://i.ibb.co/DKRd6xP/Captura-de-pantalla-275-removebg-preview.png");
            border:blue 5px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }
        .card-body {


        }
       #pa{
           text-align: justify;

        }
        #banderin{

            background: url("https://i.ibb.co/4RzTrQV/pagi-removebg-preview.png" );
            margin-top: auto;


            height: 234px;

        }
        #color{
            color: blue;
            height: 80px;
            text-align: center;



        }
        p{
          text-align: center;

        }
        .card-title{
            color: blue;
            text-align: center;


        }
        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-top-left-radius:80%;
            border-top-right-radius: 80%;
            background: #4aa0e6;
        }



    </style>
</head>
<body >
<!-- navbar-->
@section('content')

<!-- contenedor del gif-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-xl-4 " >
         <img  src="https://i.ibb.co/jWxChRq/unnamed.gif"  height="300">
        </div>
        <div class="col-xl-8 " >
            <h2 id="color">Rondas Infantiles</h2>

            <p id="pa"><strong><em>
                       Son juegos colectivos de los niños que se transmiten por tradición.
                        Se cantan con rimas y haciendo rondas con movimiento. En su mayoría han sido originarias
                        de España y se han extendido por Latinoamérica.

                        Tienen la particularidad, de ser cantadas formando un circulo, de allí su nombre propio “ronda”.
                        Se utilizan en los centros educativos, justamente para fomentar la integración de los niños, no
                        obstante es bueno que tú las conozcas también, para que puedas participar de esta actividad,
                        con tu niño también.

                    </em></strong></p>

        </div>
    </div>
</div>

<!-- contenedor de la estrella-->
<div class="container-fluid " id="banderin" >
    <div class="row " >
        <div class="col-xl-12">

        </div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/162_b4Fg5s0PIRzxeO912wrZoautK4SrI/preview" width="405" height="200"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Tengo una muñeca </h5>

                <p><strong><br><br><br>Tengo una muñeca vestida de azul,<br>
                    con su camisita y su canesú.<br>

                   La saqué a paseo y se me constipó,<br>
                    la tengo en la cama con mucho dolor.<br>

                   <br><br><br> Esta mañanita me dijo el doctor,<br>
                    que le de jarabe con el tenedor.<br>

                   Dos y dos son cuatro, cuatro y dos son seis,<br>
                    seis y dos son ocho, y ocho dieciséis,<br>
                    y ocho veinticuatro, y ocho treinta y dos.<br><br>


                   <br><br> Tengo una muñeca vestida de azul,<br>
                    zapatitos blancos y gorro de tul.

                   <br>La llevé a paseo y se me constipo,
                    <br>la tengo en la cama con un gran dolor.<br><br>

                  <br> <br><br>Dos y dos son cuatro, cuatro y dos son seis,<br>
                    seis y dos son ocho, y ocho dieciséis,<br>
                    y ocho veinticuatro, y ocho treinta y dos.<br>
                    Estas son las cuentas que he sacado yo.<br>
                        <br><br><br><br>
                    </strong></p><br><br><br>

                </div>
            </div>
        </div>

        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1CQiJogasr943FfPNng_M4zypIzay-o_I/preview" width="405" height="200"></iframe>
                <div class="card-body">
                    <h5 class="card-title">Matarile-rile-ro</h5><br>

                    <p><strong><br><br>Amo a to
                        Matarile rile ro<br>
                        Que quiere usted<br>
                        Matarile rile ro
                        Yo quiero un paje<br>
                        Matarile rile ro
                            Usted Matarile rile ro.<br>

                        <br><br><br>Escojo a ella
                        Matarile rile ro<br>
                        Que oficio le pondremos<br>
                        Matarile rile ro.<br>
                        Le pondremos lavandera<br>
                        Matarile rile ro, ese oficio no le gusta<br>
                        Matarile rile ro<br><br>

                            <br><br>Le pondremos planchadora<br>
                        Matarile rile ro<br>
                        Ese oficio no le gusta<br>
                        Matarile rile rio<br>
                       <br><br> Le pondremos bordadora<br>
                        Matarile rile ro<br>
                        Ese oficio no le gusta<br>
                        Matarilr rile ro<br><br>
                        <br><br><bR>Le pondremos ser la reyna<br>
                        Matarile rile ro<br>
                        Ese oficio si le gusta<br>
                        Matarile rile ro
                        </strong> </p>




                </div>
            </div>
        </div>

        </div>
</div>
<div class="container-fluid  " >
    <div class="row" >
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1RUkweJ66bMHgNY8RUkKJ3AB0RGxfyKj7/preview" width="405" height="200"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">El Patio de mi Casa </h5>

                    <p><strong><br><br><br>El patio de mi casa es particular<br>
                        Se moja y se seca como los demás<br>
                        Agáchense y vuélvanse a agachar<br>
                        Las niñas bonitas se saben agachar.<br>
                            <br><br><br>Chocolate, molinillo<br>
                            Chocolate, molinillo<br>
                        Estirar, estirar, que la reina va a pasar.<br>
                        Dicen que soy, que soy una cojita<br>
                        Y si lo soy, lo soy de mentiritas.<br><br>
                            <br><br>Desde chiquita me quedé, me quedé.
                        Padeciendo de este pie<br>
                        Padeciendo de este pie.
                        El patio de mi casa <br>(Uh-oh, uh-oh)
                        El patio de mi casa <br>(Uh-oh, uh-oh).<br>


                        <br><br>El patio de mi casa (Uh-oh, uh-oh)<br>
                        El patio de mi casa (Uh-oh, uh-oh)<br>
                        Es particular, muy particular<br>
                        El patio de mi casa es particular<br>
                        Se moja y se seca como los demás.<br>
                       <br><br> <br>Agáchense y vuélvanse a agachar
                        Las niñas bonitas se saben agachar.<br>
                        Chocolate, molinillo
                        Chocolate, molinillo.<br><br>
                        <br><br><bR></bR>Estirar, estirar, que la reina va a pasar<br>
                        Dicen que soy, que soy una cojita
                        Y si lo soy, lo soy de mentiritas.
                        Desde chiquita me quedé, me quedé.<br><br><br>
                       <br> Padeciendo de este pie
                        Padeciendo de este pie
                            <br>El patio de mi casa (Uh-oh, uh-oh)
                        El patio de mi casa (Uh-oh, uh-oh)
                            <br>El patio de mi casa (Uh-oh, uh-oh)<br>
                        El patio de mi casa (Uh-oh, uh-oh)<br><br>

                       <br><br>El patio de mi casa (Uh-oh, uh-oh)<br>
                        El patio de mi casa (Uh-oh, uh-oh)
                            <br>El patio de mi casa (Uh-oh, uh-oh)<br>
                        El patio de mi casa (Uh-oh, uh-oh)<br>
                        Es particular, muy particular<br><br><br>
                   <br>El patio de mi casa es particular<br>
                            Se moja y se seca como los demás<br>
                            Agáchense y vuélvanse a agachar<br>
                            Las niñas bonitas se saben agachar.<br>Chocolate, molinillo<br>
                            <br><br>Chocolate, molinillo<br>El patio de mi casa (Uh-oh, uh-oh)<br>
                            El patio de mi casa (Uh-oh, uh-oh)<br>
                            Es particular, muy particular<br>

                            <br><br><br>El patio de mi casa (Uh-oh, uh-oh)<br>
                            El patio de mi casa (Uh-oh, uh-oh)
                            <br>El patio de mi casa (Uh-oh, uh-oh)<br>
                            El patio de mi casa (Uh-oh, uh-oh)<br>
                            Es particular, muy particular<br><br><br>
                            <br>El patio de mi casa es particular<br>
                            Se moja y se seca como los demás<br>
                            Agáchense y vuélvanse a agachar<br>
                            Las niñas bonitas se saben agachar.<br>Chocolate, molinillo<br>
                            <br><br><br>Chocolate, molinillo<br>El patio de mi casa (Uh-oh, uh-oh)<br>
                            El patio de mi casa (Uh-oh, uh-oh)<br>
                            Es particular, muy particular<br>

                        </strong> </p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1NWS_nfme280dTnZZS8vAywxM_3mwPF91/preview" width="405" height="200"></iframe>
                <div class="card-body">
                    <h5 class="card-title">Las calaveras </h5>

                    <p><strong> <br><br>Cuando el reloj marca la una<br>
                        Las calaveras salen de su tumba<br>
                        Chúmbala, cachúmbala, cachúmbala
                        Chúmbala, cachúmbala, cachúmbala<br><br><br>
                        <br><br>Cuando el reloj marca las dos
                        <br>Las calaveras se mueren de tos<br>
                        Chúmbala, <br>cachúmbala,<br> cachúmbala
                        Chúmbala,<br> cachúmbala,<br> cachúmbala<br>
                        <br>Cuando el reloj marca las tres<br>
                        Las calaveras se paran al revés<br>
                        Chúmbala, cachúmbala, cachúmbala<br> (Yo aquí, y yo allá)
                        Chúmbala, cachúmbala, <br>cachúmbala<br>
                            <br><br>Cuando el reloj marca las cuatro<br>
                        Las calaveras se quitan los zapatos<br>
                        Chúmbala, cachúmbala, cachúmbala<br>
                        Chúmbala, cachúmbala, cachúmbala<br>
                        Cuando el reloj marca las cinco<br><br><br>
                       <br> Las calaveras dan vueltas<br> y brincos
                        Chúmbala, cachúmbala,<br>cachúmbala
                        Chúmbala, cachúmbala,<br> cachúmbala
                            <br><br><br><br>Cuando el reloj marca las seis<br>
                        Las calaveras llaman al rey<br>
                        Chúmbala, cachúmbala,<br> cachúmbala<br>
                        Chúmbala, cachúmbala,<br> cachúmbala<br><br><br>
                        Cuando el reloj marca las siete<br>
                        Las calaveras se peinan el copete<br>
                        Chúmbala, cachúmbala, cachúmbala<br>
                        Chúmbala, cachúmbala, <br>cachúmbala.
                        Cuando el reloj marca las ocho<br><br><br>
                            <br>Las calaveras se comen un bizcocho<br>
                            Chúmbala, cachúmbala, cachúmbala
                        Chúmbala,<br> cachúmbala, cachúmbala.<br>
                        Cuando el reloj marca las nueve.<br><br>
                            <br><br><br>Las calaveras se comen su nieve<br>
                        Chúmbala, cachúmbala, cachúmbala<br>
                        Chúmbala, cachúmbala, cachúmbala.<br><br>
                        <br><br><br>Cuando el reloj marca las diez<br>
                        Las calaveras cantan en inglés<br>
                        Chúmbala, cachúmbala,<br> cachúmbala

                        Cuando el reloj marca las once.<br><br><br>
                            <br><br>Las calaveras no se conocen<br>
                        Chúmbala, cachúmbala,<br> cachúmbala <br>
                        Chúmbala, cachúmbala, cachúmbala<br>
                            <br><br><br>Cuando el reloj marca las  doce<br>
                       Las calaveras pasean en coche.<br>
                        Chúmbala, cachúmbala,<br> cachúmbala
                        Chúmbala, <br>cachúmbala,cachúmbala.<br>
                        <br><br><br>Cuando el reloj marca la una<br>
                        Las calaveras vuelven a sus tumbas
                        Chúmbala, cachúmbala, cachúmbala.<br>

                        <br>
                        </strong></p>


                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid " >
    <div class="row" >
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1Cnq60GReXJFvxxRapX4WMolBonkwlHzY/preview" width="405" height="200"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">La Pajara Pinta </h5>

                    <p><strong><br><br><br>Estaba la pájara pinta<br>
                            sentada en un verde limón.<br>
                        Con el pico cortaba la rama,<br>
                        con la rama cortaba la flor.<br>
                        Ay, ay, ay!<br>
                            <br><br>Cuándo vendrá mi amor...<br>
                            Me arrodillo a los pies de mi<br> amante,
                        me levanto <br>constante, constante.<br><br><br><br>
                            <br> Dame la mano, dame la otra,<br>
                        dame un besito sobre la boca.

                        Daré la media vuelta,<br>
                        Daré la vuelta entera,<br>
                        Con un pasito atrás,<br>
                            <br><br>Haciendo la reverencia.

                        Pero no, pero no, pero no,
                        porque me da vergüenza,
                        pero sí, pero sí, pero sí,
                        porque te quiero a ti.


                        </strong></p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1P8lwPud4wSzs_pcnV-YjumSPWNA33OdG/preview" width="405" height="200"></iframe>
                <div class="card-body">
                    <h5 class="card-title">Aserrín aserrán </h5>

                    <p><strong> Aserrín aserrán<br>

                        los <br><br>maderos de San Juan<br>

                        piden pan no les dan<br>
                        piden queso les dan hueso<br>

                        y se les ¡atora en el pescuezo!<br>

                            <br><br><br>piden vino, si les dan<br>

                        se marean y se van.


                        Aserrín aserrán<br>

                        los maderos de San Juan<br>

                        piden pan no les dan<br>

                        piden queso les dan hueso<br><br><br><br>

                        y se les ¡atora en el pescuezo!<br>

                        piden vino, si les dan<br>

                        se marean y se van.

                        Aserrín, aserrán,<br>

                        los maderos de San Juan,<br>

                            <br><br><br> piden pan, no les dan,<br>

                            piden queso, les dan hueso<br>

                        piden ají, y los botan así.<br>


                        </strong></p>




                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid" >
    <div class="row" >
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1iQAWepVvA9lZ-B4F8dXsgmnN8LuXj0Sc/preview" width="405" height="200"></iframe>
                <div class="card-body" id="im">
                    <h5 class="card-title">Naranja Dulce</h5>

                    <p><strong>Naranja dulce<br>
                        Limón partido<br>
                        <br>Dame un abrazo<br>
                        Que yo te pido<br><br>

                        Si fuera falso<br>
                        Mis juramentos<br>
                       <br> En otros tiempos<br>
                        Se olvidarán<br><br>

                        Toca la marcha<br>
                        Mi pecho llora<br>
                      <br>  Adiós señora<br>
                        <br>Yo ya me voy<br>
                        A mi casita<br>
                        De sololoy<br>
                      <br><br> A comer tacos<br>
                        Y no le doy<br>
                       <br>

                        </strong> </p>

                </div>
            </div>
        </div>
        <div class="col-xl-6 p-3">
            <div class="card mx-auto d-block" style="width: 26rem;">
                <iframe src="https://drive.google.com/file/d/1PlKx4qmqc2ZShLXb7pQEC-bV3wc_Ueoe/preview" width="405" height="200"></iframe>
                <div class="card-body">
                    <h5 class="card-title">Los pollos de mi cazuela </h5>

                    <p><strong>Los pollos <br>mi cazuela;<br><br>
                        No sirven para comer,<br>
                        Si no para la viudita. Que no sabe comprender<br>
                        Se le echa sal, cebolla,
                        Hojitas de laurel;
                        Se le saca de la cazuela para salir a bailar.<br>
                            <br><br><br>Componte niña, componte
                        Ya viene tu marinero,<br>
                        Con ese bonito traje,
                        Que parece un carnicero.<br>

                       Anoche yo te vi, Bailando el cha cha cha<br>
                        Con las manos en la cintura<br>
                        Para salir a bailar.<br>
                            <br><br><br>Componte niña, componte<br>
                            <br>Ya viene tu marinero,
                        Con ese bonito traje,
                        Que parece un carnero.
                            <br><br><br><br>
                        </strong>  </p>




                </div>
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





