<?php
    include 'bd2.php';
    session_start();

    $nome = $_POST["nome"];
    $ident = $_POST["cpf_crm"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $tipo = $_POST["tipo"];
    $espec = $_POST["especialidade"];
   
    
    $err = $DB->cadastra($tipo, $ident, $nome, $sexo, $email, $senha, $endereco, $espec, $telefone);
    if ($err == true){
        // echo "<script> alert (\"Usuário Cadastrado\") </script>";
        header ('Location: cadastro.php');
    }
?>