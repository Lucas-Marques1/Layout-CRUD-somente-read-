<?php

class Assunto {

    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=teste-sa365;host=localhost", "root", "");
    }

    public function readAssunto(){
        $sql = "SELECT * FROM assunto";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }
}