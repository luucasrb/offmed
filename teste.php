<?php
include_once 'bd2.php'; 


//Teste de cadastro de medico
// $tipo     = "l";
// $ident    = "55erterte55";
// $nome     = "Cleiton M";
// $sexo     = "M";
// $email    = "teste@gmail.com";
// $senha    = "123";
// $endereco = "rua agua 125";
// $espec    = "clinico geral";
// $tel      = "53 981434244";

// $err = $DB->cadastra($tipo, $ident, $nome, $sexo, $email, $senha, $endereco, $espec, $tel);
//     if($err == true) {
//         echo "Deu bom";
//     } else {
//         echo "deu ruim";
//     }

// $err = $DB->cadastra_adm($ident, $nome, $email, $senha, $endereco, $tel);
// if($err == true) {
//     echo "Deu bom";
// } else {
//     echo "deu ruim";
// }

$cpf      = "559595";
$nome     = "Cleiton M";
$crm      = "65454654";
$medico   = "lucas";
$data     = "23/09/2019";
$espec    = "clinico geral";
$hora     = "15h30";
$desc     = "rotina";
$pront    = "tudo certo";

$err = $DB->nova_consulta($nome, $cpf, $medico, $crm, $espec, $data, $hora, $desc, $pront);
if($err == true) {
    echo "Deu bom";
} else {
    echo "deu ruim";
}


?>