<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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
    return view('acceuil');
});



Route::get('/ajouter/produit', function () {
    return view('ajouter_produit');
});

// Route::post('/modifier/produit', function () {
//     return view('modifier_produit');
// });



Route::controller(ProduitController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/produit', 'produit');
    Route::post('ProduitController/cree', 'cree');
    Route::post('/ProduitController/modifier', 'enregisterModification');
    Route::post('/supprimer/produit', 'supprimer');
    Route::post('/modifier/produit', 'modifier');
    Route::post('/produit/details', 'details');
    Route::post('/produit/panier', 'Panier');
});
