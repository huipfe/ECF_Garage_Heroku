<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // $subject = $_POST['subject'];

    // Adresse e-mail de destination
    $to = 'ilan.tervil@wanadoo.fr';

    // Sujet de l'e-mail
    $subject = 'Message depuis le contact du site de Garage V.Parrot';
    // $body .= "Message: " . $subject;

    // Corps de l'e-mail
    $body = "Nom: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    // En-têtes de l'e-mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Envoyer l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        // L'e-mail a été envoyé avec succès
        http_response_code(200);
        echo 'success';
    } else {
        // Une erreur s'est produite lors de l'envoi de l'e-mail
        http_response_code(500);
        echo 'error';
    }

}


?>
