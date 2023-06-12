<!-- Homepage: Display information about the garage, services offered, and featured cars. -->

<?php 
require_once 'src/Views/templates/Header.html.php';
?>

<main>
    <div class="container-fluid p-0 text-light position-relative">
        <h1 class="position-absolute top-0 start-0 m-3">
        <span style="font-weight: 700;">Le Garage V. Parrot,</span>
        <span style="font-weight: 600;">pensez</span>
        <span style="font-weight: 300;">différemment.</span>
        <span style="font-weight: 600;">Louez</span>
        <span style="font-weight: 300;">différemment...</span>
        </h1>
        <img class="img-fluid d-lg-none" width="100%" height="auto" src="Assets/images/Fond_Voiture_homepage_mobile.jpg"
        alt="Fond_Voiture_homepage_mobile">
        </img>
        <img class="img-fluid d-none d-lg-block" width="100%" height="auto" src="Assets/images/Fond_Voiture_homepage_desktop.png"
        alt="Fond_Voiture_homepage_desktop">
        </img>
            <h2 class="position-absolute top-50 start-50 translate-middle">Cliquez ici, pour en savoir plus</h2>
            <a href="#" class="col-md-4 d-flex align-items-center justify-content-start mb-3 mb-md-0
        me-md-autolink-body-emphasistext-decoration-none position-absolute top-50 start-50 translate-middle">

            <img src="Assets/images/Bouton_Voiture.png" width="100" height="auto"
                alt="Bouton Voiture">
            </img>
        </a>


    </div>
</main>

<?php 
require_once 'src/Views/templates/Footer.html.php';
?>