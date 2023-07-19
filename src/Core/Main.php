<?php 
namespace App\Core;
use App\Controllers\MainController;

class Main
{

    /**
     * Routeur principale
     *
     * @return void
     */
    public function start()
    {
        // On démarre la session
        session_start();

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
        if(!empty($uri) && $uri != '/' && $uri[-1] === '/') {
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
            // On récupère le nom du controleur à instancier
            // On met la première lettre en majuscule
            // On ajoute le namespace complet avant
            // On ajoute "controller" après
            $controller = '\\App\\Controllers\\' . ucfirst(array_shift($params)) .
            'Controller';

            // On instancie le controller
            $controller = new $controller();

            // On récupère le 2eme paramètre de l'URL
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            if(method_exists($controller, $action)) {
                // Si, il reste des paramètres, on les passes à la méthode (sous forme de tableau)
                // (isset($params[0])) ? $controller->$action($params) :
                // $controller->$action();
                
                //Envoyer à une fonction un tableau de paramètres
                (isset($params[0])) ?call_user_func_array(
                    [$controller, $action], $params) :
                    $controller->$action();

            }else {
                // On déclenche une erreur 404
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }

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