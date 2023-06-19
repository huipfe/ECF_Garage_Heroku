// Fonction pour envoyer le formulaire via AJAX
function submitForm(event) {
    event.preventDefault(); // Empêcher le rechargement de la page par défaut

    // Récupérer les données du formulaire
    let form = document.getElementById('contactForm');
    let formData = new FormData(form);

    // Créer une requête AJAX
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/ECF_Garage/src/Models/sendMail.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Réponse de la requête AJAX
            let response = xhr.responseText;
            // Afficher une modal en fonction de la réponse
            displayModal(response);
        }
    };

    // Envoyer les données du formulaire via AJAX
    xhr.send(formData);
}


/*-------------------------------------------------------------------------------------------------*/

// Fonction pour afficher la modal
function displayModal(response) {
    // Supprimer la modal précédente (si elle existe)
    let modal = document.getElementById('modalForm');
    let modalBackdrop = document.querySelector('.modal-backdrop');
    if (modal) {
        modal.remove();
        if (modalBackdrop) {
            modalBackdrop.remove();
        }
    }

    // Créer une nouvelle modal
    let newModal = document.createElement('div');
    newModal.classList.add('modal', 'fade');
    newModal.setAttribute('id', 'modalForm');
    newModal.innerHTML = `
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation d'envoi du formulaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>${response === 'success' ? 'Le formulaire a été envoyé avec succès!' : 'Une erreur s\'est produite lors de l\'envoi du formulaire.'}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  `;

    // Ajouter la modal à la page
    document.body.appendChild(newModal);

    // Afficher la modal
    let modalInstance = new bootstrap.Modal(newModal);
    modalInstance.show();
}



// Ajouter un gestionnaire d'événement au formulaire
let form = document.getElementById('contactForm');
form.addEventListener('submit', submitForm);




/*-------------------------------------------------------------------------------------------------*/


// Fonction pour réinitialiser le formulaire
function resetForm() {
    let form = document.getElementById('contactForm');
    form.reset();
}

// Fonction pour envoyer le formulaire via AJAX
function submitForm(event) {
    event.preventDefault(); // Empêcher le rechargement de la page par défaut

    // Récupérer les données du formulaire
    let form = document.getElementById('contactForm');
    let formData = new FormData(form);

    // Créer une requête AJAX
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/ECF_Garage/src/Models/sendMail.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Réponse de la requête AJAX
            let response = xhr.responseText;
            // Afficher une modal en fonction de la réponse
            displayModal(response);
            // Réinitialiser le formulaire
            resetForm();
        }
    };

    // Envoyer les données du formulaire via AJAX
    xhr.send(formData);
}

