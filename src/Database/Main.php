<?php 
namespace App\Database;
use App\Controllers\MainController;

class Main
{
    public function start()
    {
        
        include_once '../public/index.html.php';

        // Exemple de routes
        // http://Garage-V.Parrot.com/controleur/methode/parametres
        // http://Garage-V.Parrot.com/accueil/nos-produits/details-voiture
        
        // http://Garage-V.Parrot.com/index.html.php?controleur=accueil&methode=nos-produits&parametres=details-voiture

        // Pour l'instant on récup (exemple si on rajoute accueil/nos-produits) :
        // http://localhost/ECF_Garage/public/accueil/nos-produits
        
        // var_dump($_GET);



        // On retire le "trailing slash" (slash de fin) éventuel de l'URL
        // On récup l'URL
        $uri = $_SERVER['REQUEST_URI'];

        // On va vérifier que l'URI n'est pas vide, et qu'elle se termine par un slash
        if(!empty($uri) && $uri != "/" && $uri[-1] === '/') {
            // On retire le slash de fin
            $uri = substr($uri, 0, -1);

            // On envoie un code de redirection permanente
            http_response_code(301);

            // On redirige vers l'URL sans le slash de fin
            header('Location: ' . $uri);

            echo $uri;

        }

        // On va devoir gerer les paramètres de l'URL
        // p=controleur/methode/parametres
        // On va récup les param, et les mettre sous forme de tableau.
        // On sépare dans un tableau les différents paramètres.
        $params = [];
        if(isset($_GET['p']))
            $params = explode('/', $_GET['p']);

        // var_dump($params);
        if($params[0] != '') {
            // On a au moins 1 paramètre
            // var_dump($params);
        }else {
            // On n'a pas de paramètre.
            // On instancie le controller par défaut.
            $controller = new MainController();

            // On appelle la méthode par défaut (index).

            $controller->index();
        }
    }
}
?>