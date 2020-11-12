<?php
    include 'bd2.php';
    session_start();

    $p_cpf = $_POST["cpf"];
    $l_nome = "laboratorio";
    $exame = $_POST["check"];
    $l_cnpj = $_POST["cnpj"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $resultado = $_POST["result"];

    $err = $DB->novo_exame($p_cpf, $l_nome, $exame, $l_cnpj, $data, $hora, $resultado);
    if ($err == true){
         header ('Location: laboratorio.php');
    }
?>