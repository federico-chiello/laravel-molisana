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
    return view('home');
})->name('homepage');

Route::get('/sezione news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/sezione prodotti', function () {
    $arrayPasta = config('pasta');
    $data = ['tipologia' => $arrayPasta];
    return view('products', $data);
})->name('pagina-prodotti');

Route::get('/dettaglio/{posizione}', function ($posizione) {
    $arrayPasta = config('pasta');
    $prodotto = $arrayPasta[$posizione];
    return view('dettagli');
})->name('pagina-dettagli');
