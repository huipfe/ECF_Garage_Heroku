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
        if(Form::validate($_POST, ['email', 'password'])){
            // Le formulaire est valide

            // On nettoie l'adresse mail
            $email = strip_tags($_POST['email']);

            // On récupère l'utilisateur via son email
            $usersModel = new UsersModel;
            $userArray = $usersModel->findOneByEmail($email);

            // On vérifie sur l'utilisateur n'existe pas
            if(!$userArray){
                // L'utilisateur n'existe pas
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: /ECF_Garage/public/login');
                exit;
            }

            // L'utilisateur existe, on hydrate l'objet
            $user = $usersModel->hydrate($userArray);

            // On vérifie si le mot de passe est correct
            if(password_verify($_POST['password'], $user->getPasseWord())){
                // Le mot de passe est correct

                // On crée la session de l'utilisateur
                $user->setSession();
                header('Location: /');
                exit;

            }else {
                // Si le mot de passe est incorrect
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: /ECF_Garage/public/login');
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

        // var_dump($form);

        // echo $form->create();
        
        $this->render('/Views/templates/Login', ['loginForm' => $form->create()]);
    }

    
    /**
     * Méthode pour enregistrer un utilisateur
     * @return void
     */
    public function register()
    {
        //On vérifie si le formulaire est valide
        if(Form::validate($_POST, ['email', 'password'])){
            // Le formulaire est valide

            // On nettoie l'adresse mail
            $email = strip_tags($_POST['email']);

            // On chiffre le mot de passe
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            // On hydrate l'utilisateur en BDD
            $user = new UsersModel;

            $user->setEmail($email)
                ->setPasseWord($password)
            ;
            
            // On stock l'utilisateur en BDD
            $user->create();
        }

        $form = new Form;

        $form->debutForm()
            ->ajoutLabelFor('email', 'E-Mail :')
            ->ajoutInput('email', 'email', ['id' => 'email', 'class' => 'form-control',])
            ->ajoutLabelFor('password', 'Mot de passe :')
            ->ajoutInput('password', 'password', ['id' => 'password', 'class' => 'form-control',])
            ->ajoutBouton('M\'enregistrer', ['class' => 'btn btn-primary'])
            ->finForm();

        $this->render('/Views/templates/Login', ['registerForm' => $form->create()]);
    }
}
?>