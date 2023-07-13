<?php
require_once "Header.html.php";
?>

    <!-- Message d'erreur -->
<?php if(!empty($_SESSION['erreur'])): ?>
    <div class="alert alert-danger" id="alert" role="alert">
        <?php echo $_SESSION['erreur']; unset($_SESSION['erreur']); ?>
    </div>
<?php endif; ?>

<!-- <?= $form ?> -->



<div class="container">
    <h1>Ajouter Voiture</h1>
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="marque" class="form-label fs-4">Marque de la voiture :</label>
            <input
            type="text"
            name="marque"
            id="marque"
            class="form-control"
            required>
        </div>

        <div class="mb-3">
            <label for="modele" class="form-label fs-4">Modèle de la voiture :</label>
            <input
            type="text"
            name="modele"
            id="modele"
            class="form-control"
            required>
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label fs-4">Année de la voiture :</label>
            <input
            type="number"
            name="annee"
            id="annee"
            class="form-control"
            min="1950"
            max="2025"
            required>
        </div>

        <div class="mb-3">
            <label for="kilometrage" class="form-label fs-4">Kilométrage de la voiture :</label>
            <input
            type="number"
            name="kilometrage"
            id="kilometrage"
            class="form-control"
            min="0"
            required>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label fs-4">Prix de la voiture :</label>
            <input
            type="number"
            name="prix"
            id="prix"
            class="form-control"
            min="0"
            required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fs-4">Image de la voiture :</label>
            <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fs-4">Description de la voiture :</label>
            <textarea
            name="description"
            id="description"
            class="form-control"
            style="font-family: 'Barlow', sans-serif;"
            required></textarea>
        </div>

        <button
        class="btn btn-danger my-2 bi bi-plus-circle"
        type="submit">
            Ajouter
        </button>
        
    </form>
</div>


<?php
require_once "Footer.html.php";
?>