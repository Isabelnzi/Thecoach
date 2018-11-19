    <?php

class users extends database {

//on déclare les attributs de la classe
    public $id = '';
    public $login = '';
    public $password = '';
    public $lastname = '';
    public $firstname = '';
    public $birthDate = '';
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
        $query = 'INSERT INTO `iNZ25_users` (`lastname`, `firstname`, `birthDate`, `email`, `password`, `login`, `phoneNumber`, `address`, `idCity`, `idUsersTypes`) '
                . 'VALUES (:lastname, :firstname, :birthDate, :email, :password, :login, :phoneNumber, :address, :city, 1)';
        $result = $this->db->prepare($query);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
        $result->bindValue(':address', $this->address, PDO::PARAM_STR);
        $result->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':password', $this->password, PDO::PARAM_STR);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);

        return $result->execute();
    }

    public function checkIfUserExist() {
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

    public function getProfilUserById() {
        $PDOResult = $this->db->prepare('SELECT `iNZ25_users`.`id`, `iNZ25_users`.`lastname`, `iNZ25_users`.`firstname`, `iNZ25_users`.`birthDate`, `iNZ25_users`.`phoneNumber`, `iNZ25_users`.`email`, `iNZ25_users`.`address`, `iNZ25_city`.`cityName`, `iNZ25_city`.`zipCode` '
                . 'FROM `iNZ25_users` '
                . 'INNER JOIN `iNZ25_city` '
                . 'ON `iNZ25_users`.`idCity` = `iNZ25_city`.`id` '
                . 'WHERE `iNZ25_users`.`id` = :id'); // :id marqueur nominatif car id est une inconnue
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

    public function updateUserProfil() {
        //méthode permettant la modification du profil de l'utilisateur

        $query = 'UPDATE `iNZ25_users` SET `lastname` = :lastname, `firstname` = :firstname, `phoneNumber` = :phoneNumber, `email` = :email, `address` = :address, `idCity` = :city WHERE `id` = :id';
        $modifyUser = $this->db->prepare($query);
        $modifyUser->bindvalue(':id', $this->id, PDO::PARAM_INT);
        $modifyUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $modifyUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $modifyUser->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $modifyUser->bindValue(':address', $this->address, PDO::PARAM_STR);
        $modifyUser->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $modifyUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $modifyUser->execute();
    }

    public function deleteUser() {
        $remove = $this->db->prepare('DELETE FROM `iNZ25_users` WHERE `id` =  :idUser ');
        $remove->bindValue(':idUser', $this->id, PDO::PARAM_INT);
        return $remove->execute();
    }

  public function coachRegister() {
        $query = 'INSERT INTO `iNZ25_users` (`lastname`, `firstname`, `birthDate`, `email`, `password`, `login`, `phoneNumber`, `address`, `idCity`, `idUsersTypes`) '
                . 'VALUES (:lastname, :firstname, :birthDate, :email, :password, :login, :phoneNumber, :address, :city, 2)';
        $result = $this->db->prepare($query);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
        $result->bindValue(':address', $this->address, PDO::PARAM_STR);
        $result->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $result->bindValue(':city', $this->idCity, PDO::PARAM_INT);
        $result->bindValue(':password', $this->password, PDO::PARAM_STR);
        $result->bindValue(':login', $this->login, PDO::PARAM_STR);

        return $result->execute();
    }
}