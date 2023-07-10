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
    // $voitureModel = new CarsDetailsModel("BMW", "Série 5", 2022, 3000, 45000, "voiture_4.jpg", 1,
    // "La BMW Série 5 est une berline de luxe offrant un mélange parfait de confort, de performances
    // et de technologies avancées.");

    // Inséré l'ID de la voiture à modifier
    // $voitureModel->update(4, $voitureModel);

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
        $description = "La BMW Série 3 est une berline élégante et sportive.";

        // $imagePath = __DIR__ . '/../../../Assets/images/Used cars listing/voiture_4.jpg';
        // $image = file_get_contents($imagePath);

    
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
        $this->render('/Views/templates/Used_cars_listing', compact("carsDetails"));
    
    }

    /**
     * Cette méthode me permettra d'ajouter une voiture
     * Ajoute une voiture
     * @return void
     */
    public function ajouter()
    {
        // Pour pouvoir ajouter une annonce, il faut être un employé, ou admin qui est connecter
        // On vérifie si l'utilisateur est connecter
        if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])){
            // L'utilisateur est connecté
            echo "Vous êtes connecté, vous pouvez ajouter une annonce";
        }else{
            // L'utilisateur n'est pas connecté
            // On le redirige vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour ajouter une annonce";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }
    }

}

?>
