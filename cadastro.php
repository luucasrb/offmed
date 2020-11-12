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
        
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="jumbotron" style="margin-bottom: 0px; padding: 1%;">
                            <h2 class="text-center">Painel do Administrador</h2>
                        </div>     
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cadastro">
                        <h3>Cadastre-se</h3>
                        <form method="post" action = "cadastro_pessoas.php">
                            <div class="form-group">
                                <label for ="nome" class="control-label">Nome Completo:</label>
                                <input type="text" class="form-control" name="nome" id="nome" maxlength="200" placeholder="Máximo 200 caractéres" required>
                            </div>
                            <div class="form-group">
                                <label for ="cpf_crm" class="control-label">Identificação (CRM ou CPF):</label>
                                <input type="text" class="form-control" name="cpf_crm" id="cpf_crm" placeholder="xxx.xxx.xxx-xx" required>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" value="feminino">Feminino
                                </label>
                                <label>
                                    <input type="radio" name="sexo" value="masculino">Masculino
                                </label>
                                <label>
                                    <input type="radio" name="sexo" value="outro">Outro
                                </label>
                            </div>
                            <div class="form-group">
                                <label for ="email" class="control-label">E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com" required>
                            </div>
                            <div class="form-group">
                                <label for ="senha" class="control-label">Senha:</label>
                                <input type="password" class="form-control" name="senha" id="senha" minlength="6" placeholder="Mínimo de 6 dígitos contendo letras e números" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco_pessoa" class="control-label">Endereço:</label>
                                <input type="text" name="endereco" class="form-control" id ="endereco_pessoa" maxlength="200" placeholder="Digite seu endereço">
                            </div>
                            <div class="form-group">
                                <label for ="telefone_pessoa" class="control-label">Telefone:</label>
                                    <input type="tel" name="telefone" class="form-control" id="telefone_pessoa" placeholder="xx xxxxx-xxxx">
                            </div>
                            
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipo" value="m" >Médico
                                </label>
                                <label>
                                    <input type="radio" name="tipo" value="p">Paciente
                                </label>
                                <label>
                                    <input type="radio" name="tipo" value="f" disabled >Funcionário
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="especialidade" class="control-label">Especialidade</label>
                                <input type="text" name="especialidade" class="form-control input-sm" id ="especialidade" maxlength="50" placeholder="(Opcional) Apenas para Cadastro de Médicos">
                            </div>
                            <input type="submit" class="btn btn-danger" value="Cadastrar">
                        </form>
                    </div>
                </div>
                <div class= "col-md-6">
                    <div class="lab_cadastro">
                        <h3>Cadastre seu Laboratório</h3>
                        <form method="post" action = "cadastro_laboratorio.php">
                            <div class="form-group">
                                <label for ="lab" class="control-label">Laboratório:</label>
                                <input type="text" class="form-control" id="lab" maxlength="200" placeholder="Máximo 200 caractéres" name="nome">
                            </div>
                            <div class="form-group">
                                <label for ="cnpj" class="control-label">CNPJ:</label>
                                <input type="text" class="form-control" id="cnpj" placeholder="xx.xxx.xxx/xxxxx-xx" name="cnpj">
                            </div>
                            <div class="form-group">
                                <label for ="email_lab" class="control-label">E-mail:</label>
                                <input type="email" class="form-control" id="email_lab" placeholder="email@email.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for ="senha_lab" class="control-label">Senha:</label>
                                <input type="password" class="form-control" id="senha_lab" minlength="6" placeholder="Mínimo de 6 dígitos contendo letras e números" name="senha">
                            </div>
                            <div class="form-group">
                                <label for="endereco_pessoa" class="control-label">Endereço:</label>
                                <input type="text" name="endereco" class="form-control" id ="endereco_pessoa" maxlength="200" placeholder="Digite seu endereço">
                            </div>
                            <div class="form-group">
                                <label for ="telefone_pessoa" class="control-label">Telefone:</label>
                                <input type="tel" name="telefone" class="form-control" id="telefone_pessoa" placeholder="xxxxx-xxxx">
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" class="radio" name="tipo" value="Toxicologia" checked>Toxicologia
                                </label>
                                <label>
                                    <input type="radio" class="radio" name="tipo" value="Parasitologia">Parasitologia
                                </label>
                                <label>
                                    <input type="radio" class="radio" name="tipo" value="Microbiologia" disabled>Microbiologia
                                </label>
                            </div>
                            <input type="submit" class="btn btn-success" value="Cadastrar Laboratório">
                            <!-- <button type="submit" class="btn btn-info">Esqueci a Senha</button> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-12 text-center">
                    <h2>Mais Informações:</h2> 
                </div>
                <div class= "col-md-4"> </div>

                <div class= "col-md-5">

                    <button type="submit" class="btn btn-dark">Pacientes</button>
                    <button type="submit" class="btn btn-light">Médicos</button>
                    <button type="submit" class="btn btn-dark">Exames</button>
                    <button type="submit" class="btn btn-light">Consultas</button>
                </div> 
                <div class= "col-md-3"> </div>
            </div>
            <br>
            <div class= "row">
                <div class = "col-md-12 text-center">
                    <h4>Pacientes:</h4>
                    <h4>Médicos:</h4>
                    <h4>Exames:</h4>
                    <h4>Consultas:</h4>
                </div>
            </div>
        </div>
        <hr>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>