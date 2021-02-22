@extends('layouts.app')

    <!DOCTYPE html>
<div lang="en">
    <head>
        <meta charset="utf-8">

        <title>Colores</title>
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

            body {
                background: #FEF9E7;
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
                background: aquamarine;
            }



            .navbar{
                background: aquamarine;

            }




            p{
                margin-left:15%;
                margin-right: 15%;
                text-align: justify;
                font-style: italic;

            }
            #borde{
                border: #16A085 double 8px;
            }

            #pa{
                text-align: justify;

            }
            #bor{
                border: #16A085 double 5px;
            }
            .card{

                background:white;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;

            }



        </style>
    </head>
    <!-- navbar-->
    @section('content')


        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-7 mt-5" >
                    <h2 style="text-align: center">
                        Colores en ingles/Colors in English
                    </h2>
                    <p>
                        <strong><br>Los colores ayudan a los niños a organizar su mundo. Aprender los colores en inglés y español es una parte
                            esencial en el desarrollo de los niños.
                            <br><br> Son una herramienta de comunicación muy útil para ellos, ya que pueden tener influencia en el ánimo y la percepción
                            <br>de las cosas.
                        </strong></p>
                </div>
                <div class="col-md-5">
                    <img class=" mx-auto d-block" src="https://i.ibb.co/9ZsF5W0/colores-removebg-preview.png"   width="450" />
                </div>
            </div>
        </div>



        <div class="container-fluid  center-block pl-5" >
            <br><br>
            <div  class="container-fluid">
                <div class="row">
                    <div class="col-md-12  mb-5" id="bor" style="background: #ABEBC6">
                        <h3 style="text-align: center">Colores primarios/
                            Primary colors: <br>Son los más básicos de la lista, ya que no se pueden obtener mezclando otros colores. </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid " id="banderin" >
            <div class="row " >
                <div class="col-md-12">
                    <img src="https://i.ibb.co/FzMXF3V/pintura-removebg-preview.png"    height="150" class="mx-auto d-block" >
                </div>
            </div>

            <!-- contenedor-->

        <div class="row m-5" >
            <div class="col-md-4" >
                <div class="card" style="width: 20rem;  border: blue solid 8px;">

                    <img class=" mx-auto d-block"  src="https://i.ibb.co/LCvx9Pp/azul-removebg-preview.png"   width="200" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Azul / Blue</em></h2>
                    <iframe src="https://drive.google.com/file/d/1gtBFsRgR2c_9AOb2myB3xuF_0ntmi60H/preview" width="300" height="80"></iframe>

                </div>
            </div>
            <div class="col-md-4">
                <h2 ><em><br></em></h2>
                <div class="card" style="width: 20rem; border: red solid 8px;">

                    <img class="mx-auto d-block" src="https://i.ibb.co/YL3RGTL/rojo-removebg-preview.png"    width="200" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Rojo / Red</em></h2>
                    <iframe src="https://drive.google.com/file/d/1jsx3nXYN6hbVENz6nkoH2M_42ByisNH5/preview"  width="300" height="80"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <h2 ><em><br><br></em></h2>
                <div class="card" style="width: 20rem; border: yellow solid 8px;">
                    <img class="mx-auto d-block"  src="https://i.ibb.co/bbBcSKS/amarilla-removebg-preview.png"   width="200" height="200">
                    <h2 class="mx-auto d-block" id="color"><em>Amarillo  / Yellow </em></h2>
                    <iframe src="https://drive.google.com/file/d/1kyS3Q-wWbFz1sWKpShTZNN2tefVXmyIK/preview" width="300" height="80"></iframe>
                </div>
            </div>

        </div>
</div>

</div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" id="bor" style="background: #EDBB99">
            <h3 style="text-align: center">Colores secundarios/Secondary colors:
                <br>Los colores que se obtienen mezclando un par de colores primarios.
                 </h3>
        </div>
    </div>
</div>

<!-- contenedor-->

<div class="row m-5" >
    <div class="col-md-4" >
        <div class="card" style="width: 20rem;border: green solid 8px;">

            <img class=" mx-auto d-block" src="https://i.ibb.co/YdnyBs6/verde-removebg-preview.png"  width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em> Azul+Amarillo=Verde<br><br> Blue+Yellow=Green</em></h4>
            <iframe src="https://drive.google.com/file/d/1XWP2BJc3OBgfskO-3eEmB2eMLam0gjmS/preview" width="300" height="80"></iframe>


        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br></em></h2>
        <div class="card" style="width: 20rem;border: orange solid 8px;">
            <img class="mx-auto d-block"  src="https://i.ibb.co/rf9qRsR/naranja-removebg-preview.png"   width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Amarillo+Rojo=Naranja <br><br> Yellow+Red=Orange </em></h4>
            <iframe src="https://drive.google.com/file/d/134_78TMSQOr8b6xHB-6EgcxADaRmde3R/preview" width="300" height="80"></iframe>
        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br><br></em></h2>
        <div class="card" style="width: 20rem;border: purple solid 8px;">
            <img class="mx-auto d-block"src="https://i.ibb.co/xJ8g68F/pintura-morada-removebg-preview.png"  width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Azul+Rojo=Morado<br><br>Blue+Red=Purple</em></h4>
            <iframe src="https://drive.google.com/file/d/1iFLoi5iQOzB8FbN9BahCUM9v-JmP99vL/preview" width="300" height="80"></iframe>
        </div>
    </div>

</div>
</div>
<div  class="container-fluid">
<div class="row">
    <div class="col-md-12  mb-5" id="bor" style="background:  #F9E79F">
        <h3 style="text-align: center">Colores terciarios/Tertiary colors:
            <br>Aquellos colores que surgen de la mezcla entre los colores secundarios y los primarios.
        </h3>
    </div>
</div>
</div>

<!-- contenedor-->

<div class="row m-5" >
    <div class="col-md-4" >
        <div class="card" style="width: 20rem;border: brown solid 8px;">

            <img class=" mx-auto d-block" src="https://i.ibb.co/C2fL0Vd/marron-removebg-preview.png"   width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em> Verde+Rojo=Marrón<br><br> Green+Red=Brown</em></h4>
            <iframe src="https://drive.google.com/file/d/1seKFYDUmvs5OuwKpjmOQKs0JGUER6ASg/preview" width="300" height="80"></iframe>


        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br></em></h2>
        <div class="card" style="width: 20rem;border: teal solid 8px;">
            <img class="mx-auto d-block" src="https://i.ibb.co/1rCjpPH/verdeaz-removebg-preview.png"    width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Azul+Verde=Verde azulado<br><br> Blue+Green=Teal </em></h4>
            <iframe src="https://drive.google.com/file/d/18HtFEfBIkTeOZaqxbBymGcRqXLRgblXk/preview" width="300" height="80"></iframe>
        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br><br></em></h2>
        <div class="card" style="width: 20rem;border: lime solid 8px;">
            <img class="mx-auto d-block" src="https://i.ibb.co/KVZYczT/lima-removebg-preview.png"  width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Amarillo+Verde=Lima <br><br>Yellow+Green=Lime</em></h4>
            <iframe src="https://drive.google.com/file/d/1nlAlDh92vXhYWdtb93lSqaBQldfEkF6f/preview" width="300" height="80"></iframe>
        </div>
    </div>
</div>
</div>
<div  class="container-fluid">
    <div class="row">
        <div class="col-md-12  mb-5" id="bor" style="background: #FFE4B5">
            <h3 style="text-align: center">otros colores/Other colors
            </h3>
        </div>
    </div>
</div>

<!-- contenedor-->

<div class="row m-5" >
    <div class="col-md-4" >
        <div class="card" style="width: 20rem;border: pink solid 8px;">

            <img class=" mx-auto d-block" src="https://i.ibb.co/1s7py4S/pink-removebg-preview.png"    width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em> Rosa / Pink</em></h4>
            <iframe src="https://drive.google.com/file/d/17EZxsP3ewVZLv5mCR-dr39CSbI6UapF5/preview" width="300" height="80"></iframe>


        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br></em></h2>
        <div class="card" style="width: 20rem;border: black solid 8px;">
            <img class="mx-auto d-block" src="https://i.ibb.co/kHrSRtB/neg-removebg-preview.png"    width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Negro / Black </em></h4>
            <iframe src="https://drive.google.com/file/d/1uN3hvZYKgQ5Cm95BW2IK0mIWlpD7AxP6/preview" width="300" height="80"></iframe>
        </div>
    </div>
    <div class="col-md-4">
        <h2 ><em><br><br></em></h2>
        <div class="card" style="width: 20rem;border: whitesmoke solid 8px;">
            <img class="mx-auto d-block" src="https://i.ibb.co/W2pHD7q/blanco.png"   width="200" height="200">
            <h4 class="mx-auto d-block" id="color"><em>Blanco / White</em></h4>
            <iframe src="https://drive.google.com/file/d/1ww9WZJyvsiHKggSFl1YPbgzfPGtbXve4/preview" width="300" height="80"></iframe>
        </div>
    </div>
</div>
    <!-- contenedor-->

    <div class="row m-5" >
        <div class="col-md-4" >
            <div class="card" style="width: 20rem;border: gray solid 8px;">

                <img class=" mx-auto d-block" src="https://i.ibb.co/JnWLvfn/gris-removebg-preview.png"     width="200" height="200">
                <h4 class="mx-auto d-block" id="color"><em> Gris / Gray </em></h4>
                <iframe src="https://drive.google.com/file/d/162vfwIVAZ3vKT_ozHBjZi8ptbUSXkHG-/preview" width="300" height="80"></iframe>


            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br></em></h2>
            <div class="card" style="width: 20rem;border: navy solid 8px;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/TtpXvq3/nav.png"     width="200" height="200">
                <h4 class="mx-auto d-block" id="color"><em>Azul marino/ Navy </em></h4>
                <iframe src="https://drive.google.com/file/d/1puwI1vYzQQ5wvM5y2j1gRjW-Qwc4425q/preview" width="300" height="80"></iframe>
            </div>
        </div>
        <div class="col-md-4">
            <h2 ><em><br><br></em></h2>
            <div class="card" style="width: 20rem;border: lightblue solid 8px;">
                <img class="mx-auto d-block"  src="https://i.ibb.co/DVCkJkK/celeste-removebg-preview.png"   width="200" height="200">
                <h4 class="mx-auto d-block" id="color"><em>Azul celeste/ Light blue</em></h4>
                <iframe src="https://drive.google.com/file/d/1rtwC0vzTbZ8kbM7wt6_8dlrUdPwGd3b4/preview"  width="300" height="80"></iframe>
            </div>
        </div>



</div>
</div>
<div class="container-fluid " id="banderin" >
    <div class="row " >
        <div class="col-md-12">
            <img src="https://i.ibb.co/FzMXF3V/pintura-removebg-preview.png"    height="150" >
        </div>
    </div>


</div>
</div>
<!-- separador -->
<div id="separadorInferior">
    <div class="content">
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

@endsection


