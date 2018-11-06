<?php
include 'configuration.php';
$regexphoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexzipCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$formError = array();

if (isset($_POST['register'])) {
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
    
    if (!empty($_POST['address'])) {
        if (preg_match($regexAddress, $_POST['address'])) {
            $address = htmlspecialchars($_POST['address']);
        } else {
            $formError['address'] = 'La saisie de votre adresse est invalide';
        }
    } else {
        $formError['address'] = 'Veuillez indiquer votre adresse';
    }
     if (!empty($_POST['birthdate'])) {
        if (preg_match($regexDate, $_POST['birthdate'])) {
            $birthdate = htmlspecialchars($_POST['birthdate']);
        } else {
            $formError['birthdate'] = 'La saisie de votre Date de naissance est invalide';
        }
    } else {
        $formError['birthdate'] = 'Veuillez indiquer votre Date de naissance';
    }
    if (!empty($_POST['zipCode'])) {
        if (preg_match($regexzipCode, $_POST['zipCode'])) {
            $zipCode = htmlspecialchars($_POST['zipCode']);
        } else {
            $formError['zipCode'] = 'La saisie de votre code postale est invalide';
        }
    } else {
        $formError['zipCode'] = 'Veuillez indiquer votre code postal';
    }
     if (!empty($_POST['city'])) {
        if (preg_match($regexName, $_POST['city'])) {
            $city = htmlspecialchars($_POST['city']);
        } else {
            $formError['city'] = 'La saisie de votre ville est invalide';
        }
    } else {
        $formError['city'] = 'Veuillez indiquer votre ville';
    }
    
    if (!empty($_POST['phoneNumber'])) {
        if (preg_match($regexphoneNumber, $_POST['phoneNumber'])) {
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        } else {
            $formError['phoneNumber'] = 'La saisie de votre numéro de téléphone est invalide';
        }
    } else {
        $formError['phoneNumber'] = 'Veuillez indiquer votre numéro de téléphone';
    }
    
     if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST['email']);
    } else {
        $formError['email'] = 'Votre email est invalide';
    }
    if (!empty($_POST['civility'])) {
        if (preg_match($regexName, $_POST['civility'])) {
            $civility = htmlspecialchars($_POST['civility']);
        } else {
            $formError['civility'] = 'La saisie de votre Civilité est invalide';
        }
    } else {
        $formError['civility'] = 'Veuillez indiquer votre civilité';
    }
     if (!empty($_POST['login'])) {
        if (preg_match($regexName, $_POST['login'])) {
            $login = htmlspecialchars($_POST['login']);
        } else {
            $formError['civility'] = 'La saisie de votre Civilité est invalide';
        }
    } else {
        $formError['civility'] = 'Veuillez indiquer votre civilité';
    }
    
    if (!empty($_POST['password']) && !empty($_POST['passwordVerify']) && $_POST['password'] == $_POST['passwordVerify']) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //si les champs sont vides ou s'il ne sont pas identiques affichage d'un message d'erreur
    } else {
        $formError['password'] = 'Veuillez vérifier votre mot de passe';
    }
    
    if (isset($_POST['register']) && count($formError) == 0) {
        $user = new users();
        $user->lastname = $lastname;
        $user->firstname = $firstname;
        $user->birthdate = $birthdate;
        $user->email = $email;
        $user->password = $password;
        $user->userRegister();
}
}

    

    
    
