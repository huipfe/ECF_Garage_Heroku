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

        
<section class="vh-100" style="position: relative;">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
                <!-- Mobile -->
                <img class="img-fluid d-lg-none" width="100%" height="auto"
                        src="/ECF_Garage/Assets/images/Fond_Login_Mobile_page.png"
                        alt="Fond_Login_Mobile">
                </div>
                <!-- Desktop -->
                <img class="img-fluid d-none d-lg-block" width="100%" height="1000px"
                        src="/ECF_Garage/Assets/images/Fond_Login_Desktop_page.png"
                        alt="Fond_Voiture_homepage_desktop">
                </img>
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" style="position: relative; z-index: 1;">
                <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example13" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example13">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example23" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example23">Password</label>
                </div>
        
                <div class="d-flex justify-content-around align-items-center mb-4">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                    <a href="#!">Forgot password?</a>
                </div>

        <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        
                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
        
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                    role="button">
                    <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
            role="button">
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                </form>
        
            </div>
        </div>
    </div>
</section>


</main>


<?php 
require_once "Footer.html.php";
?>
