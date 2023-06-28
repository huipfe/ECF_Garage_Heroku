<!-- Charge mes éléments sur l'index -->
<!-- Charge la homepage, qui charge mes footer & headers -->
<?php
require_once 'src/Views/templates/Homepage.html.php';
?>



<!-- On ajoute l'autoloader -->
<?php
use App\Autoloader;
use App\Models\HomepageModel;

require_once 'src/Autoloader.php';
Autoloader::register();


$model = new HomepageModel;

// Méthode d'hydratation
$donnees = [
    'Temoignage' => 'Temoignage Modifié 9',
    'id_image' => 1
];

$HomepageModel = $model->hydrate($donnees);

// Assigner la valeur de 'id_image' à la propriété $id_image SI NOT NULL DANS SQL
$HomepageModel->setIdImage($donnees['id_image']);

// $model->create($HomepageModel);
// $model->update(1, $HomepageModel);
$model->delete(1);

// var_dump($HomepageModel);


?>