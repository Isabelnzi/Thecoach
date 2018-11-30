
<?php

// Appel de l 'ajax
if (isset($_POST['zipCodeSearch'])) {
    include '../configuration.php';
    $city = new city();
    $city->zipcode = $_POST['zipCodeSearch'];
    echo json_encode($city->getCityByZipCode());
} else {

    include 'configuration.php';

// Initialisation des variables $date et $hour
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

    if (isset($_POST['go'])){
// on teste la déclaration de nos variables
        if (!empty($_POST['sports'])) {
            if (preg_match($regexLetterAndNumber, $_POST['sports'])) {
                $sportName = htmlspecialchars($_POST['sports']);
            } else {
                $formError['sports'] = 'Veuillez choisir un sport';
            }
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
            //regex letter and number car on récupére l'id de la ville
            if (preg_match($regexLetterAndNumber, $_POST['city'])) {
                $city = htmlspecialchars($_POST['city']);
            } else {
                $formError['city'] = 'La saisie de votre ville est invalide';
            }
        } else {
            $formError['city'] = 'Veuillez indiquer votre ville';
        }

        if (!empty($_POST['date'])) {
            $date = htmlspecialchars($_POST['date']);
        } else {
            $formError['date'] = 'la saisie de votre date est invalide';
        }

        if (!empty($_POST['hour'])) {
            if (preg_match($regexHour, $_POST['hour'])) {
                $hour = htmlspecialchars($_POST['hour']);
            } else {
                $formError['hour'] = 'la saisie de l\'horaire est invalide';
            }
        }

        if (!empty($_POST['propositionName'])) {
            //déclaration de la variable message avec le htmlspecialchars qui change l'interprétation des balises par le code
            $propositionName = htmlspecialchars($_POST['propositionName']);
        } else {
            //stocker dans le tableau le rapport d'erreur
            $formError['propositionName'] = 'Champ sujet obligatoire.';
        }
    }

    if (isset($_POST['go']) && count($formError) == 0) {
        $proposition = new propositions();
        
        $proposition->propositionName = $propositionName;
        $proposition->address = $address;
        $proposition->dateHour = $date . ' ' . $hour;
        $proposition->idCity = $city;
        $proposition->idUsers = $_SESSION['id'];
        $proposition->idSports = $sportName;
        $proposition->getPropositionByIdUsers();
    }
}

// Instanciation de l'objet $sport pour afficher les données de la table sports dans le select
$sport = new sports();
$sportList = $sport->getSports();



  