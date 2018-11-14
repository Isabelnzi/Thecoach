<?php
//condition pour supprimer le compte d'un utilisateur
if (isset($_GET['idUser'])) {
    $deleteUser = new users();
    $deleteUser->id = $_GET['idUser'];
    $deleteUserResult = $deleteUser->deleteUser();
    
    if ($deleteUserResult == false) {
        $deleteError = 'l\'utilisateur  n\'a pas pu être supprimé';
    }
}
//$profil = new users();
//$profilUser = $profil->getProfilUserById();