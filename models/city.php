
<?php

class city extends database {

    public $id = '';
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
    public function getCityByZipCode() {
        $queryResult = array();
        $query = 'SELECT `id`, `cityName`, `zipCode` FROM `iNZ25_city` '
                . 'WHERE `zipCode` LIKE :zipCode '
                . 'ORDER BY `cityName` ASC';
        $result = $this->db->prepare($query);
        $result->bindValue(':zipCode', $this->zipcode . '%', PDO::PARAM_STR);
        if ($result->execute()) {
            $queryResult = $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            $queryResult = false;
        }
        return $queryResult;
    }

}
