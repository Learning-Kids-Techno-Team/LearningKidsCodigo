@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">


    <title>Prendas de vestir </title>
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

            background:#FEEFE5;

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
                        <img class="mt-5 mx-auto d-block" src="https://i.ibb.co/PtnntQy/prendas-removebg-preview.png"      width="500"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #FCE2D1"  >
                        <h4 style="color: #3B5686">Inglés</h4>
                        <h3 class="mt-5" style="text-align: center">Prendas de vestir</h3>
                        <p class="" id="pa">
                            <em>Vestirse es una de las actividades que comienza a muy temprana edad, claro, primero con ayuda de mamá y papá, pero luego los peques se vuelven más independientes y toman un rol más activo a la hora de elegir su ropa y vestirse.
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
                    ¿Por qué es importante aprender el nombre de las prendas de vestir?
                </h2>
                <p>
                    A medida que los peques comienzan a involucrarse más en la rutina diaria de vestirse, desarrollan importantes habilidades motoras al dominar el proceso de abotonar sus camisas, atar sus zapatos, o mantener el equilibrio al ponerse los pantalones (trousers). Igualmente, su vocabulario se hace más rico y su percepción sobre el espacio-tiempo se agudiza al aprender qué tipo de prendas de vestir (clothes) se deben usar para determinadas situaciones o para los diferentes climas.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-md-5">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/ZcT86y1/prendas2-removebg-preview.png"   width="450" />
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Tops: son prendas de ropa que se usan en la parte superior del cuerpo, tales como blusas o camisas en inglés</h1>
            </div>
        </div>
    </div>


    <!-- animales domesticos-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"  src="https://i.ibb.co/zbQFbsj/camiseta-removebg-preview.png"  width="220" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1lleqKu2lVzJfqZmCoDkzY8haMCt-n8_F/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Camiseta: T-shirt</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/q0wVdCx/jersey-removebg-preview.png"   width="150"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1YtNwnTpLL-4yCAHmVvDNpUcwIAxO7Lxm/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Jersey: Sweater</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/c6jK138/chaqueta-removebg-preview.png" width="200" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1KSJzqspU-FU9mAU5tP1989RoGHdN-U-5/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>chaqueta: Jacket</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/163M1nH/abrigo-removebg-preview.png"  width="225" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1l9qe7cR_eiQHaR-NsS7qXX1rXzocSUt9/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Abrigo: Coat</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Ns3FSZf/tirantes-removebg-preview.png"   width="195" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1m2l0Uec2PuzZ5eofd0tmaha4IyUG9TwU/preview"  style="border: none" width="280" height="80"></iframe>
                <h2>Camiseta de tirantes:<br> Tanktop</h2>
            </div>
            <div class="col-md-4">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/4mLvNBs/gabardina-removebg-preview.png"  width="135"/>
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1Tz5xfgH_ar0C3B4CEalLOUOGsDNsGzW_/preview"  style="border: none" width="280" height="80"></iframe>
                <h2>Gabardina:trench coat</h2>
            </div>
            <div class="col-md-4">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Dbz28bf/chaleco-removebg-preview.png"  width="200" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1trDHQy0qSvEEbHaVW5fe46aWEeGiBnLQ/preview"  style="border: none" width="280" height="80"></iframe>
                <h2>Chaleco: Vest</h2>
            </div>
        </div>
    </div>


    <div  class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Prendas de vestir de mujer en inglés</h1>
            </div>
        </div>
    </div>


    <!-- animales salvajes-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/1GJDpBr/falda-removebg-preview.png"  width="185" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1WTTsFFe3wN4hwL5BvAsEDb6LOX_MvaA2/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Falda: Skirt</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/h842WJ4/vestido-removebg-preview.png"   width="160"/>
                <iframe  class="mx-auto d-block"  src="https://drive.google.com/file/d/1YJDRm-QkYs7rGGXVCQbt1m3H5J9bfHsA/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Vestido: Dress</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/jWFNGpN/tacones-removebg-preview.png"  width="160" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1HCqg-_uTwlcXBfb_qqHhnLfuo-W3YbmJ/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Tacones: Heels</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/s1zqjQs/blusa-removebg-preview.png"  width="180" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/12kDykIQSjLxVH8XL7qhZrm3reuiTWYj2/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Blusa: Blouse</h2>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Cby97m6/sujetador-removebg-preview.png"    width="195" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1iwAL_4EOKEfwPdXDsrGOdB0TD0I3NzS8/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Sujetador/sostén:Bra</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/nfphMDb/bragas-removebg-preview.png"    width="160"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1TURoycjoNOwBhoLLqoJJJSO5rAQmf3od/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Bragas/pantis:panties</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/M1FsD9S/medias-removebg-preview.png"   width="197" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1LYHf1X_L-YhzVFoitJzQz2Jaev1AwcUd/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Medias: stockings</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/YXS0fkD/pijama-removebg-preview.png"   width="170" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1DPO--jEYz5CQ_pnhxCjRsfsUwiZyScgM/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Pijama / ropa de dormir: pajamas
                </h2>
            </div>
        </div>
    </div>




    <div  class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Zapatos en inglés (Shoes)</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <br>
                <br>
                <img class="mx-auto d-block"  src="https://i.ibb.co/sKJht5S/zapatos-removebg-preview.png"    width="250" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1-aKcZLwx4YStymNZ3YTBaOycIDVv-y-m/preview"  style="border: none" width="250" height="80"></iframe>
                <h2>Zapatos: shoes</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/6Xn1LKc/botas-removebg-preview.png"    width="200"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1F8lQcERuAAzkdl9VeKnOBlFE1rybf6bN/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Botas: boots</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xmPV0Hf/tenis-removebg-preview.png"  width="150" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1FQyJwsQHUeKd4i0hEdTQI-JNXE6wLAd4/preview" style="border: none" width="250" height="80"></iframe>
                <h2>zapato deportivo:  sports shoe</h2>
            </div>
            <div class="col-md-3">
                <br>
                <BR>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Kr5s2cK/sandalia-removebg-preview.png"   width="147" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/107WeM_U31CLkR73e8IRyjQOX9rW3xSf8/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Sandalia: sandal</h2>
            </div>
        </div>
    </div>





    <div  class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Prendas de vestir de hombre en inglés</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"    src="https://i.ibb.co/cbFB5qB/trajes-removebg-preview.png"  width="150" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1xwQESvDJTfpgKZWNoCoS0v8-7cjaU333/preview" style="border: none" width="250" height="80"></iframe>
                <h2>traje: suit</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"    src="https://i.ibb.co/c1HTJLW/camisa-removebg-preview.png"    width="185"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1AbubIamSXWzKbhlBgJIawzGNXW3MFse9/preview" style="border: none" width="250" height="80"></iframe>
                <h2>camisa: shirt</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/kB8QgWj/corbatas-removebg-preview-2.png"   width="138" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/16ZbHF1dHirqFPA7XS-fctv2pomMcKXt3/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Corbata: tie</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/1ZdyM6L/corbatin-removebg-preview.png"   width="250" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/13G051HWJKKaS97RQ_99uuw-lVzyolxFT/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Corbatín / pajarita: bow-tie</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/w7M9yw1/calzoncillo-removebg-preview.png"  width="215" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/14-Gn9CuMwgu55K9ZCp0nAjeY4wCQEfhb/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Calzoncillos: briefs</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/NsbwGg4/calsetines-removebg-preview.png"   width="215"/>
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1nGX-aYv13LcwRz8sDKuYQMcChbePYb1s/preview" style="border: none" width="250" height="80"></iframe>
                <h2>calcetines / medias: socks</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/tcbZdrK/calzoneta-removebg-preview.png"   width="188" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1P7cZ6LmYNGuDnJolvqniBCoWMozN9G8t/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Calzoneta: underpants</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/7CPXBz0/jeans-removebg-preview.png"   width="320" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1nNtqDup8Jle_ls2MtX49R8EBm0VN9RPv/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Pantalones: Jeans</h2>
            </div>
        </div>
    </div>
    <div  class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12  mb-5" style="background: #009aae">
                <h1 style="text-align: center">Accesorios en inglés</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block"   src="https://i.ibb.co/LSZ21PB/sombrero-removebg-preview.png"  width="150" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/1dg8XlmfOh5dmQY8_Q0gNeBSZlSuW6B8k/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Sombrero:Sun hat</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/BtbTNHG/gorro-removebg-preview.png"  width="150"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/13PvFix6KS6qQ-5-xToTb94ogtW571lgT/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Gorro de lana:Wool hat</h2>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/mTt4YYm/gafas-removebg-preview.png"   width="100" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1ewocEgqnt2lXo_Ig4sba09FXUaQ7coyk/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Gafas / lentes: glasses</h2>

            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/FDvJhR0/pendientes-removebg-preview.png"    width="150" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/16-jeFwZwaCOBtgGdY2MQ7IFKWSrnvTyv/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Pendientes / zarcillos: Earrings</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/cCZ8ZVh/braslete-removebg-preview.png" width="170" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1wgg4TZszNOulNcHFeyF3rY5WCCfdC4Zh/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Pulsera / brazalete: Bracelet</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/hLTCDxX/cinturon-removebg-preview.png"   width="218"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1ticqPivyP78QtcI5B-cXNLgCAXLtvNzx/preview"style="border: none" width="250" height="80"></iframe>
                <h2>Cinturón: Belt</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/tC1y23t/collar-removebg-preview.png"  width="170" />
                <iframe class="mx-auto d-block"  src="https://drive.google.com/file/d/185S4WUJYQTGITH58g8FFGq4m9b75QirS/preview" style="border: none" width="250" height="80"></iframe>
                <h2>collar: Necklace</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/HgS9hSN/cartera-removebg-preview.png"   width="200" />
                <iframe  class="mx-auto d-block" src="https://drive.google.com/file/d/1jw1Ru6Drk-PrcANSNCqyrOyM7nMiFUXJ/preview" style="border: none" width="250" height="80"></iframe>
                <h2>cartera: Purse</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-3">
                <img class="mx-auto d-block" src="https://i.ibb.co/f0JPt8L/billetera-removebg-preview.png"  width="155" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1uu_miY3WLw05-bI_wJ5XBL5Rs3OMYUhQ/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Billetera: Wallet</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/z4M7bdX/gorra-removebg-preview.png"   width="210"/>
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1R9xMZ8t8MnClemdMIhv5_SYjvrSw_MSG/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Gorra: Cap</h2>
            </div>
            <div class="col-md-3">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/X3pQjB2/anillo-removebg-preview.png"  width="157" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1-DuSSs5Rrof8GG4jDJ8j09IhowenzCpH/preview"" style="border: none" width="250" height="80"></iframe>
                <h2>Anillo: Ring</h2>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/WPwgQgv/reloj-removebg-preview.png"   width="248" />
                <iframe class="mx-auto d-block" src="https://drive.google.com/file/d/1U5NaobAFFhn37TITupi6X_37wa-SzRM2/preview" style="border: none" width="250" height="80"></iframe>
                <h2>Reloj de pulsera: Watch</h2>
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


