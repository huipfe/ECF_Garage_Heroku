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
            ->finForm();

    }
}
?>