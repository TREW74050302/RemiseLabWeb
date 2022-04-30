<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function AfficherProduit()
    {
        $produit = Produit::all();

        return(['produit' => $produit]);
    }
    function AjouterProduit(Request $requete)
    {
        $produit = new Produit();

        $produit->nom = $requete->nom;
        $produit->quantite = $requete->quantite;
        $produit->prix = $requete->prix;
        $produit->fournisseur = $requete->fournisseur;

        if($produit->save() == true);
        {
            return(['Le produit a bien été ajouteé']);
        }
        return(['Echec']);
    }
    function AfficherProduitId($id)
    {
        $produit = Produit::find($id);

        return(['produit' => $produit]);
    }
    function ModifierProduitId(Request $requete, $id)
    {
        $produit = Produit::find($id);

        $produit->nom = $requete->nom;
        $produit->quantite = $requete->quantite;
        $produit->prix = $requete->prix;
        $produit->fournisseur = $requete->fournisseur;

        if($produit->save() == true);
        {
            return(['Le produit a bien été modifié']);
        }
        return(['Echec']);
    }

    function SupprimerProduitId($id)
    {
        $produit = Produit::find($id);

        if($produit->delete() == true);
        {
            return(['Le produit a bien été supprimé']);
        }
        return(['Echec']);

    }
    function ModifierProduitQuantite($id, $nouvelle_quantite)
    {
        $produit = Produit::find($id);

        $produit->quantite = $nouvelle_quantite;

        if($produit->save() == true);
        {
            return(['Le produit a bien été modifié']);
        }
        return(['Echec']);
    }

}
