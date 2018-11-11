<?php


class users extends database {

    public $id = '';
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
    public function userConnection() {
        $state = false;
        $query = 'SELECT `id`, `lastname`, `firstname`, `password` FROM `iNZ25_users` WHERE `login` = :login';
        $result = $this->db->prepare($query);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->lastname = $selectResult->lastname;
                $this->firstname = $selectResult->firstname;
                $this->password = $selectResult->password;
                $this->id = $selectResult->id;
                $state = true;
            }
        }
        return $state;
    }


    /**
     * Méthode permettant l'enregistrement d'un utilisateur
     * @return boolean
     */
    public function userRegister() {
        $query = 'INSERT INTO `iNZ25_users` (`lastname`, `firstname`, `birthdate`, `email`, `password`, `login`, `phoneNumber`, `address`, `idCity`, `idUsersTypes`) '
                . 'VALUES (:lastname, :firstname, :birthdate, :email, :password, :login, :phoneNumber, :address, :city, 1)';
        $result = $this->db->prepare($query);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
        $result->bindValue(':address', $this->address, PDO::PARAM_STR);
        $result->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':password', $this->password, PDO::PARAM_STR);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);
        
        return $result->execute();
    }
    
   public function checkIfUserExist(){
        $state = false;
        $query = 'SELECT COUNT(`id`) AS `count` FROM `iNZ25_users` WHERE `login` = :login';
        $result = $this->db->prepare($query);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);
        if ($result->execute()) {
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            $state = $selectResult->count;
        }
        return $state;
    }
}