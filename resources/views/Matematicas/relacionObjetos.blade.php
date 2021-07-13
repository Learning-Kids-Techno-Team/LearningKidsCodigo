@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Relación de Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>


<!-- Seguimiento -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JWFFJETEMQ');
</script>





<style>

    .card {
        border-bottom-left-radius: 30%;
        background: white;

    }
    .navbar{
        background: #FF7E5A;
    }
    #separadorDePagina{

        border: orange 10px dashed;


    }
    p{
        margin-left:15%;
        margin-right: 15%;
        text-align: justify;
        font-style: italic;

    }
    #fondo{
        border-bottom-left-radius:300px;
        border-top-right-radius: 300px;

    }
    h3 {
        text-align: center;
    }
    #separadorInferior{

        width: 100%;
        height: 100%;
        margin-left: 0px;
        border-top-left-radius: 50%;
        border-top-right-radius:50%;

    }


</style>

<body style="background: #FF7E5A">
<!-- navbar-->
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 " style="background:blanchedalmond"  id="fondo" >
            <img src="https://i.ibb.co/QY8MWGQ/muchos-juguetes-libros-dormitorio-1308-9759-removebg-preview.png" width="400" class="mx-auto d-block" />

        </div>
    </div>
</div>
<div id="separadorDePagina" class="container-fluid" style="background: #DCFECB">
    <div class="row">
        <div class="col-xl-4 ">
            <br> <br>
            <img src="https://i.ibb.co/C1BndsH/vector-doll-and-ball-on-wooden-shelf-removebg-preview.png" width="300" class="mx-auto d-block "/>
        </div>

    <div class="col-xl-8">
            <br>
            <h2 class="text-center" >
               Relación de objetos

            </h2>
            <br>
            <p class="text-justify">
                <strong>
                       Es la representación y significado de un objeto.
                        En la vida cotidiana los niños al relacionar los
                        objetos que lo rodea y establecer experencias
                        pre-numéricas, como: comparar, clasificar, identificar,
                        reunir, establecer relaciones uno a uno.
                    </strong></p>
        <br>

    </div>
</div>

</div>
</div>


<div  class="container-fluid " style="background: blanchedalmond">
    <div class="row  ">
        <div class="col-md-12 ">
            <br>
            <h3>Distingamos Objetos</h3>
        </div>
    </div>

    <div class="container-fluid center-block "   >
        <div class="row " >
            <div class="col-xl-4 p-5">
            <div class="card  mx-auto d-block"  style="width: 18rem;">
                <img src="https://i.ibb.co/tDcKNs9/dibujos-animados-madre-bebe-elefante-29190-5257.jpg"  class=" mx-auto d-block"  height="180" >
                <div class="card-body">
                    <h5 class="card-title; text-center">Distingo Tamaños</h5>
                    <div class="text-center">
                    <a  style=" background: darkorange" href=" {{ url('/RelacionObjetTamaños') }}" class="btn btn-danger">Leer</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 p-5">
            <div class="card  mx-auto d-block" style="width: 18rem;">
                <img  src="https://i.ibb.co/MGZrQ3J/46648063-cartoon-mujer-en-vestido-negro-flaco-y-con-sobrepeso-la-p-rdida-de-peso-antes-y-despu-s-de.jpg" width="285" height="180">
                <div class="card-body">
                    <h5 class="card-title; text-center">Distingo Espesores</h5>
                    <div class="text-center">
                    <a href=" {{ url('/RelacionObjetEspesores') }}" style=" background: darkorange" class="btn btn-danger">Leer</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 p-5">
            <div class="card mx-auto d-block"  style="width: 18rem;">
                <img   src="https://i.ibb.co/dtBN0cQ/cartoon-sun-rainbow.jpg"     width="285" height="180">
                <div class="card-body">

                    <h5 class="card-title; text-center">Distingo Colores</h5>
                    <div class="text-center">
                    <a href=" {{ url('/RelacionObjetColores') }}" style=" background: darkorange" class="btn btn-danger">Leer</a>
                    </div>
                </div>
            </div>
        </div>

        </div>

</div>
    <div class="container-fluid center-block " >
        <div class="row " >
            <div class="col-xl-4 p-5">
                <div  class="card mx-auto d-block"  style="width: 18rem;">
                    <img  src="https://i.ibb.co/zJhVMdy/unnamed.jpg"   width="285" height="180" >
                    <div class="card-body">
                        <h5 class="card-title; text-center">Distingo Distancias</h5>
                        <div class="text-center">
                        <a style=" background: darkorange" href=" {{ url('/RelacionObjetDistancias') }}" class="btn btn-danger">Leer</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 p-5">
                <div class="card mx-auto d-block"  style="width: 18rem;">
                    <img  src="https://i.ibb.co/zNCt4Sd/dentro.jpg"  width="285" height="180">
                    <div class="card-body">
                        <h5 class="card-title; text-center">Reconozco Posiciones</h5>
                        <div class="text-center">
                        <a href=" {{ url('/RelacionObjetPosiciones') }}" style=" background: darkorange" class="btn btn-danger">Leer</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 p-5">
                <div class="card mx-auto d-block"  style="width: 18rem;">
                    <img    src="https://i.ibb.co/1bn7f0f/ilustracion-dia-noche-dia-noche-concepto-sol-luna-75817-482.jpg"  width="285" height="180">
                    <div class="card-body">

                        <h5 class="card-title; text-center">Reconozco el tiempo</h5>
                        <div class="text-center">

                        <a href=" {{ url('/RelacionObjetTiempo') }}" style=" background: darkorange" class="btn btn-danger">Leer</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



</div>
<div id="separadorInferior " style="background: #FDFD96">
    <div class="content">
        <img class="mx-auto d-block" src="https://i.ibb.co/CMjstrv/Captura-de-pantalla-287-removebg-preview.png"   height="80" >



    </div>
    </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
