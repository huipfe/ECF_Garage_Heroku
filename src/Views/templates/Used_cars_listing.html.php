<!-- Used cars listing page: Display a list of available used cars with relevant details. -->
<!-- Liste des produits : US3. Exposer les voitures d'occasion -->

<!-- US3. Exposer les voitures d'occasion Utilisateurs concernés: Employés, Visiteurs
Fonctionnalités désirées
Reproduction interdite ECF - Garage automobile Page 6 sur 12
Selon les souhaits de monsieur Parrot, le site web devra présenter les véhicules d'occasion disponibles
à la vente, avec des photos, des descriptions détaillées et des informations techniques.
Pour chaque voiture, il faudra afficher obligatoirement:
- Son prix
- Une image à mettre en avant
- L’année de mise en circulation
- Le kilométrage
Pour augmenter les chances qu’une voiture soit vendue, il peut être intéressant de transmettre aussi
une galerie d’images, un tableau de caractéristiques
ainsi que la liste des équipements et options installés dans ce véhicule.
N’importe quel employé du garage doit pouvoir ajouter, depuis son espace, de nouvelles voitures sur le site. -->


<?php 
require_once "Header.html.php";
?>
<?php 
var_dump($carsDetails)
?>
<main>


    <div class="container-lg">
        <div class="row">

            <div class="col-lg">
                <h1 class="products">Nos Produits</h1>
            </div>

            <div class="col-lg-6">
                <div class="input-group" style="margin-top: 12px;">
                    <input type="text" class="form-control m-2 p-2 rounded-5"
                    id="searchInput" placeholder="Recherche">
                    <div class="input-group-append">
                        <button class="btn btn-light m-2 p-2" type="button" id="searchButton">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    
    <!-- Barre de filtrage - Mobile -->
    <section id="filter-sidebar">
            <div class=" filtrage-bar ">
                <h5 class="m-2 p-2 filtrage-title">
                    Liste des voitures <br> d'occasions par filtre
                </h5>
                <div class="gray-bar d-flex align-items-center">
                    <div class="form-check ">
                        <input class="form-check-input"  type="checkbox" value="" id="checkbox1" name="years">
                        <label class="form-check-label cursor-pointer" for="checkbox1">
                            <span class="checkbox-icon pe-none">2020>=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox2" name="years">
                        <label class="form-check-label cursor-pointer" for="checkbox2">
                            <span class="checkbox-icon pe-none">2020<=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3" name="kilometers">
                        <label class="form-check-label cursor-pointer" for="checkbox3">
                            <span class="checkbox-icon pe-none">2000km>=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox4" name="kilometers">
                        <label class="form-check-label cursor-pointer" for="checkbox4">
                            <span class="checkbox-icon pe-none">2000km<=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox5" name="price">
                        <label class="form-check-label cursor-pointer" for="checkbox5">
                            <span class="checkbox-icon pe-none">100000€<=</span>
                        </label>
                    </div>
                </div>
            </div>
    </section>

        
    <!-- Main cars -->
        
<div class="container">
    <div class="row">

        <div class="col-lg-4">
            <div class="card mb-3" style="background: #E8E4E4;">
                <div class="row g-0">
                    <div class="col-md-5 col-lg-12">
                        <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_1.jpg"
                            alt="Image 1" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="card-body mx-3 text-md-center text-lg-end">
                            <h3 class="card-title fw-bold" id = "title-card">Ford Mustang</h3>
                            <p class="card-text fst-italic" id = "title-description">Ford Mustang GT, une voiture de
                                sport emblématique avec un design élégant et des performances puissantes.</p>
                            <p class="card-text fs-5" id = "title-modele">Modèle : V8-GT </p>
                            <p class="card-text fs-5 filter-year" id = "title-year">Année : <span>2022</span></p>
                            <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                <span>5 000 km</span></p>
                            <p class="card-text fs-5" id = "title-price">Prix :
                                <span class="fw-bold">50 000 €</span></p>
                                <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger">Détails
                                <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-3" style="background: #E8E4E4;">
                <div class="row g-0">
                    <div class="col-md-5 col-lg-12">
                        <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_2.jpg"
                            alt="Image 2" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="card-body mx-3 text-md-center text-lg-end">
                            <h3 class="card-title fw-bold" id = "title-card">Audi</h3>
                            <p class="card-text fst-italic" id = "title-description">Audi R8 V10, une supercar de luxe
                                avec un moteur V10 et une tenue de route exceptionnelle.</p>
                            <p class="card-text fs-5" id = "title-modele">Modèle : R8 V10</p>
                            <p class="card-text fs-5 filter-year" id = "title-year">Année : <span>2023</span></p>
                            <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                <span>2 000 km</span></p>
                            <p class="card-text fs-5" id = "title-price">Prix :
                                <span class="fw-bold">150 000 €</span></p>
                                <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <a href="/ECF_Garage/src/Views/templates/Car_details.html.php"
                            class="btn btn-danger">Détails
                                <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-3" style="background: #E8E4E4;">
                <div class="row g-0">
                    <div class="col-md-5 col-lg-12">
                        <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_3.jpg"
                            alt="Image 3" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="card-body mx-3 text-md-center text-lg-end">
                            <h3 class="card-title fw-bold" id = "title-card">Lamborghini</h3>
                            <p class="card-text fst-italic" id = "title-description">Lamborghini Aventador SVJ, une
                                voiture de course légendaire avec un design agressif et des performances extrêmes.</p>
                            <p class="card-text fs-5" id = "title-modele">Modèle : Aventador SVJ </p>
                            <p class="card-text fs-5 filter-year" id = "title-year">Année : <span>2018</span></p>
                            <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                <span>1 000 km</span></p>
                            <p class="card-text fs-5" id = "title-price">Prix :
                                <span class="fw-bold">370 000 €</span></p>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger">Détails
                                <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="col-lg-4">
            <div class="card mb-3" style="background: #E8E4E4;">
                <div class="row g-0">
                    <div class="col-md-5 col-lg-12">
                        <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_3.jpg"
                            alt="Image 3" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="card-body mx-3 text-md-center text-lg-end">
                            <h3 class="card-title fw-bold" id = "title-card">Lamborghini</h3>
                            <p class="card-text fst-italic" id = "title-description">Lamborghini Aventador SVJ, une
                                voiture de course légendaire avec un design agressif et des performances extrêmes.</p>
                            <p class="card-text fs-5" id = "title-modele">Modèle : Aventador SVJ </p>
                            <p class="card-text fs-5 filter-year" id = "title-year">Année : <span>2025</span></p>
                            <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                <span>1 000 km</span></p>
                            <p class="card-text fs-5" id = "title-price">Prix :
                                <span class="fw-bold">250 000 €</span></p>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger">Détails
                                <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-3" style="background: #E8E4E4;">
                <div class="row g-0">
                    <div class="col-md-5 col-lg-12">
                        <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_3.jpg"
                            alt="Image 3" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="card-body mx-3 text-md-center text-lg-end">
                            <h3 class="card-title fw-bold" id = "title-card">Lamborghini</h3>
                            <p class="card-text fst-italic" id = "title-description">Lamborghini Aventador SVJ, une
                                voiture de course légendaire avec un design agressif et des performances extrêmes.</p>
                            <p class="card-text fs-5" id = "title-modele">Modèle : Aventador SVJ </p>
                            <p class="card-text fs-5 filter-year" id = "title-year">Année : <span>2018</span></p>
                            <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                <span>1 000 km</span></p>
                            <p class="card-text fs-5" id = "title-price">Prix :
                                <span class="fw-bold">99 000 €</span></p>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger">Détails
                                <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>







<script src="/ECF_Garage/Assets/JS/Used_cars_listing.js"></script>


</main>


<?php 
require_once "Footer.html.php";
?>
