<div class="container">
    
        <div class="justify-content-start">
            <a href="/cars"
            class="text-decoration-none">
                <span>
                    <button class="btn btn-danger my-2">
                        <i class="bi bi-arrow-left"></i>
                        Retour à la liste
                    </button>
                </span>
            </a>
        </div>
        
    <h1>Modification de la Voiture</h1>


            
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="marque" class="form-label fs-4">Marque de la voiture :</label>
            <input
            type="text"
            name="marque"
            id="marque"
            class="form-control"
            value="<?= $car->marque ?>"
            required>
        </div>

        <div class="mb-3">
            <label for="modele" class="form-label fs-4">Modèle de la voiture :</label>
            <input
            type="text"
            name="modele"
            id="modele"
            class="form-control"
            value="<?= $car->modele ?>"
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
            value="<?= $car->annee ?>"
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
            value="<?= $car->kilometrage ?>"
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
            value="<?= $car->prix ?>"
            required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fs-4">Image de la voiture :</label>
            <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            value="<?= $car->image?>"
            required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fs-4">Description de la voiture :</label>
            <textarea
            name="description"
            id="description"
            class="form-control"
            style="font-family: 'Barlow', sans-serif;"
            required><?= $car->description ?></textarea>
        </div>

        <button
        class="btn btn-danger my-2 bi bi-pencil-square"
        type="submit">
            Modifier
        </button>
        
    </form>
</div>
