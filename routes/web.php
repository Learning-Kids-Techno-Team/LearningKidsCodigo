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


Route::get('trabalenguas', function () {
    return view('Español/pantallaTrabalenguas');
});

Route::get('refranes', function () {
    return view('Español/pantallaRefranes');
});
Route::get('/pantallaPrincipalDeLaClaseDeEspañol', function () {
    return view('pantallaPrincipalDeLaClaseDeEspañol');
});
Route::get('/pantallaPrincipalDeLaClaseDeCienciasSociales', function () {
    return view('pantallaPrincipalDeLaClaseDeCienciasSociales');
});
Route::get('/pantallaDeLaClaseDeEspañolChistes', function () {
    return view('pantallaDeLaClaseDeEspañolChistes');
});
/*pantallas de ciencias sociales*/
Route::get('/pantallaPrincipalDeLaClaseDeCienciasSociales', function () {
    return view('pantallaPrincipalDeLaClaseDeCienciasSociales');
});
