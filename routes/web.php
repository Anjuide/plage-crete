<?php

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
// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});
// Liste des plages de la Crète
Route::get('/plages-crete', function () {
    return view('crete');
});

Route::get('/plages-cote-d-ivoire', function () {
    return view('ivorycoast');
});
