<?php

$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$formError = array();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    if (!empty($_POST['name'])) {
        if (preg_match($regexName, $_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
        } else {
            $formError['name'] = 'La saisie de votre nom est invalide';
        }
    } else {
        $formError['name'] = 'Veuillez indiquer votre nom';
    }
    if (isset($_POST['subject'])) {
        //déclarion de la variable subject avec le htmlspecialchar qui change l'interprétation des balises par le code
        $subject = htmlspecialchars($_POST['subject']);
    } else {
        $formError = 'champ obligatoire.';
    }

    if (!empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $mailFrom = htmlspecialchars($_POST['mail']);
    } else {
        $formError['mail'] = 'Votre email est invalide';
    }
    if (!empty($_POST['message'])) {
        //déclarion de la variable message avec le htmlspecialchar qui change l'interprétation des balises par le code
        $message = htmlspecialchars($_POST['message']);
    } else {
        //stocker dans le tableau le rapport d'érreur
        $formError['message'] = 'Champ message obligatoire.';
    }

    $mailTo = 'isabelnzingani@outlook.com';
    $headers = 'From: ' . $mailFrom;
    $txt = 'Vous avez reçu un e-mail ' . $name . ' ' . '  ' . $message;

    mail($mailTo, $subject, $txt, $headers);
    echo "L'email a été envoyé.";
    //header('Location: contact.php?mailsend');
}    