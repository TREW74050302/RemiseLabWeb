<?php

namespace Tests\Feature;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_AjoutProduit()
    {
        $produit = new Produit();

        $produit->id = '40';
        $produit->nom = 'Moi';
        $produit->quantite = '2';
        $produit->prix = '2';
        $produit->fournisseur = 'LALALALA';

        $produit->Save();

        $response = $this->get('/produits/18');

        $response = $this->assertDatabaseHas('produits', [
            'nom' => 'Moi']);
    }

    public function test_ModifierProduit()
    {
        $produit = Produit::find(40);

        $produit->nom = 'GrosseModif';
        $produit->quantite = '2';
        $produit->prix = '4';
        $produit->fournisseur = 'LaRue';

        $produit->Save();

        $response = $this->assertDatabaseHas('produits', [
            'nom' => 'GrosseModif',
            'quantite' => '2',
            'prix' => '4',
            'fournisseur' => 'LaRue']);
    }

    public function test_DeleteProduit()
    {
        $produit = Produit::find(40);

        $produit->Delete();

        $response = $this->assertDatabaseMissing('produits', [
            'nom' => 'Moi']);
    }

}
