<?php
    include_once('DB.php');

    class CreateTables {
        
        
        function run(){
            $sql = "CREATE TABLE usuarios (nome VARCHAR(50) , email VARCHAR(50), telefone VARCHAR(50), idade INT, usuario VARCHAR(50) PRIMARY KEY, senha VARCHAR(50))";
            
            (new DB())->exec($sql);

        }
    }
?>