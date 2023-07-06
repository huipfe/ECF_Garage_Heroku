<?php 
namespace App\Controllers;

use App\Core\Form;

class LoginController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Login');
    }
    
    public function login()
    {
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
        
        // $this->render('/Views/templates/Login', ['loginForm' => $form->create()]);
    }
}
?>