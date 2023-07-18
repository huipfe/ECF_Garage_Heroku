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

    <h1>Ajouter un service</h1>

    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="nom" class="form-label fs-4">Nom du service :</label>
            <input
            type="text"
            name="nom"
            id="nom"
            class="form-control"
            required>
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label fs-4">Durée estimée du service :</label>
            <input
            type="number"
            name="temps_estime"
            id="temps_estime"
            class="form-control"
            min="10"
            max="150"
            required>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label fs-4">Prix du service :</label>
            <input
            type="number"
            name="prix"
            id="prix"
            class="form-control"
            min="1"
            required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fs-4">Image du service :</label>
            <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fs-4">Description du service :</label>
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
