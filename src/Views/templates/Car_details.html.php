<!-- Car details page: Provide detailed information about a selected used car. -->
<!-- Page de détail d'un produit : US4. Filtrer la liste des véhicules d’occasion -->
<!-- US4. Filtrer la liste des véhicules d’occasion Utilisateurs concernés: Visiteurs La liste des
voitures d’occasion disponibles à la vente peut parfois s’avérer être très longue, ce qui risque
de dérouter les visiteurs du site.
Pour remédier à cela, il faudrait mettre en place un système de filtres afin de faciliter la
recherche de véhicules. Les résultats pourront être ajustés en fonction d'une fourchette de prix,
d'un nombre de kilomètres parcourus ou d'une année de mise en circulation (voir exemple dans les annexes) .
Et pour obtenir la meilleure expérience utilisateur possible, les filtres devront être appliqués
sans recharger la page. -->

<?php 
require_once 'Header.html.php';
?>

<!-- <main> -->

<!-- Haut de la page - image -->
    <!-- <section id="header">

        <div class="container">

            <div class="justify-content-start">
                <a href="/ECF_Garage/src/Views/templates/Used_cars_listing.html.php"
                class="text-decoration-none">
                <span>
                    <button
                    class="btn">
                        <i
                        class="bi bi-arrow-left"></i>
                            Retour à la liste
                        </span>
                    </button>
                </a>
            </div>

    
            <img
            class="mb-2 mt-5"
            src="/ECF_Garage/Assets/images/Car_details/Voiture_covers.jpg"
            alt="voitureImage">
        </div>

    </section> -->
    
<!-- Descriptif  -->
    <!-- <section id="description">
        <div class="m-2 fw-4"><p>Hot Sale</p></div>
        <div class="m-2">
            <h1>Nom Voiture®</h1>

            <h2>Descriptif rapide</h2>

            <h3>Année de la mise en circulation</h3>
        </div>

            <div class="m-3 mt-5 d-flex">
                <h4 class="">Genre Véhicule</h4>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>

            <div class="mb-5">
                <h5 class="m-3 mt-5">Description :</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odit inventore possimus repudiandae molestiae quaerat cum, velit,<br>
                        saepe excepturi itaque officia aperiam neque voluptate atque! Impedit
                        veritatis magni quibusdam labore ea?
                    </p>
            </div>

    </section> -->

<!-- Série image modal & poids  -->
    <!-- <section id="modal-image"> -->

    <!-- Image modal -->
        <!-- <div class="">

            <div class="m-2">
    
            <button class="btn">
                <img
                width= "50px";
                height= "50px";
                src="/ECF_Garage/Assets/images/Car_details/miniature-1.jpg"
                alt="miniature-1"></button>
    
            <button class="btn">
                <img
                width= "50px";
                height= "50px";
                src="/ECF_Garage/Assets/images/Car_details/miniature-2.jpg"
                alt="miniature-1"></button>
    
            <button class="btn">
                <img
                width= "50px";
                height= "50px";
                src="/ECF_Garage/Assets/images/Car_details/miniature-3.jpg"
                alt="miniature-1"></button>
    
            </div>
    
            <div class="m-2">
                <h5 class="m-2 mb-4">Poids :</h5>
                    <div class="btn my-btn-danger mb-2 btn-danger">XX Tonnes</div>
            </div>

        </div>

    </section>


</main> 
-->

<main>

    <div class="container-lg">
        <div class="row">
            <!-- Section header -->
            <div class="col-lg-6">
                <section id="header">
                    <div class="container">
                    <div class="justify-content-start">
                        <a href="/ECF_Garage/src/Views/templates/Used_cars_listing.html.php"
                        class="text-decoration-none">
                            <span>
                                <button class="btn">
                                    <i class="bi bi-arrow-left"></i>
                                    Retour à la liste
                                </button>
                            </span>
                        </a>
                    </div>
                    <img class="mb-3 mt-5"
                    src="/ECF_Garage/Assets/images/Car_details/Voiture_covers.jpg"
                    alt="voitureImage">
                    </div>
                </section>
            </div>
            
            <!-- Section description and modal-image -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <section id="description">
                            <div class="m-2 fw-4"><p>Hot Sale</p></div>
                            <div class="m-2">
                                <h1>Nom Voiture®</h1>
                                <h2>Descriptif rapide</h2>
                                <h3>Année de la mise en circulation</h3>
                            </div>
                            <div class="m-3 mt-5 d-flex">
                                <h4 class="">Genre Véhicule</h4>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="mb-5">
                                <h5 class="m-3 mt-5">Description :</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Odit inventore possimus repudiandae molestiae quaerat cum, velit,<br>
                                    saepe excepturi itaque officia aperiam neque voluptate atque! Impedit
                                    veritatis magni quibusdam labore ea?
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-12">
                        <section id="modal-image">
                            <div class="">
                                <div class="m-2">
                                    <button class="btn">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/ECF_Garage/Assets/images/Car_details/miniature-1.jpg"
                                        alt="miniature-1">
                                    </button>
                                    <button class="btn">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/ECF_Garage/Assets/images/Car_details/miniature-2.jpg"
                                        alt="miniature-1">
                                    </button>
                                    <button class="btn">
                                        <img
                                        width="50px"
                                        height="50px"
                                        src="/ECF_Garage/Assets/images/Car_details/miniature-3.jpg"
                                        alt="miniature-1">
                                    </button>
                                </div>
                                <div class="m-2">
                                    <h5 class="m-2 mb-4">Poids :</h5>
                                    <div class="btn my-btn-danger mb-2 btn-danger">XX Tonnes</div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
require_once 'Footer.html.php';
?>