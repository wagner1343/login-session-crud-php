<?php 
    include("DB.php");

	class UsuarioDAO {
        var $db;

        function __construct($db){
            $this->db = $db;
        }

        function inserir($u){
            $this->db->open();
            $this->db->exec("INSERT INTO usuarios (nome, email, telefone, idade, usuario, senha)"
            ." VALUES(".$u->nome.",".$u->email.",".$u->telefone.",".$u->idade.",".$u->usuario.",".$u->senha.")");
        }

        function atualizar($u){
            $this->db->open();
            $this->db->exec("UPDATE usuarios set nome = ".$u->nome.", email = ".$u->email.", telefone = ".$u->telefone.", idade = ".$u->idade.", senha = ".$u->senha
            ." WHERE usuario = ".$u->usuario);
        }

        function excluir($u){
            $this->db->open();
            $this->db->exec("DELETE FROM usuarios WHERE usuario = ".$u->usuario);
        }

        function encontrar($usuario){
            $this->db->open();
            $this->db->query("SELECT * FROM usuarios WHERE usuario = ".$usuario);
        }

	}
?>