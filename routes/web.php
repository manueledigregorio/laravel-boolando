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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/dettaglio-prodotto/{slug}', function ($slug) {

    // prendo l'eleco dei prodotti
    $products = config('menues.product');

    // estraggo dall'array di prodotti l'elemento con slug = $slug
    $product_array = array_filter($products, fn($product) => $product['slug'] === $slug);


    // prendo il primo elemento di questo array
    $product = $product_array[array_key_first($product_array)];


    return view('productDetail', compact('product'));
})->name('productDetail');


