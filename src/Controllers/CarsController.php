<?php 

namespace App\Controllers;

use App\Models\CarsDetailsModel;

// Creation de voiture dans la BDD

    // Création d'une instance de votre modèle "VoitureModel"
    // $voitureModel1 = new CarsDetailsModel("Audi", "R8 V10", 2019, 22000, 35000, "voiture5.jpg", 5);

    // Assigner l'objet $voitureModel1 à la variable $voiture
    // $voiture = $voitureModel1;

    // Insertion des données dans la table "voiture"
    // $voitureModel1->create($voiture);


// Suppression de voiture dans la BDD

    // Création d'une instance de votre modèle "VoitureModel"
    // $voitureModel = new CarsDetailsModel("BMW", "Série 3", 2020, 50000, 25000, "voiture.jpg", 2);

    // Inséré l'ID de la voiture à supprimer
    // $voitureModel->delete(1);


// Modification de voiture dans la BDD
    
    // Création d'une instance de votre modèle "VoitureModel"
    // $voitureModel = new CarsDetailsModel("Lamborghini", "Aventador SVJ", 2018, 1000, 370000, "voiture4.jpg", 1,
    // "Lamborghini Aventador SVJ, une voiture de course légendaire avec un design agressif et des performances extrêmes.");

    // Inséré l'ID de la voiture à modifier
    // $voitureModel->update(5, $voitureModel);

class CarsController extends Controller
{

    /**
     * Cette méthode affichera tout les voitures de la BDD
     * Affiche la liste des voitures
     *
     * @return void
     */
    public function index()
    {
        // Exemple de récupération des valeurs depuis une source de données fictive
        $id = 1;
        $marque = "BMW";
        $modele = "Série 3";
        $annee = 2020;
        $kilometrage = 50000;
        $prix = 25000;
        $image = "voiture.jpg";
        $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.";
    
        // On instancie le modèle correspondant à la table "liste des voitures"
        $carsDetailsModel = new CarsDetailsModel($marque, $modele,
        $annee, $kilometrage, $prix, $image, $id, $description);

        // On va chercher toute les voitures
        $carsDetails = $carsDetailsModel->findAll();

        // On va chercher toute les voitures de la marque "Audi"
        // $carsDetails = $carsDetailsModel->findBy(["marque" => "Audi"]);

        // On va chercher toute les voitures de la marque "BMW"
        // $carsDetails = $carsDetailsModel->findBy(["marque" => "BMW"]);

        // var_dump($carsDetails);

        // On affiche la vue, version longue
        // $this->render('Views/templates/Used_cars_listing', [
        //     "carsDetails" => $carsDetails
        // ]);

        // On affiche la vue, version courte, "compact"
        $this->render('Views/templates/Used_cars_listing', compact("carsDetails"));
    
        include_once ROOT . '/src/Views/templates/Used_cars_listing.html.php';
    }

}

?>