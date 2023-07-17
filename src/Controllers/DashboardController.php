<?php 

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\HorairesModel;

class DashboardController extends Controller
{
    public function index()
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        $this->render('/Views/templates/Dashboard');
    }


    /**
     * Méthode pour enregistrer un utilisateur
     * @return void
     */
    public function administration()
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }
        
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

        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

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
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Veuillez vous connecter en tant qu'administrateur";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }
        
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

    public function manageHoraires()
    {
        // Vérifier si l'utilisateur est connecté en tant qu'admin
        if (!isset($_SESSION['user']) || $_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Accès non autorisé";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Gérer la soumission du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les horaires modifiés depuis le formulaire
            $horaires = $_POST['horaires'];

            // Mettre à jour les horaires dans la base de données
            $horairesModel = new HorairesModel();
            $success = $horairesModel->updateHoraires($horaires);

            if ($success) {
                $_SESSION['message'] = "Les horaires ont été mis à jour avec succès";
            } else {
                $_SESSION['erreur'] = "Une erreur s'est produite lors de la mise à jour des horaires";
            }

            header('Location: /ECF_Garage/public/dashboard/manageHoraires');
            exit();
        }

        // Récupérer les horaires depuis la base de données
        $horairesModel = new HorairesModel();
        $horaires = $horairesModel->findAll();

        $this->render('/Views/templates/ManageHoraires', ['horaires' => $horaires]);
    }

}
