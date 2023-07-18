<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class ServicesController extends Controller
{

    /**
     * Affiche la liste des services
     *
     * @return void
     */
    public function index()
    {
        // On récupère les services
        $serviceModel = new ServicesModel();
        $services = $serviceModel->fetchAll();
        // On affiche la vue
        $this->render('Views/templates/Services', ['services' => $services]);
    }

    public function ajouter()
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Accès non autorisé";
            header('Location: /ECF_Garage/public/services');
            exit();
        }

        // Vérifier si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $temps_estime = $_POST['temps_estime'];
            $prix = $_POST['prix'];
            $image = $_FILES['image']['tmp_name'];
            $description = $_POST['description'];

            // Vérifier si une image a été téléchargée
            if (is_uploaded_file($image)) {
                // Convertir l'image en base64
                $imageData = base64_encode(file_get_contents($image));

                // Créer un nouveau service
                $serviceModel = new ServicesModel();
                $success = $serviceModel->createService([
                    'nom' => $nom,
                    'temps_estime' => $temps_estime,
                    'prix' => $prix,
                    'image' => $imageData,
                    'description' => $description
                ]);

                if ($success) {
                    $_SESSION['message'] = "Le service a été ajouté avec succès";
                    header('Location: /ECF_Garage/public/services');
                    exit();
                } else {
                    $_SESSION['erreur'] = "Une erreur s'est produite lors de l'ajout du service";
                    header('Location: /ECF_Garage/public/services');
                    exit();
                }
            } else {
                $_SESSION['erreur'] = "Veuillez sélectionner une image valide";
                header('Location: /ECF_Garage/public/services');
                exit();
            }
        }

        // Afficher la vue du formulaire d'ajout
        $this->render('Views/templates/ServicesAdd');
    }

    public function modifier($id)
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Accès non autorisé";
            header('Location: /ECF_Garage/public/services');
            exit();
        }

        // Vérifier si le service existe
        $serviceModel = new ServicesModel();
        $service = $serviceModel->find($id);
        if (!$service) {
            $_SESSION['erreur'] = "Service non trouvé";
            header('Location: /ECF_Garage/public/services');
            exit();
        }

        // Vérifier si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $temps_estime = $_POST['temps_estime'];
            $prix = isset($_POST['prix']) ? $_POST['prix'] : null;
            $image = $_FILES['image']['tmp_name'];
            $description = $_POST['description'];

            // Vérifier si une image a été téléchargée
            if (is_uploaded_file($image)) {
                // Convertir l'image en base64
                $imageData = base64_encode(file_get_contents($image));

                // Mettre à jour le service
                $success = $serviceModel->updateService([
                    'id' => $id,
                    'nom' => $nom,
                    'temps_estime' => $temps_estime,
                    'prix' => $prix,
                    'image' => $imageData,
                    'description' => $description
                ]);

                if ($success) {
                    $_SESSION['message'] = "Le service a été modifié avec succès";
                    header('Location: /ECF_Garage/public/services');
                    exit();
                } else {
                    $_SESSION['erreur'] = "Une erreur s'est produite lors de la modification du service";
                    header('Location: /ECF_Garage/public/services');
                    exit();
                }
            } else {
                $_SESSION['erreur'] = "Veuillez sélectionner une image valide";
                header('Location: /ECF_Garage/public/services');
                exit();
            }
        }

        // Afficher la vue du formulaire de modification
        $this->render('Views/templates/ServicesModify', ['service' => $service]);
    }

    public function delete($id)
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            $_SESSION['erreur'] = "Veuillez vous connecter";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit();
        }

        // Vérifier si l'utilisateur est un admin
        if ($_SESSION['user']['is_admin'] != 1) {
            $_SESSION['erreur'] = "Accès non autorisé";
            header('Location: /ECF_Garage/public/services');
            exit();
        }

        // Vérifier si le service existe
        $serviceModel = new ServicesModel();
        $service = $serviceModel->find($id);
        if (!$service) {
            $_SESSION['erreur'] = "Service non trouvé";
            header('Location: /ECF_Garage/public/services');
            exit();
        }

        // Vérifier si le formulaire de confirmation est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $serviceModel->deleteService($id);
            if ($success) {
                $_SESSION['message'] = "Le service a été supprimé avec succès";
                header('Location: /ECF_Garage/public/services');
                exit();
            } else {
                $_SESSION['erreur'] = "Une erreur s'est produite lors de la suppression du service";
                header('Location: /ECF_Garage/public/services');
                exit();
            }
        }

        // Afficher la vue avec la modal de confirmation de suppression
        $this->render('Views/templates/ServicesDelete', ['service' => $service]);
    }
}