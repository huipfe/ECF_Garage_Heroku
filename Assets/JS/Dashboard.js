/*--------------------------------------Barre de Recherche-------------------------------------------*/


  // Récupérer la barre de recherche
    const searchInput = document.querySelector('.form-control');

    // Récupérer tous les noms d'utilisateur
    const usernames = document.querySelectorAll('.username');

    // Récupérer tout les email d'utilisateur
    const emailNames = document.querySelectorAll('.email-name');

    // Fonction pour filtrer les utilisateurs en fonction de la recherche
    function filterUsersEmail() {
  const searchValue = searchInput.value.toLowerCase();
  
      // Filtrer les utilisateurs et l'email
      emailNames.forEach((emailName) => {
        const email = emailName.textContent.toLowerCase();
        const listItem = emailName.closest('li');

        const username = listItem.querySelector('.username').textContent.toLowerCase();

        if (email.includes(searchValue) || username.includes(searchValue)) {
          listItem.style.display = 'block';
        } else {
          listItem.style.display = 'none';
        }
      });

    }

    // Ajouter un gestionnaire d'événement pour la recherche en temps réel
    searchInput.addEventListener('input', filterUsersEmail);




/*----------------------------------Nb d'employé affichage dynamique-------------------------------*/


// Récupérer tous les éléments <li> avec la classe "employee"
const employeeElements = document.querySelectorAll('.list-unstyled li.employee');

// Récupérer l'élément <p> avec l'id "employeeCount"
const employeeCountElement = document.getElementById('employeeCount');

// Mettre à jour le contenu de l'élément avec le nombre d'employés
employeeCountElement.textContent = `${employeeElements.length} employé(s)`;


/*----------------------------------Adress de l'admin dynamique-----------------------------------*/

// Récupérer l'élément <li> avec l'id "adminEmail"
const adminEmailElement = document.getElementById('adminEmail');

// Récupérer le contenu de l'adresse e-mail de l'admin
const adminEmail = adminEmailElement.textContent;

// Récupérer l'élément <p> avec l'id "adminAdressMail"
const adminAdressMailElement = document.getElementById('adminAdressMail');

// Mettre à jour le contenu de l'élément avec l'adresse e-mail de l'admin
adminAdressMailElement.textContent = adminEmail;

