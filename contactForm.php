<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email de destination
    $to = "noemietouitou@gmail.com";
    // Sujet de l'email
    $subject = "Nouveau message de contact: " . $subject;

    // Contenu de l'email
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Headers de l'email
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Merci, votre message a été envoyé.";
    } else {
        echo "Erreur: votre message n'a pas pu être envoyé.";
    }
}

