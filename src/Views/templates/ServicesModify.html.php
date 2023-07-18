<div class="container">
    
        <div class="justify-content-start">
            <a href="/ECF_Garage/public/services"
            class="text-decoration-none">
                <span>
                    <button class="btn btn-danger my-2">
                        <i class="bi bi-arrow-left"></i>
                        Retour à la liste
                    </button>
                </span>
            </a>
        </div>
        
    <h1>Modification un service</h1>


            
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="marque" class="form-label fs-4">Nom du service :</label>
            <input
            type="text"
            name="marque"
            id="marque"
            class="form-control"
            value="<?= $service->nom ?>"
            required>
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label fs-4">Durée estimée du service :</label>
            <input
            type="number"
            name="annee"
            id="annee"
            class="form-control"
            min="10"
            max="150"
            value="<?= $service->temps_estime ?>"
            required>
        </div>

        <div class="mb-3">
            <label for="kilometrage" class="form-label fs-4">Prix du service:</label>
            <input
            type="number"
            name="kilometrage"
            id="kilometrage"
            class="form-control"
            min="10"
            value="<?= $service->prix ?>"
            required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fs-4">Image du service :</label>
            <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            value="<?= $service->image?>"
            required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fs-4">Description du service :</label>
            <textarea
            name="description"
            id="description"
            class="form-control"
            style="font-family: 'Barlow', sans-serif;"
            required><?= $service->description ?></textarea>
        </div>

        <button
        class="btn btn-danger my-2 bi bi-pencil-square"
        type="submit">
            Modifier
        </button>
        
    </form>
</div>

