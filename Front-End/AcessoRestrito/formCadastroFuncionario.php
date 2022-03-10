<?php

require_once "../../sql/conexaoMysql.php";
require_once "../../sql/autenticacao.php";

session_start();
$pdo = mysqlConnect();
exitWhenNotLogged($pdo);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo Funcionário</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            padding: 1rem;
            background-color: #283039;
        }
        main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            background-color: #EFF3F6;
            width: 50%;
            padding: 2%;
            border: 0.7px solid gray;
            border-radius: 10px;
            margin-top: 5%;
        }
        form button {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
    <header>
        <img src="../../images/sanctum.png" alt="CLINICA SANCTUM SANCTORUM" width="220" height="120" >
        
     </header>
     <nav>
          <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link active" href="../index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link active" href="homeUsuario.php">Home Usuário</a></li>
              <li class="nav-item"><a class="nav-link active" href="formCadastroFuncionario.php">Cadastro de Funcionário</a></li>
              <li class="nav-item"><a class="nav-link active" href="#">Cadastro de Paciente</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosFuncionario.php">Listar Funcionários</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosPaciente.php">Listar Pacientes</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosEndereco.php">Listar Endereços</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosConsulta.php">Listar Agendamentos</a></li>
              <li class="nav-item"><a class="nav-link active" href="../../Back-End/logout.php">Logout</a></li>
          </ul>
      </nav>
        <main>
            <h3>Cadastrar novo endereço</h3>
            <form action="../Back-End/cadastraEndereco.php" method="post">
                    
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="col-sm-4">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select name="sexo" id="sexo" class="form-select">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="telefone">Telefone</label>
                            <input class="form-control" type="tel" id="telefone" name="telefone">
                        </div>
                        
                            <div class="col-sm-5">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep">
                            </div>
                            <div class="col-sm-5">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro">
                            </div>
                        
                        
                            <div class="col-sm-4">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade">
                            </div>
                            <div class="col-sm-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select name="estado" id="estado" class="form-select">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                    <option value="DF">DF</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="dataContrato">dataContrato</label>
                                <input class="form-control" type="date" id="dataContrato" name="dataContrato">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="salario">Salario</label>
                                <input class="form-control" type="number" step=0.01 id="salario" name="salario">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="senha">Senha</label>
                                <input class="form-control" type="passoword" id="senha" name="senha">
                            </div>

                            
                                <div class="col-sm-6">
                                    <label class="form-label" for="especialidade">Especialidade</label>
                                    <input class="form-control" type="text" id="especialidade" name="especialidade">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="crm">CRM</label>
                                    <input class="form-control" type="number" id="crm" name="crm">
                                
                            </div>
                    
                    
                    <button class="btn btn-primary my-2">Cadastrar</button>

                </form>
        </main>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>