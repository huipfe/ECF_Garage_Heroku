<?php 
require_once "Header.html.php";
?>

<main>

    <!-- http://localhost/ECF_Garage/public/Dashboard/register -->
    <!-- <?= $registerForm ?> -->

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
        <p class="text-center fs-5 fw-bold">VincentParrot@gmail.com</p>
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
          <p id="employeeCount"></p>
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
          
        <?php foreach ($users as $Dashboard) : ?>
          <li class="employee">
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img p-2"
                width="72">
              </div>

              <div class="user-details">

                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img">
                </div>

                <div class="username">
                  <!-- <?= $Dashboard->user_id?> -->
                  <?= $Dashboard->name_users?>
                </div>

              </div>

              <ul class="list-unstyled email-name">
                <li style="margin-left: 2.5rem;"><?= $Dashboard->email?></li>
              </ul>

              <ul class="list-unstyled">
                
                <button class="btn btn-responsive btn-sm btn-danger m-2">
                  <li>
                    <i class="bi bi-pencil"></i> Modifier
                  </li>
                </button>

                <button class="btn btn-responsive btn-sm btn-danger m-2">
                  <li>
                    <i class="bi bi-trash"></i> Supprimer
                  </li>
                </button>

              </ul>
            </div>
          </li>

        <?php endforeach; ?>

      </ul>

        <!-- <ul class="list-unstyled">
          
          <li class="employee">
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img">
                </div>
                <div class="username">Bidule</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 2.5rem;">Bidule@gmail.com</li>
              </ul>
              <ul class="list-unstyled">
                
                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>

          <li class="employee">
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img">
                </div>
                <div class="username">Chouk</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 2rem;">Chouk@laposte.net</li>
              </ul>
              <ul class="list-unstyled">

                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>

          <li class="employee">
            <div class="d-flex align-items-center justify-content-between">
              <div class="picto">
                <img src="/ECF_Garage/Assets/images/Dashboard page/sigle.png"
                alt="Pictogramme"
                class="img  p-2"
                width="72">
              </div>
              <div class="user-details">
                <div class="avatar">
                  <img src="/ECF_Garage/Assets/images/Dashboard page/avatar.png"
                  alt="Avatar"
                  class="img">
                </div>
                <div class="username">Ilan</div>
              </div>
              <ul class="list-unstyled">
                <li style="margin-left: 2rem;">ilan.tervil@wanadoo.fr</li>
              </ul>
              <ul class="list-unstyled">

                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                  <i class="bi bi-pencil"></i> Modifier
                </li>
                </button>
                <button class="btn btn-responsive btn-sm btn-danger m-2">
                <li>
                <i class="bi bi-trash"></i> Supprimer
                </li>
                </button>

              </ul>
            </div>
          </li>

      
        </ul> -->

      </div>
    </div>


  </div>
</div>

</main>


<script src="/ECF_Garage/Assets/JS/Dashboard.js"></script>

<?php 
require_once "Footer.html.php";
?>
