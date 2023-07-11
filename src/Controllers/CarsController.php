<?php 

namespace App\Controllers;

use App\Models\CarsDetailsModel;
use App\Core\Form;
use App\Models\UsersModel;
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
        // Pour pouvoir ajouter une voiture, il faut être un employé ou un admin connecté
        // On vérifie si l'utilisateur est connecté
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            // L'utilisateur est connecté
            // echo "Vous êtes connecté, vous pouvez ajouter une annonce";

            // On vérifie si le formulaire est complet.
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
                // Le formulaire est complet

                // On se protège contre les failles XSS
                // htmlentities() permet de rendre inoffensives les balises HTML
                // htmlspecialchars() permet de rendre inoffensives les balises HTML
                // trim() permet de supprimer les espaces en début et fin de chaîne

                // strip_tags() permet de supprimer les balises HTML
                $marque = strip_tags($_POST['marque']);
                $modele = strip_tags($_POST['modele']);
                $annee = strip_tags($_POST['annee']);
                $kilometrage = strip_tags($_POST['kilometrage']);
                $prix = strip_tags($_POST['prix']);
                $image = strip_tags($_POST['image']);
                $description = strip_tags($_POST['description']);
                $id = strip_tags($_SESSION['user']['id']);

                // On va enregister notre voiture dans la BDD
                // On instancie le modèle correspondant à la table "liste des voitures"
                $carsDetailsModel = new CarsDetailsModel(
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

                // On hydrate notre modèle
                $carsDetailsModel->setMarque($marque)
                    ->setModele($modele)
                    ->setAnnee($annee)
                    ->setKilometrage($kilometrage)
                    ->setPrix($prix)
                    ->setImage($image)
                    ->setDescription($description)
                    ->setUsersId($_SESSION['user']['id']);
                ;

                // On enregistre notre voiture dans la BDD
                // $carsDetailsModel->create();
                
                // On redirige l'utilisateur vers la liste des voitures
                $_SESSION['message'] = "Votre voiture a bien été ajoutée";
                header('Location: /ECF_Garage/public/cars');
                exit;
            }else {
                // Le formulaire n'est pas complet
                // On affiche un message d'erreur
                echo "<p class='mx-2 alert alert-danger'>Le formulaire est incomplet</p>";
            }


            // Il a le droit d'ajouter une voiture
            $form = new Form;

            // On ajoute les champs de notre formulaire
            $form->debutForm()
                ->ajoutLabelFor("marque", "Marque de la voiture : ")
                ->ajoutInput("text", "marque", ['id' => 'marque', 'class' => 'form-control'])
                ->ajoutLabelFor("modele", "Modèle de la voiture : ")
                ->ajoutInput("text", "modele", ['id' => 'modele', 'class' => 'form-control'])
                ->ajoutLabelFor("annee", "Année de la voiture : ")
                ->ajoutInput("number", "annee", ['id' => 'annee', 'class' => 'form-control'])
                ->ajoutLabelFor("kilometrage", "Kilométrage de la voiture : ")
                ->ajoutInput("number", "kilometrage", ['id' => 'kilometrage', 'class' => 'form-control'])
                ->ajoutLabelFor("prix", "Prix de la voiture : ")
                ->ajoutInput("number", "prix", ['id' => 'prix', 'class' => 'form-control'])
                ->ajoutLabelFor("image", "Image de la voiture : ")
                ->ajoutInput("img", "image", ['id' => 'image', 'class' => 'form-control'])
                ->ajoutLabelFor("description", "Description de la voiture : ")
                ->ajoutTextarea("text", "", ['id' => 'description', 'class' => 'form-control'])
                ->ajoutBouton("Ajouter", ['class' => 'btn btn-primary'])
                ->finForm();

                // Une fois que le formulaire est terminés, ont l'envoie à notre vue.
                $this->render('Views/templates/AddCars', [
                    "form" => $form->create()
                ]);

        } else {
            // L'utilisateur n'est pas connecté
            // On le redirige vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour ajouter une annonce";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }
    }


}

?>
