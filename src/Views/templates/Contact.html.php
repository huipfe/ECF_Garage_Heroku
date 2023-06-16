<!-- Contact page: Allow visitors to contact the garage via a form. -->
<!-- Page de contact : US4. Permettre de contacter l'atelier -->

<!-- US4. Permettre de contacter l'atelier Utilisateurs concernés: Visiteurs Il est important que les
visiteurs du site puissent facilement joindre le garage à tout moment, que ce soit par téléphone
ou en remplissant un formulaire de contact en ligne.
Si un visiteur décide d'utiliser le formulaire, il devra alors fournir son nom, prénom, adresse
e-mail, numéro de téléphone et un message.
De plus, toutes les informations de contact, formulaire compris, devront également être visibles
en bas de chaque annonce d’un véhicule d’occasion. Le sujet du formulaire sera alors
Reproduction interdite ECF - Garage automobile Page 7 sur 12
automatiquement ajusté en fonction du titre de l'annonce pour permettre une future communication
plus efficace avec le garage. -->

<?php 
require_once "Header.html.php";
?>

<main>
    <div class="p-1 bg-danger text-white">
    <section>
    
        
    <!-- Titre -->
    <section class="p-2 m-2">
        <h1>Discutons ensemble, à propos de choses qui nous
            <span style="color: #D9777F;">passionnent</span> !

            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="bi bi-whatsapp link-light fs-1"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-facebook link-light fs-1"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-instagram link-light fs-1"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="bi bi-twitter link-light fs-1"></i></a></li>
            </ul>
        </h1>
    </section>

        <!-- Info -->
    <section class="p-3">
        <div>
            <i style="color:#D9777F"class="bi bi-envelope-fill fs-2 m-2"></i><h2 class="m-2 fs-4">
                Garage.V.Parrot@gmail.com</h2>
        </div>

        <div class="Num-Garage">
            <i style="color:#D9777F"class="bi bi-telephone-fill fs-2 m-2"></i><h2 class="m-2 fs-4">Numéro garage</h2>
        </div>

        <div>
            <i style="color:#D9777F"class="bi bi-geo-alt-fill fs-2 m-2"></i><h2 class="m-2 fs-4">Adresse garage</h2>
        </div>
    </section>

<!-- Formulaire -->
            <!-- partie block -->
        </section>
            <div class="p-3 m-3 bg-light text-dark block-white-title">
                <h2 class="title-dark">Je suis intéressé par...</h2>
            
                <div class="d-flex flex-wrap m-1">
                    <button class="btn btn-danger block-rouge">
                        <p class="m-2 title-box-white">Les voitures d’occasions</p>
                    </button>
            
                    <button class="block-white m-1 btn btn-light">
                        <p class="m-1 title-box-dark">Les belles carrosseries</p>
                    </button>
            
                    <button class="block-white m-1 btn btn-light">
                        <p class="m-1 title-box-dark">Les bons plans</p>
                    </button>
                </div>
            
                <div class="d-flex flex-wrap m-1 ">
                    <button class="block-white m-1 btn btn-light">
                        <p class="m-1 title-box-dark">La conception auto</p>
                    </button>
            
                    <button class="block-white m-1 btn btn-light">
                        <p class="m-1 title-box-dark">Autres</p>
                    </button>
                </div>

                <!-- Partie message -->
                <form id="contactForm">

                <!-- SurName & Name Input -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text"
                    placeholder="Votre Prénom & Nom" data-sb-validations="required" required/>
                    <label for="name" class="form-color form-label">Votre Prénom & Nom</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <div style="border: 3px solid #D94350;"></div>

                <!-- Email Input -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" type="email"
                    placeholder="Votre courriel" data-sb-validations="required,email" required/>
                    <label for="emailAddress" class="form-color">Votre courriel</label>
                        <div class="invalid-feedback"
                        data-sb-feedback="emailAddress:required">Email Address is required.</div>
                        <div class="invalid-feedback"
                    data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>

                <div style="border: 3px solid #D94350;"></div>
                
                <!-- Message Input -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text"
                    placeholder="Votre message"
                    style="height: 10rem;" data-sb-validations="required" required></textarea>
                    <label for="message" class="form-color">Votre message</label>
                    <div style="border: 3px solid #D94350;"></div>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>

                <!-- Submit success message -->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    </div>
                </div>

                <!-- Submit error message -->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                    
                    <button class="btn btn-danger submit-red-button"
                        id="submitButton"
                        type="submit">
                        <i class="bi bi-send-fill fs-3"></i>
                        <p class="submit-message">Envoyez le message</p>
                    </button>

                </div>
            </form>
                <!-- End of contact form -->
        </div>
    </section>
    </div>
</main>


<?php 
require_once "Footer.html.php";
?>
