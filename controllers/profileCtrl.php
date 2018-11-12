<?php

/**
 * On instancie l'objet profil
 */
$profil = new users();

$profil->id = $_GET['id'];
/**
 * On appelle la méthode getProfilUserById à la fin du code pour que l'affichage soit instantanée.
 */
//déclaration de la regex pour les noms
$regexphoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexzipCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumber = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';

//déclaration du tableau d'erreur
$formError = array();

if (isset($_POST['submit'])) {

    if (!empty($_POST['lastname'])) {
        if (preg_match($regexName, $_POST['lastname'])) {
            $lastname = htmlspecialchars($_POST['lastname']);
        } else {
            $formError['lastname'] = 'La saisie de votre nom est invalide';
        }
    } else {
        $formError['lastname'] = 'Veuillez indiquer votre nom';
    }

    if (!empty($_POST['firstname'])) {
        if (preg_match($regexName, $_POST['firstname'])) {
            $firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $formError['firstname'] = 'La saisie de votre prénom est invalide';
        }
    } else {
        $formError['firstname'] = 'Veuillez indiquer votre prénom';
    }

    if (!empty($_POST['birthdate'])) {
        if (preg_match($regexDate, $_POST['birthdate'])) {
            $birthdate = htmlspecialchars($_POST['birthdate']);
        } else {
            $formError['birthdate'] = 'La saisie de votre date de naissance est invalide';
        }
    } else {
        $formError['birthdate'] = 'Veuillez indiquer votre date de naissance';
    }

    if (!empty($_POST['phoneNumber'])) {
        if (preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        } else {
            $formError['phoneNumber'] = 'La saisie de votre numéro de téléphone est invalide';
        }
    } else {
        $formError['phoneNumber'] = 'Veuillez indiquer votre numéro de téléphone';
    }
    if (!empty($_POST['zipCode'])) {
        if (preg_match($regexNumber, $_POST['zipCode'])) {
            $zipCode = htmlspecialchars($_POST['zipCode']);
        } else {
            $formError['zipCode'] = 'La saisie de votre code postale est invalide';
        }
    } else {
        $formError['zipCode'] = 'Veuillez indiquer votre code postal';
    }
    if (!empty($_POST['city'])) {
        //regex number car on récupére l'id de la ville
        if (preg_match($regexNumber, $_POST['city'])) {
            $city = htmlspecialchars($_POST['city']);
        } else {
            $formError['city'] = 'La saisie de votre ville est invalide';
        }
    } else {
        $formError['city'] = 'Veuillez indiquer votre ville';
    }

    if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST['email']);
    } else {
        $formError['email'] = 'Votre email est invalide';
    }

    if (count($formError) == 0) {
        // Récupération de la valeur de l'id dans le paramètre de l'url
        $profil->id = $_GET['id'];
        if (!$profil->updateUserProfil()) {
            $formError['submit'] = 'Il y a eu un problème';
        }
    }
}
// On place le select à la fin du code pour que l'affichage soit instantanée
$profilUser = $profil->getProfilUserById();
