<?php
require_once "Header.html.php";
?>

<main>

    <!-- Message de réussite-->
    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-success" id="alert" role="alert">
            <?php echo $_SESSION['message'];
            unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>


    <!-- Message d'erreur -->
    <?php if (!empty($_SESSION['erreur'])) : ?>
        <div class="alert alert-danger" id="alert" role="alert">
            <?php echo $_SESSION['erreur'];
            unset($_SESSION['erreur']); ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <h1>Nos Services</h1>
        <div class="row">

            <?php foreach ($services as $service) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">

                        <img src="data:image/jpeg;base64,<?= $service['image'] ?>"
                        class="card-img-top" alt="<?= $service['nom'] ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $service['nom'] ?></h5>
                            <p class="card-text"><?= $service['description'] ?></p>
                            <p class="card-text">Prix: <?= $service['prix'] ?> €</p>
                            <p class="card-text">Durée estimée: <?= $service['temps_estime'] ?> heures</p>

                        <!-- Supression d'une voiture -->
                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
                            <button class="btn btn-danger mx-2 my-2 bi bi-trash3-fill deleteBtn"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            data-action="/ECF_Garage/public/deleteCars/delete/<?= $service ['id'] ?>">
                            </button>
                        <?php endif; ?>

                        <!-- Modification d'une voiture -->
                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
                            <!-- <a href="/ECF_Garage/public/modifier/modifie/<?= $service ['id'] ?>"> -->
                                <button class="btn btn-danger mx-2 my-2 bi bi-pencil-square">
                                </button>
                            </a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>

        <!-- Creation d'un nouveau service -->
        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
            <!-- <a href="/ECF_Garage/public/addCars/ajouter"> -->
            <button class="btn btn-danger mx-2 my-2 bi bi-plus-circle">
                Ajouter Service
            </button>
            </a>
        <?php endif; ?>

    </div>

        <!-- Modal de suppression -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette voiture ?
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form id="deleteForm" action="" method="POST">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</main>

<script src="/ECF_Garage/Assets/JS/Services.js"></script>

<?php
require_once "Footer.html.php";
?>