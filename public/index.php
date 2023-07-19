<?php

use App\Autoloader;
use App\Core\Main;

// On définie une constance, contenue le dossier racine du projet.
define('ROOT', dirname(__DIR__));

// Activation du mode de débogage
define('DEBUG', true);

// On importe l'autoloader
require_once ROOT . '/Autoloader.php';
Autoloader::register();

// On instancie Main (notre classe)
$app = new Main();

// On démarre l'application
$app->start();
?>
