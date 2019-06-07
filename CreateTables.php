<?php
    include('DB.php');

    class CreateTables {
        static $sql = "CREATE TABLE usuarios (nome VARCHAR(50) , email VARCHAR(50), telefone VARCHAR(50), idade INT, usuario VARCHAR(50) PRIMARY KEY, senha VARCHAR(50))";
        function run(){
            $db = new DB();
            $db.open();
            $db.exec($this->sql);
        }
    }
?>