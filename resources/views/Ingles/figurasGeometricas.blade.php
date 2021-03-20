@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Figuras Geometricas</title>
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

            background:#fff6af;

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
            color: #0b3251;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        }




        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #0b3251;
            font-family: bold;
            background-image: url("https://i.ibb.co/FVpRGSC/text-background-plate-5a3bff7ca8e220-5994791815138814686918-removebg-preview.png");
        }

        h3{
            text-align: center;
            color: #123c24 ;
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
            background:#DCFECB;
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
            <div class="col-md-12" style="background: #fff6af">
                <div class="row ml-5 mr-5">
                    <div class="col-xl-5  mt-5 " style=" background: #DCFECB" >
                        <h3  class="mt-5" style="color: #3B5686"><em>Inglés</em></h3>
                        <h1 class="mt-5" style="text-align: center">Formas y Figuras Geométricas en inglés<br></h1>
                        <p class="" id="pa">
                        </p>
                    </div>
                    <div class="col-md-7  mt-5" style="background: #DCFECB">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/7Qdkznp/area-y-perimetro-figuras-geometricas-removebg-preview.png" >

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br><br><br>
                <h5>
                    Al aprender las figuras geométricas en inglés, adquieres un variado conjunto de habilidades tales como la comunicación verbal, que resulta útil cuando practican las descripciones de las cosas que pueden ver, bases para lectura y escritura ya que obtienen lo fundamental para la identificación de las letras y números, bases de geometría que te servirán en el futuro proceso de aprendizaje de matemáticas, y creatividad. Todas estas habilidades mejorarán significativamente tus experiencias de vida, permitiéndoles interactuar de una mejor manera con el mundo,
                    estableciendo conexiones útiles entre los objetos y otorgándoles una mejor apreciación del arte.
                </h5>
                <h1 style="text-align: center">!Comencemos!</h1>
                <br><br><br>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/3BNMwnZ/ef4548d1309854ac3bb1ad6b582a4b38-removebg-preview.png"  width="180" />
                <iframe src="https://drive.google.com/file/d/1DCRXrRwKfxJe7mxl35Y23v4o8OU91JSC/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Circle – círculo</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/1QSkMZN/istockphoto-1208851179-170667a-removebg-preview.png" alt="istockphoto-1208851179-170667a-removebg-preview"    width="220"/>
                <iframe src="https://drive.google.com/file/d/1XctexSi9t3d8ZMUUWT6cZbSFjYS58g5_/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Diamond – diamante</h2>
            </div>
            <div class="col-md-3">

                <img  class="mx-auto d-block" src="https://i.ibb.co/9ty9vLZ/vector-plano-del-dise-o-del-amor-del-emoticon-del-coraz-n-del-personaje-de-dibujos-animados-del-kawa.png"    width="168" />
                <iframe src="https://drive.google.com/file/d/14DuAv97t4Gp-X-7RfpJI509EWuo8E0cj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Heart – corazón</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/f2BBjMB/png-clipart-hexagon-cartoon-drawing-hexagon-shape-smiley-polygon-removebg-preview.png"    width="200" />
                <iframe src="https://drive.google.com/file/d/1Eli5QNCmye2SsD64uqiON2rvQSl9wwwD/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hexagon - hexágono</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/wKZ2rQ5/13f2f7d681f293147cd203c43ff8b230-removebg-preview.png"   width="185" />
                <iframe src="https://drive.google.com/file/d/1oy812texheoLiY5DyO8EFj7WtjQwSrPk/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Rectangle – rectángulo</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/2738FZL/png-transparent-geometric-shape-disk-rectangle-geometry-emoticon-square-angle-text-triangle-removebg.png"     width="145"/>
                <iframe src="https://drive.google.com/file/d/1wmvvpj0l8caFTXl2VuSkCgRHpXFnErxI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Square – cuadrado</h2>
            </div>
            <div class="col-md-3">

                <img  class="mx-auto d-block" src="https://i.ibb.co/X5SwPDQ/png-clipart-cartoon-stars-cartoon-star-removebg-preview.png"   width="115" />
                <iframe src="https://drive.google.com/file/d/1GuW0_DKqr4g3Vu1SNPlAUhEZ0VfgHm6b/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Star – estrella</h2>

            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/N3d7WCP/02811416b8649deb6acb07722f826382-removebg-preview.png"    width="150"/>
                <iframe src="https://drive.google.com/file/d/1mjC17WJIi5vfhX3ULsjZLiapo6OihK2O/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Trapezoid – trapezoide</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">

                <img class="mx-auto d-block"  src="https://i.ibb.co/cx7S72V/triangle-5258735-960-720-removebg-preview.png"  width="155" />
                <iframe src="https://drive.google.com/file/d/1za3N0y4WQaAoR0oMzmfWDI3iklYRfztM/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Triangle – triángulo</h2>
            </div>
            <div class="col-md-3">

                <img  class="mx-auto d-block"   src="https://i.ibb.co/v1K69nt/depositphotos-205275746-stock-illustration-two-finger-parallelogram-character-cartoon-removebg-previ.png"  width="192"/>
                <iframe src="https://drive.google.com/file/d/1038WeuhiXeLSCZvcq5_EMj9TgbP9qFmY/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Parallelogram - paralelogramo</h2>
            </div>
            <div class="col-md-3">


                <img  class="mx-auto d-block" src="https://i.ibb.co/3BkL6Nz/2dce1ec378f622f7936e77a72cef76da-removebg-preview.png"  width="165" />
                <iframe src="https://drive.google.com/file/d/1CA5VRfwOjmazto5TEfvy1v4v7sJRZ-Z5/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Diamond – rombo</h2>

            </div>
            <div class="col-md-3">
                <br><br>
                <img  class="mx-auto d-block"  img src="https://i.ibb.co/189nK8x/png-transparent-oval-blog-oval-s-smiley-website-emoticon-removebg-preview.png"   width="175" />
                <iframe src="https://drive.google.com/file/d/1EVLDqLKBJK8TZtTZDgJKouv_YGRjQGSz/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Oval - ovalo</h2>
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


