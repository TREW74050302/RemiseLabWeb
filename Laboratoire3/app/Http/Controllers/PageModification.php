<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class PageModification extends Controller
{
    function AfficherPageModification($id)
    {
        $produit = Produit::find($id);
        return view('modif', ['produit' => $produit]);
    }

    function ModifProduit($id, Request $requete)
    {
        $produit = Produit::find($id);

        $validated = $requete->validate([

            'nomProduit' => 'required|min:3|max:50',
            'quantiteProduit' => 'required|min:1|max:3',
            'prixProduit' => 'required|min:1|max:5',
            'fournisseurProduit' => 'required|min:3|max:50',
        ], [


            'nomProduit.required' => 'Pour des raisons de sécurité, il faut inserer le nom du produit.',
            'quantiteProduit.required' => 'Pour des raisons de sécurité, il faut inserer la quantité du produit.',
            'prixProduit.required' => 'Pour des raisons de sécurité, il faut inserer le prix du produit.',
            'fournisseurProduit.required' => 'Pour des raisons de sécurité, il faut inserer le fournisseur du produit.',

            'nomProduit.min' => 'Pour des raisons de sécurité, votre nom de produit doit avoir au moins 3 caractères.',
            'nomProduit.max' => 'Pour des raisons de sécurité, votre nom de produit doit avoir  moins de 50 caractères.',

            'quantiteProduit.min' => 'Pour des raisons de sécurité, la quantité du produit doit avoir au moins 1 caractères.',
            'quantiteProduit.max' => 'Pour des raisons de sécurité, la quantité du produit doit avoir  moins de 3 caractères.',

            'prixProduit.min' => 'Pour des raisons de sécurité, le prix du produit doit avoir au moins 1 caractères.',
            'prixProduit.max' => 'Pour des raisons de sécurité, le prix du produit doit avoir  moins de 5 caractères.',

            'fournisseurProduit.min' => 'Pour des raisons de sécurité, le fournisseur du produit doit avoir au moins 3 caractères.',
            'fournisseurProduit.max' => 'Pour des raisons de sécurité, le fournisseur du produit doit avoir  moins de 50 caractères.'
        ]);

        $produit->nom = $requete->nomProduit;
        $produit->quantite = $requete->quantiteProduit;
        $produit->prix = $requete->prixProduit;
        $produit->fournisseur = $requete->fournisseurProduit;

        $produit->save();

        return redirect('/');
    }
}
