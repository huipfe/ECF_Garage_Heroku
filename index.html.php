<!-- Charge mes éléments sur l'index -->
<!-- Charge la homepage, qui charge mes footer & headers -->
<?php
include_once 'src/Views/templates/Homepage.html.php';

?>



<!-- On ajoute l'autoloader -->
<?php
use App\Autoloader;
use App\Models\HomepageModel;
use App\Models\UsersModel;

require_once 'src/Autoloader.php';
Autoloader::register();


//----------Test HomepageModel----------//

// $model = new HomepageModel;

// Méthode d'hydratation
// $donnees = [
//     'Temoignage' => 'Nouveaux Temoignage 04',
//     'id_image' => 4
// ];

// $HomepageModel = $model->hydrate($donnees);

// Assigner la valeur de 'id_image' à la propriété $id_image SI NOT NULL DANS SQL
// $HomepageModel->setIdImage($donnees['id_image']);

// Créer avec les param dans $donnees
// $model->create($HomepageModel);

// ID 4
// $model->update(4, $HomepageModel);

// ID 4
// $model->delete(4);

// var_dump($HomepageModel);



//----------Test Profil_UserModel----------//

// $model = new UsersModel;

// $user = $model->setEmail('Nouveaux-Email@gmail.com')
//     ->setPasseWord(password_hash('azerty', PASSWORD_ARGON2I))
//     ->setNom('Nouveaux Nom')
//     ->setLoginStatus(1)
//     ->setUserId(0);

// $model->create($user);

// var_dump($model);



?>