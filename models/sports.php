
<?php

class sports extends database {

    public $id = '';
    public $sportName = '';
  

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

   public function getSports() {
        $result = array();
        $PDOResult = $this->db->query('SELECT `id`, `sportName` FROM `iNZ25_sports`');
        if (is_object($PDOResult)) {
            $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
}