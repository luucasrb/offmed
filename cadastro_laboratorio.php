<?php
    include 'bd2.php';
    session_start();

    $nome = $_POST["nome"];
    $ident = $_POST["cnpj"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $tipo = "l";
    $sexo = null;
    $espec = $_POST["tipo"];

    $err = $DB->cadastra($tipo, $ident, $nome, $sexo, $email, $senha, $endereco, $espec, $telefone);
    if ($err == true){
         header ('Location: cadastro.php');
    }
?>