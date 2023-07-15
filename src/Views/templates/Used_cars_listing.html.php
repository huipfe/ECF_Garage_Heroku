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

    <!-- Message de réussite-->
    <?php if(!empty($_SESSION['message'])): ?>
        <div class="alert alert-success" id="alert" role="alert">
            <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>

    
    <!-- Message d'erreur -->
    <?php if(!empty($_SESSION['erreur'])): ?>
        <div class="alert alert-danger" id="alert" role="alert">
            <?php echo $_SESSION['erreur']; unset($_SESSION['erreur']); ?>
        </div>
    <?php endif; ?>

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
    
    
    <!-- Barre de filtrage -->
    <section id="filter-sidebar">
            <div class=" filtrage-bar ">
                <h5 class="m-2 p-2 filtrage-title">
                    Liste des voitures <br> d'occasions par filtre
                </h5>
                <div class="gray-bar d-flex align-items-center">
                    <div class="form-check ">
                        <input class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkbox1"
                        name="years">
                        <label
                        class="form-check-label cursor-pointer"
                        for="checkbox1">
                            <span class="checkbox-icon pe-none">2020>=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkbox2"
                        name="years">
                        <label
                        class="form-check-label cursor-pointer"
                        for="checkbox2">
                            <span class="checkbox-icon pe-none">2020<=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkbox3"
                        name="kilometers">
                        <label
                        class="form-check-label cursor-pointer"
                        for="checkbox3">
                            <span class="checkbox-icon pe-none">2000km>=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkbox4"
                        name="kilometers">
                        <label
                        class="form-check-label cursor-pointer"
                        for="checkbox4">
                            <span class="checkbox-icon pe-none">2000km<=</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkbox5"
                        name="price">
                        <label
                        class="form-check-label cursor-pointer"
                        for="checkbox5">
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
                        
                            <!-- Supression d'une voiture -->
                            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                                <button class="btn btn-danger mx-2 my-2 bi bi-trash3-fill deleteBtn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    data-action="/ECF_Garage/public/deleteCars/delete/<?= $car->id ?>">
                                </button>
                            <?php endif; ?>

                            <!-- Modification d'une voiture -->
                            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                                <a href="/ECF_Garage/public/modifier/modifie/<?= $car->id?>">
                                    <button
                                        class="btn btn-danger mx-2 my-2 bi bi-pencil-square">
                                    </button>
                                </a>
                            <?php endif; ?>

                            <?php
                            // Récupérer les données binaires de l'image depuis la base de données
                            $imageData = $car->image;
                            ?>
                            
                            <!-- Me permet de faire apparaitre les images de ma BDD,
                            qui ont été passé via mon formulaire.-->
                            <img src="data:image/jpeg;base64,<?= $imageData ?>"
                            alt="ImageVoiture" class="img-fluid">

                        </div>
                        <div class="col-md-7 col-lg-12">

                            <div class="card-body mx-3 text-md-center text-lg-end">
                                <h3 class="card-title fw-bold"
                                id = "title-card"><?= $car->marque?>
                            </h3>

                                <p class="card-text fst-italic"
                                    id = "title-description">
                                    <?= $car->description?>
                                </p>
    
                                <p class="card-text fs-5"
                                    id = "title-modele">Modèle :
                                    <?= $car->modele?>
                                </p>

                                <p class="card-text fs-5 filter-year"
                                    id = "title-year">Année :
                                    <span>
                                        <?= $car->annee?>
                                    </span>
                                </p>

                                <p class="card-text fs-5 filter-kilometrage"
                                id = "title-kilometrage">Kilométrage :
                                    <span>
                                        <?= $car->kilometrage?> km
                                    </span>
                                </p>

                                <p class="card-text fs-5"
                                id = "title-price">Prix :
                                    <span class="fw-bold">
                                        <?= $car->prix?>€
                                    </span>
                                </p>

                                <!-- <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div> -->

                                <!-- /ECF_Garage/src/Views/templates/Car_details.html.php/details/ -->
                                    <a href="/ECF_Garage/public/details/index/<?= intval($car->id) ?>"
                                    class="btn btn-danger">Détails
                                    <i class="mx-1 bi bi-info-circle-fill" style="color:#D9777F"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

            <!-- Creation d'une nouvelle voiture -->
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
        <a href="/ECF_Garage/public/addCars/ajouter">
            <button
                class="btn btn-danger mx-2 my-2 bi bi-plus-circle">
                Ajouter Voiture
            </button>
        </a>
    <?php endif; ?>
    
</div>

<!-- Modal de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            Êtes-vous sûr de vouloir supprimer cette voiture ?
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form id="deleteForm" action="" method="POST">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="/ECF_Garage/Assets/JS/Used_cars_listing.js"></script>


</main>


<?php 
require_once "Footer.html.php";
?>

