<?php 
namespace App\Controllers;

use App\Core\Form;
use App\Models\Model;
use App\Models\UsersModel;

class LoginController extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UsersModel;
    }
    public function index()
    {
        // Vérifier si l'utilisateur est déjà connecté
        if (isset($_SESSION['user'])) {
            // Vérifier si l'utilisateur est un admin
            if ($_SESSION['user']['is_admin'] == 1) {
                header('Location: /dashboard/administration');
                exit();
            } else {
                header('Location: /public/cars');
                exit();
            }
        }

        $this->render('/Views/templates/Login');
    }

    
    /**
     * Méthode pour connecter un utilisateur
     * @return void
     */
    public function Belogin()
    {
        // vérifier si on récup du post
        if($_SERVER['REQUEST_METHOD'] ==='POST'){
            // On vérifie si le formulaire est complet
            if(!empty($_POST['email']) && !empty($_POST['password'])
            // On vérifie que l'email est au bon format, htmlspecialchars pour éviter les injections
            && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL
            )) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // On recherche l'utilisateur par email dans la BDD.

            $userArray = $this->userModel->findOneByEmail($email);

            // Si l'utilisateur existe, on vérifie le mot de passe.
            if($userArray && (password_verify($password, $userArray->password))) {

                // Si erreur avant
                unset($_SESSION['erreur_login']);

                // On crée la session de l'utilisateur.
                // $this->setSession();
                $_SESSION['user'] = [
                    'id' => $userArray->user_id,
                    'email' => $userArray->email,
                    'is_admin' => $userArray->is_admin,
                ];
                
                // Vérifier si l'utilisateur est un admin, et redirige vers la page d'admin.
                if ($_SESSION['user']['is_admin'] == 1) {
                    header('Location: /dashboard/administration');
                    $_SESSION['message'] =
                        "Bienvenue sur votre espace admin " . $userArray->name_users;
                    exit();
                }
                // Si non admin, donc employé, rediriger directement vers la liste des voitures.
                else {
                    header('Location: /cars');
                    $_SESSION['message'] =
                        "Bienvenue sur votre espace employé " . $userArray->name_users;
                    exit();
                }
            } else {
                // Sinon, on affiche un message d'erreur.
                $_SESSION['erreur_login'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: /login/Belogin');
                exit;
            }
        }
    }
    $this->render('/Views/templates/Login');
}

    


    /**
     * Déconnecte l'utilisateur
     *
     * @return exit
     */
    public function logout()
    {
        session_destroy();
        header('Location: /login/Belogin');
        exit;

    }

}
?>