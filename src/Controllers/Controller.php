<?php 
namespace App\Controllers;

// Le controller principale de l'application
abstract class Controller
{
    // On va faire une fonction render, qui va prendre en paramètre le chemin de la vue,
    // et les données à afficher.

    /**
     * Cette méthode permet d'afficher une vue
     *
     * @param string $fichier
     * @param array $donnees
     * @return void
     */

    public function render(string $fichier, array $donnees = [])

    {

        // On extrait les données du tableau $donnees
        extract($donnees);
        
        // On créer le chemin vers la vue
        // require_once ROOT . '/src/Views/' . $fichier . '.html.php';
        require_once ROOT . '/Views/' . $fichier . '.html.php';

        
        // // On démarre le buffer de sortie
        // ob_start();

        // // On inclut le fichier de la vue
        // require_once(VIEWS . $path . '.php');

        // // On stocke le contenu du buffer dans $content
        // $content = ob_get_clean();

        // // On inclut le template
        // require_once(VIEWS . 'layout.php');
    }

}
?>