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

// $HomepageModel = $model
//     ->setTemoignage('Nouveau Temoignage')
//     ->setIdImage(1);

// $model->create($HomepageModel);

// var_dump($HomepageModel);


?>