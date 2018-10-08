<?php

class coach {

private $connexion;
public $id;
public $lastname;
public $firstname;
public $birthdate;
public $phone;
public $mail;

public function __construct() {
//On test les erreurs avec le try/catch 
//Si tout est bon, on est connecté à la base de donnée
try {
$this->connexion = NEW PDO('mysql:host=localhost;dbname=Thecoach;charset=utf8', 'isabelnzi', 'Elio1905');
}
//Autrement, un message d'erreur est affiché
catch (Exception $e) {
die($e->getMessage());
}
}

public function addCoach() {
$query = 'INSERT INTO `coach`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) '
. 'VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
$insertCoach = $this->connexion->prepare($query);
$insertCoach->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
$insertCoach->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
$insertCoach->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
$insertCoach->bindValue(':phone', $this->phone, PDO::PARAM_STR);
$insertCoach->bindValue(':mail', $this->mail, PDO::PARAM_STR);
return $insertCoach->execute();
}

 public function __destruct() {
        $this->connexion=NULL;
        
    }
}