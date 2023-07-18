<?php 

namespace App\Controllers;

use App\Models\HorairesModel;

class MainController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Homepage');

        // $horairesModel = new HorairesModel();
        // $horaires = $horairesModel->fetchAll();

        // // Passez les horaires à la vue
        // $this->render('Views/templates/Homepage', ['horaires' => $horaires]);
    }


}

?>