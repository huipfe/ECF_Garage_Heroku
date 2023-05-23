<?php



define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "studi_groupe");


//CRUD: Create Read Update Delete

$dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;


//On se connecte a la BDD

try {

  $db = new PDO($dsn, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  $db->exec("SET NAMES utf8");
} catch (PDOException $e) {
  //on throw l'erreur
  die($e->getMessage());
}


//on est connecte a la BDD

//R de CRUD = read

$sql = "SELECT * FROM `users`";

//on execute directement la requete.

$query = $db->query($sql);

//on recupere les donnees (fetch ou fetchAll)

$user = $query->fetchALL();


// echo "<pre>";
// var_dump($user);
// echo "</pre>";


// C de CRUD = create

// $sql = "INSERT INTO `users` (`nom`, `prenom`, `age`) VALUES ('DETRE', 'Bertrand', '42')";

// $query = $db->query($sql);


// U de CRUD = Update

// $sql = "UPDATE `users` SET `age` = '25', `nom` = 'Dupontond' WHERE `id` = '2'";

// $query = $db->query($sql);


//D -> CRUD = Delete

// $sql = "DELETE FROM `users` WHERE `id` > 2";

// $query = $db->query($sql);
