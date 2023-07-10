<?php

namespace App\Utils;

use App\Models\UsersModel;

// Vérifiez si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez si les champs email et password sont présents dans la requête POST
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Récupérez les valeurs des champs email et password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // On nettoie l'adresse mail
        $email = strip_tags($_POST['email']);

        // Créez une instance du modèle UsersModel
        $usersModel = new UsersModel();

        // Vérifiez si l'utilisateur existe déjà avec cet e-mail
        $existingUser = $usersModel->findOneByEmail($email);
        if ($existingUser) {
            // L'utilisateur existe déjà, vous pouvez afficher un message d'erreur ou rediriger vers une autre page
            echo "L'utilisateur existe déjà avec cet e-mail.";
            exit;
        }

        // Hash le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Créez un nouvel utilisateur
        $user = new UsersModel();
        $user->setEmail($email)
            ->setPasseWord($hashedPassword);

        // Enregistrez l'utilisateur dans la base de données
        $user->create();

        // Affichez un message de succès ou redirigez vers une autre page
        echo "L'utilisateur a été créé avec succès.";
    } else {
        // Les champs email et password ne sont pas présents dans la requête POST
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
