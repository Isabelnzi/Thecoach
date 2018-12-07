
<?php

class sports extends database {

    public $id = 0;
    public $sportName = '';
  

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }
/*
 * methode pour recuperer les sports dans un select
 */
   public function getSports() {
        $PDOResult = $this->db->query('SELECT `id`, `sportName` FROM `iNZ25_sports`');
        if (is_object($PDOResult)) {
            $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
}