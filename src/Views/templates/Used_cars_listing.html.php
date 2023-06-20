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


<!-- Barre de filtrage -->
<section>
    <div class="m-2 filtrage-bar">
        <h5 class="m-2 p-2 filtrage-title">
            Liste des voitures <br> d'occasions par filtre
        </h5>
        <div class="gray-bar d-flex align-items-center">
            <div class="form-check custom-checkbox">
                <input class="form-check-input"  type="checkbox" value="" id="checkbox1">
                <label class="form-check-label cursor-pointer" for="checkbox1">
                    <span class="checkbox-icon"> Filtre 1</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                <label class="form-check-label cursor-pointer" for="checkbox2">
                    <span class="checkbox-icon">Filtre 2</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                <label class="form-check-label cursor-pointer" for="checkbox3">
                    <span class="checkbox-icon">Filtre 3</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                <label class="form-check-label cursor-pointer" for="checkbox4">
                    <span class="checkbox-icon">Filtre 4</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                <label class="form-check-label cursor-pointer" for="checkbox5">
                    <span class="checkbox-icon">Filtre 5</span>
                </label>
            </div>
        </div>
    </div>
</section>





	<!-- Inventory - START -->
	<div class="row" id="ads">

    <!-- Category Card -->
    <div class="col-12 col-lg-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Low KMS</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/voiture_1.jpg" width="440" height="262"
                alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">$28,000.00</span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Honda Accord LX</h5>
                </div>
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Fully-Loaded</span>
                <span class="card-notify-year">2017</span>
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/voiture_2.jpg" width="440" height="262"
                alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">$28,000.00</span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Honda CIVIC HATCHBACK LS</h5>
                </div>
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Price Reduced</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/voiture_3.jpg" width="440" height="262"
                alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">$22,000.00</span>
                <span class="card-detail-badge">8000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Honda Accord Hybrid LT</h5>
                </div>
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>

</div>
</div>


<!-- Les autres -->
<!-- <div class="container">


<div class="row heading">
    <h2 class="sub-heading">Inventory</h2>
</div>

<div class="container-fluid" id="inventory">
    <div class="row">
        <div class="col-md-3">
            <div class="card">

                    <img class="img-fluid"
                    src="/ECF_Garage/Assets/images/Used cars listing/voiture_4.jpg" width="400" height="auto"
                    alt="Card image cap">
                    <button class="btn view-btn">SEDAN</button>
                    <div class="ribbon"><span>Popular</span></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/voiture_5.jpg" width="400" height="auto"
                alt="Card image cap">
                <button class="btn view-btn">SUV</button>
                <div class="ribbon"><span>Popular</span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/voiture_6.jpg" width="400" height="auto"
                alt="Card image cap">
                <button class="btn view-btn">TRUCK</button>
                <div class="ribbon"><span>Popular</span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/HATCHBACK.jpg" width="400" height="auto"
                alt="Card image cap">
                <button class="btn btn-danger view-btn">HATCHBACK</button>
                <div class="ribbon">
                    <span>Popular</span>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/WAGON.jpg"width="400" height="auto"
                alt="Card image cap">
                <button class="btn view-btn">WAGON</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/COUPE.jpg"width="400" height="auto"
                alt="Card image cap">
                <button class="btn btn-danger view-btn">COUPE</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/CONVERTIBLE.jpg"width="400" height="auto"
                alt="Card image cap">
                <button class="btn btn-danger view-btn">CONVERTIBLE</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid"
                src="/ECF_Garage/Assets/images/Used cars listing/MINIVAN.jpg"width="400" height="auto"
                alt="Card image cap">
                <button class="btn  view-btn">MINIVAN</button>
            </div>
        </div>

    </div> -->



</div>

<!-- Inventory - END -->
</div>


</main>


<?php 
require_once "Footer.html.php";
?>
