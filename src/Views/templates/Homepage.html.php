<!-- Homepage: Display information about the garage, services offered, and featured cars. -->


<?php 
require_once "Header.html.php";
?>

<main>
    
    <!-- Titre d'intro de la homepage -->
    <div class="container-fluid p-0 text-light position-relative">
        <h1 class="position-absolute top-0 start-0 m-3">
        <span style="font-weight: 700;">Le Garage V. Parrot,</span>
        <span style="font-weight: 600;">pensez</span>
        <span style="font-weight: 300;">différemment.</span>
        <span style="font-weight: 600;">Louez</span>
        <span style="font-weight: 300;">différemment...</span>
        </h1>

        <!-- Image de fond, version desktop & mobile -->
        <img class="img-fluid d-lg-none" width="100%" height="auto"
        src="/ECF_Garage/Assets/images/Fond_Voiture_homepage_mobile.jpg"
        alt="Fond_Voiture_homepage_mobile">
        </img>
        <img class="img-fluid d-none d-lg-block" width="100%" height="auto"
        src="/ECF_Garage/Assets/images/Fond_Voiture_homepage_desktop.png"
        alt="Fond_Voiture_homepage_desktop">
        </img>

        <!-- Bouton qui envois sur la page "à propos" -->
        <div class="position-relative">
            <h2 class="position-absolute bottom-100 start-50 translate-middle text-center mt-n5">
                <span class="">Cliquez ici,</span>
                <br>
            <a href="src/Views/templates/Apropos.html.php"
            class="col-md-4 d-flex align-items-center justify-content-start mb-3 mb-md-0
            me-md-autolink-body-emphasistext-decoration-none position-absolute bottom-30 top-50
            start-50 translate-middle">
                <!-- Mobile Bouton -->
                <img src="/ECF_Garage/Assets/images/Bouton_Voiture_mobile.png" class="img-fluid d-lg-none d-block"
                width="60" height="auto" alt="Bouton Voiture">
                <!-- Desktop Bouton -->
                <img src="/ECF_Garage/Assets/images/Bouton_Voiture_desktop.png" class="img-fluid d-none d-lg-block"
                width="300"height="auto" alt="Bouton Voiture2">
            </a>
            <br>
                <span class="">pour en savoir plus</span>
            </h2>
        </div>

    </div>
</main>

<?php 
require_once 'Footer.html.php';
?>