@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>La familia</title>
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

            background:#F8FEBE;

        }


        #pa{
            text-align: justify;

        }

        p{
            text-align: justify;
            font-family: bold, Georgia;

        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: #B4F97B
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
            color:#3B5686


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
            background: #60A71B;;
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
<!-- navbar-->
@section('content')

<!-- contenedor-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: #B4F97B">
            <div class="row ml-5 mr-5">
                <div class="col-md-7  mt-5" style="background: #CCDDCC">
                    <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/chShLy3/Afamilia-Fill-Wzg0-MCw1-NTBd-removebg-preview.png"    width="500"  >
                </div>
                <div class="col-xl-5  mt-5 " style=" background:#F8FEBE "  >
                    <h4 style="color: #3B5686">Ciencias Sociales</h4>
                   <h3 class="mt-5" style="text-align: center">La Familia</h3>
                    <p class="" id="pa">
                        <em>Una familia es un grupo de personas unidas por el parentesco. Esta unión se puede conformar por vínculos consanguíneos o por un vínculo constituido y reconocido legal y socialmente, como es el matrimonio o la adopción.

                        </em><br>
                        <br> <em>La familia es la organización social más importante para el hombre: el pertenecer a una agrupación de este tipo es vital en el desarrollo psicológico y social del individuo.

                            El concepto de familia ha ido sufriendo transformaciones conforme a los cambios en la sociedad según las costumbres, cultura, religión y el derecho de cada país. Durante mucho tiempo, se definió como familia al grupo de personas conformadas por una madre, un padre y los hijos e hijas que nacen a raíz de esta relación.

                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mt-5">
            <h2>
                Importancia de la familia
            </h2>
            <p>
                <br>El derecho a la familia es uno de los derechos humanos fundamentales. La familia es considerada el elemento natural, universal y fundamental de la sociedad, allí el individuo establece sus primeros contactos sociales y culturales: los primeros aprendizajes (caminar, hablar, relacionarse con los otros) comienzan en el hogar.

                <br>Se dice que la familia es la  base de toda sociedad, ya que dentro de ella los adultos educan y transmiten valores a los niños y niñas que la conforman. El entorno familiar influye notablemente en el desarrollo emocional y social de las personas, y puede motivar o condicionar a los miembros.

            </p>

        </div>


            <div class="col-md-4">
                <img class=" mx-auto d-block" src="https://i.ibb.co/LJzFXBZ/png-transparent-family-extended-family-father-family-tree-cartoon-family-child-people-team-removebg.png"  width="600" />
            </div>
        </div>
    </div>


    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #B4F97B">
                <h3 style="text-align: center">Tipos de familias</h3>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Familias monoparentales.

                </h2>
                <p>
                    Conformadas por uno o más hijos y la madre o el padre. Este tipo de familia puede darse a raíz de una separación, de la decisión de ser padre o madre soltero/a o de haber enviudado. Por lo general, con el tiempo estas familias dan lugar a la nueva unión de los padres, formando así las familias ensambladas.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/T21Zd6d/familia-monoparental-dibujos-animados-ninos-18591-53727-removebg-preview.png"  width="300" >
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Familias biparentales

                </h2>
                <p>
                    Conformadas por una pareja y su hijo o hijos. La unión de la pareja puede darse por vínculo sentimental sin necesidad de contraer matrimonio. Pueden ser heteroparentales (conformadas por parejas de distinto sexo y sus hijos) homoparentales (conformadas por parejas del mismo sexo y sus hijos).


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/bX32npY/familia-reconstituida-removebg-preview.png"   width="300" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Familias ensambladas

                </h2>
                <p>
                    Conformadas por dos  personas que se unen y una de ellas (o ambas) ya tiene hijos o hijas. Las familias ensambladas son dos familias monoparentales que, por medio de una relación sentimental de la pareja, se unen dando lugar a la conformación de una nueva familia.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/jVLr9hr/family-499x500-removebg-preview.png"    width="300" >
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Familia de acogida

                </h2>
                <p>Conformadas por menores que no son descendientes de los adultos, pero han sido acogidos legalmente por ellos de forma urgente, temporal o permanente.


                </p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/MPxkVhk/kisspng-au-pair-child-care-host-family-5aee900cd994d4-1262984215255838848912-removebg-preview.png"     width="400" >
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
