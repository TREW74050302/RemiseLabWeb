<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| APIController Routes
|--------------------------------------------------------------------------
|
| Here is where you can register APIController routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your APIController!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Get('/produits', [\App\Http\Controllers\APIController::class, "AfficherProduit"])->middleware('auth.basic');
Route::Post('/produits/ajout', [\App\Http\Controllers\APIController::class, "AjouterProduit"])->middleware('auth.basic');

Route::Get('/produits/{id}', [\App\Http\Controllers\APIController::class, "AfficherProduitId"])->middleware('auth.basic');
Route::Put('/produits/{id}', [\App\Http\Controllers\APIController::class, "ModifierProduitId"])->middleware('auth.basic');
Route::Delete('/produits/{id}', [\App\Http\Controllers\APIController::class, "SupprimerProduitId"])->middleware('auth.basic');

Route::Put('/produits/{id}/{nouvelle_quantite}', [\App\Http\Controllers\APIController::class, "ModifierProduitQuantite"])->middleware('auth.basic');

//Chaine pour postman basic : d2lsbHVzQGdtYWlsLmNvbTphbGxv
