@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Enfermedades Intestinales</title>
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
            background:cornsilk;
            border:yellow 6px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }


        #pa{
            text-align: justify;


        }
        #banderin{


            margin-top: auto;
            height:90px;

        }
        #color{
            color: white;
            height: 80px;

        }

        p{
            text-align: justify;
            font-family: bold, Georgia;

        }

        .card-title{
            color: orangered;
            text-align: center;


        }

        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #FDFD96;
        }

        #titulo{
            text-align: center;
            color: red;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }

        h3{
            font-style:italic;

        }

        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #3B5686;
            font-family: bold;
        }

        #bor{
            border: oldlace 5px dashed;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            background:lightgray;
        }

       .navbar{
            background: #FDFD96;
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

@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: yellow">
            <div class="row ml-5 mr-5">
                <div class="col-md-7  mt-5" style="background: #CCDDCC">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/hKFctFG/joven-enfermo-dolor-estomago-intoxicacion-alimentaria-problemas-estomacales-dolor-abdominal-ilustrac.png"    width="380"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                    <h4  class="mt-5" style="color: #3B5686">Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">Enfermedades intestinales</h3>
                    <p class="" id="pa">
                        <em>Las enfermedades intestinales pueden limitar considerablemente tu calidad de vida, ya que el intestino tiene una enorme influencia en tu salud y bienestar general. Cada persona tiene una flora intestinal única y por este motivo, hay personas capaces de tolerar bien las legumbres y otras que no.
                            Los problemas intestinales suelen presentarse cuando la flora intestinal se desequilibra. Algunas enfermedades intestinales siguen siendo un misterio para los médicos y científicos, mientras que otras han sido bien estudiadas.</em><br>
                       </p>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>
                ¡Me duele el estómago!
            </h2>
            <p>
                El estómago es un órgano muy

                delicado y propenso a enfermarse. La diarrea

                ocasiona que el cuerpo

                humano pierda gran cantidad de agua, porque las personas tienen que ir al sanitario

                constantemente.<br>

                La diarrea es peligrosa porque provoca que el cuerpo pierda liquido que necesita para funcionar correctamente. Una mala higiene en la preparación y consumo de las comidas puede provocarnos diarrea.


        </div>
        <div class="col-md-6">
            <img class="mx-auto d-block"  src="https://i.ibb.co/9cpPRTf/boy-suffering-stomach-painful-acid-260nw-1315503887-removebg-preview.png"  >

        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img class=" mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/sbhG4Xf/lindo-nino-mirando-arriba-43633-2766-removebg-preview.png" width="250" />

        </div>
        <div class="col-md-6">

            <h2 class="mt-5">
                ¿cómo prevenir enfermedades intestinales?
            </h2>

            <ul>
                <li><strong>No a la comida de la calle</strong> La higiene es sin duda el paso principal para evitar cualquier infección estomacal. La comida debe estar siempre bien lavada y se debe preparar bajo condiciones higiénicas. Por esto, lo principal es evitar comida de la calle o puestos en los que no sepas cómo preparan los alimentos, si desinfectan las frutas o verduras, si utilizan agua del grifo o si las moscas u otros animales han pasado por encima.</li>
                <li><strong>  Prepara correctamente tus alimentos </strong> También es importante que mantengas la misma higiene en casa. Procura lavar bien y desinfectar las frutas y verduras; ten una tabla para cortar frutas y verduras y una distinta para la carne y asegúrate de cocer bien el pollo y la carne para las comidas.</li>
                <li><strong>  Mantén un horario regular de comidas</strong>  Otras enfermedades estomacales cómo la gastritis se pueden dar por no tener un horario establecido de comidas. Así que procura comer de forma ordenada, saludable y con horarios establecidos que puedas respetar para que tu estómago se acostumbre y no pase hambre.</li>

            </ul>

        </div>
    </div>
</div>











    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #FDFD96">
                <h1 style="text-align: center">Algunas enfermedades intestinales</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Estreñimiento

                </h2>
                <p>
                    Estreñimiento significa que una persona tiene tres o menos evacuaciones en una semana. Las heces pueden ser duras y secas. Algunas veces la evacuación es dolorosa. Todas las personas tienen estreñimiento alguna vez. La mayoría de los casos, dura poco tiempo y no es serio.
                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/BfFjsK6/4c10952bbaf01427d09e9aaaf66072b2-removebg-preview.png"  width="300" >
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Náuseas y vómitos

                </h2>
                <p>
                    Náuseas es la sensación de tener ganas de vomitar. Con frecuencia se la denomina "estar enfermo del estómago".

                    Vomitar o trasbocar es forzar los contenidos del estómago a subir a través del esófago y salir por la boca.
                    Causas
                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/ydwYccz/triste-nino-lindo-sentirse-enfermo-vomitar-97632-1502-removebg-preview.png"   width="300" >
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Acidez gástrica

                </h2>
                <p>
                    Es una sensación de ardor justo debajo o detrás del esternón. Generalmente proviene del esófago. El dolor suele originarse en el pecho desde el estómago. Puede sentirse en el cuello o la garganta.
                    Causas</p></div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/ZzJnRhn/20190217142803-acidez-estomacal-770x423-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>
                    Distención

                </h2>
                <p>La hinchazón o distensión abdominal con frecuencia es provocada por comer en exceso más que por una enfermedad grave. El problema también puede ser causado por: Deglución de aire (un hábito nervioso) Acumulación de líquidos en el abdomen (esto puede ser un signo de un problema grave de salud)

                </p>
            </div>
            <div class="col-md-6 ">
                <img class="mx-auto d-block" src="https://i.ibb.co/MGRqMqw/Inflamacio-n-estomacal-estren-imiento-removebg-preview.png"     width="300" >
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
