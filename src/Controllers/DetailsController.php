<?php 

namespace App\Controllers;

use App\Models\CarsDetailsModel;

class DetailsController extends Controller
{

    /**
     * Cette méthode me permettra d'afficher les détails d'une voiture
     * Affiche les détails d'une voiture
     * @return void
     */
    public function index($id)
    {
        // Exemple de récupération des valeurs depuis une source de données fictive
        $marque = "BMW";
        $modele = "Série 3";
        $annee = 2020;
        $kilometrage = 50000;
        $prix = 25000;
        $image = "voiture_4.jpg";
        $description = "La BMW Série 3 est une berline élégante et sportive.";
        $users_id = 1;

        // On instancie le modèle
        $detailsModel = new CarsDetailsModel(
            $marque,
            $modele,
            $annee,
            $kilometrage,
            $prix,
            $image,
            $id,
            $description,
            $users_id

        );

        // On va chercher la voiture correspondant à l'ID
        $details = $detailsModel->find($id);
        // var_dump($details);

        // On envoie à la vue PDO::FETCH_OBJ
        $this->render('/Views/templates/Car_details', compact("details"));
        
        // On envoie à la vue PDO::FETCH_ASSOC
        // $this->render('Views/templates/Car_details', [
        //     "details" => $details
        // ]);
        }

}
