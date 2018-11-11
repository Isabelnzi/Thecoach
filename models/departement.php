
<?php


class departement extends database {

    public $id = 0;
    public $name = '';
   
    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }


    /**
     * Méthode permettant l'enregistrement de la ville de l'
     * @return boolean
     */
    public function getDepartement() {
        $query = 'INSERT INTO `iNZ25_departement` (`name`, `number`)'
                . 'VALUES (:name, :)';
        $result = $this->db->prepare($query);
        $result->bindValue(':name', $this->name, PDO::PARAM_STR);
        $result->bindValue(':number', $this->name, PDO::PARAM_STR);
        return $result->execute();
    }
}
