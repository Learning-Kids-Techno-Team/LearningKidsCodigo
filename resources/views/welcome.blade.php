

@extends('layouts.inicio', ['class' => 'off-canvas-sidebar',
'activePage' => 'login', 'title' => __()])

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Cerrar Sesion</title>
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


     p{
         text-align: justify;

     }
     h1{
         text-decoration-color: #9368e9;
     }
     img{
        color: #9368e9;
     }
    </style>


</head>
<body >

@section('content')
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
            <div class="col-md-9 ml-auto mr-auto mb-3 text-center">

            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

                @csrf

                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-info text-center">

                        <img  src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="100">
                    </div>
                    <div class="card-body">

                        <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <h3 class=" center-block pl-5">Gracias por visitarnos</h3>
                                <img  height="250" class="mx-auto d-block " src="https://i.ibb.co/FXH5tWL/vid.png"  >
                            </div>
                            @if ($errors->has('email'))
                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>

                    </div>



                </div>
            </div>
        </div>
@endsection


