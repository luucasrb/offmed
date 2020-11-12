<?php
    include 'bd2.php';
    session_start();

    $p_nome = $_POST["nome"];
    $p_cpf = $_POST["cpf"];
    $m_crm = $_POST["crm"];
    $espec = $_POST["esp"];
    $m_nome = "";

    $data = $_POST["data"];
    $hora = $_POST["hora"];

    $desc = $_POST["desc"];
    $prontuario = $_POST["pront"];

    $err = $DB->nova_consulta($p_nome, $p_cpf, $m_nome, $m_crm, $espec, $data, $hora, $desc, $prontuario);
    if ($err == true){
         header ('Location: medico.php');
    }
?>