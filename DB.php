<?php
    class DB  extends SQLite3 {
        var $CAMINHO_DB = "./db.db";
        
        function __construct()
        {
            parent::__construct($this->CAMINHO_DB);
            parent::enableExceptions(true);
        }
    }
?>