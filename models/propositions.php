
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
        $query = 'INSERT INTO `iNZ25_propositions` (`id`, `propositionName`, `sports`, `address`, `dateHour`, `idCity`, `idUsers`, `idSports`) '
                . 'VALUES (:id, :propositionName, :sports, :address, :dateHour, :city, :idUsers, :sportName)';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_STR);
        $result->bindValue(':propositionName', $this->propositionName, PDO::PARAM_STR);
        $result->bindValue(':sports', $this->sports, PDO::PARAM_STR);
        $result->bindValue(':address', $this->location, PDO::PARAM_STR);
        $result->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':idUsers', $this->idUsers, PDO::PARAM_INT);
        $result->bindValue(':sportName', $this->idSports, PDO::PARAM_INT);

        return $result->execute();
    }
}
