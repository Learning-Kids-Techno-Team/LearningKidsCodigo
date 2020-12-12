@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Distancias</title>
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
            background: lightblue;
            border: cornflowerblue 5px solid;
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
            background: cornflowerblue;
            border: lightblue 12px dotted;

        }

        #tar3{
            background: lightblue;
            border: cornflowerblue 5px solid;

        }



        #color{
            color: #3B5686;

        }

    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor definicion-->
<div class="container-fluid" id="color">
    <div class="row ">
        <div class="col-md-4">
            <img class="mx-auto d-block" src="https://i.ibb.co/rxCVQ4K/44854d-removebg-preview.png" width="350" />

        </div>
        <div class="col-md-8">
            <h2 id="color"><em><br>¡RELACIÓN DE OBJETOS!</em></h2>
            <h3 id="color"><em><br>Distingo distancias.</em></h3>
            <p id="color"><em><strong>
                        La distancia es una magnitud que mide la relación de lejanía o cercanía
                        entre dos cuerpos, objetos o individuos.
                    </strong></em></p>
            <img class="mx-auto d-block"  width="100" />
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid" id="color" >
    <div class="row">
        <div class="col-md-12" >
            <iframe id="tar2" class="mx-auto d-block" src="https://drive.google.com/file/d/155ywlDNbd1g8unxIdqcDK9A0fUlA1znF/preview" width="650" height="400"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de IMAGENES-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>Observo y aprendo: </em></h2>
    <div class="row m-5" >
        <div class="col-md-6">
            <div  class="card" style="width: 28rem;">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/b2Fztqx/cerca.jpg" width="438" height="300">
                <h5 class="card-title" align="center">Cerca</h5>
             </div>
        </div>
        <div class="col-md-6">
            <h2 id="color"><em><br>¡Distancias!</em></h2>
            <div class="card" style="width: 28rem;">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/9t0RSY5/lejos.jpg" width="438" height="300">
                <h5 class="card-title" align="center">Lejos</h5>
            </div>
        </div>
    </div>
</div>
<!-- contenedor imagg-->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Repito en voz alta!</em></h2>
    <div  class="card">
        <div class="row m-5" >
            <div class="col-md-6">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/vPBRQvd/jjl.jpg" width="455" height="350"/>
                <h5 class="card-title" align="center">El niño está lejos de la palmera</h5>
            </div>
            <div class="col-md-6">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/cY7Fsrh/dd.jpg"  width="450" height="350"/>
                <h5 class="card-title" align="center">El niño está cerca del delfin</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor -->
<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Repite!</em></h2>
    <div  class="card">
        <div  class="row m-5" >
            <div class="col-md-6">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/CVPYk8w/f-44.jpg" width="455" height="350"/>
                <h5 class="card-title" align="center">Los elefantes están cerca</h5>
            </div>
            <div class="col-md-6">
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/4fKpZZW/maxres.jpg" width="450" height="350"/>
                <h5 class="card-title" align="center">Los cangrejos están lejos</h5>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid  center-block pl-5" id="color"><h2><em><br>¡Digo en voz alta si el objeto está cerca o lejos!</em></h2>
    <div class="row m-5">
        <div class="col-md-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/12FLc4D/hvf.jpg" width="220" height="180">
            <h5 class="card-title" align="center">¿Las estrellas están cerca o lejos?</h5>
        </div>
        <div class="col-md-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/bJVSxPp/mmm-removebg-preview.png" width="200" height="180">
            <h5 class="card-title" align="center">¿El sol está cerca o lejos?</h5>
        </div>
        <div class="col-md-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/k0NDHhp/jk.jpg" width="220" height="180">
            <h5 class="card-title" align="center">¿El arcoiris está cerca o lejos?</h5>
        </div>
        <div class="col-md-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/jW0PY5S/e28-removebg-preview.png" width="200" height="180">
            <h5 class="card-title" align="center">¿Los pajaritos están cerca o lejos?</h5>
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
