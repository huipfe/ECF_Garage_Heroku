<!-- Charge mes éléments sur l'index -->
<!-- Charge la homepage, qui charge mes footer & headers -->

<?php 
require_once 'src/Views/templates/Homepage.html.php';
?>




<!-- Instancie le compte de profil_user-->
<?php 
require_once 'src/Models/Profil_User.php';
require_once 'src/Models/Cars_details.php';
require_once 'src/Models/Employe.php';
require_once 'src/Models/Admin.php';

// $profil_user1 = new Profil_User('Admin', 1);
// $profil_user1->getNom('Ilan Tervil');
// $profil_user1->getPassword('1234azerty');
// var_dump($profil_user1);
// $profil_user1->getID(0);

// echo "<br>";

// $profil_user2 = new Profil_User('employee', 2);
// $profil_user2->getNom('Bidule Bidulant');
// $profil_user2->getPassword('987425Lol');
// var_dump($profil_user2);
// $profil_user2->getID(0);


?>


<!-- Instancie une voiture-->
<?php 

// echo "<br>";

// $car_details = new Cars_details('Honda Accord LX', 'Used', 2018, 28000, 13000, 'voiture_1.jpg', 1);
// var_dump($car_details);

?>


<!-- Instancie un employé-->
<?php 

// $compte3 = new Employe('employé', 3);
// var_dump($compte3);

// echo "<br>";
?>

<!-- Instancie un admin-->
<?php 

// $compte4 = new Admin('admin', 4);
// var_dump($compte4);

?>