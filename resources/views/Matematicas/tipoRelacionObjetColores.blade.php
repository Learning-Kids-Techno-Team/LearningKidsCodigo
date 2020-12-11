@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Relacion de Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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

            width: 110%;
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


        #color{
            color: darkgreen;

        }

    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor del concept-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-md-4"><br><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/GThF95x/kidstor-removebg-preview.png" width="300" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡RELACIÓN DE OBJETOS!</em></h2>
            <h3 id="color"><em><br>Distingo colores.</em></h3>
            <p id="color"><em><strong>
                        El color es una experiencia visual, una impresión sensorial que recibimos a través de los ojos, independiente de la materia colorante de la misma.
                        El mundo que nos rodea se nos muestra en color. Las cosas que vemos no sólo se diferencian entre sí por su forma, y tamaño, sino también por su colorido.
                        Cada vez que observamos la naturaleza o un paisaje urbano podemos apreciar la cantidad de colores que están a nuestro alrededor gracias a la luz que incide sobre los objetos.
                    </strong></em></p>
        </div>
    </div>
</div>

<!-- contenedores de los circulos con colores-->
<div class="container-fluid" id="color"><h2><em><br>¡Observo y aprendo los colores!</em></h2>
    <div class="row">
        <div class="col-md-4"><br>
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
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/j6tPSPV/blue-circle-removebg-preview.png" width="150"/>
            <h5 align="center">Azul</h5>
        </div>
        <div class="col-md-6"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/Tc5KT9Q/unnamed.png" width="150"/>
            <h5 align="center">Blanco</h5><br><br><br>
        </div>
    </div>
</div>
<!-- contenedor videoS-->
<div class="container-fluid" id="color">
    <div class="row">
        <div class="col-md-6">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/1b6U7I7Y9SOEoXdrP02Grq5-OgH5Z2hji/preview" width="500" height="350"></iframe>
            <h5 align="center"></h5>
        </div>
        <div class="col-md-6">
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/18MQBus63SOtENtkwnVOWpw-7aNHsQdVU/preview" width="500" height="350"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de rojo-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Color Rojo!</em></h2>
    <div class="card">
        <div class="row m-5" >
         <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/brs517b/people-removebg-preview.png" width="300"/>
                <h5 class="card-title" align="center">Sandias: Rojo y Verde</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/sKbRZ6N/tal-de-removebg-preview.png" width="300"/>
                <h5 class="card-title" align="center">Tomates</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/BBRXk0F/61-removebg-preview.png" width="300"/>
                <h5 class="card-title" align="center">Manzanas</h5>
            </div>
        </div>

    </div>
</div>
<!-- contenedor de amarillo-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Color Amarillo!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/vVf3vtZ/un-removebg-preview.png" width="250"/>
                <h5 class="card-title" align="center">El libro</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/zQfGBkS/ni-removebg-preview.png" width="250"/>
                <h5 class="card-title" align="center">Su vestido</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/rmjm7y0/loi-removebg-preview.png" width="220"/>
                <h5 class="card-title" align="center">Banana</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de Verde-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Color Verde!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/B2DNjpy/ni-os-ilustrac-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">La pera</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/VJH3SSK/jjj-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">El árbol</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/VxvtfvR/sd-removebg-preview.png" width="280"/>
                <h5 class="card-title" align="center">La tortuga</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de azul-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Color Azul!</em></h2>
    <div class="card">
        <div class="row m-5" >
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/b1s8k98/maxresdefault-3-removebg-preview.png" width="300"/>
                <h5 class="card-title" align="center">El pez</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/CMjcns9/star-removebg-preview.png" width="320"/>
                <h5 class="card-title" align="center">Las estrellas</h5>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/hKxBTW2/bandera1.jpg" width="300"/>
                <h5 class="card-title" align="center">Nuestra Bandera: Azul y blanco</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor claro oscuro-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>Observo y aprendo: Claro</em></h2>
    <div class="row m-5" >
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/FHckppY/hoflejo-removebg-preview.png" width="300" height="200">
            </div>
        </div>
        <div class="col-md-4">
            <h2 id="color"><em><br>Oscuro</em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/ThLNf2r/papel-removebg-preview.png" width="300" height="180">
            </div>
        </div>
        <div class="col-md-4"><h2 id="color"><em><br>¿Cuál oso es más oscuro?</em></h2>
            <div class="card" style="width: 20rem;">
                <img class="mx-auto d-block" src="https://i.ibb.co/hDfCkgZ/amily-removebg-preview.png" width="300" height="240">
            </div>
        </div>

    </div>
</div>

<!-- contenedor objet-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Digo en voz alta los colores de cada objeto!</em></h2>
    <div class="row m-5">
        <div class="col-md-3">
            <img src="https://i.ibb.co/rQKvYxV/075-removebg-preview.png" width="200" height="180">
        </div>
        <div class="col-md-3">
            <img src="https://i.ibb.co/V3BHWwp/720-removebg-preview.png" width="200" height="180">
        </div>
        <div class="col-md-3">
            <img src="https://i.ibb.co/kXdqWMN/nkj-removebg-preview.png" width="200" height="180">
        </div>
        <div class="col-md-3">
            <img src="https://i.ibb.co/VjHcqwJ/nub.jpg" width="200" height="180">
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
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
