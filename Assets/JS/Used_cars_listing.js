/*--------------------------------------Barre de Recherche-------------------------------------------*/



// Fonction de recherche
const searchCars = () => {
    // Récupérer la valeur de recherche
    const searchValue = document.getElementById("searchInput").value.toLowerCase();

    // Récupérer toutes les cartes de voiture
    const carCards = document.getElementsByClassName("card");

    // Parcourir les cartes de voiture et afficher/masquer en fonction de la recherche
    for (const carCard of carCards) {
        const carTitle = carCard.querySelector(".card-title").innerText.toLowerCase();
        const carDescription = carCard.querySelector(".card-text").innerText.toLowerCase();
        const carmModele = carCard.querySelector(".card-text#title-modele").innerText.toLowerCase();
        const carPrice = carCard.querySelector(".card-text#title-price").innerText.toLowerCase();
        const carYear = carCard.querySelector(".card-text#title-year").innerText.toLowerCase();
        const carKilometrage = carCard.querySelector(".card-text#title-kilometrage").innerText.toLowerCase();

        // Vérifier si la valeur de recherche est un nombre
        const searchNumber = parseFloat(searchValue);
        const isNumber = !isNaN(searchNumber) && isFinite(searchNumber);

        // Effectuer la recherche en fonction des critères
        if (
            carTitle.includes(searchValue) ||
            carDescription.includes(searchValue) ||
            carmModele.includes(searchValue) ||
            (isNumber && parseFloat(carPrice.replace(/[^\d.-]/g, "")) === searchNumber) ||
            (isNumber && parseFloat(carYear.replace(/[^\d.-]/g, "")) === searchNumber) ||
            (isNumber && parseFloat(carKilometrage.replace(/[^\d.-]/g, "")) === searchNumber)
        ) {
            carCard.style.display = "block";
        } else {
            carCard.style.display = "none";
        }
    }
};

// Écouter l'événement de clic sur le bouton de recherche
const searchButton = document.getElementById("searchButton");
searchButton.addEventListener("click", searchCars);

// Écouter l'événement de saisie dans la barre de recherche
const searchInput = document.getElementById("searchInput");
searchInput.addEventListener("input", searchCars);
