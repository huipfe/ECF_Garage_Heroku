<?php 

namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;

class DashboardController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Dashboard');

    }

    /**
     * Méthode pour enregistrer un utilisateur
     * @return void
     */
    public function administration()
    {
        // On vérifie si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // On récupère les données du formulaire
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            // On crée un nouvel utilisateur
            $userModel = new UsersModel();
            $success = $userModel->createUser([
                'name_users' => $username,
                'email' => $email,
                'password' => $password
            ]);
            // Vérifie si la création de l'utilisateur a réussi
            if ($success) {
                // Redirige vers la page d'administration avec un message de succès
                $_SESSION['message'] = "Le compte a été créé avec succès";
                header('Location: /ECF_Garage/public/dashboard/administration');
                exit();
            } else {
                // Redirige vers la page d'administration avec un message d'erreur
                $_SESSION['erreur'] = "La création de compte a échoué";
                header('Location: /ECF_Garage/public/dashboard/administration');
                exit();
            }
        }

        // On veut afficher ses utilisateur qui sont en base de donnés.
        $usersModel = new UsersModel;
        $users = $usersModel->findAll();

        $this->render('/Views/templates/Dashboard', ['users' => $users]);

    }

    /**
     * Méthode pour modifier un utilisateur
     * @return void
     */
    public function modifyUser()
    {
        // Vérifie si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire
            $userId = $_POST['user_id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            // Met à jour l'utilisateur
            $userModel = new UsersModel();

            $success = $userModel->modifyUser([
                'user_id' => $userId,
                'name_users' => $username,
                'email' => $email,
                'password' => $password
            ]);
            // var_dump($username);
            // die;

            // Vérifie si la modification de l'utilisateur a réussi
            if ($success) {
                // Redirige vers la page d'administration avec un message de succès
                $_SESSION['message'] = "L'utilisateur a été modifié avec succès";
                header('Location: /ECF_Garage/public/dashboard/administration');
                exit();
            } else {
                // Redirige vers la page d'administration avec un message d'erreur
                $_SESSION['erreur'] = "La modification de l'utilisateur a échoué";
                header('Location: /ECF_Garage/public/dashboard/administration');
                exit();
            }
        } else {
            // Affiche la vue de modification
            $this->render('/Views/templates/ModifyUser');
        }
    }

    /**
     * Méthode pour supprimer un utilisateur
     * @return void
     */

    public function deleteUser()
    {
        // Vérifie si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire
            $userId = $_POST['user_id'] ?? null;

            // Vérifie si l'identifiant de l'utilisateur est valide
            if ($userId !== null && is_numeric($userId)) {
                // Supprime l'utilisateur
                $userModel = new UsersModel();
                $success = $userModel->deleteUser((int) $userId);

                // Vérifie si la suppression de l'utilisateur a réussi
                if ($success) {
                    // Redirige vers la page d'administration avec un message de succès
                    $_SESSION['message'] = "L'utilisateur a été supprimé avec succès";
                    header('Location: /ECF_Garage/public/dashboard/administration');
                    exit();
                } else {
                    // Redirige vers la page d'administration avec un message d'erreur
                    $_SESSION['erreur'] = "La suppression de l'utilisateur a échoué";
                    header('Location: /ECF_Garage/public/dashboard/administration');
                    exit();
                }
            } else {
                // L'identifiant de l'utilisateur n'est pas valide
                $_SESSION['erreur'] = "Identifiant d'utilisateur non valide";
                header('Location: /ECF_Garage/public/dashboard/administration');
                exit();
            }
        }
    }
}
