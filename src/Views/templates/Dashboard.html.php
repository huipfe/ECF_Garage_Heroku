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

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Panel d'administration</a>
  </nav>

  <!-- Contenu principal -->
  <div class="container mt-4">
    <div class="row">

      <!-- Photo de l'admin -->
      <div class="col-lg-6">
        <img src="chemin/vers/photo-admin.jpg" class="img-fluid" alt="Photo de l'admin">
      </div>

      <!-- Barre de recherche utilisateur -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Recherche">
          <div class="input-group-append">
            <span class="input-group-text bg-light">
              <i class="fas fa-search"></i>
            </span>
          </div>
        </div>
      </div>

    </div>

    <!-- Bouton "Créer Compte" -->
    <div class="row mt-4">
      <div class="col-lg-6">
        <h3>Utilisateur</h3>
      </div>
      <div class="col-lg-6">
        <button class="btn btn-danger btn-block">
          <i class="fas fa-user"></i> Créer Compte
        </button>
      </div>
    </div>

  </div>
</main>


<?php 
require_once "Footer.html.php";
?>
