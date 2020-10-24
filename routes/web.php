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
Route::get('trabalenguas', function () {
    return view('Español/pantallaTrabalenguas');
});

/*pantallas de español refranes*/
Route::get('refranes', function () {
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
Route::get('Español/pantallaDeLaClaseDeEspañolChistes', function () {
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
Route::get('Español/pantallaDeBombas', function () {
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
/*pantalla de  bombas*/
Route::get('Español/pantallaDeBombas', function () {
    return view('Español/pantallaDeBombas');
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
Route::get('Matematicas/pantallaTipoDeCuadrilatero',function (){
    return view('Matematicas/pantallaTipoDeCuadrilatero');
});
Route::get('Matematicas/pantallaTiposDeTriangulos',function (){
    return view('Matematicas/pantallaTiposDeTriangulos');
});
Route::get('Matematicas/pantallaOtrasFiguras',function (){
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
Route::get('/tipoRelacionObjetColores',function (){
    return view('Matematicas/tipoRelacionObjetColores');
});
Route::get('/tipoRelacionObjetDistancias',function (){
    return view('Matematicas/tipoRelacionObjetDistancias');
});
Route::get('/tipoRelacionObjetEspesores',function (){
    return view('Matematicas/tipoRelacionObjetEspesores');
});
Route::get('/tipoRelacionObjetPosiciones',function (){
    return view('Matematicas/tipoRelacionObjetPosiciones');
});
Route::get('/tipoRelacionObjetTamaños',function (){
    return view('Matematicas/tipoRelacionObjetTamaños');
});
Route::get('/tipoRelacionObjetTiempo',function (){
    return view('Matematicas/tipoRelacionObjetTiempo');
});
Route::get('/sumas',function (){
    return view('Matematicas/pantallaSumas');
});






/*rutas de ciencias Naturales*/




/*rutas de ciencias Sociales*/


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





