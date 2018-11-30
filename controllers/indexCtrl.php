<?php

//appel de l 'ajax
if (isset($_POST['registerVerify'])) {
    include '../configuration.php';
    $userRegister = new usersPropositions();
    //$userRegister->idPropositions= htmlspecialchars($_POST['registerVerify']);
    echo $user->registerUserId();
} else {

//on instancie l'objet pour utiliser la méthode showproposition pour afficher les infos de l'activité
    $userProposition = new propositions();
    $showPropositionUser = $userProposition->showProposition();

// condition pour enregistrer le choix de l'utilisateur = activité a laquel il participe
    if (isset($_GET['idPropositions'])) {
        $userRegister = new usersPropositions();
        //$userRegister->idUsers = $_SESSION['id'];
        $userRegister->idPropositions = $_GET['idPropositions'];
        $userRegister->registerUserId();
    }

//modification de la proposition quand l'utilisateur est connecté
//if (isset($_SESSION['isConnect'])) {
    $hour = '00:00';
    $date = '1970-01-01';
// Déclaration de la regex pour l'heure
    $regexHour = '/^([01]?[0-9]|2[0-3]):[0-5][0-9]/';
// Déclaration de la regex pour le code postal
    $regexzipCode = '/^[0-9]{5}$/';
// Déclaration de la regex pour l'adresse
    $regexAddress = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
// Déclaration de la regex lettres et chiffres
    $regexLetterAndNumber = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
// Déclaration du tableau d'erreur 
    $formError = array();

    if (isset($_POST['modifyProposition'])) {
        if (!empty($_POST['sports'])) {
            if (preg_match($regexLetterAndNumber, $_POST['sports'])) {
                $usersProposition->sportName = htmlspecialchars($_POST['sports']);
            } else {
                $formError['sports'] = 'Veuillez choisir un sport';
            }
        }

        if (!empty($_POST['address'])) {
            if (preg_match($regexAddress, $_POST['address'])) {
                $userProposition->address = htmlspecialchars($_POST['address']);
            } else {
                $formError['address'] = 'La saisie de votre adresse est invalide';
            }
        } else {
            $formError['address'] = 'Veuillez indiquer votre adresse';
        }

        if (!empty($_POST['zipCode'])) {
            if (preg_match($regexzipCode, $_POST['zipCode'])) {
                $userProposition->zipCode = htmlspecialchars($_POST['zipCode']);
            } else {
                $formError['zipCode'] = 'La saisie de votre code postale est invalide';
            }
        } else {
            $formError['zipCode'] = 'Veuillez indiquer votre code postal';
        }

        if (!empty($_POST['city'])) {
            //regex letter and number car on récupére l'id de la ville
            if (preg_match($regexLetterAndNumber, $_POST['city'])) {
                $userProposition->city = htmlspecialchars($_POST['city']);
            } else {
                $formError['city'] = 'La saisie de votre ville est invalide';
            }
        } else {
            $formError['city'] = 'Veuillez indiquer votre ville';
        }

        if (!empty($_POST['date'])) {
            $userProposition->date = htmlspecialchars($_POST['date']);
        } else {
            $formError['date'] = 'la saisie de votre date est invalide';
        }

        if (!empty($_POST['hour'])) {
            if (preg_match($regexHour, $_POST['hour'])) {
                $userProposition->hour = htmlspecialchars($_POST['hour']);
            } else {
                $formError['hour'] = 'la saisie de l\'horaire est invalide';
            }
        }

        if (!empty($_POST['propositionName'])) {
            //déclaration de la variable message avec le htmlspecialchars qui change l'interprétation des balises par le code
            $userProposition->propositionName = htmlspecialchars($_POST['propositionName']);
        } else {
            //stocker dans le tableau le rapport d'erreur
            $formError['propositionName'] = 'Champ sujet obligatoire.';
        }
    }

    if ($userProposition->updatePropositions()) {
        $userProposition->idUsers = $_GET['idUsers'];
        $formResult['result'] = true;
    } else {
        $formError['modifyProposition'] = ERROR_SUBMIT;
    }
}

$showPropositionUser = $userProposition->showProposition();

//condition pour supprimer la proposition d'un utilisateur
if (isset($_SESSION['idUsers'])) {
    $deleteUserProposition = new propositions();
    $deleteUserProposition->id = $_SESSION['idUsers'];
    $deleteUserResult = $deleteUserProposition->deletePropositions();


    if ($deleteUserResult == false) {
        $formError = 'l\'utilisateur  n\'a pas pu être supprimé';
    }
}
