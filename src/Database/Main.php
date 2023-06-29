<?php 
namespace App\Database;


class Main
{
    public function start()
    {
        
        

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
        if(!empty($uri) && $uri[-1] === '/') {
            // On retire le slash de fin
            $uri = substr($uri, 0, -1);

            echo $uri;
        }
    }
}
?>