<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Ajoutiew from '../views/ajout.vue'
import ModifView from '../views/modification.vue'
import ProduitView from '../views/produit.vue'
</script>

<template>
    <div id="app" class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-nav-brown fixed-top">
                <RouterLink to="/" class="navbar-brand">Inventaire</RouterLink>
                <RouterLink to="/Ajout" class="navbar-brand">Ajouter</RouterLink>
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
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="src/assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">Produit #1</h3>
                                                <div class="product-price">49</div>
                                            </div>
                                            <div class="product-btn">
                                                <RouterLink to="/modif" class="btn btn-primary">Modifier</RouterLink>
                                                <RouterLink to="/produit" class="btn btn-primary">Details</RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="src/assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">Produit #1</h3>
                                                <div class="product-price">49</div>
                                            </div>
                                            <div class="product-btn">
                                                <RouterLink to="/modif" class="btn btn-primary">Modifier</RouterLink>
                                                <RouterLink to="/produit" class="btn btn-primary">Details</RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="src/assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">Produit #1</h3>
                                                <div class="product-price">49</div>
                                            </div>
                                            <div class="product-btn">
                                                <RouterLink to="/modif" class="btn btn-primary">Modifier</RouterLink>
                                                <RouterLink to="/produit" class="btn btn-primary">Details</RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="src/assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">Produit #1</h3>
                                                <div class="product-price">49</div>
                                            </div>
                                            <div class="product-btn">
                                                <RouterLink to="/modif" class="btn btn-primary">Modifier</RouterLink>
                                                <RouterLink to="/produit" class="btn btn-primary">Details</RouterLink>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="src/assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">Produit #1</h3>
                                                <div class="product-price">49</div>
                                            </div>
                                            <div class="product-btn">
                                                <RouterLink to="/modif" class="btn btn-primary">Modifier</RouterLink>
                                                <RouterLink to="/produit" class="btn btn-primary">Details</RouterLink>
                                            </div>
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
