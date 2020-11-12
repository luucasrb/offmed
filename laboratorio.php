<?php
include 'bd2.php';

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location: login.html');
    die;
} else {
    $cnpj = $_SESSION['login'];
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
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="jumbotron" style="margin-bottom: 0px; padding: 1%;">
                            <h2 class="text-center">Painel do Laboratório</h2>
                        </div>     
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="busca">
                        <h3>Novo Exame</h3>
                        <form method="POST" action = "novo_exame.php">
                            <div class="form-group">
                                <label for ="cpf" class="control-label">CPF:</label>
                                <input type="text" class="form-control" id="cpf" placeholder="xxx.xxx.xxx-xx" name="cpf">
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="check" value="Hemograma">Hemograma
                                </label>
                                <label>
                                    <input type="radio" name="check" value="Colesterol">Colesterol
                                </label>
                                <label>
                                    <input type="radio" name="check" value="Creatinina">Creatinina
                                </label>
                                <label>
                                        <input type="radio" name="check" value="Urina">Urina
                                </label>
                            </div>
                            <div class="form-group">
                                    <label for ="cnpj" class="control-label">CNPJ:</label>
                                    <input type="text" class="form-control" id="cnpj" placeholder="xxx.xxx.xxx-xx/xxxxx-xx" name="cnpj">
                                </div>
                            <div class="form-group">
                                <label for="data" class="control-label">Data:</label>
                                <input type="date" class="form-control" name="data" id="data" style="width: 40%">
                            </div>

                            <div class="form-group">
                                <label for="time" class="control-label">Hora do Exame:</label>
                                <input type="time" class="form-control" name="hora" id="time" style="width: 40%">
                            </div>
                            
                            <div class="form-group">
                                <label for="result" class="control-label">Resultado:</label>
                                <textarea id="result" name="result" maxlength="500" placeholder="Resultado do Exame..." class="form-control"></textarea>
                                <!-- <input type="text" name="result" class="form-control" id ="result" maxlength="200" placeholder="Resultado do Exame"> -->
                            </div>
                            <input type="submit" class="btn btn-success" value="Adicionar Exame"></button>
                            <!-- <button type="submit" class="btn btn-info">Esqueci a Senha</button> -->
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="m-2 text-center">
                        <img class="img-thumbnail rounded" style="width: 85%; height: auto" src="imagens/laboratorio.jpg">
                    </div>
                    <div class="busca">
                        <h3>Histórico do Paciente</h3>
                        <form method="POST" action = "historico_paciente.php">
                            <div class="form-group">
                                <label for ="cpf" class="control-label">CPF do Paciente:</label>
                                <input type="text" class="form-control" id="cpf" placeholder="xx.xxx.xxx-xx" name="cpf">
                                <label for ="cnpj" class="control-label">CNPJ do Laboratório:</label>
                                <input type="text" class="form-control" id="cnpj" placeholder="xx.xxx.xxx-xx" name="cnpj">
                            </div>
                            <input type="submit" class="btn btn-danger" value="Buscar"></button>
                            <!-- <button type="submit" class="btn btn-info">Esqueci a Senha</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>