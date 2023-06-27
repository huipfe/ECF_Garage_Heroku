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

<main>

<!-- Haut de la page - image -->
    <section id="header">

        <div class="container">

            <div class="justify-content-start">
                <button
                class="btn">
                    <i
                    class="bi bi-arrow-left">
                    </i>
                </button>Retour à la liste
            </div>

            <img
            class="mb-2 mt-5 mx-2"
            src="/ECF_Garage/Assets/images/Car_details/Voiture_covers.jpg"
            alt="voitureImage">
        </div>

    </section>
    
<!-- Descriptif  -->
    <section>
    
    </section>

<!-- Série image modal & poids  -->
    <section>
    
    </section>


</main>

<?php 
require_once 'Footer.html.php';
?>