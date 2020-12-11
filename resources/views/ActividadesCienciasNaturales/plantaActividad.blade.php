@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Actividad partes de la planta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background: #FDFD96;
        }

        body{

            background: #fcebcb;

        }

        .card{
            background: #DCFECB;
            border:green 6px solid;
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
            text-align: center;

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

            size: 80px;

        }

        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }


    </style>


</head>
<body >

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-m-12" style="background: yellow;">
            <div >
                <h1 style="text-align: center">Actividad Parte de las plantas</h1>
            </div>

            <div>
                <iframe src="https://eomweezz5vxhz8pwddk6ug-on.drv.tw/Juegos/Juegos_matematicaDaniela/Partes%20de%20la%20planta%20(Published)/" width="1347" height="800"></iframe>
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



