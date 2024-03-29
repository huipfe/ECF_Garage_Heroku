<main>
    <div class="p-1 bg-danger text-white">
        <div class="container-fluid">
            <div class="row">
                <!-- Partie gauche -->
                <div class="col-lg-6">
                    <section>
                        <!-- Titre -->
                        <section class="p-2 m-2">
                            <h1>Discutons ensemble, à propos de choses qui nous
                                <span style="color: #D9777F;">passionnent</span> !
                                <ul class="list-inline d-flex d-lg-none mt-3">
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-whatsapp link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-facebook link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-instagram link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-twitter link-light fs-1"></i></a></li>
                                </ul>
                            </h1>
                        </section>

                        <!-- Info -->
                        <section class="p-3">
                            <div>
                                <i style="color:#D9777F"class="bi bi-envelope-fill fs-2 m-2"></i>
                                <h2 class="m-2 fs-4">VincentParrot@gmail.com</h2>
                            </div>

                            <div class="Num-Garage">
                                <i style="color:#D9777F"class="bi bi-telephone-fill fs-2 m-2"></i>
                                <h2 class="m-2 fs-4">01 62 23 42 50</h2>
                            </div>

                            <div>
                                <i style="color:#D9777F"class="bi bi-geo-alt-fill fs-2 m-2"></i>
                                <h2 class="m-2 fs-4">8 avenue de la prairie verte - Paris 75000</h2>
                            </div>
                        </section>
                        <!-- Uniquement en desktop, pour apparaitre en dessous -->
                            <ul class="d-none d-lg-block" style="margin-top: 10rem;">
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-whatsapp link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-facebook link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-instagram link-light fs-1"></i></a></li>
                                    <li class="list-inline-item"><a href="#">
                                        <i class="bi bi-twitter link-light fs-1"></i></a></li>
                            </ul>
                    </section>

                </div>

                <!-- Partie droite -->
                <div class="col-lg-6">
                    <section>
                        <!-- Formulaire -->
                        <div class="p-3 m-3 bg-light text-dark block-title">
                            <h2 class="title-dark fw-bold p-3">Je suis intéressé par...</h2>
                        
                            <div class="d-flex flex-wrap m-1">
                                <button class="btn-click btn btn-light block-white">
                                    <p class="m-2 title-box-dark">Les voitures d’occasions</p>
                                </button>
                        
                                <button class="block-white m-1 btn-click btn btn-light">
                                    <p class="m-1 title-box-dark">Les belles carrosseries</p>
                                </button>
                        
                                <button class="block-white m-1 btn-click btn btn-light">
                                    <p class="m-1 title-box-dark">Les bons plans</p>
                                </button>
                            </div>
                        
                            <div class="d-flex flex-wrap m-1 ">
                                <button class="block-white m-1 btn-click btn btn-light">
                                    <p class="m-1 title-box-dark">La conception auto</p>
                                </button>
                        
                                <button class="block-white m-1 btn-click btn btn-light">
                                    <p class="m-1 title-box-dark">Autres</p>
                                </button>
                            </div>

                            <!-- Partie message -->
                            <form
                            id="contactForm"

                            method="POST">
                                <!-- SurName & Name Input -->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" id="name" type="text"
                                    placeholder="Votre Prénom & Nom" required>
                                    <label for="name" class="form-color form-label">Votre Prénom & Nom</label>
                                </div>
                        
                                <div style="border: 3px solid #D94350;"></div>
                        
                                <!-- Email Input -->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="emailAddress" type="email"
                                    placeholder="Votre courriel" required>
                                    <label for="emailAddress" class="form-color">Votre courriel</label>
                                </div>
                        
                                <div style="border: 3px solid #D94350;"></div>
                        
                                <!-- Message Input -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="message" id="message"
                                    placeholder="Votre message" style="height: 10rem;" required></textarea>
                                    <label for="message" class="form-color">Votre message</label>
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
                                    <button class="btn btn-danger submit-red-button" id="submitButton" type="submit">
                                        <i class="bi bi-send-fill fs-3"></i>
                                        <p class="submit-message">Envoyez le message</p>
                                    </button>
                                </div>
                            </form>
                            <!-- End of contact form -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="/Assets/JS/contact.js"></script>


