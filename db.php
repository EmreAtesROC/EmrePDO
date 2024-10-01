<?php

class Database {

    public $pdo;

    public function __construct($host = "localhost", $db = 'register', $user = 'root', $pass = '') {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        } catch(PDOException $e) {
            echo $e;
        }
    }
    
    public function insertProduct($productNaam, $prijs) {
    
        $sql = "INSERT INTO product (productNaam, prijs) VALUES (?,?)";
        $result = $this->pdo->prepare($sql);
        $placeholders = array($productNaam, $prijs);
        $result->execute($placeholders);
    }

    public function registerUser($email, $password) {

            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO gebruikers (email, password) VALUES (?,?)";
            $result = $this->pdo->prepare($sql);
            $placeholders = array($email, $hashedPassword);
            $result->execute($placeholders);
    }    

    public function loginUser($email) {
        
        $sql = $this->pdo->prepare("SELECT * FROM gebruikers where email = ?");
        $sql->execute([$email]);
        $result = $sql->fetch();
        return $result;
    }    

    public function selectProduct() {
        
        $sql = $this->pdo->query("SELECT * FROM product");
        $result = $sql->fetchAll();
        return $result;
    }    

}

?>