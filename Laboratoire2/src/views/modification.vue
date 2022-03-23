<script setup>
import { RouterLink, RouterView } from 'vue-router'
import {ref} from 'vue'
var nom = ref("ds");
var prix = ref("ds");
var fournisseur = ref("ds");
var quantite = ref("ds");

function modifProduit()
{
    nom.value = document.getElementById("nom").value;
    prix.value = document.getElementById("prix").value;
    fournisseur.value = document.getElementById("fournisseur").value;
    quantite.value = document.getElementById("quantite").value;
    var bd;

    var request = indexedDB.open('ProduitBD',3)

        request.onsuccess = function(event){
            alert("modif du produit");
            var bd = event.target.result
            
            var transaction = bd.transaction(["Produits"], "readwrite");
            var produits = transaction.objectStore("Produits");
            
            produits.put({
            produitId: 1,
			nom: nom.value,
			prix: prix.value,
			fournisseurs :fournisseur.value,
			quantite : quantite.value,
            });
        }
        request.onerror = function(event){
            alert("Le post existe pas")
        }
}
</script>
<template>
    <div id="app" class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-nav-brown fixed-top">
                <RouterLink to="/" class="navbar-brand">Inventaire</RouterLink>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"><i class="fas fa-plus-circle"></i> </a>   
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider">
										<img class="d-block" src="src/assets/images/eco-slider-img-1.png" alt="First slide">
                                        <a href="#" class="btn btn-primary btn-block btn-lg">Choisir une image</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3"><input id="nom" type="text" value="Produit #1"/></h2>
                                            <h3 class="mb-0 text-primary">$<input id="prix" type="text" value="49.00"></h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Fournisseur</h4>
                                            <input id="fournisseur" type="text" value="ACME Inc.">
                                            <div class="product-qty">
                                                <h4>Quantité</h4>
                                                <div class="quantity">
                                                    <input id="quantite" type="number" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <h4 class="mb-1">Description</h4>
                                            <textarea rows="4" cols="50">Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</textarea>
                                            <a href="#" @click="modifProduit" class="btn btn-primary btn-block btn-lg">Sauvegarder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>

    </div>
</template>