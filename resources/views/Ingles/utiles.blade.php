@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>

    <title>Utiles escolares</title>
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
                        <h1 class="mt-5" style="text-align: center">Útiles escolares en inglés<br><em>(School supplies in English)</em></h1>
                        <p class="" id="pa">
                        </p>
                    </div>
                    <div class="col-md-7  mt-5" style="background: #DCFECB">
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/jJ1XbLK/school-supplies-vector-set-removebg-preview.png">
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
                    Enseñar los útiles escolares en inglés  puede ser beneficioso para los jóvenes estudiantes. De esta manera, manejaras con facilidad los nombres de los materiales de clase, lo que a su vez te ayudará a sentirse más seguros de ti mismos y con más control de la situación.

                    Igualmente, al aprender los útiles de clase en inglés te ayudará con su proceso de aprendizaje en el colegio, de modo que te sentiras  más cómodos realizando las tareas que les asigne la maestra o maestro, y también te sentiras más calmado al interactuar con el resto de la clase. <br>

                   </h5>
                <h1 style="text-align: center">!Comencemos!</h1>
                <br><br><br>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/CtZcH14/png-clipart-compass-compas-compass-cartoon-removebg-preview.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1DCRXrRwKfxJe7mxl35Y23v4o8OU91JSC/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Compás: compass</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/HdGZLbV/kisspng-stopwatch-cartoon-clip-art-protactor-5b320e4fac4a96-0558369415300071197057-removebg-preview.png"    width="365"/>
                <iframe src="https://drive.google.com/file/d/1XctexSi9t3d8ZMUUWT6cZbSFjYS58g5_/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Transportador: protractor</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/N9MCfBy/49509-3-removebg-preview.png"   width="165" />
                <iframe src="https://drive.google.com/file/d/14DuAv97t4Gp-X-7RfpJI509EWuo8E0cj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Marcador: marker</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/ZfSD9rz/66-662806-papel-hojas-madera-escribir-plantilla-patrn-paper-hd-removebg-preview.png"    width="250" />
                <iframe src="https://drive.google.com/file/d/1Eli5QNCmye2SsD64uqiON2rvQSl9wwwD/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Papel: paper</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"  src="https://i.ibb.co/h7hjcDc/image-processing20200511-32371-69nvlc-removebg-preview.png"  width="140" />
                <iframe src="https://drive.google.com/file/d/1oy812texheoLiY5DyO8EFj7WtjQwSrPk/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Carpeta: folder</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/1R2NdCZ/image-processing20200511-25230-703d5g-removebg-preview.png"    width="145"/>
                <iframe src="https://drive.google.com/file/d/1wmvvpj0l8caFTXl2VuSkCgRHpXFnErxI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mapa: map</h2>
            </div>
            <div class="col-md-3">

                <img  class="mx-auto d-block" src="https://i.ibb.co/JdbbXC9/grapadora-oficina-plana-color-azul-72147494939-removebg-preview.png"   width="148" />
                <iframe src="https://drive.google.com/file/d/1GuW0_DKqr4g3Vu1SNPlAUhEZ0VfgHm6b/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Grapadora: stapler</h2>

            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/HthcZ2w/aplicar-pegamento-removebg-preview.png"   width="180"/>
                <iframe src="https://drive.google.com/file/d/1mjC17WJIi5vfhX3ULsjZLiapo6OihK2O/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Pegamento: glue</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">

                <img class="mx-auto d-block"   src="https://i.ibb.co/rfYfqfC/estuche-infantil-colegio-9970866-removebg-preview.png"  width="155" />
                <iframe src="https://drive.google.com/file/d/1za3N0y4WQaAoR0oMzmfWDI3iklYRfztM/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Estuche: pencil case</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/wyzMTBf/Paperclip-01-xndr-removebg-preview.png"  width="155"/>
                <iframe src="https://drive.google.com/file/d/1038WeuhiXeLSCZvcq5_EMj9TgbP9qFmY/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Sujetapapeles/clip: clip</h2>
            </div>
            <div class="col-md-3">

                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/3MYjdLn/depositphotos-11908678-stock-illustration-eraser-removebg-preview.png" width="153" />
                <iframe src="https://drive.google.com/file/d/1CA5VRfwOjmazto5TEfvy1v4v7sJRZ-Z5/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Borrador/goma de borrar: eraser/rubber</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/3r6cPJ6/pngtree-brown-computer-desk-cartoon-table-cabinet-illustration-table-illustration-png-image-449705-r.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1EVLDqLKBJK8TZtTZDgJKouv_YGRjQGSz/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escritorio: desk</h2>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">

                <img class="mx-auto d-block"   src="https://i.ibb.co/VjyVt5z/png-clipart-carteira-escolar-chair-furniture-table-desk-chair-angle-office-removebg-preview.png"  width="150" />
                <iframe src="https://drive.google.com/file/d/1ofEUxV-nsMwQWt5qKExAgti1Zcl7kuUL/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Silla: chair</h2>
            </div>
            <div class="col-md-3">
                <br><br><br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/R9zXH2h/10e9aac158c97c8e420f32c500b61b35-removebg-preview.png"    width="160"/>
                <iframe src="https://drive.google.com/file/d/12l9FRCdq5oxFGTLYyINaN-zPHkn3xVYF/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Tijeras: scissors</h2>
            </div>
            <div class="col-md-3">
                <br><br><br><br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/1QTKTk5/istockphoto-942881434-170667a-removebg-preview.png"   width="145" />
                <iframe src="https://drive.google.com/file/d/1HlAmKZP3RyhcRhxzrvC2Ep03-vOAcbGi/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Regla: ruler</h2>

            </div>
            <div class="col-md-3">
                <br><br><br><br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/M7Cq1Fr/png-transparent-harold-and-the-purple-crayon-crayola-crayola-s-pencil-text-color-removebg-preview.png"  width="140" />
                <iframe src="https://drive.google.com/file/d/1c-0pnLu3ddEMe9DvBILAtsVNm6FXkn7v/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Crayones: crayons</h2>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/sv0MHWw/3125-removebg-preview.png"  width="150" />
                <iframe src="https://drive.google.com/file/d/1vpMs7gxZ6fhdE-a-xmxwJWF7oVs6aZn4/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Lápiz: pencil</h2>
            </div>
            <div class="col-md-3">
                <br><br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/j8xjxQz/png-transparent-cartoon-book-closed-book-perfect-comic-book-yellow-material-rectangle-removebg-previ.png"    width="180"/>
                <iframe src="https://drive.google.com/file/d/1eeJx2r7rxlMKk_YjAaSfBaDN5svQMh1N/preview" style="border: none" width="250" height="80"></iframe>
                <h2>libro: book</h2>
            </div>
            <div class="col-md-3">
                <br>

                <img  class="mx-auto d-block" src="https://i.ibb.co/Qv1WT6M/dibujos-animados-mochila-escolar-24640-54592-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1uAuovAAXCcm9UD94IqVm-hoChG4rEfYf/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mochila: backpack</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/FW0dxnj/istockphoto-1085027454-170667a-removebg-preview.png"    width="165" />
                <iframe src="https://drive.google.com/file/d/1bsbAQiaUILOjQaLLbPNDzld4sBG-TD6z/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Computadora: computer</h2>
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


