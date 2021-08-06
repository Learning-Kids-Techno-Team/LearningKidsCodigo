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


        }


        #separadorInferior2 .content{

            width: 100%;
            height: 100px;
            border-bottom-left-radius: 80%;
            border-top-right-radius: 50%;
            background: aquamarine;
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
        #play{
            width: 100%;
        }



    </style>


</head>
<body >
<!-- navbar-->
@section('content')

    <!-- contenedor-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" style="background:#009aae">
                <div class="row ml-5 mr-5">
                    <div class="col-xl-7  mt-5" style="background: #CCDDCC">
                        <br><br>
                        <img class=" mx-auto d-block"
                             src="https://i.ibb.co/PtnntQy/prendas-removebg-preview.png"
                             width="300"  >
                    </div>

                    <div class="col-xl-5  mt-5 " style=" background: #FCE2D1"  >
                        <br><br>
                        <h4 class="text-center" >Inglés</h4>
                        <h3 class="text-center" style="text-align: center">Prendas de vestir</h3>
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
            <div class="col-xl-7 p-2">
                <br>
                <h2 class="text-center">
                    ¿Por qué es importante aprender el nombre de las prendas de vestir?
                </h2>
                <br>
                <p>
                    A medida que los peques comienzan a involucrarse más en la rutina diaria de vestirse, desarrollan importantes habilidades motoras al dominar el proceso de abotonar sus camisas, atar sus zapatos, o mantener el equilibrio al ponerse los pantalones (trousers). Igualmente, su vocabulario se hace más rico y su percepción sobre el espacio-tiempo se agudiza al aprender qué tipo de prendas de vestir (clothes) se deben usar para determinadas situaciones o para los diferentes climas.
                </p>
                <br>
                <h3 style="text-align: center">Ahora, ¡qué comience el aprendizaje!</h3>

            </div>


            <div class="col-xl-5 p-2">
                <img class=" mx-auto d-block"  src="https://i.ibb.co/ZcT86y1/prendas2-removebg-preview.png"
                     width="300" />
            </div>
        </div>
    </div>



    <div  class="container-fluid">
        <div class="row">
            <div class="col-xl-12  p-2" >
                <br>
                <h1 class="text-center">
                    Tops: son prendas de ropa que se usan en la parte superior del cuerpo, tales como blusas o camisas en inglés</h1>
            </div>
        </div>
    </div>


    <!-- animales domesticos-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"  src="https://i.ibb.co/zbQFbsj/camiseta-removebg-preview.png"
                     width="220" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/camiseta.mp3" controls >
                </audio>
                <h2>Camiseta: T-shirt</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/q0wVdCx/jersey-removebg-preview.png"
                      width="150"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/jersey.mp3" controls >
                </audio>
                <h2>Jersey: Sweater</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">

                <img  class="mx-auto d-block"  src="https://i.ibb.co/c6jK138/chaqueta-removebg-preview.png" width="200" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/chaqueta.mp3" controls >
                </audio>
                <h2>chaqueta: Jacket</h2>
                </div>
            </div>
            <div class="col-md-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/163M1nH/abrigo-removebg-preview.png"
                      width="225" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/abrigo.mp3" controls >
                </audio>
                <h2>Abrigo: Coat</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Ns3FSZf/tirantes-removebg-preview.png"
                      width="195" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/camisa de tirantes.mp3" controls >
                </audio>
                <h2>Camiseta de tirantes:<br> Tanktop</h2>
                </div>
            </div>
            <div class="col-xl-4 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/4mLvNBs/gabardina-removebg-preview.png"
                      width="135"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/gabardina.mp3" controls >
                </audio>
                <h2>Gabardina:trench coat</h2>
                </div>
            </div>
            <div class="col-xl-4 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Dbz28bf/chaleco-removebg-preview.png"  width="200" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/chaleco.mp3" controls >
                </audio>
                <h2>Chaleco: Vest</h2>
                </div>
            </div>
        </div>
    </div>


    <div  class="container-fluid">
        <div class="row ">
            <div class="col-xl-12  p-2" >
                <h1 class="text-center">Prendas de vestir de mujer en inglés</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/1GJDpBr/falda-removebg-preview.png"  width="185" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/falda.mp3" controls >
                </audio>
                <h2>Falda: Skirt</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/h842WJ4/vestido-removebg-preview.png"   width="160"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/vestido.mp3" controls >
                </audio>
                <h2>Vestido: Dress</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/jWFNGpN/tacones-removebg-preview.png"  width="160" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/tacones.mp3" controls >
                </audio>
                <h2>Tacones: Heels</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/s1zqjQs/blusa-removebg-preview.png"  width="180" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/blusa.mp3" controls >
                </audio>
                <h2>Blusa: Blouse</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Cby97m6/sujetador-removebg-preview.png"    width="195" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/sujetador.mp3" controls >
                </audio>
                <h2>Sujetador/sostén:Bra</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/nfphMDb/bragas-removebg-preview.png"    width="160"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/bragas.mp3" controls >
                </audio>
                <h2>Bragas/pantis:panties</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/M1FsD9S/medias-removebg-preview.png"   width="197" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/medias.mp3" controls >
                </audio>
                <h2>Medias: stockings</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/YXS0fkD/pijama-removebg-preview.png"   width="170" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/pijama.mp3" controls >
                </audio>
                <h2>Pijama / ropa de dormir: pajamas
                </h2>
                </div>
            </div>
        </div>
    </div>




    <div  class="container-fluid">
        <div class="row ">
            <div class="col-xl-12  p-2" >
                <h1 class="text-center">Zapatos en inglés (Shoes)</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <br>
                <br>
                <img class="mx-auto d-block"  src="https://i.ibb.co/sKJht5S/zapatos-removebg-preview.png"    width="250" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/zapatos.mp3" controls >
                </audio>
                <h2>Zapatos: shoes</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/6Xn1LKc/botas-removebg-preview.png"    width="200"/>
              <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/botas.mp3" controls >
                </audio>
                <h2>Botas: boots</h2>
              </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/xmPV0Hf/tenis-removebg-preview.png"  width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/zzapato deportivo.mp3" controls >
                </audio>
                <h2>zapato deportivo:  sports shoe</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <BR>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/Kr5s2cK/sandalia-removebg-preview.png"   width="147" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/sandalia.mp3" controls >
                </audio>
                <h2>Sandalia: sandal</h2>
               </div>
            </div>
        </div>
    </div>





    <div  class="container-fluid">
        <div class="row ">
            <div class="col-xl-12  p-2" >
                <h1 class="text-center">Prendas de vestir de hombre en inglés</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"    src="https://i.ibb.co/cbFB5qB/trajes-removebg-preview.png"  width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/traje.mp3" controls >
                </audio>
                <h2>traje: suit</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"    src="https://i.ibb.co/c1HTJLW/camisa-removebg-preview.png"    width="185"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/camisa.mp3" controls >
                </audio>
                <h2>camisa: shirt</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/kB8QgWj/corbatas-removebg-preview-2.png"   width="138" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/corbata.mp3" controls >
                </audio>
                <h2>Corbata: tie</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/1ZdyM6L/corbatin-removebg-preview.png"   width="250" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/corbatin.mp3" controls >
                </audio>
                <h2>Corbatín / pajarita: bow-tie</h2>
               </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/w7M9yw1/calzoncillo-removebg-preview.png"  width="215" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/calzoncillos.mp3" controls >
                </audio>
                <h2>Calzoncillos: briefs</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/NsbwGg4/calsetines-removebg-preview.png"   width="215"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/cañsetines.mp3" controls >
                </audio>
                <h2>calcetines / medias: socks</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/tcbZdrK/calzoneta-removebg-preview.png"   width="188" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/calzoneta.mp3" controls >
                </audio>
                <h2>Calzoneta: underpants</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/7CPXBz0/jeans-removebg-preview.png"   width="320" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/jeans.mp3" controls >
                </audio>
                <h2>Pantalones: Jeans</h2>
               </div>
            </div>
        </div>
    </div>
    <div  class="container-fluid">
        <div class="row ">
            <div class="col-xl-12  p-2" >
                <h1 class="text-center">Accesorios en inglés</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block"   src="https://i.ibb.co/LSZ21PB/sombrero-removebg-preview.png"  width="150" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/sombrero.mp3" controls >
                </audio>
                <h2>Sombrero:Sun hat</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/BtbTNHG/gorro-removebg-preview.png"  width="150"/>
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/gorro de lana.mp3" controls >
                </audio>
                <h2>Gorro de lana:Wool hat</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <br>
                <img  class="mx-auto d-block" src="https://i.ibb.co/mTt4YYm/gafas-removebg-preview.png"   width="100" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/gafas.mp3" controls >
                </audio>
                <h2>Gafas / lentes: glasses</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/FDvJhR0/pendientes-removebg-preview.png"    width="150" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/pendientes.mp3" controls >
                </audio>
                <h2>Pendientes / zarcillos: Earrings</h2>
               </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/cCZ8ZVh/braslete-removebg-preview.png" width="170" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/braalete.mp3" controls >
                </audio>
                <h2>Pulsera / brazalete: Bracelet</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/hLTCDxX/cinturon-removebg-preview.png"   width="218"/>
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/cinturon.mp3" controls >
                </audio>
                <h2>Cinturón: Belt</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/tC1y23t/collar-removebg-preview.png"  width="170" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/collar.mp3" controls >
                </audio>
                <h2>collar: Necklace</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block"  src="https://i.ibb.co/HgS9hSN/cartera-removebg-preview.png"   width="200" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/cartera.mp3" controls >
                </audio>
                <h2>cartera: Purse</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-3 p-2">
                <img class="mx-auto d-block" src="https://i.ibb.co/f0JPt8L/billetera-removebg-preview.png"  width="155" />
               <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/billetera.mp3" controls >
                </audio>
                <h2>Billetera: Wallet</h2>
               </div>
            </div>
            <div class="col-xl-3 p-2">
                <img  class="mx-auto d-block" src="https://i.ibb.co/z4M7bdX/gorra-removebg-preview.png"   width="210"/>
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/gorra.mp3" controls >
                </audio>
                <h2>Gorra: Cap</h2>
                </div>
            </div>
            <div class="col-xl-3 p-2">
                <br>
                <img  class="mx-auto d-block"  src="https://i.ibb.co/X3pQjB2/anillo-removebg-preview.png"  width="157" />
                <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/anillo.mp3" controls >
                </audio>
                <h2>Anillo: Ring</h2>
                </div>
            </div>
            <div class="col-xl-3">
                <img  class="mx-auto d-block" src="https://i.ibb.co/WPwgQgv/reloj-removebg-preview.png"   width="248" />
              <div class="text-center">
                <audio  id="player" src="AudioIngles/prenda/reloj.mp3" controls >
                </audio>
                <h2>Reloj de pulsera: Watch</h2>
              </div>
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


