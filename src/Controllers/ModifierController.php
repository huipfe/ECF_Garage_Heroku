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
            // l'admin à tout les droits, donc il modifiera ce qu'il veut.
            if ($car->users_id !== $_SESSION['user']['id'] && $_SESSION['user']['is_admin'] !== 1
            ) {
                http_response_code(403);
                $_SESSION['erreur'] = "Vous n'êtes pas autorisé à modifier cette voiture";
                header('Location: /ECF_Garage/public/cars');
                exit;
            }


            // On traite le formulaire
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)
            ) {



            // On se protèges contre les failles XSS
            $marque = strip_tags($_POST['marque']);
            $modele = strip_tags($_POST['modele']);
            $annee = strip_tags($_POST['annee']);
            $kilometrage = strip_tags($_POST['kilometrage']);
            $prix = strip_tags($_POST['prix']);
            $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
            $description = strip_tags($_POST['description']);

            // On va stocker l'annonce en BDD
            $carModif = new CarsDetailsModel($marque, $modele, $annee, $kilometrage, $prix,
            $image, $id, $description, $users_id);

                // On hydrate l'objet
            $carModif->setId($car->id)
            ->setMarque($marque)
            ->setModele($modele)
            ->setAnnee($annee)
            ->setKilometrage($kilometrage)
            ->setPrix($prix)
            ->setImage($image)
            ->setDescription($description);

                // On met à jour la voiture en BDD
                $carModif->updateCar([
                    "marque" => $marque,
                    "modele" => $modele,
                    "annee" => $annee,
                    "kilometrage" => $kilometrage,
                    "prix" => $prix,
                    "image" => $image,
                    "description" => $description,
                    "id" => $id
                ]);


            // On redirige l'utilisateur vers la liste des voitures
            $_SESSION['message'] = "Votre voiture a bien été modifiée";
            header('Location: /ECF_Garage/public/cars');
            exit;
        }


            // Une fois que le formulaire est terminés, ont l'envoie à notre vue.
            $this->render('Views/templates/Modifier', [
                "car" => $car
            ]);

        } else {
            // L'utilisateur n'est pas connecté
            // On le redirige vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour modifier une annonce";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }
    }
}