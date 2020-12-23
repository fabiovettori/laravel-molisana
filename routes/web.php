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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/products', function(){

    $pasta = config('pasta');

    $data = [
        'products' => $pasta
    ];

    return view('products', $data);
})->name('products');


Route::get('/products/pasta_id_{id}', function($id){
    $pasta = config('pasta');

    $prodotto = $pasta[$id];

    $data = [
        'product' => $prodotto
    ];

    return view('pasta', $data);
})->name('pasta');
