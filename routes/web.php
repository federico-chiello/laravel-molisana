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

// HOMEPAGE
Route::get('/', function () {
    return view('home');
})->name('homepage');

// PAGINA NEWS
Route::get('/sezione news', function () {
    return view('news');
})->name('pagina-news');

// PAGINA PRODOTTI
Route::get('/sezione prodotti', function () {
    $arrayPasta = config('pasta');
    $pastaLunga = array_filter($arrayPasta, function($pasta){
        return $pasta['tipo'] == 'lunga';
    });
    $pastaCorta = array_filter($arrayPasta, function($pasta){
        return $pasta['tipo'] == 'corta';
    });
    $pastaCortissima = array_filter($arrayPasta, function($pasta){
        return $pasta['tipo'] == 'cortissima';
    });
    $data = [
        'lunga' => $pastaLunga,
        'corta' => $pastaCorta,
        'cortissima' => $pastaCortissima
        ];
    return view('products', $data);
})->name('pagina-prodotti');

// PAGINA DETTAGLI
Route::get('/dettaglio/{posizione}', function ($posizione) {
    $arrayPasta = config('pasta');
    $prodotto = $arrayPasta[$posizione];
    $data = [
        'formato' => $prodotto 
    ];
    return view('dettagli', $data);
})->name('pagina-dettagli');
