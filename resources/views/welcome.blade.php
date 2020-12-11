

@extends('layouts.inicio', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __()])
    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>


     p{
         text-align: justify;

     }
     h1{
         background: #0a6ebd;
     }
     img{
         background: #0a6ebd;
     }
    </style>


</head>
<body >

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-5">
                <img class="mx-auto d-block" src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png">

                <h1 class="mb-5" style="text-align: center">
                    <br>
                    <br>
                    <br>
                    BIENVENIDO(A) A LEARNING KIDS
                    <br>
                    <br>
                    <br>

                </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <br>
                <br>
                <br>


                <h2 style="text-align: center">
                    Acerca de la pagina
                </h2>
                <p style="text-align: justify" class="mr-5 ml-5">
                    Es una forma divertida y gratuita para que tus hijos aprendan,
                    refuercen y/o desarrollen hábilidades sobrecuatro materias básicas
                    (matemáticas, español,ciencias naturales y ciencias sociales). Todo
                     el contenido acerca de educación básica preescolar recopilado en una
                     sola plataforma con el objetivo de lograr una mayor facilitación de
                     enseñanza y aprendizaje para sus niños. Este espacio es una herramienta
                     útil para reforzar el conocimiento no solo de nuestros niños sino también
                     permite una mayor didáctica si eres educador o maestro; es por ello que la
                    información de esta pagina web esta abierta para todo tipo de usuario.
                </p>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
