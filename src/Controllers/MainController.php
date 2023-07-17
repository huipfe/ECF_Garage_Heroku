<?php 

namespace App\Controllers;

use App\Models\HorairesModel;

class MainController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Homepage');

    }


}

?>