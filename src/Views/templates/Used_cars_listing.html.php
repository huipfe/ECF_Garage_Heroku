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

<main>
    <div>
        <h1 class="products">Nos Produits</h1>
    </div>



<!-- Mis en avant -->
    <div class="container-lg">
    
        <!-- Barre de recherche utilisateur -->
        <div class="col-lg-6">
            <div class="input-group">
    
                <input
                type="text"
                class="form-control m-2 p-2 rounded-5"
                placeholder="Recherche ">
    
            <div class="input-group-append">
                <button
                class="btn btn-light m-2 p-2"
                type="button">
                    <i
                        class="bi bi-search">
                    </i>
                </button>
            </div>
    
            </input>
    
        </div>
    </div>
    
    
    <!-- Barre de filtrage - Mobile -->
    <section>
            <div class="m-2 filtrage-bar d-lg-none">
                <h5 class="m-2 p-2 filtrage-title">
                    Liste des voitures <br> d'occasions par filtre
                </h5>
                <div class="gray-bar d-flex align-items-center">
                    <div class="form-check ">
                        <input class="form-check-input"  type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label cursor-pointer" for="checkbox1">
                            <span class="checkbox-icon pe-none"> Filtre 1</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                        <label class="form-check-label cursor-pointer" for="checkbox2">
                            <span class="checkbox-icon pe-none">Filtre 2</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label cursor-pointer" for="checkbox3">
                            <span class="checkbox-icon pe-none">Filtre 3</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                        <label class="form-check-label cursor-pointer" for="checkbox4">
                            <span class="checkbox-icon pe-none">Filtre 4</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                        <label class="form-check-label cursor-pointer" for="checkbox5">
                            <span class="checkbox-icon pe-none">Filtre 5</span>
                        </label>
                    </div>
                </div>
            </div>
    </section>
        
    <!-- -->
        
    <div class="container">
            <div class="row">
        
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                            <div class="col-md-5 col-lg-12">
                                <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_1.jpg"
                                alt="Image 1" class="card-img">
                            </div>
                            <div class="col-md-7 col-lg-12">
                                <div class="card-body">
                                    <h5 class="card-title">Nom de la voiture 1</h5>
                                    <p class="card-text">Description de la voiture 1</p>
                                    <p class="card-text">Kilométrage : 10 000 km</p>
                                    <p class="card-text">Prix : 20 000 €</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                    <a href="#" class="btn btn-danger">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                            <div class="col-md-5 col-lg-12">
                                <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_2.jpg"
                                alt="Image 1" class="card-img">
                            </div>
                            <div class="col-md-7 col-lg-12">
                                <div class="card-body">
                                    <h5 class="card-title">Nom de la voiture 1</h5>
                                    <p class="card-text">Description de la voiture 1</p>
                                    <p class="card-text">Kilométrage : 10 000 km</p>
                                    <p class="card-text">Prix : 20 000 €</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                    <a href="#" class="btn btn-danger">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                            <div class="col-md-5 col-lg-12">
                                <img src="/ECF_Garage/Assets/images/Used cars listing/voiture_3.jpg"
                                alt="Image 1" class="card-img">
                            </div>
                            <div class="col-md-7 col-lg-12">
                                <div class="card-body">
                                    <h5 class="card-title">Nom de la voiture 1</h5>
                                    <p class="card-text">Description de la voiture 1</p>
                                    <p class="card-text">Kilométrage : 10 000 km</p>
                                    <p class="card-text">Prix : 20 000 €</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                    <a href="#" class="btn btn-danger">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


        <!-- Barre de filtrage - LG (sidebar) -->
    <section>
            <div class="m-2 filtrage-bar d-none d-lg-flex">
                <h5 class="m-2 p-2 filtrage-title">
                    Liste des voitures <br> d'occasions par filtre
                </h5>
                <div class="gray-bar d-flex align-items-center">
                    <div class="form-check ">
                        <input class="form-check-input"  type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label cursor-pointer" for="checkbox1">
                            <span class="checkbox-icon pe-none"> Filtre 1</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                        <label class="form-check-label cursor-pointer" for="checkbox2">
                            <span class="checkbox-icon pe-none">Filtre 2</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label cursor-pointer" for="checkbox3">
                            <span class="checkbox-icon pe-none">Filtre 3</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                        <label class="form-check-label cursor-pointer" for="checkbox4">
                            <span class="checkbox-icon pe-none">Filtre 4</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                        <label class="form-check-label cursor-pointer" for="checkbox5">
                            <span class="checkbox-icon pe-none">Filtre 5</span>
                        </label>
                    </div>
                </div>
            </div>
    </section>

</main>


<?php 
require_once "Footer.html.php";
?>
