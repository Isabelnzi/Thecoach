<?php

class usersPropositions extends database {

//on déclare les attributs de la classe
    public $id = 0;
    public $idPropositions = 0;
    public $idUsers = 0;

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    public function registerUserId() {
        $query = 'INSERT INTO `iNZ25_usersPropositions` (`idPropositions`, `idUsers`)'
                . 'VALUES (:idPropositions, :idUsers)';
        // bindvalue Associe une valeur à un paramètre (marqueur nominatif), this se réfère à tous les attributs de la classe
        $result = $this->db->prepare($query);
        $result->bindvalue(':idPropositions', $this->idPropositions, PDO::PARAM_INT);
        $result->bindvalue(':idUsers', $this->idUsers, PDO::PARAM_INT);
        $result->execute();
        return $result;
    }

}
