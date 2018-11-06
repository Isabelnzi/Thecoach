<?php


class users extends database {

    public $id = 0;
    public $login = '';
    public $password = '';
    public $lastname = '';
    public $firstname = '';
    public $birthdate = '';
    public $email = '';
    public $phoneNumber = '';
    public $address = '';
    public $idCity = '';
    public $idUserTypes = '';

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
   
    }


    /**
     * Méthode permettant l'enregistrement d'un utilisateur
     * @return boolean
     */
    public function userRegister() {
        $query = 'INSERT INTO `iNZ25_users` (`lastname`, `firstname`, `birthdate`, `email`, `password`, `login` `phoneNumber`, `address, `idCity`, `idUsersTypes`) '
                . 'VALUES (:lastname, :firstname, :birthdate, :email, :password, :login :phoneNumber, :address, :idCity, 1)';
        $result = $this->db->prepare($query);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
        $result->bindValue(':address', $this->address, PDO::PARAM_STR);
        $result->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $result->bindValue(':idCity', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':password', $this->password, PDO::PARAM_STR);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);
        return $result->execute();
    }
}
