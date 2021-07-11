@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Colores</title>
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
            background:#FF7800;
        }

        body{

            background: #FFEECC;

        }


        .card{
            background: #f1DAFF;
            border: #FF7800 5px solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #FF7800;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }



        #tar2{
            background: #f1DAFF;
            border: #FF7800 8px dashed;

        }




    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-xl-4 p-3"><br><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/GThF95x/kidstor-removebg-preview.png"
                 width="300" />

        </div>
        <div class="col-xl-8 p-3">
            <h2 class="text-center"><br>¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center">Distingo colores.</h3>
            <p class="text-justify" id="color"><strong>
                        El color es una experiencia visual, una impresión sensorial que recibimos a través de los ojos, independiente de la materia colorante de la misma.
                        El mundo que nos rodea se nos muestra en color. Las cosas que vemos no sólo se diferencian entre sí por su forma, y tamaño, sino también por su colorido.
                        Cada vez que observamos la naturaleza o un paisaje urbano podemos apreciar la cantidad de colores que están a nuestro alrededor gracias a la luz que incide sobre los objetos.
                    </strong></p>
        </div>
    </div>
</div>

<!-- contenedores de los circulos con colores-->
<div class="container-fluid" id="color"><h2 class="text-center"><br>¡Observo y aprendo los colores!</h2>
    <div class="row">
        <div class="col-xl-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/KykVBMg/583-removebg-preview.png" width="150"/>
            <h5  align="center">Rojo</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/DM0nmBj/amarillo1-removebg-preview.png" width="150"/>
            <h5 align="center">Amarillo</h5>
        </div>
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/86q7SD5/verd-removebg-preview.png" width="260"/>
            <h5 align="center">Verde</h5>
        </div>
    </div>
</div>
<!-- contenedor2 de colres-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-6 "><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/j6tPSPV/blue-circle-removebg-preview.png"
                 width="150"/>
            <h5 align="center">Azul</h5>
        </div>
        <div class="col-xl-6"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/Tc5KT9Q/unnamed.png" width="150"/>
            <h5 align="center">Blanco</h5><br><br><br>
        </div>
    </div>
</div>
<!-- contenedor videoS-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-6 p-2">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1b6U7I7Y9SOEoXdrP02Grq5-OgH5Z2hji/preview"
                    width="400"></iframe>
            <h5 align="center"></h5>
        </div>
        <div class="col-xl-6 p-2">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/18MQBus63SOtENtkwnVOWpw-7aNHsQdVU/preview"
                    width="400"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de rojo-->
<div class="container-fluid  " id="color"><h2 class="text-center"><br>¡Color Rojo!</h2>
    <br>
    <div class="card mx-auto d-block">
        <div class="row " >
         <div class="col-xl-4 p-2">
             <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/brs517b/people-removebg-preview.png"
                     width="150"/>
             <br>
                <h5 class="card-title" align="center">Sandias: Rojo y Verde</h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/sKbRZ6N/tal-de-removebg-preview.png"
                     width="160"/>
                <br>
                <h5 class="card-title" align="center">Tomates</h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/BBRXk0F/61-removebg-preview.png"
                     width="150"/>
                <br>
                <h5 class="card-title" align="center">Manzanas</h5>
            </div>
        </div>

    </div>
</div>
<!-- contenedor de amarillo-->
<div class="container-fluid " id="color"><h2 class="text-center"><br>¡Color Amarillo!</h2>
    <br>
    <div class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-4 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/vVf3vtZ/un-removebg-preview.png"
                     width="150"/>
                <br>
                <h5 class="card-title" align="center">El libro</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/zQfGBkS/ni-removebg-preview.png"
                     width="150"/>
                <br>
                <h5 class="card-title" align="center">Su vestido</h5>
            </div>
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/rmjm7y0/loi-removebg-preview.png"
                     width="150"/>
                <h5 class="card-title" align="center">Banana</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de Verde-->

<div class="container-fluid  " >
    <br>
    <h2 class="text-center">¡Color Verde!</h2>
<br>
    <div class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-4 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/B2DNjpy/ni-os-ilustrac-removebg-preview.png"
                     width="290"/>

                <h5 class="card-title" align="center">La pera</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/VJH3SSK/jjj-removebg-preview.png"
                     width="200"/>
                <br>
                <h5 class="card-title" align="center">El árbol</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br><br><br><br><br>
                <img class="mx-auto d-block" src="https://i.ibb.co/VxvtfvR/sd-removebg-preview.png"
                     width="200"/>
                <br>
                <h5 class="card-title" align="center">La tortuga</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de azul-->
<div class="container-fluid ">
    <br>
    <h2 class="text-center">¡Color Azul!</h2>
    <br>
    <div class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-4 p-2">
                <br><br>
                <img class="mx-auto d-block" src="https://i.ibb.co/b1s8k98/maxresdefault-3-removebg-preview.png"
                     width="200"/>
                <br><br><br>
                <h5 class="card-title" align="center">El pez</h5>
            </div>

            <div class="col-xl-4 p-2">
<br>
                <img class="mx-auto d-block" src="https://i.ibb.co/CMjcns9/star-removebg-preview.png"
                     width="250"/>
                <br><br>
                <h5 class="card-title" align="center">Las estrellas</h5>
            </div>
            <div class="col-xl-4 p-2">
                <br>
                <img class="mx-auto d-block" src="https://i.ibb.co/hKxBTW2/bandera1.jpg" width="250"/>
                <br><br>
                <h5 class="card-title" align="center">Nuestra Bandera: Azul y blanco</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor claro oscuro-->
<div class="container-fluid  " id="color"><h2 class="text-center"><br>Observo y aprendo: </h2>
    <div class="row " >
        <div class="col-xl-4 p-2">
            <h2 class="text-center" id="color"><br>Claro</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">

                <img class="mx-auto d-block" src="https://i.ibb.co/FHckppY/hoflejo-removebg-preview.png"
                     width="300" >
            </div>
        </div>
        <div class="col-xl-4 p-2" >
            <h2 class="text-center" id="color"><br>Oscuro</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/ThLNf2r/papel-removebg-preview.png"
                     width="190" >
            </div>
        </div>
        <div class="col-xl-4 p-2"><h2 class="text-center"><br>¿Cuál oso es más oscuro?</h2>
            <br>
            <div class="card mx-auto d-block" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/hDfCkgZ/amily-removebg-preview.png"
                     width="235" >
            </div>
        </div>

    </div>
</div>

<!-- contenedor objet-->
<div class="container-fluid  " ><h2 class="text-center"><br>¡Digo en voz alta los colores de cada objeto!</h2>
    <div class="row ">
        <div class="col-xl-3 p-3">
            <br>
            <img class="mx-auto d-block" src="https://i.ibb.co/rQKvYxV/075-removebg-preview.png" width="180" >
        </div>
        <div class="col-xl-3 p-3">
            <br><br><br><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/V3BHWwp/720-removebg-preview.png"
                 width="200" >
        </div>
        <div class="col-xl-3 p-3">
            <img class="mx-auto d-block" src="https://i.ibb.co/kXdqWMN/nkj-removebg-preview.png"
                 width="165" >
        </div>

        <div class="col-xl-3 p-3">
            <br>
            <img class="mx-auto d-block" src="https://i.ibb.co/VjHcqwJ/nub.jpg" width="200">
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
