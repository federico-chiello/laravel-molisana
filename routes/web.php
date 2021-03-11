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

    // METODO CON ARRAY_FILTER
    // $pastaLunga = array_filter($arrayPasta, function($pasta){
    //     return $pasta['tipo'] == 'lunga';
    // });
    // $pastaCorta = array_filter($arrayPasta, function($pasta){
    //     return $pasta['tipo'] == 'corta';
    // });
    // $pastaCortissima = array_filter($arrayPasta, function($pasta){
    //     return $pasta['tipo'] == 'cortissima';
    // });

    // METODO CON COLLECTION
    $collection = collect($arrayPasta);
    $pastaLunga = $collection->where('tipo', 'lunga');
    $pastaCorta = $collection->where('tipo', 'corta');
    $pastaCortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'tipologia' =>[
            'lunga' => $pastaLunga,
            'corta' => $pastaCorta,
            'cortissima' => $pastaCortissima
            ]
        ];
        
    return view('products', $data);
})->name('pagina-prodotti');

// PAGINA DETTAGLI
Route::get('/dettaglio/{posizione}', function ($posizione) {
    $arrayPasta = config('pasta');

    if($posizione >= 0 && $posizione < count($arrayPasta) && is_numeric($posizione)){
        $prodotto = $arrayPasta[$posizione];
        $data = [
            'formato' => $prodotto 
        ];
        return view('dettagli', $data);
    } else{
        abort('404');
    }
    
})->name('pagina-dettagli');
