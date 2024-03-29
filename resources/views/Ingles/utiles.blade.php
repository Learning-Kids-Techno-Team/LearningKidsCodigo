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


        h2{
            text-align: center;

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


        #bord{
            background:#DCFECB;
            border: #fff6af 15px dashed;
        }
        #play{
            width: 100%;
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
                        <br>
                        <h3  class="text-center"><em>Inglés</em></h3>
                        <h1 class="text-center" style="text-align: center">Útiles escolares en inglés<br><em>(School supplies in English)</em></h1>
                        <p class="" id="pa">
                        </p>
                    </div>
                    <div class="col-xl-7  mt-5" style="background: #DCFECB">
                        <br>
                        <img class="mx-auto d-block"
                             src="https://i.ibb.co/jJ1XbLK/school-supplies-vector-set-removebg-preview.png"
                        width="350">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 p-2">
                <br><br><br>
                <h5>
                    Enseñar los útiles escolares en inglés  puede ser beneficioso para los jóvenes estudiantes. De esta manera, manejaras con facilidad los nombres de los materiales de clase, lo que a su vez te ayudará a sentirse más seguros de ti mismos y con más control de la situación.

                    Igualmente, al aprender los útiles de clase en inglés te ayudará con su proceso de aprendizaje en el colegio, de modo que te sentiras  más cómodos realizando las tareas que les asigne la maestra o maestro, y también te sentiras más calmado al interactuar con el resto de la clase. <br>

                   </h5>
                <br><br><br>
                <h1 style="text-align: center">!Comencemos!</h1>
                <br><br>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"
                     src="https://i.ibb.co/CtZcH14/png-clipart-compass-compas-compass-cartoon-removebg-preview.png"
                     width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/1.mp3" controls >
                </audio>
                <h2 class="text-center "  >Compás:
                    compass</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/HdGZLbV/kisspng-stopwatch-cartoon-clip-art-protactor-5b320e4fac4a96-0558369415300071197057-removebg-preview.png"    width="365"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/2.mp3" controls >
                </audio>
                <h2>Transportador: protractor</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/N9MCfBy/49509-3-removebg-preview.png"   width="165" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/3.mp3" controls >
                </audio>
                <h2>Marcador: marker</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/ZfSD9rz/66-662806-papel-hojas-madera-escribir-plantilla-patrn-paper-hd-removebg-preview.png"    width="250" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/4.mp3" controls >
                </audio>
                <h2>Papel: paper</h2>
               </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"  src="https://i.ibb.co/h7hjcDc/image-processing20200511-32371-69nvlc-removebg-preview.png"  width="140" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/5.mp3" controls >
                </audio>
                <h2>Carpeta: folder</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/1R2NdCZ/image-processing20200511-25230-703d5g-removebg-preview.png"    width="145"/>
               <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/6.mp3" controls >
                </audio>
                <h2>Mapa: map</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">

                <img  class="mx-auto d-block" src="https://i.ibb.co/JdbbXC9/grapadora-oficina-plana-color-azul-72147494939-removebg-preview.png"   width="148" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/7.mp3" controls >
                </audio>
                <h2>Grapadora: stapler</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/HthcZ2w/aplicar-pegamento-removebg-preview.png"   width="180"/>
            <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/8.mp3" controls >
                </audio>
                <h2>Pegamento: glue</h2>
            </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">

                <img class="mx-auto d-block"   src="https://i.ibb.co/rfYfqfC/estuche-infantil-colegio-9970866-removebg-preview.png"  width="155" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/9.mp3" controls >
                </audio>
                <h2>Estuche: pencil case</h2>
            </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/wyzMTBf/Paperclip-01-xndr-removebg-preview.png"  width="155"/>
            <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/10.mp3" controls >
                </audio>
                <h2>Sujetapapeles/clip: clip</h2>
            </div>
            </div>
            <div class="col-xl-3 p-2">

                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/3MYjdLn/depositphotos-11908678-stock-illustration-eraser-removebg-preview.png" width="153" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/11.mp3" controls >
                </audio>
                <h2>Borrador/goma de borrar: eraser/rubber</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/3r6cPJ6/pngtree-brown-computer-desk-cartoon-table-cabinet-illustration-table-illustration-png-image-449705-r.png"   width="140" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/12.mp3" controls >
                </audio>
                <h2>Escritorio: desk</h2>
            </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">

                <img class="mx-auto d-block"   src="https://i.ibb.co/VjyVt5z/png-clipart-carteira-escolar-chair-furniture-table-desk-chair-angle-office-removebg-preview.png"  width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/13.mp3" controls >
                </audio>
                <h2>Silla: chair</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br><br><br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/R9zXH2h/10e9aac158c97c8e420f32c500b61b35-removebg-preview.png"    width="160"/>
              <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/14.mp3" controls >
                </audio>
                <h2>Tijeras: scissors</h2>
            </div>
            </div>
            <div class="col-xl-3 p-2">
                <br><br><br><br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/1QTKTk5/istockphoto-942881434-170667a-removebg-preview.png"   width="145" />
            <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/15.mp3" controls >
                </audio>
                <h2>Regla: ruler</h2>
            </div>
            </div>
            <div class="col-xl-3 p-2">
                <br><br><br><br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/M7Cq1Fr/png-transparent-harold-and-the-purple-crayon-crayola-crayola-s-pencil-text-color-removebg-preview.png"  width="140" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/16.mp3" controls >
                </audio>
                <h2>Crayones: crayons</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"   src="https://i.ibb.co/sv0MHWw/3125-removebg-preview.png"  width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/17.mp3" controls >
                </audio>
                <h2>Lápiz: pencil</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br><br>
                <img  class="mx-auto d-block"   src="https://i.ibb.co/j8xjxQz/png-transparent-cartoon-book-closed-book-perfect-comic-book-yellow-material-rectangle-removebg-previ.png"    width="180"/>
               <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/18.mp3" controls >
                </audio>
                <h2>libro: book</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>

                <img  class="mx-auto d-block" src="https://i.ibb.co/Qv1WT6M/dibujos-animados-mochila-escolar-24640-54592-removebg-preview.png"   width="140" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/19.mp3" controls >
                </audio>
                <h2>Mochila: backpack</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/FW0dxnj/istockphoto-1085027454-170667a-removebg-preview.png"    width="165" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/utiles/20.mp3" controls >
                </audio>
                <h2>Computadora: computer</h2>
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


