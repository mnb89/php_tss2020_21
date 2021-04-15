<?php



class UserModel {

    private $pdo;


    public function __construct() {
        try {
            $this->pdo = new PDO ('mysql:dbname=corso_formarete;host=localhost','root','');
        } catch (\PDOException $th) {
            echo $th->getMessage();
        }
    }


    //CRUD
    public function create(User $user){
        try {
            $pdostm = $this->pdo->prepare('insert into user (firstName,lastName,email,birthday) values (:firstName,:lastName,:email,:birthday);');
            
            $pdostm->bindValue(':firstName',$user->getFirstName());
            $pdostm->bindValue(':lastName',$user->getLastName());
            $pdostm->bindValue(':email',$user->getEmail());
            $pdostm->bindValue(':birthday',$user->getBirthday());

            $pdostm->execute();

        } catch (\PDOException $th) {
            echo $th->getMessage();
        }

        
    }

    //public function add(){}

    public function read(){}
    
    public function update(){}

    public function delete(){}











}