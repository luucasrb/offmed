
<?php
    include 'bd2.php';
    session_start();

    $tipo = $_POST["tipo"];
    $ident = $_POST["login"];
    $senha = $_POST["senha"];

    if ($ident == null or $senha == null){
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('Location: fail_login.php');
        die;
    }

    $err = $DB->login($tipo, $ident, $senha);
    if ($err == true) {
        // session_start();
        $_SESSION['login'] = $ident;
        $_SESSION['senha'] = $senha;
        if ($tipo == 'm'){
            $_SESSION['login'] = $ident;
            header('Location: medico.php');
            die;
        }
        elseif ($tipo == 'p'){
            header ('Location: paciente.php');
            die;
        }
        elseif ($tipo == 'l'){
            header ('Location: laboratorio.php');
            die;
        }
        elseif ($tipo == 'f'){
            header ('Location: funcionario.php');
            die;
        }
        elseif ($tipo == 'admin'){
            header ('Location: cadastro.php');
            die;
        }
        
    } else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('Location: fail_login.php');
        die;
    }
?>