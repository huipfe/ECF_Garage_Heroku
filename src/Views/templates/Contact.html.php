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
    <section>
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
    <section>
        <div>
            <i style="color:#D9777F"class="bi bi-envelope-fill fs-2 m-2"></i><h2 class="m-2">
                Garage.V.Parrot@gmail.com</h2>
        </div>

        <div >
            <i style="color:#D9777F"class="bi bi-telephone-fill fs-2 m-2"></i><h2 class="m-2">Numéro garage</h2>
        </div>

        <div>
            <i style="color:#D9777F"class="bi bi-geo-alt-fill fs-2 m-2"></i><h2 class="m-2">Adresse garage</h2>
        </div>
    </section>

<!-- Formulaire -->
            <!-- partie block -->
        </section>
            <div class="p-3 bg-light text-dark block-white-title">
                <h2 class="title-dark">Je suis intéressé par...</h2>
            
                <div class="d-flex flex-wrap m-1">
                    <div class="block-rouge">
                        <p class="m-2 title-box-white">Les voitures d’occasions</p>
                    </div>
            
                    <div class="block-white m-1">
                        <p class="m-1 title-box-dark">Les belles carrosseries</p>
                    </div>
            
                    <div class="block-white m-1">
                        <p class="m-1 title-box-dark">Les bons plans</p>
                    </div>
                </div>
            
                <div class="d-flex flex-wrap m-1">
                    <div class="block-white">
                        <p class="m-1 title-box-dark">La conception auto</p>
                    </div>
            
                    <div class="block-white m-1">
                        <p class="m-1 title-box-dark">Autres</p>
                    </div>
                </div>

                <!-- Partie message -->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                  <label for="name">Name</label>
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <!-- Email Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="emailAddress" type="email"
                  placeholder="Email Address" data-sb-validations="required,email" />
                  <label for="emailAddress">Email Address</label>
                  <div class="invalid-feedback"
                  data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback"
                  data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>

                <!-- Message Input -->
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" type="text"
                  placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <label for="message">Message</label>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>

                <!-- Submit success message -->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">
                        https://startbootstrap.com/solution/contact-forms</a>
                  </div>
                </div>

                <!-- Submit error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
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
