<!-- Login page: Allow administrators and employees to log in. -->
<!-- Formulaire d'inscription : US1. Se connecter -->

<!-- US1. Se connecter Utilisateurs concernés: Administrateur, Employés Le compte administrateur sera créé spécialement pour Vincent Parrot, le chef d’entreprise du garage. C’est lui qui gérera les informations sur le site web. Toutefois, un autre type de compte sera possible: l’employé
● Chaque personnel du garage aura son compte sur l’application web
● L’employé ne pourra pas créer son propre compte, seul l’administrateur pourra en générer un pour lui.
Quel que soit le type d’utilisateur souhaitant se connecter, il pourra le faire grâce au même formulaire de connexion. 
Les identifiants à entrer seront l’adresse e-mail et un mot de passe sécurisé.-->

<?php 
require_once "Header.html.php";
?>

<main>
    
<!-- <div>
    <h1>Login</h1>
</div> -->
        <!-- <img class="img-fluid d-lg-none" width="100%" height="auto"
        src="/ECF_Garage/Assets/images/Fond_Voiture_homepage_mobile.jpg"
        alt="Fond_Voiture_homepage_mobile">
        </img> -->

        
<section class="vh-100 position-relative">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
                <!-- Mobile -->
                <img class="img-fluid d-lg-none w-100 h-100"
                        src="/ECF_Garage/Assets/images/Fond_Login_Mobile_page.png"
                        alt="Fond_Login_Mobile">
                </div>
                <!-- Desktop -->
                <img class="img-fluid d-none d-lg-block" width="100%" height="100%"
                        src="/ECF_Garage/Assets/images/Fond_Login_Desktop_page.png"
                        alt="Fond_Voiture_homepage_desktop">
                </img>
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 " style="position: relative; z-index: 1;">
                <form id="login-form" class="was-validated">
                <!-- Logo Login -->
                    <img src="/ECF_Garage/Assets/images/Login_logo.png"
                    width="80" height="auto"
                    alt="Login_logo"
                    class="m-2">
                <!-- Se connecter -->
                <div>
                    <p class="h1 fw-bold mb-2 mx-1 mt-4">Se connecter</p>
                    <p class="fw-thin mb-5 mx-1 mt-4">
                        Uniquement nos collaborateurs,<br> peuvent se connecter.</p>
                </div>

                <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1" class="">Nom*</label>
                        <input type="text" id="form3Example1" class="my-form-control"
                        placeholder="Entrez votre nom" required/>
                        
                    </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example13">Email*</label>
                    <input type="email" id="form1Example13" class="my-form-control my-form-control-lg"
                    placeholder="Entrez votre email" required/>

                </div>

                <!-- Mot de pass input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example23">Mot de passe</label>
                    <input type="password" id="form1Example23" class="my-form-control my-form-control-lg"
                    placeholder="Entrez votre mot de passe" pattern=".{8,}" required/>
                <!-- Avertissement Mot de passe -->
                <div class="invalid-feedback">
                    <p class="fw-thin mb-5 mx-1 mt-4 mot-de-passe" id="password-error">
                    Il devrait y avoir au moins 8 caractères.
                    </p>
                    </div>
                </div>

        <!-- Submit button -->
                    <button type="submit" class="btn btn-danger btn-connexion btn-lg btn-block w-100">
                    Connexion
                    </button>

                </form>

            </div>
        </div>
    </div>
</section>



</main>


<?php 
require_once "Footer.html.php";
?>
