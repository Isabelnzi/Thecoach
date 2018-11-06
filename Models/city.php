
<?php


class city extends database {

    public $id = 0;
    public $name = '';
    public $zipcode = '';
    public $idDepartement = '';
    
   
    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }


    /**
     * Méthode permettant l'enregistrement de la ville de l'utilisateur
     * @return boolean
     */
    public function getCity() {
        $query = 'INSERT INTO `iNZ25_city` (`name`, `zipcod`, `idDepartement`)'
                . 'VALUES (:name, :zipcod, :idDepartement)';
        $result = $this->db->prepare($query);
        $result->bindValue(':name', $this->name, PDO::PARAM_STR);
        $result->bindValue(':zipcod', $this->name, PDO::PARAM_STR);
        $result->bindValue(':idDepartement', $this->name, PDO::PARAM_STR);
        return $result->execute();
    }
}
