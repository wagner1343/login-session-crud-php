<?php
    require('UsuarioDAO.php');
    require('Usuario.php');
    require('DB.php');

    function validar() {
        return isset($_POST["usuario"]) && isset($_POST["senha"]) && isset($_POST["nome"]);
    }
    if(!validar()){
        echo "Erro durante o cadastro, tente novamente";
        die();
    }
    
    $u = new Usuario();
    $dao = new UsuarioDAO(new DB());

    $u->usuario = $_POST["usuario"];
    $u->senha = isset($_POST["senha"]);
    $u->nome = isset($_POST["nome"]);
    
    $u->idade = "";
    $u->email = "";
    $u->telefone = "";

    if(isset($_POST["idade"]))
        $u->idade = $_POST["idade"];
    
    if(isset($_POST["email"]))
        $u->email = $_POST["email"];
    
    if(isset($_POST["telefone"]))
        $u->telefone = $_POST["telefone"];

    try{
        $dao->inserir($u);

        echo "Cadastro realizado com sucesso";
    } 
    catch (Exception $e){
        echo "Erro durante o cadastro: " . $e;
    }
    
?>
