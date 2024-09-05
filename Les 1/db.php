<?php

class Database {

    public $pdo;

    public function __construct($host = "localhost", $db = 'test', $user = 'root', $pass = '') {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        } catch(PDOException $e) {
            echo $e;
        }

    }
}
?>
