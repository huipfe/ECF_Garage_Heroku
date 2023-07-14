<?php

namespace App\Controllers;

use App\Models\CarsDetailsModel;
use App\Core\Form;

class ModifierController extends Controller {
    /**
     * Modifier une voiture
     *
     * @param integer $id
     * @return void
     */
    public function modifie(int $id)
    {

        // Pour pouvoir modifier une voiture, il faut être un employé ou un admin connecté
        // On vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            // L'utilisateur est connecté

            // Exemple de récupération des valeurs depuis une source de données fictive
            // $id = 1;
            $marque = "BMW";
            $modele = "Série 3";
            $annee = 2020;
            $kilometrage = 50000;
            $prix = 25000;
            $image = "voiture.jpg";
            $description = "La BMW Série 3 est une berline élégante et sportive.";
            $users_id = 1;


            // On va vérifier sur la voiture existe en BDD
            // On instancie le modèle correspondant à la table "liste des voitures"
            $carsDetailsModel = new CarsDetailsModel($marque, $modele, $annee,
            $kilometrage, $prix, $image, $id, $description, $users_id);
            
            // On va chercher la voiture en BDD
            $car = $carsDetailsModel->find($id);

            // Si l'annonce n'existe pas, on retourne à la liste des voitures
            if (!$car) {
                http_response_code(404);
                $_SESSION['erreur'] = "La voiture recherchée n'existe pas";
                header('Location: /ECF_Garage/public/cars');
                exit;
            }
            

        // On vérifie si l'utilisateur est propriétaire de la voiture. Si oui, il peut la modifier
        if($car->users_id !== $_SESSION['user']['id']) {
            http_response_code(403);
            $_SESSION['erreur'] = "Vous n'êtes pas autorisé à modifier cette voiture";
            header('Location: /ECF_Garage/public/cars');
            exit;
        }
        
        

        } else {
            // L'utilisateur n'est pas connecté
            // On le redirige vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour modifier une annonce";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }
    }
}