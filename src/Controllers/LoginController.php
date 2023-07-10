<?php 
namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;

class LoginController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Login');
    }
    
    /**
     * Méthode pour connecter un utilisateur
     * @return void
     */
    public function login()
    {
        // On vérifie si le formulaire est complet
        if (Form::validate($_POST, ['email', 'password'])) {
            // Le formulaire est valide

            // On nettoie l'adresse e-mail
            $email = strip_tags($_POST['email']);

            // On récupère l'utilisateur via son email
            $usersModel = new UsersModel;
            $user = $usersModel->findOneByEmail($email);

            // On vérifie si l'utilisateur existe
            if (!$user) {
                // L'utilisateur n'existe pas
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: /ECF_Garage/public/login/login');
                exit;
            }

            // On vérifie si le mot de passe est correct
            if (password_verify($_POST['password'], $user->password)) {
                // Le mot de passe est correct

                // On crée la session de l'utilisateur
                $usersModel->setSession();

                // Vérifier si l'utilisateur est un admin, et redirige vers la bonne page si admin.
                if ($user->is_admin == 1) {
                    $_SESSION['is_admin'] = true;
                    header('Location: /ECF_Garage/public/dashboard/register');
                } else {
                    $_SESSION['is_admin'] = false;
                    header('Location: /ECF_Garage/public/cars');
                }

                exit;
            } else {
                // Le mot de passe est incorrect
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: /ECF_Garage/public/login/login');
                exit;
            }
        }

        $form = new Form;

        $form->debutForm()
            ->ajoutLabelFor('email', 'E-mail :')
            ->ajoutInput('email', 'email', ['class' => 'form-control',
            'id' => 'email', 'placeholder' => 'Votre e-mail'])
            ->ajoutLabelFor('password', 'Mot de passe :')
            ->ajoutInput('password', 'password', ['id' => 'password', 'class' => 'form-control',
            'placeholder' => 'Votre mot de passe'])
            ->ajoutBouton('Me connecter', ['class' => 'btn btn-primary'])
            ->finForm();

        
        $this->render('/Views/templates/Login', ['loginForm' => $form->create()]);
    }

    


    /**
     * Déconnecte l'utilisateur
     *
     * @return exit
     */
    public function logout()
    {
        // session_destroy();
        // header('Location: /ECF_Garage/public/login/login');
        // exit;

        unset($_SESSION['user']);
        header('Location: /ECF_Garage/public/login/login');
        exit;
    }
}
?>