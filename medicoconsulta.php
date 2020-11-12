<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>offMED - Home</title>

		<!-- Bootstrap -->
		<link href="bootstrap4/css/bootstrap.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

		<link rel= "icon" href="imagens/logo.png">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	<div class="row">
        <div class="col-md-12">
            <header class= "capa">
                offMED - Consultas e Exames
            </header>
        </div>
    </div>
	<div class= "container">
        <div style="background-color: #eee; padding-bottom: 3%;">
        <h1 class = "align-middle">Consultas Realizadas</h1>
			<table class="table table-hover">
				<thead>
					<tr>
                        <th scope='col'>#</th>
						<th scope='col'>Nome</th>
						<th scope='col'>CPF</th>
						<th scope='col'>Especialização</th>
                        <th scope='col'>Data</th>
                        <th scope='col'>Hora</th>
						<th scope='col'>Descrição</th>
						<th scope='col'>Prontuário</th>
					</tr>
				</thead>

                <?php
                    try{
                        $database = new PDO('mysql:host=localhost;dbname=offmed_db;charset=utf8mb4','root','root');
                        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $cpf = $_POST['cpf'];
                        $crm = $_POST['crm'];
                        //$spec = $_POST['espec'];

                        $sql = "SELECT id, paciente, cpf, especialidade, dat, hora, descricao, prontuario FROM consultas WHERE cpf = $cpf and crm = $crm ORDER BY paciente DESC";
                
                        $result = $database->query($sql);
                        // echo"<h1>Consultas Realizadas</h1>";
                        // echo"<table class = \"table\">";
                        echo "<thead class=\"thead-dark\">";
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        
                            echo"<tr>";
                                echo "<th scope='col'>{$row['id']}</th>";
                                echo "<th scope='col'>{$row['paciente']}</th>";
                                echo "<th scope='col'>{$row['cpf']}</th>";
                                echo "<th scope='col'>{$row['especialidade']}</th>";
                                echo "<th scope='col'>{$row['dat']}</th>";
                                echo "<th scope='col'>{$row['hora']}</th>";
                                echo "<th scope='col'>{$row['descricao']}</th>";
                                echo "<th scope='col'>{$row['prontuario']}</th>";
                            echo"</tr>";
                        };
                        // echo"</table>";
                            
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }
?>
				</table>
			</div>
		</div>
</body>
</html>
