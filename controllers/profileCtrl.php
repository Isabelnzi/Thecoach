<?php

/**
 * On appel lajax
 */
if (isset($_POST['zipCodeSearch'])) {
    include '../configuration.php';
    $city = new city();
    $city->zipcode = $_POST['zipCodeSearch'];
    echo json_encode($city->getCityByZipCode());
} else {
    /**
     * On instancie l'objet profil
     */
    $profil = new users();
    if (isset($_GET['idUser'])) {
        $profil->id = $_GET['idUser'];
    } elseif (isset($_GET['id'])) {
        $profil->id = $_GET['id'];
    }

    /**
     * On appelle la méthode getProfilUserById à la fin du code pour que l'affichage soit instantanée.
     */
//déclaration de la regex pour les noms
    $regexphone = '/^[0][1-9][0-9]{8}$/';
    $regexzipCode = '/^[0-9]{5}$/';
    $regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
    $regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
    $regexAddress = '/^[A-z\ 0-9\']+$/';
    $regexNumber = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';

//déclaration du tableau d'erreur
    $formError = array();

//condition pour récupérer les données de l'utilisateur
    if (isset($_POST['updateButton'])) {
        if (!empty($_POST['lastname'])) {
            if (preg_match($regexName, $_POST['lastname'])) {
                $profil->lastname = htmlspecialchars($_POST['lastname']);
            } else {
                $formError['lastname'] = 'La saisie de votre nom est invalide';
            }
        } else {
            $formError['lastname'] = 'Veuillez indiquer votre nom';
        }

        if (!empty($_POST['firstname'])) {
            if (preg_match($regexName, $_POST['firstname'])) {
                $profil->firstname = htmlspecialchars($_POST['firstname']);
            } else {
                $formError['firstname'] = 'La saisie de votre prénom est invalide';
            }
        } else {
            $formError['firstname'] = 'Veuillez indiquer votre prénom';
        }
        if (!empty($_POST['phoneNumber'])) {
            if (preg_match($regexphone, $_POST['phoneNumber'])) {
                $profil->phoneNumber = htmlspecialchars($_POST['phoneNumber']);
            } else {
                $formError['phoneNumber'] = 'La saisie de votre numéro de téléphone est invalide';
            }
        } else {
            $formError['phoneNumber'] = 'Veuillez indiquer votre numéro de téléphone';
        }

        if (!empty($_POST['zipCode'])) {
            if (preg_match($regexNumber, $_POST['zipCode'])) {
                $profil->zipCode = htmlspecialchars($_POST['zipCode']);
            } else {
                $formError['zipCode'] = 'La saisie de votre code postale est invalide';
            }
        } else {
            $formError['zipCode'] = 'Veuillez indiquer votre code postal';
        }
        if (!empty($_POST['address'])) {
            if (preg_match($regexAddress, $_POST['address'])) {
                $profil->address = htmlspecialchars($_POST['address']);
            } else {
                $formError['address'] = 'La saisie de votre adresse est invalide';
            }
        } else {
            $formError['address'] = 'Veuillez indiquer votre adresse';
        }

        if (!empty($_POST['city'])) {
            //regex number car on récupére l'id de la ville
            if (preg_match($regexNumber, $_POST['city'])) {
                $profil->idCity = htmlspecialchars($_POST['city']);
            } else {
                $formError['city'] = 'La saisie de votre ville est invalide';
            }
        } else {
            $formError['city'] = 'Veuillez indiquer votre ville';
        }

        if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $profil->email = htmlspecialchars($_POST['email']);
        } else {
            $formError['email'] = 'Votre email est invalide';
        }
        if (count($formError) == 0) {
            // Récupération de la valeur de l'id dans le paramètre de l'url
            $profil->id = $_GET['id'];
            if ($profil->updateUserProfil()) {
                $formResult['result'] = true;
            }
        } else {
            $formError['updateButton'] = ERROR_SUBMIT;
        }
    }
    if (isset($_POST['updatePass'])) {
        if (!empty($_POST['password']) && !empty($_POST['passwordVerify']) && $_POST['password'] == $_POST['passwordVerify']) {
            
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //password_hash permet le hashage du mot de passe dans la base de donn"ée
            //si les champs sont vides ou s'il ne sont pas identiques affichage d'un message d'erreur
        } else {
            $formError['password'] = 'Veuillez vérifier votre mot de passe';
        }
        if (count($formError) == 0) {
            // Récupération de la valeur de l'id dans le paramètre de l'url
            $profil->id = $_GET['id'];
             $profil->password = $password;
            if ($profil->updatePassword()) {
                $formResult['result'] = true;
            }
        } else {
            $formError['updatePass'] = ERROR_SUBMIT;
        }
    }
}
// On place le select à la fin du code pour que l'affichage soit instantanée
$profilUser = $profil->getProfilUserById();
