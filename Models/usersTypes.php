
<?php


class usersTypes extends database {

    public $id = 0;
    public $name = '';
   
    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }


    /**
     * Méthode permettant l'enregistrement du type  l'utilisateur
     * @return boolean
     */
    public function getUsersTypes() {
        $query = 'INSERT INTO `iNZ25_usersTypes` (`name`) '
                . 'VALUES (:name)';
        $result = $this->db->prepare($query);
        $result->bindValue(':name', $this->name, PDO::PARAM_STR);
        return $result->execute();
    }
}
