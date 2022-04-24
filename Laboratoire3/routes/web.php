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
Route::get('/', [\App\Http\Controllers\PageListe::class, "Store"]);
Route::get('/ajout', [\App\Http\Controllers\PageAjout::class, "AfficherPageAjout"]);
Route::get('/modif/{id}', [\App\Http\Controllers\PageModification::class, "AfficherPageModification"]);
Route::get('/produit/{id}', [\App\Http\Controllers\PageProduit::class, "AfficherPageProduit"]);


Route::get('/liste', function () {
    return redirect('/');
});


Route::post('/ajout', [\App\Http\Controllers\PageAjout::class, "CreerProduit"]);
Route::post('/modif/{id}', [\App\Http\Controllers\PageModification::class, "ModifProduit"]);
