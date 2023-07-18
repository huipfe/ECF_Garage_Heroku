<?php

namespace App\Controllers;

use App\Models\CarsDetailsModel;
use App\Core\Form;

class DeleteCarsController extends Controller
{
    public function delete($id)
    {
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            // On instancie le modèle correspondant à la table "liste des voitures"
            $carsDetailsModel = new CarsDetailsModel('', '', 0, 0, 0, '', 0, '', 0);

            // Récupère la voiture à supprimer
            $car = $carsDetailsModel->find($id);

            // Vérifie si la voiture existe
            if ($car) {
                // Vérifie si l'utilisateur est propriétaire de la voiture ou administrateur
                if ($car->users_id === $_SESSION['user']['id'] || $_SESSION['user']['is_admin'] === 1) {
                    // Supprime la voiture en utilisant la méthode deleteCar du modèle
                    $success = $carsDetailsModel->deleteCar($id);

                    if ($success) {
                        // Redirige l'utilisateur vers la liste des voitures ou affiche un message de réussite
                        $_SESSION['message'] = "La voiture a été supprimée avec succès";
                        header('Location: /ECF_Garage/public/cars');
                        exit;
                    } else {
                        $_SESSION['erreur'] = "Une erreur s'est produite lors de la suppression de la voiture";
                        header('Location: /ECF_Garage/public/cars');
                        exit;
                    }
                } else {
                    // L'utilisateur n'est pas autorisé à supprimer la voiture
                    http_response_code(403);
                    $_SESSION['erreur'] = "Vous n'êtes pas autorisé à supprimer cette voiture";
                    header('Location: /ECF_Garage/public/cars');
                    exit;
                }
            } else {
                // La voiture n'existe pas
                $_SESSION['erreur'] = "La voiture que vous essayez de supprimer n'existe pas";
                header('Location: /ECF_Garage/public/cars');
                exit;
            }
        } else {
            // L'utilisateur n'est pas connecté
            // Redirige l'utilisateur vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour supprimer une voiture";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }
    }

}
