<?php 

namespace App\Controllers;


class MainController extends Controller
{
    public function index()
    {
        $donnees = [
            'titre' => 'Accueil',
            'description' => 'Bienvenue sur le site du Garage V'
        ];
        require_once ROOT . '/src/Views/templates/Homepage.html.php';
    }
}

?>