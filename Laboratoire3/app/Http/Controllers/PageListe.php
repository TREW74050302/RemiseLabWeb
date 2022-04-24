<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;


class PageListe extends Controller
{

    function Store()
    {
        $produits = Produit::all();

        return view('liste', ['produits' => $produits]);
    }
}
