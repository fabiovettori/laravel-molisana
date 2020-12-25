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

    $formati = [];
    foreach ($pasta as $product) {
        if (!in_array($product['tipo'], $formati)) {
            $formati[] = $product['tipo'];
        }
    };

    $filter = [];
    foreach ($formati as $formato) {
        $category_filter = array_filter($pasta, function($product) use ( $formato ){
            if ($product['tipo'] == $formato) {
                return $product;
            }
        });
        $filter[$formato] = $category_filter;
    }

    $data = [
        'products' => $pasta,
        'filter' => $filter
    ];

    return view('products', $data);
})->name('products');


Route::get('/products/pasta_id_{id}', function($id){

    $pasta = config('pasta');

    if ($id >= 0 && $id < count($pasta) && is_numeric($id)) {

        $prodotto = $pasta[$id];

        $prev = $id - 1;
        $next = $id + 1;

        if ($id == 0) {
            $prev = count($pasta) - 1;
        }

        if ($id == count($pasta) - 1) {
            $next = 0;
        }

        $data = [
            'products' => $pasta,
            'product' => $prodotto,
            'commands' => [
                'next' => $next,
                'prev' => $prev
            ]
        ];

        return view('pasta', $data);

    } else {
        abort('404');
    }

})->name('pasta');
