@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Normas de higiene</title>
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
<body>

@section('content')

<!-- contenedor del gif-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: yellow">
            <div class="row ml-5 mr-5">
                <div class="col-md-7  mt-5" style="background: #CCDDCC">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/HHtkZLB/Normas-de-Higiene-Personal-removebg-preview-1.png"    width="450"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                    <h4  class="mt-5" style="color: #3B5686">Ciencias Naturales</h4>
                    <h3 class="mt-5" style="text-align: center">Normas de Higiene</h3>
                    <p class="" id="pa">
                        <em>Las actividades relacionadas con la higiene y cuidados del cuerpo durante la niñez permiten que se conviertan en hábitos que de adultos debemos realizar, por eso es necesario que conozcas tu cuerpo, sus funciones, y la rutina que debes mantener para tener un buen estado de salud.</em><br>
                      <br>  <em>La higiene de la piel, las axilas, pies y genitales es indispensable para tu salud personal, por lo que se deben conocer y practicar normas de higiene personal en el hogar, la escuela y la comunidad. La falta de estas medidas puede causar enfermedades. Los hongos y otros microorganismos que invaden la piel se alojan principalmente en las axilas, las ingles, entre los muslos y otras zonas del cuerpo donde hay humedad. </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid  mb-5 mt-5 ">
    <div class="row">
        <div class="col-md-6 mt-5">
            <h2>
                ¡Nos vamos a cuidar!

            </h2>
            <p>
                Una persona tiene salud cuando todos sus órganos trabajan en forma adecuada. La salud puede perderse si no se cuida la higiene. Esta palabra es lo mismo que limpieza. A continuación se presentan algunas normas higiénicas que es necesario seguir para mantener el cuerpo sano y fuerte.

        </div>

        <div class="col-md-6 mt-n5">
            <img class="mx-auto d-block"  src="https://i.ibb.co/9yn2xJY/nino-apuntando-ilustracion-vector-plano-dedo-indice-71593-566-removebg-preview.png"   >
        </div>


    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #FDFD96">
                <h1 style="text-align: center">Normas de Higiene</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>
                    1. Lávate las manos antes de comer y después de usar el baño.

                </h2>

            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/TbYb5YY/feliz-lindo-nino-nino-lavarse-manos-fregadero-97632-2454-removebg-preview.png"  width="300" >
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>
                    2. Come alimentos bien cocinados.

                </h2>

            </div>
            <div class="col-md-6 mb-5">
                <img class="mx-auto d-block" src="https://i.ibb.co/Z6V77zb/depositphotos-158123240-stock-illustration-the-child-eats-breakfast-that-removebg-preview.png"   width="300" >
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>
                   3. Cepíllate los dientes después de comer.

                </h2>
                </div>
            <div class="col-md-6 mb-5">
                <img class="mx-auto d-block" src="https://i.ibb.co/MkyTPLk/depositphotos-6902169-stock-illustration-girl-brushing-teeth-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>

        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>
                        4. Lava las frutas y verduras antes de comerlas

                    </h2>
                </div>
                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/k2hbPPT/feliz-lindo-nino-nina-lavado-vegetal-fruta-limpio-97632-1116-removebg-preview-1.png"    width="300" >
                </div>
            </div>
        </div>


        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>
                        5. Báñate todos los días

                    </h2>

                </div>
                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/BLyxpcQ/nino-banandose-banera-espuma-7710-125-removebg-preview.png"   width="300" >
                </div>
            </div>
        </div>


        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>
                        6. Hierve o clora el agua para beber


                    </h2>
                </div>
                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/swYJ5SL/60046209-hervir-el-agua-en-la-bandeja-olla-negro-en-la-estufa-con-agua-y-vapor-elementos-gr-ficos-de.png"   width="300" >
                </div>
            </div>
        </div>


        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>
                        7. Mantén limpia la casa, el centro educativo

                        y la localidad donde vives.

                    </h2>
                </div>
                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/vx7LQ7T/nino-mantiene-medio-ambiente-limpio-candidiasis-cubo-basura-33070-4882-removebg-preview.png"    width="300" >
                </div>
            </div>
        </div>


        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>
                        8. No tires basura en lugares no adecuados.

                    </h2>
                </div>
                <div class="col-md-6 mb-5">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Xy0prmX/depositphotos-144558237-stock-illustration-boy-littering-part-of-bad-removebg-preview.png"     width="300" >
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
