<?php 
require_once "Header.html.php";
?>

<main>


<!-- <div class="container container-lg">
  <div class="text-center">
    <h1>Panel d'administration</h1>
    <img src="chemin_vers_limage_admin.jpg" alt="Photo admin" class="img-fluid mt-3">
  </div>
  <div class="d-flex flex-column align-items-center mt-3">
    <input type="text" class="form-control mb-2" placeholder="Recherche utilisateur">
    <h4 class="mb-2">Utilisateur</h4>
    <button class="btn btn-danger"><i class="bi bi-person"></i> Créer Compte</button>
  </div>
</div> -->




<!-- <div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-4">Panel d'administration</h1>
      <img src="chemin_vers_votre_image" alt="Photo de l'admin" class="img-fluid mt-4">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <div class="input-group mt-4">
        <input type="text" class="form-control" placeholder="Recherche">
        <div class="input-group-append">
          <span class="input-group-text bg-light">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h2 class="mt-4">Utilisateur</h2>
    </div>
    <div class="col-lg-6 text-right">
      <button class="btn btn-danger">
        <i class="fas fa-user"></i> Créer Compte
      </button>
    </div>
  </div>
</div> -->

<!-- Dashboard titre -->
<section class="d-none d-lg-block bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <h1 class="py-5 m-5">Panel d'administration</h1>
      </div>
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <!-- Photo de l'admin -->
        <img src="/ECF_Garage/Assets/images/Avatar Admin.png" 
        width="80" height="auto"
        class="img-fluid m-2" alt="Photo de l'admin">
        <p class="text-center fs-5 fw-bold">Admin@gmail.com</p>
      </div>
    </div>
  </div>
</section>



<!-- Contenu principal -->
<div class="container mt-3 justify-content-center text-center">
  <div class="row">

    <!-- Barre de recherche utilisateur -->
    <div class="col-lg-6">
      <div class="input-group">
        <div class="m-2 justify-content-start text-start">
          <h3>Utilisateur</h3>
          <p>X employé(s)</p>
        </div>
        <input type="text" class="form-control m-2 p-2" placeholder="Recherche">
        <div class="input-group-append">
          <button class="btn btn-light m-2 p-2" type="button">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Bouton "Créer Compte" -->
    <div class="col-12 col-lg-6 py-2 justify-content-end text-end">
      <button class="btn btn-danger fs-4">
        <i class="bi bi-person-add"></i> Créer Compte
      </button>
    </div>

  </div>
</div>




</main>


<?php 
require_once "Footer.html.php";
?>
