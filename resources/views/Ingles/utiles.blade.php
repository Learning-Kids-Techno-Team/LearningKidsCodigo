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
           color: #0b3251;
           font-family: "Roboto", "Helvetica", "Arial", sans-serif;
       }

        #lt{
            color: #123c24 ;
            font-family: bold;
            font-size: 30px;
        }


        h4{
            text-decoration-color: #3B5686;
            text-align: center;
        }

        h2{
            text-align: center;
            color: #123c24 ;
            font-family: bold;
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
                <h2>!Comenzemos!</h2>
                <br><br><br>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mDrybc2/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview-1.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1X8quovBD7ghyU40Y6XhNbSI0tplTo_Sj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escarabajo : beetle</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/tcHWgMv/gratis-png-dibujos-animados-de-abejorro-abeja-volando-de-dibujos-animados-removebg-preview.png"   width="150"/>
                <iframe src="https://drive.google.com/file/d/1eEpM7yRRtEyQXFJOoCXNdnhisWSfhY9G/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Abeja: bee</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/ZzYFpzq/dibujos-animados-hormiga-linda-50699-290-removebg-preview.png"  width="138" />
                <iframe src="https://drive.google.com/file/d/1nnSTBc16Vq2AjpfLFEwl8H-UE3tYVCdI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hormiga: ant</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xg3Cwyt/781-7817992-mariposas-animadas-hd-png-download-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1yxFY4ZbKiuQMMRZTM1HTMPcSsPXRDZYX/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mariposa: butterfly</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mDrybc2/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview-1.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1X8quovBD7ghyU40Y6XhNbSI0tplTo_Sj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escarabajo : beetle</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/tcHWgMv/gratis-png-dibujos-animados-de-abejorro-abeja-volando-de-dibujos-animados-removebg-preview.png"   width="150"/>
                <iframe src="https://drive.google.com/file/d/1eEpM7yRRtEyQXFJOoCXNdnhisWSfhY9G/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Abeja: bee</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/ZzYFpzq/dibujos-animados-hormiga-linda-50699-290-removebg-preview.png"  width="138" />
                <iframe src="https://drive.google.com/file/d/1nnSTBc16Vq2AjpfLFEwl8H-UE3tYVCdI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hormiga: ant</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xg3Cwyt/781-7817992-mariposas-animadas-hd-png-download-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1yxFY4ZbKiuQMMRZTM1HTMPcSsPXRDZYX/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mariposa: butterfly</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mDrybc2/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview-1.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1X8quovBD7ghyU40Y6XhNbSI0tplTo_Sj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escarabajo : beetle</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/tcHWgMv/gratis-png-dibujos-animados-de-abejorro-abeja-volando-de-dibujos-animados-removebg-preview.png"   width="150"/>
                <iframe src="https://drive.google.com/file/d/1eEpM7yRRtEyQXFJOoCXNdnhisWSfhY9G/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Abeja: bee</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/ZzYFpzq/dibujos-animados-hormiga-linda-50699-290-removebg-preview.png"  width="138" />
                <iframe src="https://drive.google.com/file/d/1nnSTBc16Vq2AjpfLFEwl8H-UE3tYVCdI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hormiga: ant</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xg3Cwyt/781-7817992-mariposas-animadas-hd-png-download-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1yxFY4ZbKiuQMMRZTM1HTMPcSsPXRDZYX/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mariposa: butterfly</h2>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mDrybc2/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview-1.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1X8quovBD7ghyU40Y6XhNbSI0tplTo_Sj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escarabajo : beetle</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/tcHWgMv/gratis-png-dibujos-animados-de-abejorro-abeja-volando-de-dibujos-animados-removebg-preview.png"   width="150"/>
                <iframe src="https://drive.google.com/file/d/1eEpM7yRRtEyQXFJOoCXNdnhisWSfhY9G/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Abeja: bee</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/ZzYFpzq/dibujos-animados-hormiga-linda-50699-290-removebg-preview.png"  width="138" />
                <iframe src="https://drive.google.com/file/d/1nnSTBc16Vq2AjpfLFEwl8H-UE3tYVCdI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hormiga: ant</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xg3Cwyt/781-7817992-mariposas-animadas-hd-png-download-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1yxFY4ZbKiuQMMRZTM1HTMPcSsPXRDZYX/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mariposa: butterfly</h2>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/mDrybc2/escarabajo-ciervo-dibujos-animados-33070-2355-removebg-preview-1.png" width="150" />
                <iframe src="https://drive.google.com/file/d/1X8quovBD7ghyU40Y6XhNbSI0tplTo_Sj/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Escarabajo : beetle</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"   src="https://i.ibb.co/tcHWgMv/gratis-png-dibujos-animados-de-abejorro-abeja-volando-de-dibujos-animados-removebg-preview.png"   width="150"/>
                <iframe src="https://drive.google.com/file/d/1eEpM7yRRtEyQXFJOoCXNdnhisWSfhY9G/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Abeja: bee</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/ZzYFpzq/dibujos-animados-hormiga-linda-50699-290-removebg-preview.png"  width="138" />
                <iframe src="https://drive.google.com/file/d/1nnSTBc16Vq2AjpfLFEwl8H-UE3tYVCdI/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Hormiga: ant</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xg3Cwyt/781-7817992-mariposas-animadas-hd-png-download-removebg-preview.png"   width="140" />
                <iframe src="https://drive.google.com/file/d/1yxFY4ZbKiuQMMRZTM1HTMPcSsPXRDZYX/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Mariposa: butterfly</h2>
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


