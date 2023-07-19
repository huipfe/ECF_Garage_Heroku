/*----------------------------Envoie du formulaire---------------------------------------------------*/

// Fonction pour envoyer le formulaire via AJAX
function submitForm(event) {
    event.preventDefault(); // Empêcher le rechargement de la page par défaut

    // Récupérer les données du formulaire
    let form = document.getElementById('contactForm');
    let formData = new FormData(form);

    // Créer une requête AJAX
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/ECF_Garage/src/Utils/sendMail.php', true);
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


/*----------------------------------Vérification Modal-----------------------------------------------*/

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
      <div class="modal-content rounded-4" style="background: #D92332;">
        <div class="modal-header" >
          <h5 class="modal-title" style="color: #F2F2F2;">Confirmation d'envoi du formulaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p style="color: #F2F2F2;">${response === 'success' ? 'Le formulaire a été envoyé avec succès!' 
          : 'Une erreur s\'est produite lors de l\'envoi du formulaire.'}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
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




/*----------------------------------Réinitialiser Form---------------------------------------------*/


// Fonction pour réinitialiser le formulaire
function resetForm() {
  let form = document.getElementById('contactForm');
  form.reset();
}

/*-------------------------------------------Click Bouton-----------------------------------------*/


// Récupérer tous les boutons de sujet
const subjectButtons = document.querySelectorAll('.btn-click');

// Fonction pour gérer le clic sur un bouton de sujet
function handleSubjectButtonClick(event) {
  const button = event.currentTarget;

  // Vérifier si le bouton est déjà sélectionné
  const isSelected = button.classList.contains('btn-danger');

  // Réinitialiser tous les boutons
  subjectButtons.forEach((subjectButton) => {
    subjectButton.classList.remove('btn-danger');
    subjectButton.classList.add('btn-light');
    subjectButton.classList.remove('block-rouge');
    subjectButton.classList.add('block-white');
    subjectButton.querySelectorAll('.title-box-white').forEach((titleBox) => {
      titleBox.classList.remove('title-box-white');
      titleBox.classList.add('title-box-dark');
    });
  });

  // Mettre à jour les classes du bouton actuel en fonction de la sélection
  if (!isSelected) {
    button.classList.remove('btn-light');
    button.classList.add('btn-danger');
    button.classList.remove('block-white');
    button.classList.add('block-rouge');
    button.querySelectorAll('.title-box-dark').forEach((titleBox) => {
      titleBox.classList.remove('title-box-dark');
      titleBox.classList.add('title-box-white');
    });
  }
}

// Ajouter un gestionnaire d'événement à chaque bouton de sujet
subjectButtons.forEach((subjectButton) => {
  subjectButton.addEventListener('click', handleSubjectButtonClick);
});