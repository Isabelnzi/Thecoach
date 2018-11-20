<?php

if (isset($_POST['go']) && $_POST['go'] == 'Rejoins nous') {


    // on teste la déclaration de nos variables
    if (!isset($_POST['login']) && !isset($_POST['datehour']) && !isset($_POST['message']) && !isset($_POST['sujet'])) {
        $erreur = 'Les variables nécessaires au script ne sont pas définies.';
    } else {
        if (empty($_POST['login']) || empty($_POST['datehour']) || empty($_POST['message'])) {
            $erreur = 'Au moins un des champs est vide.';
        } else {

        }  
    }
}