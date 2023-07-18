<main>

    <section class="position-relative">
        <div class="container-fluid py-5 py-lg-0">
            <div class="row d-flex align-items-center ">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
                    
                    <!-- Mobile -->
                    <img class="img-fluid d-lg-none w-100 h-100"
                            src="/ECF_Garage/Assets/images/Login page/Fond_Login_Mobile_page.png"
                            alt="Fond_Login_Mobile">
                    </div>
    
                    <!-- Desktop -->
                <div>
                    <img class=" d-none d-lg-block w-100 h-100"
                        src="/ECF_Garage/Assets/images/Login page/Fond_Login_Desktop_page_etoile.png"
                        alt="Fond_Voiture_homepage_desktop">
                            <p class="h1 mb-2 mx-1 mt-4 d-none d-lg-block">
                            
                            Quoi de mieux, que de<br> commencer sa journée, par....</p>
                            <p class="mb-2 mx-1 mt-4 d-none d-lg-block">
                            Le garage V. Parrot, une expérience unique, avec des experts
                            dans tout<br> les domaines, pour vous offrir une vision totale.
                            </p>
                            
                            <div class="">
                            <img class=" d-none d-lg-block staff-members"
                            src="/ECF_Garage/Assets/images/Login page/Staff_members.png"
                            alt="Staff_members">
                            </img>
                            <p class="d-none d-lg-block staff-members-text">Les membres du staff</p>
                            </div>
                    </div>
                </div>

            <div class="col-lg-5 p-5" style="position: relative; z-index: 1;">
                    <form
                    id="login-form"
                    class="was-validated"

                    method="POST">
                    <!-- Pas obligatoire à mettre : action="/ECF_Garage/src/Utils/register.php" -->
    
                    <!-- Logo Login -->
                        <img
                        src="/ECF_Garage/Assets/images/Login page/Login_logo.png"
                        width="80"
                        height="auto"
                        alt="Login_logo"
                        class="m-2">
                    <!-- Se connecter -->
                    <div>
                        <p class="h1 fw-bold mb-2 mx-1 mt-4">Se connecter</p>
                        <p class="fw-thin mb-5 mx-1 mt-4">
                            Uniquement nos collaborateurs,<br> peuvent se connecter.</p>
                    </div>
    
                    <!-- Name input -->
                        <!-- <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1" class="">Nom*</label>
                            <input type="text" id="form3Example1" class="my-form-control"
                            placeholder="Entrez votre nom" required/>
                            
                        </div> -->
    
                    <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label"
                                for="email">Email*
                            </label>
                                <input
                                type="email"
                                id="email"
                                name="email"
                                class="my-form-control my-form-control-lg"
                                placeholder="Entrez votre email"
                                required>
    
                            </div>
    
                            <!-- Mot de passe input -->
                            <div class="form-outline mb-4">
                                <label
                                class="form-label"
                                for="password">Mot de passe
                            </label>
                                <input
                                type="password"
                                id="password"
                                name="password"
                                class="my-form-control my-form-control-lg"
                                placeholder="Entrez votre mot de passe"
                                pattern=".{8,}"
                                required>
    
                                <!-- Avertissement Mot de passe -->
                                <div class="invalid-feedback">
                                    <p
                                    class="fw-thin mb-5 mx-1 mt-4 mot-de-passe"
                                    id="password-error">Il devrait y avoir au moins 8 caractères.</p>
                                </div>
                                
                            </div>

                            <!-- Message d'erreur -->
                        <?php if(!empty($_SESSION['erreur_login'])): ?>
                            <div class="alert alert-danger" id="alert" role="alert">
                                <?php echo $_SESSION['erreur_login']; unset($_SESSION['erreur_login']); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Submit button -->
                        <button
                        type="submit"
                        class="btn btn-danger btn-connexion btn-lg btn-block w-100">
                        Connexion
                        </button>
    
                    </form>
    
                </div>

            </div>
        </div>
</section>

</main>
