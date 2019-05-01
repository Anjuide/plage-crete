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

// Récupérer la page d'accueil
Route::get('/', 'PagesController@index');
// Récupérer la liste des plages
Route::get('/liste-des-plages', 'PagesController@listeDesPlages');
// Récupérer la page pour ajouter une plage
Route::get('/ajouter-une-plage', 'PagesController@ajouterUnePlage');
// Récupérer la page pour modifier une plage
Route::get('/modifier-une-plage', 'PagesController@modifierUnePlage');

Route::resource('plages', 'BeachesController');

// Route::get('/home', function () {
//     return view('welcome');
// });
// // Liste des plages de la Crète
// Route::get('/plages-crete', function () {
//     return view('crete');
// });

// Route::get('/plages-cote-d-ivoire', function () {
//     return view('ivorycoast');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
