<?php
include 'bd2.php';

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location: login.html');
    die;
} else {
    $logado = $_SESSION['login'];
    // echo "Bem-vindo $logado";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>

    </head>

   
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-light h1 mb-0">OffMED</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="index.html">início<a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="paciente.php"> paciente </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="medico.php"> medico </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="laboratorio.php"> laboratorio </a>
                        </li>
                        <a class="dropdown-divider mb-0" role="separator"> </a>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="cadastro.php"> cadastre-se </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class = "nav-link" href="login.html"> entrar </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 

        <div class="row">
            <div class="col-md-12">
                <header class= "capa">
                    offMED - Consultas e Exames
                </header>
            </div>
        </div>

        <div class="m-0 text-center bg-transparent">
            <img class="m-2 rounded" style="width:38%;" src="imagens/paciente.jpg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="jumbotron" style="margin-bottom: 0px; padding: 1%">
                            <h2 class="text-center">Painel do Paciente</h2>
                        </div>     
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 5px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Consultas Realizadas:</h3> 
                            <form action="pacienteconsulta.php" method="post" id="my_form"> 
                                <div class="form-group">
                                    <label for ="cpf" class="control-label">Confirme seu CPF:</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="xx.xxx.xxx-xx" name="cpf">
                                    <label for ="esp" class="control-label">Especialização Desejada:</label>
                                    <select class="form-control" name="esp">
                                        <option value="Cardiologista">Cardiologista</option>
                                        <option value="Psiquiatria">Psiquiatria</option>
                                        <option value="Ginecologista">Ginecologista</option>
                                        <option value="Urologista">Urologista</option>
                                        <option value="Endocrinologista">Endocrinologista</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary btn-black" value = "Mostrar" onclick = "pacienteconsulta();">
                            </form>
                        </div>       
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 5px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Exames Realizados:</h3> 
                            <form action="exames_realizados.php" method="post" id="my_form"> 
                                <div class="form-group">
                                    <label for ="cpf" class="control-label">Confirme seu CPF:</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="xx.xxx.xxx-xx" name="cpf">
                                </div>
                                <input type="submit" class="btn btn-primary btn-black" value = "Mostrar">
                            </form>
                        </div>       
                    </div>
                </div>
                
            </div>
        </div>

        <hr>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>