<?php
namespace App\Database;
// 'DB.php' : contient l'alimentation de la base de données.
// La création de l'administrateur a été crée à partir du fichier 'DB.php'
// (comme pour pour toutes les autres créations fictives pour alimenter la database).

// On importe PDO
use PDO;
use PDOException;


class Db extends PDO
{

    // Instance unique de la classe
    private static $instance;

    // Information de connexion
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'ecf_garage';

    // Constructeur
    public function __construct()
    {
        // DSN de connexion
        $dsn = 'mysql:dbname='.self::DBNAME.';host='.self::DBHOST;

        // On appelle le constructeur de la classe PDO
        try {
            parent::__construct($dsn, self::DBUSER, self::DBPASS);

            // On définit le jeu de caractères en UTF-8
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

            // à chaque fois que je fais un fetch, je le fais avec un tableau assosciatif;
            //  = $car ['kilometrage'] quand je récupérerais une info
            // $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            // Pour une écriture simplifié dans les vues, en POO, on utilisera plutot
            // $car->kilometrage
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            // Déclencher une exception en cas d'erreur
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Méthode de connexion
    public static function getInstance()
    {
        // Si l'instance n'existe pas
        if (self::$instance === null) {
            // On crée une instance de la classe
            self::$instance = new self();
        }
        // On retourne l'instance
        return self::$instance;
    }
}


?>