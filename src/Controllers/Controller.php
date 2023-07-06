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

    protected $template1 = 'Header';
    protected $template2 = 'Footer';

    public function render(string $fichier, array $donnees = [])

    {

        // On extrait les données du tableau $donnees
        extract($donnees);

        // On démarre le buffer de sortie
        ob_start();
        // à partir de ce point, toute sortie est conversé en mémoire.
        
        // On créer le chemin vers la vue
        // require_once ROOT . '/src/Views/' . $fichier . '.html.php';
        require_once ROOT.'/src/'.$fichier.'.html.php';

        // Transfère le buffer dans $contenu
        // $contenu = ob_get_clean();

        // On charge le template
        // require_once ROOT . '/src/Views/templates/' . $this->template1. '.html.php';
        // require_once ROOT . '/src/Views/templates/' . $this->template2 . '.html.php';

    }

}
?>