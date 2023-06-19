/*--------------------------------------Barre de Recherche-------------------------------------------*/


  // Récupérer la barre de recherche
    const searchInput = document.querySelector('.form-control');

    // Récupérer tous les noms d'utilisateur
    const usernames = document.querySelectorAll('.username');

    // Fonction pour filtrer les utilisateurs en fonction de la recherche
    function filterUsers() {
  const searchValue = searchInput.value.toLowerCase();

  usernames.forEach((username) => {
    const user = username.textContent.toLowerCase();
    const listItem = username.closest('li');

    if (user.includes(searchValue)) {
        listItem.style.display = 'block';
    } else {
        listItem.style.display = 'none';
    }
  });
}

    // Ajouter un gestionnaire d'événement pour la recherche en temps réel
    searchInput.addEventListener('input', filterUsers);




/*----------------------------------Nb d'employé affichage dynamique-------------------------------*/


// Récupérer tous les éléments <li> avec la classe "employee"
const employeeElements = document.querySelectorAll('.list-unstyled li.employee');

// Récupérer l'élément <p> avec l'id "employeeCount"
const employeeCountElement = document.getElementById('employeeCount');

// Mettre à jour le contenu de l'élément avec le nombre d'employés
employeeCountElement.textContent = `${employeeElements.length} employé(s)`;
