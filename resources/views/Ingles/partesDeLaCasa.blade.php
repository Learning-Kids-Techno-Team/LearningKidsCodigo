@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Partes de la casa</title>
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
            background: aquamarine;
        }

        body{

            background:#d6e9f9;

        }


        #pa{
            text-align: justify;

        }


        p{
            text-align: justify;
            font-family: bold, Georgia;

        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
        }


        h1{
            font-family: Brush Script MT;
            size: 80px;
            color: #d6e9f9;

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

        h5{
            font-family: bold;
            padding-top: 20px;
            text-align: center;
        }
        li{
            text-align: justify;
        }



    </style>


</head>
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background:#009aae">
                <div class="row ml-5 mr-5">
                    <div class="col-md-7  mt-5" style="background: #CCDDCC">
                        <img class="mt-5 mx-auto d-block"  src="https://i.ibb.co/CVnn1pF/casa.jpg"     width=650"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #d6e9f9"  >
                        <h4 style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Partes de la casa</h3>
                        <p class="" id="pa">
                            <em>Es importante para nuestros niños comenzar a aprender desde casa a una temprana edad, y uno de los temas que con mayor facilidad se puede aprender en el hogar son las partes de la casa en inglés y en español, ya que desde el momento de su nacimiento comienzan a conocer el sitio donde habitan.
                            </em><br>

                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h2>
                    ¿Por qué es importante aprender las partes de la casa?
                </h2>
                <p>
                    A medida que los niños crecen, se hace más relevante para su proceso de aprendizaje el enseñarles las diferentes habitaciones de una casa en inglés y español, ya que ésto no solo amplia sus vocabularios en ambos idiomas, sino que también les ayuda a prepararse mejor para comenzar su educación.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-md-5">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/X2qcqvV/casa3.jpg"   width="400" />
            </div>
        </div>
    </div>




    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Las partes de la casa en inglés  (The parts of the house)</h1>
            </div>
        </div>
    </div>


    <!-- animales domesticos-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/wd3b4KN/dormitorio-Principal.jpg"  width="280" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1LUYdOPu2xJLjwgJrBGu8b6IUc-kj00C9/preview"  style="border: none" width="280" height="80"></iframe>
                <h2>Dormitorio principal:
                    Master bedroom
                </h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/7JMZn67/dormitorio.jpg"   width="260"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1O5Ze5XQpag0nlGeXY19C0G6_t7f9Y1Kt/preview"  style="border: none" width="260" height="80"></iframe>
                <h2>Dormitorio: Bedroom</h2>
            </div>
            <div class="col-md-3">

                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"   src="https://i.ibb.co/r61tSWp/banio.jpg"   width="300" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/18gmIZcZf6Q4ybfxuJM9kFQiKW54v-ktO/preview" style="border: none" width="300" height="80"></iframe>
                <h2>Cuarto de baño: Bathroom</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/qrth15K/sala.png"  width="278" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1TNu3KyhFOz_WXlGYwXZt_6bdKhUjFiSf/preview"  style="border: none" width="278" height="80"></iframe>
                <h2>Sala: Living room</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/G3vF3Kn/comedor.jpg" width="300" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1bNH3htmTyqjQrSmvpU2DcWwttu8ibxdC/preview"  style="border: none" width="300" height="80"></iframe>
                <h2>Comedor: Dinning room</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/k4HFRSM/Kitchen-interior-witn-furniture-cartoon-vector-illustration-Home-cooking-room-with-wooden-dining-tab.jpg"  width="300"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1bBKW-c73ZykXrAfEnzk1GEZtWV4FoFWu/preview"  style="border: none" width="300" height="80"></iframe>
                <h2>Cocina: Kitchen room</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/m5qYYrd/jardin.jpg" width="300" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1xtZ5_goJvOdQhzQeJYETGQieszKwmfz5/preview" style="border: none" width="300" height="80"></iframe>
                <h2>Jardin: Garden</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/vctZnZZ/cochera.jpg"   width="355" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/17-3qtk0hUxD6zoURo6JrOWWEA1YopxTN/preview"   style="border: none" width="355" height="80"></iframe>
                <h2>Cochera: Garage</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <div class="col-md-3">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/PjxXsnT/ventana2.jpg"   width="250"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1fuUDTUvu5EsVuSJnWyMedE0hp6jjiVUX/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Ventana: Window</h2>
            </div>
            <div class="col-md-3">
                <img class="mx-auto d-block" alt="Bootstrap Image Preview" src="https://i.ibb.co/s1kDMDz/puerta-Principal.jpg"  width="250" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1PPcvK9YhiR2DVBd6MzF9f6hSYNTG2U8v/preview"  style=" align-content: center; border: none " width="250" height="80"></iframe>
                <h2>Puerta principal: Front door</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"   src="https://i.ibb.co/zHzWqWL/techo3-removebg-preview.png"   width="250" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1Jpmi_Q2vlfoQuiCopdkVNRRU3M2Rlqv-/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Techo: Roof</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" alt="Bootstrap Image Preview"  src="https://i.ibb.co/nz7kghC/piso.jpg"    width="355" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1A3T46aYuKtmQ00G_f9iWgmR0s-mfTuiJ/preview" style="border: none" width="355" height="80"></iframe>
                <h2>Piso: Floor</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-6">
                <img class="mx-auto d-block" src="https://i.ibb.co/nCLk7Yy/pared.jpg"   width="300" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1DDCOYf1pu0oYuNzpzWpE8bxJCBHoAyl_/preview" style="border: none" width="300" height="80"></iframe>
                <h2>Pared: Wall</h2>
            </div>
            <div class="col-md-6">
                <img  class="mx-auto d-block" src="https://i.ibb.co/HxSxZdF/escalera.jpg"    width="300"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1mMtI6veiO_BdX2TidV9bxbjL4tWEb9wp/preview"  style="border: none" width="300" height="80"></iframe>
                <h2>escaleras: Stairs</h2>
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

