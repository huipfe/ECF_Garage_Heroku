<?php
require_once "Header.html.php";
?>
    <!-- Message de réussite-->
    <?php if(!empty($_SESSION['message'])): ?>
        <div class="alert alert-success" id="alert" role="alert">
            <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>

    
    <!-- Message d'erreur -->
    <?php if(!empty($_SESSION['erreur'])): ?>
        <div class="alert alert-danger" id="alert" role="alert">
            <?php echo $_SESSION['erreur']; unset($_SESSION['erreur']); ?>
        </div>

    <?php endif; ?>
<!-- Affichage des horaires actuels -->
<div class="container">
    <h4>Nos horaires</h4>
    <p>Horaires d'ouverture et de fermeture :</p>

    <?php foreach ($horaires as $horaire) : ?>
        <p><?php echo $horaire['jour']; ?> :
            <?php echo $horaire['heure_debut']; ?> - <?php echo $horaire['heure_fin']; ?></p>
    <?php endforeach; ?>


<!-- Formulaire de modification des horaires -->
    <form method="POST" action="/ECF_Garage/public/dashboard/manageHoraires">
        <?php foreach ($horaires as $horaire) : ?>
            <div class="form-group">
                <label><?php echo $horaire['jour']; ?></label>
                <div class="row">
    
                    <div class="col">

                        <input
                        type="text"
                        name="horaires[<?php echo $horaire['jour']; ?>][heure_debut]"
                        class="form-control"
                        value="<?php echo $horaire['heure_debut']; ?>"
                        required>

                    </div>
    
                    <div class="col">

                        <input
                        type="text"
                        name="horaires[<?php echo $horaire['jour']; ?>][heure_fin]"
                        class="form-control"
                        value="<?php echo $horaire['heure_fin']; ?>"
                        required>

                    </div>
    
                </div>
            </div>
        <?php endforeach; ?>
    
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

</div>
<!-- <script src="/ECF_Garage/Assets/JS/..."></script> -->

<?php
require_once "Footer.html.php";
?>