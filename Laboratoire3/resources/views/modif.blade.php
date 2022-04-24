<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Inventaire</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-nav-brown fixed-top">
                <a class="navbar-brand" href="../liste">Inventaire</a>
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

                    <form method="post">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                        <div class="product-slider">
                                            <img class="d-block" src="../public/assets/images/eco-slider-img-1.png" alt="First slide">
                                            <a href="#" class="btn btn-primary btn-block btn-lg">Choisir une image</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                        <div class="product-details">
                                            <div class="border-bottom pb-3 mb-3">
                                                <h2 class="mb-3"><input type="text" name="nomProduit" value="{{$produit['nom']}}"/></h2>
                                                <span style="color: red">@error('nomProduit'){{$message}}@enderror</span>
                                                <h3 class="mb-0 text-primary">$<input type="text" name="prixProduit" value="{{$produit['prix']}}"></h3>
                                                <span style="color: red">@error('prixProduit'){{$message}}@enderror</span>
                                            </div>
                                            <div class="product-size border-bottom">
                                                <h4>Fournisseur</h4>
                                                <input type="text" name="fournisseurProduit" value={{$produit['fournisseur']}}>
                                                <div class="product-qty">
                                                    <h4>Quantite</h4>
                                                    <div class="quantity">
                                                        <input type="number" name="quantiteProduit" value={{$produit['quantite']}}>
                                                    </div>
                                                </div>
                                                @if($errors->any())
                                                    <li style="color: red">@error('fournisseurProduit'){{$message}}@enderror</li>
                                                    <li style="color: red">@error('quantiteProduit'){{$message}}@enderror</li>
                                                @endif
                                            </div>
                                            <h4 class="mb-1">Description</h4>
                                            <textarea rows="4" cols="50" placeholder="Description du produit"></textarea>
                                            <a href="/"><input class="btn btn-primary btn-block btn-lg" type="submit" value="Sauvegarder"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>

    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->

</body>

</html>
