@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Familia miembros</title>
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

        body{

            background:lightyellow;

        }

        .card{
            background: #d7f3e3;
            border: #FDFD96 6px dashed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


        }

        #pa{
            text-align: justify;


        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }

        #separadorInferior .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }

        h1{
            font-family: Brush Script MT;
            size: 80px;

        }
        h3{
            font-style:italic;


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
            background: aquamarine;
        }
        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }

        #bord{
            background: lightblue;
            border: #fff6af 15px dashed;
        }

    </style>


</head>
<body>
<!-- navbar-->
@section('content')

    <!-- contenedor text-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background: #fff6af ">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #DCFECB">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/rvjchTH/afami-removebg-preview-2.png">
                    </div>
                    <div class="col-xl-5  mt-5 " style=" background: lightyellow"  >
                        <h4  class="mt-5" style="color: #3B5686"><em>Inglés</em></h4>
                        <h3 class="mt-5" style="text-align: center">Miembros de la familia (Family members)</h3>
                        <p class="" id="pa">
                            <br>Vamos a ver la mejor forma de aprender los miembros de la familia en inglés para niños.
                            Las relaciones familiares (family relations) no sólo ayudan a moldear la forma en que los niños ven al mundo
                            y a todo lo que les rodea.
                            <br>
                            <br>Para los niños, saber los nombres de los miembros de la familia y conocerles significa pertenecer a algo importante.
                            Es por esto que al ayudarles a identificar correctamente las relaciones entre los familiares, y los nombres de la familia
                            en inglés les ayuda a conocer su familia y el parentesco (kinship)
                            <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contenedor miembros familia-->
    <div class="container-fluid mt-5"><h2 class="mt-5"><strong><em>¡Miembros de la familia en inglés!</em></strong></h2><br>
            <div class="row m-3">
                <div class="col-md-4">
                    <img class="mx-auto d-block" src="https://i.ibb.co/R0styB9/muj-removebg-preview.png" width="350" height="250">
                <h2 class="mt-5">
                    Madre: <strong>mother</strong>
                </h2>
                    <iframe  width="300" height="80"></iframe>
            </div>
                <div class="col-md-4">
                    <img class="mx-auto d-block" src="https://i.ibb.co/k14MGmK/papa-removebg-preview.png" width="350" height="250">
                    <h2 class="mt-5">
                        Padre: <strong>father</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>
                </div>
                <div class="col-md-4">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Sv31ckh/tni-a3-removebg-preview.png" width="350" height="250">
                    <h2 class="mt-5">
                        Hija: <strong>daughter</strong>
                    </h2>
                    <iframe  width="300" height="80"></iframe>

                </div>
            </div>
    </div>

    <!-- contenedor miembros familia-->
    <div class="container-fluid mt-5">
        <div class="row m-3">
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/gtt8fdr/ni-2-removebg-preview.png" width="350" height="250">
                <h2 class="mt-5">
                   Hijo: <strong>son</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/S6b3kwX/bebe-removebg-preview.png" width="230" height="170">
                <h2 class="mt-5">
                    Bebé: <strong>baby</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/rZrw3jM/abu-removebg-preview.png" width="300" height="250">
                <h2 class="mt-5">
                    Abuela: <strong>grandmother</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>

            </div>
        </div>
    </div>

    <!-- contenedor miembros familia-->
    <div class="container-fluid mt-5">
        <div class="row m-3">
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/vdZF9s0/felizni-a-removebg-preview.png" width="300" height="220">
                <h2 class="mt-5">
                    Nieta: <strong>granddaughter</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/hmZ1LB1/abue-removebg-preview.png"  width="350" height="250">
                <h2 class="mt-5" >
                    Abuelo: <strong>grandfather</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/x8rLVB7/ni-ofeliz-removebg-preview.png" width="300" height="220">
                <h2 class="mt-5">
                    Nieto: <strong>grandson</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>

            </div>
        </div>
    </div>


    <!-- contenedor miembros familia-->
    <div class="container-fluid mt-5">
        <div class="row m-3">
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/GCgzYk8/mother-removebg-preview.png" width="350" height="250">
                <h2 class="mt-5">
                    Tia: <strong>aunt</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/LgZzHyN/tio-removebg-preview.png" width="350" height="250">
                <h2 class="mt-5">
                    Tio: <strong>uncle</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>
            </div>
            <div class="col-md-4">
                <img class="mx-auto d-block" src="https://i.ibb.co/hfJfc7x/prii-removebg-preview.png" width="350" height="250">
                <h2 class="mt-5">
                    Primo/a: <strong>cousin</strong>
                </h2>
                <iframe  width="300" height="80"></iframe>

            </div>
        </div>
    </div>



    <!-- contenedor tree-->
    <div class="container-fluid mt-5 "><h2 class="mt-5"><strong><em>¡El parentesco en inglés!</em></strong></h2>
            <div class="row m-3">
                <div class="col-md-12" style="background: #DCFECB">
                    <p style="text-align: center">
                        <br>El árbol genealógico <strong><em>family tree:</em></strong>
                        <br>es como se distribuye cada miembro familiar dentro del marco de la familia y se define el parentesco.
                        <br>En esta imagen podemos visualizar de manera muy clara el diferente parentesco en inglés de cada miembro.
                        <br>
                    </p>
                </div>

                <div class="col-md-12 mb-5" style="background: #DCFECB ">
                    <img class="mx-auto d-block" src="https://i.ibb.co/Y0C4n73/image001.jpg" >
                </div>
             </div>
    </div>



    <!-- Video -->
    <div  class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center"><strong><em>
                    Y ahora vamos a ver un video para aprender la correcta pronunciación de cada uno
                    <br>de los miembros de la familia en inglés con esta divertida canción. ¡Vamos a cantar!
                    <br></em></strong>
                </h2>
                <iframe id="bord" class="mx-auto d-block"  width="670" height="390"></iframe>
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

