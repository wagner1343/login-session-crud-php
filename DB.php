<?php
    class DB  extends SQLite3 {
        static $CAMINHO_DB = "./db.db";
        
        function __construct()
        {
            parent::__construct($this->CAMINHO_DB);
        }
    }
?>