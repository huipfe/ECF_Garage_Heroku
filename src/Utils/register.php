<?php
use App\Models\UsersModel;

// On vérifie si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On vérifie si les champs requis sont présents
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Le formulaire est valide

        // On nettoie l'adresse e-mail
        $email = strip_tags($_POST['email']);

        // On chiffre le mot de passe
        $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

        // On hydrate l'utilisateur en BDD
        $user = new UsersModel;
        $user->setEmail($email)
            ->setPasseWord($password);

        // On stocke l'utilisateur en BDD
        $user->create();
    }
}
