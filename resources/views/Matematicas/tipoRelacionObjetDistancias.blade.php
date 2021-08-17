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
            background:#FF7E5A;
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

            width: 100%;
            height: 100px;
            margin-left: -5px;
            background: #FF7E5A;
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



    </style>
</head>
<body>
<!-- navbar-->
@section('content')

<!-- contenedor definicion-->
<div class="container-fluid" >
    <div class="row ">
        <div class="col-xl-4 p-2">
            <img class="mx-auto d-block" src="https://i.ibb.co/rxCVQ4K/44854d-removebg-preview.png"
                 width="350" />

        </div>
        <div class="col-xl-8 p-2">
            <h2 class="text-center" ><br>¡RELACIÓN DE OBJETOS!</h2>
            <h3 class="text-center" ><br>Distingo distancias.</h3>
            <p class="text-justify" ><strong>
                        La distancia es una magnitud que mide la relación de lejanía o cercanía
                        entre dos cuerpos, objetos o individuos.
                    </strong></p>
            <img class="mx-auto d-block"  width="100" />
        </div>
    </div>
</div>

<!-- contenedor video-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-xl-12" >
            <iframe id="tar2" class="mx-auto d-block"
                    src="https://drive.google.com/file/d/155ywlDNbd1g8unxIdqcDK9A0fUlA1znF/preview"
                    width="450" height="300"></iframe>
            <h5 align="center"></h5>
        </div>
    </div>
</div>

<!-- contenedor de IMAGENES-->
<div class="container-fluid  ">
    <br>
    <h2 class="text-center">Observo y aprendo:</h2>

    <h2 class="text-center">¡Distancias!</h2>
    <br>
    <div class="row" >
        <div class="col-xl-6 p-2">
            <br>
            <div  class="card mx-auto d-block" style="width: 28rem;">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/b2Fztqx/cerca.jpg"
                     width="300" >
                <br>
                <h5 class="card-title" align="center">Cerca</h5>
             </div>
        </div>

        <div class="col-xl-6 p-2">
<br>
            <div class="card mx-auto d-block" style="width: 28rem;">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/9t0RSY5/lejos.jpg"
                     width="310" >
                <br>
                <h5 class="card-title" align="center">Lejos</h5>
            </div>
        </div>
    </div>
</div>
<!-- contenedor imagg-->
<div class="container-fluid " ><h2 class="text-center"><br>¡Repito en voz alta!</h2>
    <br>
    <div  class="card mx-auto d-block">
        <div class="row " >
            <div class="col-xl-6">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/vPBRQvd/jjl.jpg" width="300"
                   />
                <br>
                <h5 class="card-title" align="center">El niño está lejos de la palmera</h5>
            </div>
            <div class="col-xl-6">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/cY7Fsrh/dd.jpg"
                     width="328" />
                <br>
                <h5 class="card-title" align="center">El niño está cerca del delfin</h5>
            </div>
        </div>

    </div>
</div>

<!-- contenedor -->
<div class="container-fluid " ><h2 class="text-center"><br>¡Repite!</h2>
    <br>
    <div  class="card mx-auto d-block" >
        <div  class="row " >
            <div class="col-xl-6 p-2">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/CVPYk8w/f-44.jpg"
                     width="250" />
                <br>
                <h5 class="card-title" align="center">Los elefantes están cerca</h5>
            </div>
            <div class="col-xl-6 p-2">
                <br>
                <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/4fKpZZW/maxres.jpg"
                     width="300" />
                <br>
                <h5 class="card-title" align="center">Los cangrejos están lejos</h5>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid  " >
    <h2 class="text-center"><br>¡Digo en voz alta si el objeto está cerca o lejos!</h2>
    <br>
    <div class="row ">
        <div class="col-xl-4 p-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/12FLc4D/hvf.jpg"
                 width="260" >
            <br>
            <h5 class="card-title" align="center">¿Las estrellas están cerca o lejos?</h5>
        </div>
        <div class="col-xl-4 p-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/bJVSxPp/mmm-removebg-preview.png"
                 width="250" height="190">
            <br>
            <h5 class="card-title" align="center">¿El sol está cerca o lejos?</h5>
        </div>


        <div class="col-xl-4 p-3">
            <img id="tar3" class="mx-auto d-block" src="https://i.ibb.co/jW0PY5S/e28-removebg-preview.png"
                 width="190" height="190">
            <br>
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
