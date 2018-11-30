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
        $userRegister->idUsers = $_SESSION['id'];
        $userRegister->idPropositions = $_GET['idPropositions'];
        $userRegister->registerUserId();
    }



//condition pour supprimer la proposition d'un utilisateur
if (isset($_GET['idUsers'])) {
    $deleteUserProposition = new propositions();
    $deleteUserProposition->id = $_GET['idUsers'];
    $deleteUserResult = $deleteUserProposition->deletePropositions();


    if ($deleteUserResult == false) {
        $formError = 'l\'utilisateur  n\'a pas pu être supprimé';
    }
}
}