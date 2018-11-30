
<?php

class propositions extends database {

    public $id = '';
    public $propositionName = '';
    public $sports= '';
    public $dateHour = '';
    public $address = '';
    public $idUsers = '';
    public $idCity = '';
    public $idSports = '';

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    /**
     * Méthode permettant l'enregistrement d'une activité proposé par l'utilisateur
     * @return boolean
     */
    public function getPropositionByIdUsers(){
        $query = 'INSERT INTO `iNZ25_propositions` (`propositionName`, `address`, `dateHour`, `idCity`, `idUsers`, `idSports`) '
                . 'VALUES (:propositionName, :address, :dateHour, :city, :idUsers, :sportName)';
        $result = $this->db->prepare($query);
        $result->bindValue(':propositionName', $this->propositionName, PDO::PARAM_STR);
        $result->bindValue(':address', $this->address, PDO::PARAM_STR);
        $result->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':idUsers', $this->idUsers, PDO::PARAM_INT);
        $result->bindValue(':sportName', $this->idSports, PDO::PARAM_INT);

        return $result->execute();
    }
    /*
     * methode pour afficher la proposition de l'utilisateur dans l'index
     */
      public function showProposition() {
        $PDOResult = $this->db->prepare('SELECT `iNZ25_propositions`.`id`, `iNZ25_propositions`.`propositionName`, `iNZ25_propositions`.`address`, `iNZ25_propositions`.`dateHour`, `iNZ25_sports`.`sportName`, `iNZ25_city`.`cityName`, `iNZ25_city`.`zipCode` '
                . 'FROM `iNZ25_propositions` '
                . 'INNER JOIN `iNZ25_city` '
                . 'ON `iNZ25_propositions`.`idCity` = `iNZ25_city`.`id` '
                . 'INNER JOIN `iNZ25_sports` '
                . 'ON `iNZ25_propositions`.`idSports` = `iNZ25_sports`.`id`');// :id marqueur nominatif car id est une inconnue
        // bindvalue Associe une valeur à un paramètre (marqueur nominatif), this se réfère à tous les attributs de la classe
        /** On execute la requête
         */
        $PDOResult->execute();
        if (is_object($PDOResult)) {
            /**
             * On utilise fetchall pour la récupération de plusieurs valeurs dans un tableau
             */
            $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
       }
        return $result;
    }
    public function updatePropositions() {
        //méthode permettant la modification de la proposition  de l'utilisateur

        $query = 'UPDATE `iNZ25_propositions` SET `propositionName` = :propositionName, `address` = :address`, `idSports` = :sportName, `dateHour` = :dateHour, `idCity` = :city '
                . 'WHERE `id` = :id ';
        $modifyProposition = $this->db->prepare($query);
         $modifyProposition->bindvalue(':id', $this->id, PDO::PARAM_INT);
        $modifyProposition->bindValue(':propositionName', $this->propositionName, PDO::PARAM_STR);
        $modifyProposition->bindValue(':address', $this->address, PDO::PARAM_STR);
        $modifyProposition->bindValue(':sportName', $this->idSports, PDO::PARAM_INT);
        $modifyProposition->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $modifyProposition->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        return $modifyProposition->execute();
    }
   

    public function deletePropositions() {
        $remove = $this->db->prepare('DELETE FROM `iNZ25_propositions` WHERE `id` =  :idUser ');
        $remove->bindValue(':idUser', $this->id, PDO::PARAM_INT);
        return $remove->execute();
    }

}

