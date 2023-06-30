<?php 

namespace App\Controllers;

class ProduitsController extends Controller
{

    /**
     * Cette méthode affichera tout les produits de la BDD
     * Affiche la liste des produits
     *
     * @return void
     */
    public function index()
    {
        // On instancie le modèle correspondant à la table "list des voitures"
         


        include_once ROOT . '/src/Views/templates/Used_cars_listing.html.php';
    }
}

?>