<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

                                                       /* SPRINT NUMERO 1*/

/*pantalla principal de pagina web*/

Route::get('pantallaPrincipal', function () {
    return view('pantallaPrincipal');
});

/*pantallas de español*/

/*pantalla de la clase de español*/
Route::get('/pantallaPrincipalDeLaClaseDeEspañol', function () {
    return view('Español/pantallaPrincipalDeLaClaseDeEspañol');
});

//Adivinanzas - ESPAÑOL
Route::get('/Adivinanzas', function () {
    return view('Español/Adivinanzas');
});
Route::get('/adivinanzasAnimales', function () {
    return view('Español/adivinanzasAnimales');
});
Route::get('/adivinanzasCortas', function () {
    return view('Español/adivinanzasCortas');
});
Route::get('/adivinanzasFrutas', function () {
    return view('Español/adivinanzasFrutas');
});
Route::get('/adivinanzasNumeros', function () {
    return view('Español/adivinanzasNumeros');
});
Route::get('/adivinanzasTransportes', function () {
    return view('Español/adivinanzasTransportes');
});

/*pantallas de español trabalengua*/
Route::get('/trabalenguas', function () {
    return view('Español/pantallaTrabalenguas');
});

/*pantallas de español refranes*/
Route::get('/refranes', function () {
    return view('Español/pantallaRefranes');
});

/*pantalla de los cuentos*/

Route::get('/cuento',function (){
    return view('Español/cuento');
});
Route::get('/cuentoFantastico',function (){
    return view('Español/cuentosFantasticos');
});
Route::get('/cuentoInfantiles',function (){
    return view('Español/cuentosInfantiles');
});
Route::get('/cuentoRealista',function (){
    return view('Español/cuentosRealistas');
});
Route::get('/cuentoTerror',function (){
    return view('Español/cuentosTerror');
});
Route::get('/cuentoNavidad',function (){
    return view('Español/cuentoNavidad');
});
Route::get('/cuentoPoliciales',function (){
    return view('Español/cuentosPoliciales');
});
Route::get('/cuentoAventuras',function (){
    return view('Español/cuentosAventuras');
});
Route::get('/cuentoDormir',function (){
    return view('Español/CuentosParaDormir');
});

/*pantalla de la clase de chistes*/
Route::get('/Chistes', function () {
    return view('Español/pantallaDeLaClaseDeEspañolChistes');
});

/*pantalla de la clase de matematicas*/
Route::get('/pantallaClaseMat',function (){
    return view('Matematicas/pantallaClaseMat');
});


/*pantalla de la clase de ciencias sociales*/
Route::get('/pantallaPrincipalDeLaClaseDeCienciasSociales', function () {
    return view('Ciencias Sociales/pantallaPrincipalDeLaClaseDeCienciasSociales');
});
/*pantalla de la clase de español bombas*/
Route::get('/Bombas', function () {
    return view('Español/pantallaDeBombas');
});

//pantallaPrincipalCienciasNaturales
Route::get('/pantallaPrincipalDeCienciasNaturales', function () {
    return view('CienciasNaturales/pantallaPrincipalDeCienciasNaturales');
});



                                                          /*SPRINT NUMERO 2 */



/*Rutas de español*/

Route::get('/Rondas',function (){
    return view('Español/Rondas');
});




/*Rutas de Matematicas*/

Route::get('/restas',function (){
    return view('Matematicas/pantallaRestas');
});

Route::get('/lineas',function (){
    return view('Matematicas/pantallaLineas');
});
Route::get('/curvas',function (){
    return view('Matematicas/lineasCurvas');
});
Route::get('/rectas',function (){
    return view('Matematicas/lineasRectas');
});

Route::get('/poligonales',function (){
    return view('Matematicas/lineasPoligonales');
});
Route::get('figura',function (){
    return view('Matematicas/pantallaFigurasGeometricas');
});
Route::get('/TipoDeCuadrilatero',function (){
    return view('Matematicas/pantallaTipoDeCuadrilatero');
});
Route::get('/TiposDeTriangulos',function (){
    return view('Matematicas/pantallaTiposDeTriangulos');
});
Route::get('/OtrasFiguras',function (){
    return view('Matematicas/pantallaOtrasFiguras');
});

Route::get('/numerosNaturales',function (){
    return view('Matematicas/numeroNaturales');
});
Route::get('/relacionObjetos',function (){
    return view('Matematicas/relacionObjetos');
});

//Numeros Ordinales/Matematicas
Route::get('/NumerosOrdinales',function (){
    return view('Matematicas/NumerosOrdinales');
});
//Rutas Tipo Relacion de Objetos/Matematicas
Route::get('/RelacionObjetColores',function (){
    return view('Matematicas/tipoRelacionObjetColores');
});
Route::get('/RelacionObjetDistancias', function (){
    return view('Matematicas/tipoRelacionObjetDistancias');
});
Route::get('/RelacionObjetEspesores',function (){
    return view('Matematicas/tipoRelacionObjetEspesores');
});
Route::get('/RelacionObjetPosiciones',function (){
    return view('Matematicas/tipoRelacionObjetPosiciones');
});
Route::get('/RelacionObjetTamaños',function (){
    return view('Matematicas/tipoRelacionObjetTamaños');
});
Route::get('/RelacionObjetTiempo',function (){
    return view('Matematicas/tipoRelacionObjetTiempo');
});
Route::get('/sumas',function (){
    return view('Matematicas/pantallaSumas');
});


//sprint 2
//Matematicas
/*rutas actividades*/

Route::get('/pantallaA',function (){
    return view('Actividades/pantallaActividades');
});


Route::get('/restaA',function (){
    return view('Actividades/restaActividad');
});

Route::get('/sumaA',function (){
    return view('Actividades/sumaActividad');
});

Route::get('/lineaA',function (){
    return view('Actividades/lineaActividad');
});
Route::get('/figuraA',function (){
    return view('Actividades/figuraActividad');
});
Route::get('/ordinales',function (){
    return view('Actividades/numerosOrdinalesActividad');
});
Route::get('/relacion',function (){
    return view('Actividades/relacionActividad');
});
Route::get('/natural',function (){
    return view('Actividades/natural');
});

Route::get('/simbolos2',function (){
    return view('Actividades/simbolosActividad');
});


Route::get('/longitud2',function (){
    return view('Actividades/longitudActividad');
});



                                                           /*TERCER SPRINT */
/*rutas matematica */

Route::get('/monedas',function (){
    return view('Matematicas/pantallaMonedas');
});

Route::get('/billetes',function (){
    return view('Matematicas/pantallaBilletes');
});

Route::get('/simbolos',function (){
    return view('Matematicas/simbolos');
});

Route::get('/longitud',function (){
    return view('Matematicas/pantallaLongitud');
});

Route::get('/unidadLongitud',function (){
    return view('Matematicas/unidadesLongitud');
});
Route::get('/unidadCorporal',function (){
    return view('Matematicas/unidadesCorporales');
});

Route::get('/moneda',function (){
    return view('Matematicas/monedas');
});


/*rutas ciencias naturales*/
Route::get('/LosAnimales',function (){
    return view('CienciasNaturales/LosAnimales');
});
Route::get('/LaSalud',function (){
    return view('CienciasNaturales/LaSalud');
});


Route::get('/animalesvertebrados',function (){
    return view('CienciasNaturales/pantallaAnimalesVertebrados');
});
Route::get('/sentidos',function (){
    return view('CienciasNaturales/pantallaSentidos');
});


Route::get('/animalesinvertebrados',function (){
    return view('CienciasNaturales/pantallaAnimalesInvertebrados');
});


Route::get('/respiratorias',function (){
    return view('CienciasNaturales/pantallaEnfermedadesRespiratorias');
});

Route::get('/intestinales',function (){
    return view('CienciasNaturales/pantallaEnfermedadesIntestinales');
});

Route::get('/normas',function (){
    return view('CienciasNaturales/pantallaNormas');
});


Route::get('/cuerpo',function (){
    return view('CienciasNaturales/pantallaPartesDelCuerpo');
});

Route::get('/planta',function (){
    return view('CienciasNaturales/partesDelaPlanta');
});
Route::get('/PseresVivos',function (){
    return view('CienciasNaturales/pantallaSeresVivos');
});
Route::get('/seresVivos',function (){
    return view('CienciasNaturales/seresVivos');
});
Route::get('/seresNoVivos',function (){
    return view('CienciasNaturales/seresNoVivos');
});

Route::get('/ElClima',function (){
    return view('CienciasNaturales/ElClima');
});

/*rutas ciencias sociales*/

Route::get('/ambienteContaminado',function (){
    return view('Ciencias Sociales/ambienteContaminado');
});
Route::get('/ambienteNoContaminado',function (){
    return view('Ciencias Sociales/ambienteNoContaminado');
});
Route::get('/ambiente',function (){
    return view('Ciencias Sociales/ambiente');
});


/*rutas actividades*/
Route::get('/actividadesC',function (){
    return view('ActividadesCienciasNaturales/pantActividadesCCNN');
});


Route::get('/partesC',function (){
    return view('ActividadesCienciasNaturales/actividadPartesDelCuerpo');
});



Route::get('/animalesT',function (){
    return view('ActividadesCienciasNaturales/actividadAnimales');
});

Route::get('/lsentidos',function (){
    return view('ActividadesCienciasNaturales/actividadSentidos');
});

Route::get('/normasH',function (){
    return view('ActividadesCienciasNaturales/actividadNormasDeHigiene');
});
Route::get('/plantaActividad',function (){
    return view('ActividadesCienciasNaturales/plantaActividad');
});

Route::get('/seresActividad',function (){
    return view('ActividadesCienciasNaturales/seres');
});

                                  /* sprint 4*/



Route::get('/ocupaciones',function (){
    return view('Ciencias Sociales/pantallaOcupaciones');
});
Route::get('/cicloAgua',function (){
    return view('Ciencias Sociales/cicloAgua');
});
Route::get('/comunicacion',function (){
    return view('Ciencias Sociales/mediosComunicacion');
});
Route::get('/cardinales',function (){
    return view('Ciencias Sociales/puntosCardinales');
});

Route::get('/familia',function (){
    return view('Ciencias Sociales/familia');
});


Route::get('/mediosT',function (){
    return view('Ciencias Sociales/pantallaMediosDeTransporte');
});

Route::get('/sentimientos',function (){
    return view('Ciencias Sociales/sentimientos');
});


Route::get('/profesiones',function (){
    return view('Ciencias Sociales/profesiones');
});

Route::get('/oficios',function (){
    return view('Ciencias Sociales/oficios');
});

Route::get('/aereos',function (){
    return view('Ciencias Sociales/aereos');
});

Route::get('/terrestres',function (){
    return view('Ciencias Sociales/terrestres');
});

Route::get('/maritimos',function (){
    return view('Ciencias Sociales/maritimos');
});


Route::get('/derechosYDeberes',function (){
    return view('Ciencias Sociales/derechosYDeberes');
});
Route::get('/estaciones',function (){
    return view('Ciencias Sociales/estaciones');
});


                                                /*rutas actividades de ciencias sociales sprint 4*/

Route::get('/actividadesCCSS',function (){
    return view('ActividadesCienciasSociales/pantActividadesCCSS');
});

Route::get('/actividadAmbiente',function (){
    return view('ActividadesCienciasSociales/actividadAmbiente');
});
Route::get('/actividadComunicacion',function (){
    return view('ActividadesCienciasSociales/actividadComunicacion');
});
Route::get('/actividadCiclo',function (){
    return view('ActividadesCienciasSociales/actividadCiclo');
});

Route::get('/actividadEstaciones',function (){
    return view('ActividadesCienciasSociales/actividadEstaciones');
});

Route::get('/DerechosY',function (){
    return view('ActividadesCienciasSociales/actividadDerechosYDeberes');
});

Route::get('/sentimientoActividad',function (){
    return view('ActividadesCienciasSociales/sentimientoActividad');
});
Route::get('/ocupacionesActividad',function (){
    return view('ActividadesCienciasSociales/ocupacionesActividad');
});
Route::get('/transporteActividad',function (){
    return view('ActividadesCienciasSociales/transporteActividad');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function (){
    return view('welcome');
});

Route::get('/presentacion',function (){
    return view('presentacion');
});

Route::get('/dias',function (){
    return view('Ingles/diasSemana');
});


// SPRINT 6 // IMPLEMENTACION

Route::get('/meses',function (){
    return view('Ingles/meses');
});
Route::get('/pantallaIngles',function (){
    return view('Ingles/pantallaIngles');
});

Route::get('/pTiempo',function (){
    return view('Ingles/pantallaTiempo');
});

Route::get('/dias',function (){
    return view('Ingles/diasSemana');
});
Route::get('/lugarCiudad',function (){
    return view('Ingles/lugarCiudad');
});
Route::get('/profesionesIng',function (){
    return view('Ingles/profesiones');
});

Route::get('/inglesAnimales',function (){
    return view('Ingles/pantallaInglesAnimales');
});

// SPRINT 7

Route::get('/mediosTra',function (){
    return view('Ingles/mediosTransporte');
});

Route::get('/alfabeto',function (){
    return view('Ingles/alfabeto');
});

Route::get('/numerosI',function (){
    return view('Ingles/numeros');
});

Route::get('/inglesColores',function (){
    return view('Ingles/coloresIngles');
});







//Actividades Sprint 7


Route::get('/actividadIngles',function (){
    return view('ActividadesIngles/Actividades');
});


Route::get('/actividadProfesiones',function (){
    return view('ActividadesIngles/actividadProfesiones');
});
Route::get('/actividadColores',function (){
    return view('ActividadesIngles/actividadColores');
});

Route::get('/actividadMeses',function (){
    return view('ActividadesIngles/actividadMesesYDias');
});
Route::get('/actividadTransportes',function (){
    return view('ActividadesIngles/actividadTransportes');
});
Route::get('/actividadLugar',function (){
    return view('ActividadesIngles/actividadLugar');
});
Route::get('/actividadAbecedario',function (){
    return view('ActividadesIngles/actividadAbecedario');
});

Route::get('/actividadanimales',function (){
    return view('ActividadesIngles/actividadAnimales');
});

Route::get('/actividadnumeros',function (){
    return view('ActividadesIngles/actividadNumeros');
});



// SPRINT 8

Route::get('/Miembros',function (){
    return view('Ingles/familiaMiembros');
});

Route::get('/utiles',function (){
    return view('Ingles/utiles');
});
Route::get('/partes',function (){
    return view('Ingles/partes');
});
Route::get('/vestimenta',function (){
    return view('Ingles/vestimenta');
});


//Actividades Sprint 8
Route::get('/actividadPrendas',function (){
    return view('ActividadesIngles/actividadPrendas');
});

Route::get('/actividadUtiles',function (){
    return view('ActividadesIngles/actividadUtiles');
});

Route::get('/actividadParte',function (){
    return view('ActividadesIngles/actividadParte');
});

Route::get('/actividadMiembros',function (){
    return view('ActividadesIngles/actividadMiembros');
});




                               //Sprint9
Route::get('/partesDeLaCasa',function (){
    return view('Ingles/partesDeLaCasa');
});


Route::get('/figuras',function (){
    return view('Ingles/figurasGeometricas');
});
Route::get('/emociones',function (){
    return view('Ingles/emociones');
});

Route::get('/pantallaAlimentos',function (){
    return view('Ingles/pantallaAlimentos');
});
Route::get('/frutas',function (){
    return view('Ingles/frutas');
});
Route::get('/verduras',function (){
    return view('Ingles/verduras');
});

//  actividades SPRINT 9
Route::get('/actividadPartesCasa',function (){
    return view('ActividadesIngles/actividadPartesCasa');
});

Route::get('/actividadFrutas',function (){
    return view('ActividadesIngles/actividadFrutasVerduras');
});

Route::get('/actividadesEmocion',function (){
    return view('ActividadesIngles/actividadesEmocion');
});


Route::get('/actividadFi',function (){
    return view('ActividadesIngles/actividadFigurasGeometricas');
});


                                                            // Tecnologia

Route::get('/tecnologia',function (){
    return view('Tecnologia/pantallaPrincipal');
});

Route::get('/partesDeLaCompu',function (){
    return view('Tecnologia/partesDeLaCompu');
});






// Actividades Tecnologia!

Route::get('/pantallaTecno',function (){
    return view('ActividadesTecnologia/pantallaActividadTecno');
});

