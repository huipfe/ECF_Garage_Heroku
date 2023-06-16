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
        <img src="/ECF_Garage/Assets/images/Dashboard page/Avatar Admin.png"
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
      <div class="input-group ">

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
  <button class="btn btn-danger btn-lg-lg">
    <i class="bi bi-person-add"></i> Créer Compte
  </button>
</div>



  </div>
</div>

<div class="container-lg">
  <div class="row ">
    <!-- Première colonne - Noms d'utilisateur -->
    <div class="col-lg-12 col-10">
      <div class="mb-1">
        <div class="d-flex align-items-center justify-content-between">
          <div class="picto">
            <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png" alt="Pictogramme"
            class="img-fluid p-2" width="72">
          </div>
          <h4>Noms d'utilisateur</h4>
          <h4 style="margin-right: 2rem;">Email</h4>
          <h4>Actions</h4>
        </div>
        


        <ul class="list-unstyled">
          <li>
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img-fluid p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img-fluid">
                </div>
                <div class="username">Nom 1</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 6rem;">Email 1</li>
              </ul>
              <ul class="list-unstyled">
                
                <button class="btn btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img-fluid p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img-fluid">
                </div>
                <div class="username">Nom 2</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 6rem;">Email 2</li>
              </ul>
              <ul class="list-unstyled">

                <button class="btn btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img-fluid  p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img-fluid">
                </div>
                <div class="username">Nom 3</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 6rem;">Email 3</li>
              </ul>
              <ul class="list-unstyled">

                <button class="btn btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>
        </ul>

      </div>
    </div>


  </div>
</div>



</main>


<?php 
require_once "Footer.html.php";
?>
