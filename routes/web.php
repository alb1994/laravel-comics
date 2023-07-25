<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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



// Definizione di una route con il metodo GET. Quando un utente accede all'URL principale ('/'), questa funzione verrà eseguita.
route::get('/', function() {

    // Recupero dei dati dei fumetti dal file di configurazione utilizzando la chiave 'comics.comic'.
    $comics = config('comics.comic');
    // La funzione 'compact' viene utilizzata per creare un array associativo in cui il nome della chiave e della variabile sono gli stessi ('comics').
    // Ciò consentirà alla vista 'home' di accedere ai dati dei fumetti.
    return view('home', compact('comics'));

});


route::get('/comics/{comi}', function($id){
    $comics = config('comics.comic');

    $comic = $comics[$id];

    return view('comics.show', compact('comic'));
})->name('comics.show');
