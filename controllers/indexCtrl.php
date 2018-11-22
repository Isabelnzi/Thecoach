
<?php

//appel de l 'ajax
if (isset($_POST['zipCodeSearch'])) {
    include '../configuration.php';
    $city = new city();
    $city->zipcode = $_POST['zipCodeSearch'];
    echo json_encode($city->getCityByZipCode());
} else {
    include 'configuration.php';
    $hour = '00:00';
    $date = '- - ';
//regex pour la date
    $regexDate = '/^((19|20)[0-9]{2})-(0[1-9]|1[012])-(0[1-9]|([1-2][0-9])|3[01])$/';
//regex pour l'heure 
    $regexHour = '/^([01]?[0-9]|2[0-3]):[0-5][0-9]/';
    $regexzipCode = '/^[0-9]{5}$/';
    $regexAddress = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
    $regexNumber = '/^[0-9-a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
    $formError = array();
    $proposition = new propositions();
    $propositionsUsers = $proposition->getPropositionByIdUsers();

    if (isset($_POST['go'])) {
// on teste la déclaration de nos variables
         if (!empty($_POST['sports'])) {
             if (preg_match($regexNumber, $_POST['sports'])) {
                $sports = htmlspecialchars($_POST['sports']);
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
            //regex number car on récupére l'id de la ville
            if (preg_match($regexNumber, $_POST['city'])) {
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
    $proposition->dateHour = $date . ' ' . $hour;
    $proposition->propositionName = $propositionName;
    $proposition->idCity = $city;
    $proposition->idSports = $sports;
    $proposition->address = $address;
    $proposition->getPropositionByIdUsers();
}
}

$sport = new sports();
$sportList = $sport->getSports();



// condition pour afficher les informations de l'événement
if (!empty($_SESSION['id'])) {
    $proposition = new propositions();
    $proposition->id = $_SESSION['id'];
    $showPropositionUser= $proposition->showProposition();
}
