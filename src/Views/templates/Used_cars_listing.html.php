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
// var_dump($carsDetails)

?>
<main>


    <div class="container-lg">
        <div class="row">

            <div class="col-lg">
                <h1 class="products">Nos Produits</h1>
            </div>

            <div class="col-lg-6">
                <div class="input-group">
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

    <?php
    // var_dump($carsDetails)
    ?>
        <?php foreach ($carsDetails as $car) : ?>

            <div class="col-lg-4">
                <div class="card mb-3" style="background: #E8E4E4;">
                    <div class="row g-0">
                        <div class="col-md-5 col-lg-12">
                            <!-- "/ECF_Garage/Assets/images/Used cars listing/voiture_1.jpg" -->
                            <?php
                            // Récupérer les données binaires de l'image depuis la base de données
                            $imageData = $car->image;
                            // Convertir les données binaires en base64
                            $imageBase64 = base64_encode($imageData);
                            ?>
                            <img src="data:image/jpeg;base64, <?= $imageBase64 ?>"
                                alt="Image 1" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-lg-12">
                            <div class="card-body mx-3 text-md-center text-lg-end">
                                <h3 class="card-title fw-bold" id = "title-card"><?= $car->marque?></h3>
                                <p class="card-text fst-italic" id = "title-description"><?= $car->description?></p>
                                <p class="card-text fs-5" id = "title-modele">Modèle : <?= $car->modele?></p>
                                <p class="card-text fs-5 filter-year" id = "title-year">Année :
                                    <span><?= $car->annee?></span></p>
                                <p class="card-text fs-5 filter-kilometrage" id = "title-kilometrage">Kilométrage :
                                    <span><?= $car->kilometrage?> km</span></p>
                                <p class="card-text fs-5" id = "title-price">Prix :
                                    <span class="fw-bold"><?= $car->prix?>€</span></p>
                                    <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <!-- /ECF_Garage/src/Views/templates/Car_details.html.php -->
                                <a href="/ECF_Garage/src/Views/templates/Car_details.html.php/carDetails/<?= urlencode($car->marque)?>/<?= $car->id?>"
                                    class="btn btn-danger">Détails
                                    <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
<!-- Mauvais : http://localhost/public/src/Views/templates/Car_details.html.php/details/Ford%20Mustang/2 -->
<!-- Bon     : http://localhost/ECF_Garage/src/Views/templates/Car_details.html.php/details%20Ford%20Mustang/2 -->

    </div>
</div>







<script src="/ECF_Garage/Assets/JS/Used_cars_listing.js"></script>


</main>


<?php 
require_once "Footer.html.php";
?>

