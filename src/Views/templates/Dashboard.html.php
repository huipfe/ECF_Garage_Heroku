<main>

<!-- Dashboard titre -->
<section class="d-none d-lg-block bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <h1 class="py-5 m-5">Panel d'administration</h1>
      </div>
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <!-- Photo de l'admin -->
        <img src="/Assets/images/Dashboard page/Avatar Admin.png"
        width="80" height="auto"
        class="img-fluid m-2" alt="Photo de l'admin">
          <p class="text-center fs-5 fw-bold" id="adminAdressMail"></p>
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
  <button
  class="btn btn-danger btn-lg-lg btn-sm"
  data-bs-toggle="modal"
  data-bs-target="#createAccountModal">
    <i class="bi bi-person-add"></i> Créer un Compte
  </button>
</div>



  </div>
</div>

<div class="container-lg">
  <div class="row ">
    <!-- Première colonne - Noms d'utilisateur -->
    <div class="col-lg-12 col-md-11 col-10">
      <div class="mb-1">

        <div class="d-flex align-items-center justify-content-between">
          <div class="picto">
            <img src="/Assets/images/Dashboard page/sigle.png" alt="Pictogramme"
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
                  <img src="/Assets/images/Dashboard page/avatar.png"
                  alt="Pictogramme"
                  class="img p-2"
                  width="72">
                </div>
  
                <div class="user-details">
  
                  <div class="username">
                    <!-- <?= $Dashboard->user_id?> -->
                    <?= $Dashboard->name_users?>
                  </div>
  
                </div>
  
                <ul class="list-unstyled email-name">
                  <li
                  id="adminEmail"
                  style="margin-left: 2.5rem;"><?= $Dashboard->email?></li>
                </ul>
  
                <ul class="list-unstyled">
                  
                <!-- Modification de tout les comptes possible. -->
                    <button
                        class="btn btn-responsive btn-sm btn-danger m-2"
                        data-bs-toggle="modal"
                        data-bs-target="#editUserModal"
                        data-user-id="<?= $Dashboard->user_id ?>"
                        data-username="<?= $Dashboard->name_users ?>"
                        data-email="<?= $Dashboard->email ?>"
                    >
                        <li>
                            <i class="bi bi-pencil"></i> Modifier
                        </li>
                    </button>

                    <!-- Impossible de se supprimer le compte Admin -->

                    <?php if ($Dashboard->is_admin != 1) : ?>

                      <button
                          class="btn btn-responsive btn-sm btn-danger m-2"
                          data-bs-toggle="modal"
                          data-bs-target="#confirmDeleteModal"
                          data-user-id="<?= $Dashboard->user_id ?>"
                      >
                          <li>
                              <i class="bi bi-trash"></i> Supprimer
                          </li>
                      </button>

                    <!-- Seul l'admin peut modifier les horaires -->

                    <?php endif; ?>

                  <?php if ($Dashboard->is_admin == 1) : ?>

                    <a href="/dashboard/manageHoraires">

                      <button
                          class="btn btn-responsive btn-sm btn-danger m-2">
                          <li>
                              <i class="bi bi-calendar-plus me-2"></i>Horaires
                          </li>
                      </button>

                    </a>

                  <?php endif; ?>
  
                </ul>
              </div>
            </li>
  
          <?php endforeach; ?>
  
        </ul>

      </div>
    </div>


  </div>
</div>

<!-- Modal de confirmation de suppression -->
    <div
      class="modal fade"
      id="confirmDeleteModal"
      tabindex="-1"
      aria-labelledby="confirmDeleteModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">

        <div class="modal-content">
          
          <div class="modal-header">

            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmation de suppression</h5>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
              <form action="/dashboard/deleteUser" method="POST">
                <input type="hidden" name="user_id" id="deleteUserId" value="">
                Êtes-vous sûr de vouloir supprimer cet utilisateur ?
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-danger" id="deleteButton">Supprimer</button>
          </div>

            </form>

        </div>

      </div>
    </div>

    <!-- Modal de création de compte -->
    <div class="modal fade"
      id="createAccountModal"
      tabindex="-1"
      aria-labelledby="createAccountModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createAccountModalLabel">Créer un compte</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/administration" method="POST">

              <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input
                type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Nom d'utilisateur"
                  required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Adresse e-mail"
                  required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Mot de passe"
                pattern=".{8,}"
                required>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-danger">Créer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>




    <!-- Modal de modification -->
    <div class="modal fade"
        id="editUserModal"
        tabindex="-1"
        aria-labelledby="editUserModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Modifier l'utilisateur</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <form action="/dashboard/modifyUser" method="POST">
                      <input type="hidden" id="editUserId" name="user_id" min="1">

                        <div class="mb-3">
                            <label for="editUsername" class="form-label">Nom d'utilisateur</label>
                            <input
                            type="text"
                            class="form-control"
                            id="editUsername"
                            name="username"
                            placeholder="Nom d'utilisateur"
                            required>
                        </div>

                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Adresse e-mail</label>
                            <input
                            type="email"
                            class="form-control"
                            id="editEmail"
                            name="email"
                            placeholder="Adresse e-mail"
                            required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="editPassword" class="form-label">Mot de passe</label>
                            <input
                            type="password"
                            class="form-control"
                            id="editPassword"
                            name="password"
                            placeholder="Mot de passe"
                            pattern=".{8,}"
                            required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<script src="/Assets/JS/Dashboard.js"></script>
