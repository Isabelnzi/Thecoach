
<?php

class propositions extends database {

    public $id = '';
    public $propositionName = '';
    public $sports= '';
    public $dateHour = '';
    public $location = '';
    public $idUsers = '';
    public $idCity = '';
    public $idSports = '';

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    /**
     * Méthode permettant l'enregistrement de la ville de l'utilisateur
     * @return boolean
     */
    public function getPropositionByIdUsers(){
        $query = 'INSERT INTO `iNZ25_propositions` (`propositionName`, `address`, `dateHour`, `idCity`, `idUsers`, `idSports`) '
                . 'VALUES (:propositionName, :address, :dateHour, :city, :idUsers, :sports)';
        $result = $this->db->prepare($query);
        $result->bindValue(':propositionName', $this->propositionName, PDO::PARAM_STR);
        $result->bindValue(':address', $this->location, PDO::PARAM_STR);
        $result->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':idUsers', $this->idUsers, PDO::PARAM_INT);
        $result->bindValue(':sports', $this->idSports, PDO::PARAM_INT);

        return $result->execute();
    }
     public function showProposition() {
        $PDOResult = $this->db->prepare('SELECT `iNZ25_propositions`.`id`, `iNZ25_propositions`.`propositionName`, `iNZ25_propositions`.`address`, `iNZ25_propositions`.`dateHour`, `iNZ25_city`.`cityName`, `iNZ25_city`.`zipCode`, `iNZ25_sports`.`sportName`, '
                . 'FROM `iNZ25_propositions` '
                . 'INNER JOIN `iNZ25_city` '
                . 'ON `iNZ25_users`.`idCity` = `iNZ25_city`.`id` '
                . 'INNER JOIN `iNZ25_sports` '
                . 'ON `iNZ5_propositions`.`idSports` = `iNZ25_sports`.`id`'
                . 'WHERE `iNZ25_propositions`.`id` = :id'); // :id marqueur nominatif car id est une inconnue
        // bindvalue Associe une valeur à un paramètre (marqueur nominatif), this se réfère à tous les attributs de la classe
        $PDOResult->bindvalue(':id', $this->id, PDO::PARAM_INT);
        /** On execute la requête
         */
        $PDOResult->execute();
        if (is_object($PDOResult)) {
            /**
             * On utilise fetch pour la récupération d'une seule valeur
             */
            $result = $PDOResult->fetch(PDO::FETCH_OBJ);
        }
        return $result;
    }
}
