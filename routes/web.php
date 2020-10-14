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

Route::get('/', function () {
    return view('welcome');
});

/*pantalla principal de pagina web*/
Route::get('pantallaPrincipal', function () {
    return view('pantallaPrincipal');
});

/*pantallas de español*/

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

/*pantallas de español*/
Route::get('trabalenguas', function () {
    return view('Español/pantallaTrabalenguas');
});

Route::get('refranes', function () {
    return view('Español/pantallaRefranes');
});

//pantallaPrincipalCienciasNaturales
Route::get('/pantallaPrincipalDeCienciasNaturales', function () {
    return view('CienciasNaturales/pantallaPrincipalDeCienciasNaturales');
});
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
Route::get('/pantallaClaseMat',function (){
    return view('Matematicas/pantallaClaseMat');
});


