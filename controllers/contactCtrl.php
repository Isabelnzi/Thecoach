<?php

$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\'\ ]+$/';
$formError = array();
if (isset($_POST['submit'])) {
    var_dump($_POST);
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
    //test de la regex si elle est invalide
    if (!preg_match($regexText, $subject)) {
        //stocker dans le tableau le rapport d'érreur
        $formError = 'Sujet invalide.';
    }
}
    if (!empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $mailFrom = htmlspecialchars($_POST['mail']);
    } else {
        $formError['mail'] = 'Votre email est invalide';
    }
   if (isset($_POST['your-message'])) {
    //déclarion de la variable message avec le htmlspecialchar qui change l'interprétation des balises par le code
    $message = htmlspecialchars($_POST['message']);
    //test de la regex si elle est invalide
    if (!preg_match($regexText, $message)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['message'] = 'Message invalide.';
    }
    if (empty($message)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['message'] = 'Champ message obligatoire.';
    }
   }

    $mailTo = 'isabelnzingani@outlook.com';
    $headers = 'From: ' . $mailFrom;
    $txt = 'Vous avez reçu un e-mail ' . $name . ' ' . '  ' . $message;

    mail($mailTo, $subject, $txt, $headers);
    echo "L'email a été envoyé.";
    //header('Location: contact.php?mailsend');
}    