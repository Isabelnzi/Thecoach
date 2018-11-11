<?php
//
// Définition des informations de connexion à la base de données
define('HOST', '127.0.0.1');
define('LOGIN', 'isabelnzi');
define('PASSWORD', 'Elio1905');
define('DBNAME', 'theCoach');

// Ajout des fichiers nécessaire au bon fonctionnement du site
include_once 'class/database.php';
include_once 'models/users.php';
include_once 'models/usersTypes.php';
include_once 'models/city.php';



