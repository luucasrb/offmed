<?php
    $DB = new DB;
    $database = $DB::_conectaDB();

    # Classe database
    class DB{
        ### Atributos.   
        public static $database;
        public static $e;

        ### Construtor.
        public static function _conectaDB(){
            try{
                self::$database = new PDO('mysql:host=localhost;dbname=offmed_db;charset=utf8mb4','root','root');
                self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $e = self::$e;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return self::$database;
        }
        
        ### Metodos.
        ##  Verificacoes do sistema.
        #   Verifica se existe o medico cadastrado.
        public function verifica_medico($crm){
            $query = self::$database->prepare("SELECT nome FROM medicos WHERE crm = ?");
            $query->bindParam(1, $crm);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_OBJ);
        
            if ($row==null){
                // Não existe no cadastro.
                return false;
            } else {
                // Existe no cadastro
                return true;
            }         
        } 

        #   Verifica se existe o paciente cadastrado.
        public function verifica_paciente($cpf){
            $query = self::$database->prepare("SELECT nome FROM pacientes WHERE cpf = ?");
            $query->bindParam(1, $cpf);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_OBJ);
            
            if ($row==null){
                //echo"null";
                return null;
            } else {
                //echo "verifica";
                return $row->nome;

            }  
        } 

        public function verifica_funcionario($cpf){
            $query = self::$database->prepare("SELECT nome FROM funcionarios WHERE cpf = ?");
            $query->bindParam(1, $cpf);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_OBJ);
            
            if ($row==null){
                //echo"null";
                return null;
            } else {
                //echo "verifica";
                return $row->nome;

            }  
        } 

        public function verifica_laboratorio($cnpj){
            $query = self::$database->prepare("SELECT nome FROM laboratorios WHERE cnpj = ?");
            $query->bindParam(1, $cnpj);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_OBJ);
            
            if ($row==null){
                //echo"null";
                return null;
            } else {
                //echo "verifica";
                return $row->nome;

            }  
        }

        public function verifica_adm($cpf){
            $query = self::$database->prepare("SELECT nome FROM adms WHERE cpf = ?");
            $query->bindParam(1, $cpf);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_OBJ);
            
            if ($row==null){
                //echo"null";
                return null;
            } else {
                //echo "verifica";
                return $row->nome;

            }  
        } 

        ###> CADASTRAMENTO GERAL DOS AGENTES DO SISTEMA <###
        public function cadastra($tipo, $ident, $nome, $sexo, $email, $senha, $endereco, $especialidade, $telefone){
            if($tipo == "m") {
                if ($this->verifica_medico($ident) == null){
                    $query = self::$database->prepare("INSERT INTO medicos (id,crm,nome,sexo,email,senha,endereco,especialidade,telefone) VALUES (:id, :crm, :nome, :sexo, :email, :senha, :endereco, :especialidade, :telefone)");
                    $query->execute(array(":id" => null, ":crm" => $ident, ":nome" => $nome, ":sexo" => $sexo, ":senha" => $senha, ":email" => $email, ":endereco" => $endereco, ":especialidade" => $especialidade, ":telefone" => $telefone));
                    // echo("CADASTRADO M REALIZADO");
                    return true; // CADASTRADO
                }
                else{
                    // echo("USUARIO M JÁ EXISTE");
                    return false; // USUARIO JA EXISTE
                }
            } elseif ($tipo == "p") {
                if ($this->verifica_paciente($ident) == null){
                    $query = self::$database->prepare("INSERT INTO pacientes (id,cpf,nome,sexo,email,senha,endereco,telefone) VALUES (:id, :cpf, :nome, :sexo, :email, :senha, :endereco, :telefone)");
                    $query->execute(array(":id" => null, ":cpf" => $ident, ":nome" => $nome, ":sexo" => $sexo, ":senha" => $senha, ":email" => $email, ":endereco" => $endereco, ":telefone" => $telefone));
                    echo("CADASTRADO P REALIZADO");
                    return true; // CADASTRADO
                }
                else{
                    // echo("USUARIO P JÁ EXISTE");
                    return false; // USUARIO JA EXISTE
                }
            } elseif ($tipo == "f") {
                if ($this->verifica_funcionario($ident) == null){
                    $query = self::$database->prepare("INSERT INTO funcionarios (id,cpf,nome,sexo,email,senha,endereco,telefone) VALUES (:id, :cpf, :nome, :sexo, :email, :senha, :endereco, :telefone)");
                    $query->execute(array(":id" => null, ":cpf" => $ident, ":nome" => $nome, ":sexo" => $sexo, ":senha" => $senha, ":email" => $email, ":endereco" => $endereco, ":telefone" => $telefone));
                    // echo("CADASTRADO F REALIZADO");
                    return true; // CADASTRADO
                }
                else{
                    // echo("USUARIO F JÁ EXISTE");
                    return false; // USUARIO JA EXISTE
                }
            } elseif ($tipo == "l") {
                if ($this->verifica_laboratorio($ident) == null){
                    $query = self::$database->prepare("INSERT INTO laboratorios (id,cnpj,nome,email,senha,endereco, especialidade, telefone) VALUES (:id, :cnpj, :nome, :email, :senha, :endereco, :especialidade, :telefone)");
                    $query->execute(array(":id" => null, ":cnpj" => $ident, ":nome" => $nome, ":especialidade" => $especialidade, ":senha" => $senha, ":email" => $email, ":endereco" => $endereco, ":telefone" => $telefone));
                    // echo("CADASTRADO L REALIZADO");
                    return true; // CADASTRADO
                }
                else{
                    // echo("USUARIO L JÁ EXISTE");
                    return false; // USUARIO JA EXISTE
                }
            } else {
                return false;
            }
            
        } 


        public function cadastra_adm($cpf, $nome, $email, $senha, $endereco, $telefone) {
            if ($this->verifica_adm($cpf) == null){
                $query = self::$database->prepare("INSERT INTO adms (id,cpf,nome,email,senha,endereco,telefone) VALUES (:id, :cpf, :nome, :email, :senha, :endereco, :telefone)");
                $query->execute(array(":id" => null, ":cpf" => $cpf, ":nome" => $nome, ":senha" => $senha, ":email" => $email, ":endereco" => $endereco, ":telefone" => $telefone));
                // echo("CADASTRADO A REALIZADO");
                return true; // CADASTRADO
            }
            else{
                echo("USUARIO A JÁ EXISTE");
                return false; // USUARIO JA EXISTE
            }
        }

        public function verifica_consulta($cpf, $crm, $data, $hora) {
            $query  = self::$database->prepare("SELECT * FROM consultas WHERE cpf = :cpf and dat = :dat and hora = :hora");
            $query2 = self::$database->prepare("SELECT * FROM consultas WHERE crm = :crm and dat = :dat and hora = :hora");
            $query->bindParam(':cpf', $cpf, PDO::PARAM_STR);
            $query->bindParam(':dat', $data, PDO::PARAM_STR);
            $query->bindParam(':hora',$hora, PDO::PARAM_STR);

            $query2->bindParam(':crm', $crm, PDO::PARAM_STR);
            $query2->bindParam(':dat', $data, PDO::PARAM_STR);
            $query2->bindParam(':hora',$hora, PDO::PARAM_STR);
            // echo "aki 1";
            $query ->execute();
            $query2->execute();
            // echo "aki 2";
            $row  = $query ->fetch(PDO::FETCH_OBJ);
            $row2 = $query2->fetch(PDO::FETCH_OBJ);
            // echo "aki 3";
            if ($row==null && $row2==null){
                //echo"não tem conflito";
                return null;
            } else {
                //echo "tem conflito";
                return $row->nome;

            } 
        }


        ###> CRIACAO DE REGISTROS <###
        public function nova_consulta($p_nome, $p_cpf, $m_nome, $m_crm, $espec, $data, $hora, $desc, $prontuario) {
            if ($this->verifica_consulta($p_cpf, $m_crm, $data, $hora) == null){
                $query = self::$database->prepare("INSERT INTO consultas (id,paciente,cpf,medico,crm,especialidade,dat,hora,descricao,prontuario) VALUES (:id, :paciente, :cpf, :medico, :crm, :especialidade, :dat, :hora, :descricao, :prontuario)");
                $query->execute(
                    array(
                        ":id" => null, ":paciente" => $p_nome, 
                        ":cpf" => $p_cpf, ":medico" => $m_nome, 
                        ":crm" => $m_crm, ":especialidade" => $espec, 
                        ":dat" => $data, ":hora" => $hora, 
                        ":descricao" => $desc, ":prontuario" => $prontuario));
                // echo("CONSULTA OK");
                return true; // CADASTRADO
            }
            else{
                // echo("ERRO NA CONSULTA");
                return false; // USUARIO JA EXISTE
            }
        }

        public function verifica_exame($cpf, $cnpj, $data, $hora) {
            $query  = self::$database->prepare("SELECT * FROM exames WHERE cpf = :cpf and dat = :dat and hora = :hora");
            $query2 = self::$database->prepare("SELECT * FROM exames WHERE cnpj = :cnpj and dat = :dat and hora = :hora");
            $query->bindParam(':cpf', $cpf, PDO::PARAM_STR);
            $query->bindParam(':dat', $data, PDO::PARAM_STR);
            $query->bindParam(':hora',$hora, PDO::PARAM_STR);

            $query2->bindParam(':cnpj', $cnpj, PDO::PARAM_STR);
            $query2->bindParam(':dat', $data, PDO::PARAM_STR);
            $query2->bindParam(':hora',$hora, PDO::PARAM_STR);
            // echo "aki 1";
            $query ->execute();
            $query2->execute();
            // echo "aki 2";
            $row  = $query ->fetch(PDO::FETCH_OBJ);
            $row2 = $query2->fetch(PDO::FETCH_OBJ);
            // echo "aki 3";
            if ($row==null && $row2==null){
                //echo"não tem conflito";
                return null;
            } else {
                //echo "tem conflito";
                return $row->nome;

            } 
        }

        public function novo_exame($p_cpf, $l_nome, $exame, $l_cnpj, $data, $hora, $resultado) {
            if ($this->verifica_exame($p_cpf, $l_cnpj, $data, $hora) == null){
                $query = self::$database->prepare("INSERT INTO exames (id,cpf,laboratorio,exame,cnpj,dat,hora,resultado) VALUES (:id, :cpf, :laboratorio, :exame, :cnpj, :dat, :hora, :resultado)");
                $query->execute(
                    array(
                        ":id" => null, 
                        ":cpf" => $p_cpf, ":laboratorio" => $l_nome,
                        ":exame" => $exame, 
                        ":cnpj" => $l_cnpj, ":dat" => $data, 
                        ":hora" => $hora, ":resultado" => $resultado));
                return true; 
            }
            else{
                return false;
            }
        }

        ### Metudo de login ###
        public function login($tipo, $ident, $key) {
            if ($tipo == "m") {
                $query = self::$database->prepare("SELECT senha FROM medicos WHERE crm = ?");
                $query->bindParam(1, $ident);
                $query->execute();
                $obj = $query->fetch(PDO::FETCH_OBJ);
                if ($obj->senha == $key) {
                    return true;
                } else {
                    return false;
                }
            } elseif ($tipo == "p") {
                $query = self::$database->prepare("SELECT senha FROM pacientes WHERE cpf = ?");
                $query->bindParam(1, $ident);
                $query->execute();
                $obj = $query->fetch(PDO::FETCH_OBJ);
                if ($obj->senha == $key) {
                    return true;
                } else {
                    return false;
                }
            } elseif ($tipo == "l") {
                $query = self::$database->prepare("SELECT senha FROM laboratorios WHERE crm = ?");
                $query->bindParam(1, $ident);
                $query->execute();
                $obj = $query->fetch(PDO::FETCH_OBJ);
                if ($obj->senha == $key) {
                    return true;
                } else {
                    return false;
                }
            }
            elseif ($tipo == "admin") {
                $query = self::$database->prepare("SELECT senha FROM adms WHERE cpf = ?");
                $query->bindParam(1, $ident);
                $query->execute();
                $obj = $query->fetch(PDO::FETCH_OBJ);
                if ($obj->senha == $key) {
                    return true;
                } else {
                    return false;
                }
            }
        }

            
    }
?> 