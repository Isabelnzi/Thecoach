<?php

//condition pour supprimer le compte d'un utilisateur
if (isset($_GET['idUser'])) {
    $deleteUser = new users();
    $deleteUser->id = $_GET['idUser'];
    $deleteUserResult = $deleteUser->deleteUser();
   
    header('Location: index.php');
    if ($deleteUserResult == false) {
        $formError = 'l\'utilisateur  n\'a pas pu être supprimé';
    }
}
//$profil = new users();
//$profilUser = $profil->getProfilUserById();