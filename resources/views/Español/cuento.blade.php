@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cuentos</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

    .card{
        background: #D8E2F3;
        border-bottom-left-radius: 50%;
    }


    .content{

        width: 100%;
        height: 100px;
        margin-left: 0px;
        border-top-left-radius: 80%;
        border-top-right-radius:80%;

    }

    #separadorInferior{

        width: 100%;
        height: 100px;
        margin-left: 0px;
        border-top-left-radius: 50%;
        border-top-right-radius:50%;
        background: #3B5686;
    }

    .navbar{
        background: #3B5686;
    }
    #separadorDePagina{
        background: #B8DA97;
    }



    #fondo{
        border-bottom-left-radius:50%;
        border-top-right-radius: 50%;

    }

    body{
        background: #bce0ee;
    }

    #clr {
        background: #3B5686;
    }

</style>
</head>
<body>

<!-- navbar-->
@section('content')


<!-- iamgen -->
<div class="container-fluid" id="clr">
    <div class="row">
        <div class="col-md-12" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/vB0Z4vy/cx-removebg-preview.png"  width="600"  class=" mx-auto d-block"/>
        </div>
    </div>
</div>




<div class="container-fluid" style="background: aquamarine">
    <div class="row">
        <div class="col-md-4">

            <br>
            <img src="https://i.ibb.co/JtrPsnW/24b5560ad1536680ad12973aa1bc3fe7-removebg-preview-1.png" alt="24b5560ad1536680ad12973aa1bc3fe7-removebg-preview-1" height="250" class="mx-auto d-block "/>

        </div>
        <div class="col-md-8">
            <h2 class="text-center" id="cuento">
                <br>
                ¿Qué son los Cuentos?
            </h2>
            <p style="text-align: justify">
                <strong><em>

                        <br> Los cuentos son breves narraciones que se pueden expresar tanto de manera oral
                        como escrita y suceden en un tiempo y un lugar dispuesto por el autor. Un cuento
                        es una narración que puede ser de episodios tomados exclusivamente de la vida real
                        o de hechos de ficción. La estructura del cuento posee ciertas características
                        como por ejemplo, lo narrado, el tema a desarrollar, luego el contenido que aporta
                        la novedad y finalmente la expresión.
                        <br> Se compone de tres partes:<br>
                        Introducción: Parte principal donde se presenta los personajes y sus propositos.<br>
                        Nudo: Se presenta el conflicto o el problema de la historia; aquí suceden los hechos
                        mas importantes.<br>
                        Desenlace:Es la parte donde da la solución al problema y donde finaliza la narración.
                    </em></strong> </p>
        </div>
    </div>
</div>














<!-- titulo -->
<div class="row" style="background: #bce0ee">
    <div class="col-md-12">
        <h3 align="center " >

            <br>Tipos de Cuentos <br>
            <br>
        </h3>
    </div>
</div>


<!-- tarjetas tipos de cuentos -->
<div class="container-fluid center-block pl-5 d-flex justify-content-center">
<div class="row">
    <!-- tarjeta 1 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img   src="https://i.ibb.co/CmNZfRq/descarga.jpg"  class=" mx-auto d-block" alt="rondas"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Fantásticos</h5>
                <a href=" {{ url('/cuentoFantastico') }}" class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

    <!-- tarjeta2 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img   src="https://i.ibb.co/xmC8SJL/maxresdefault.jpg"  class=" mx-auto d-block" alt="rondas"  height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Infantiles</h5>
                <a href=" {{ url('/cuentoInfantiles') }}" class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

    <!-- tarjeta3 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img   src="https://i.ibb.co/fDZPYF8/real.jpg"   class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Realistas</h5>
                <a href= " {{ url('/cuentoRealista') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

    <!-- tarjeta4 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img   src="https://i.ibb.co/GRwk26w/terror.jpg"   class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Terror</h5>
                <a href= " {{ url('/cuentoTerror') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

</div>
</div>

<!-- tarjeta5 -->
<div class="container-fluid center-block pl-5 d-flex justify-content-center">
    <div class="row">

    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img    src="https://i.ibb.co/BBcqQ4f/feliz-navidad.jpg"    class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Navidad</h5>
                <a href=" {{ url('/cuentoNavidad') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

    <!-- tarjeta6 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img     src="https://i.ibb.co/nbCwrYv/aventura.jpg"    class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Aventuras</h5>
                <a href= " {{ url('/cuentoAventuras') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>
    <!-- tarjeta7 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img  src="https://i.ibb.co/qBGp3t3/policiales.jpg" class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Policiales</h5>
                <a href= " {{ url('/cuentoPoliciales') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>
    <!-- tarjeta8 -->
    <div class="col-xl-3 pb-5" >
        <div class="card mx-auto d-block"  style="width: 18rem;" >
            <img   src="https://i.ibb.co/421Xxcm/dormir.jpg"  class=" mx-auto d-block"   height="150" width="200">
            <div class="card-body">
                <h5 class="card-title" align="center">Para Dormir</h5>
                <a href= " {{ url('/cuentoDormir') }}"  class="btn btn-danger" >Leer</a>
            </div>
        </div>
    </div>

</div>
</div>

<!-- separador -->
<div id="separadorInferior">
    <div class="content ">
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection
