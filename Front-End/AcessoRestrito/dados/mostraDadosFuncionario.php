<?php

    require_once "../../../sql/conexaoMysql.php";
    require_once "../../../sql/autenticacao.php";

    session_start();
    $pdo = mysqlConnect();
    exitWhenNotLogged($pdo);

    try {
        $sql = <<<SQL
        SELECT nome, sexo, email, telefone, cep, dataContrato, salario
        FROM pessoa_Trab INNER JOIN funcionario_Trab ON pessoa_Trab.codigo = funcionario_Trab.codigo
        SQL;

        $stmt = $pdo->query($sql);
    } 
    catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
?>


<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funcionarios</title>
  <link rel="stylesheet" href="../../../style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

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
        <img src="../../../images/sanctum.png" alt="CLINICA SANCTUM SANCTORUM" width="220" height="120" >
        
     </header>
     <nav>
          <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link active" href="../../index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link active" href="../homeUsuario.php">Home Usuário</a></li>
              <li class="nav-item"><a class="nav-link active" href="#">Cadastro de Funcionário</a></li>
              <li class="nav-item"><a class="nav-link active" href="#">Cadastro de Paciente</a></li>
              <li class="nav-item"><a class="nav-link active" href="mostraDadosFuncionario.php">Listar Funcionários</a></li>
              <li class="nav-item"><a class="nav-link active" href="mostraDadosPaciente.php">Listar Pacientes</a></li>
              <li class="nav-item"><a class="nav-link active" href="mostraDadosEndereco.php">Listar Endereços</a></li>
              <li class="nav-item"><a class="nav-link active" href="mostraDadosConsulta.php">Listar Agendamentos</a></li>
              <li class="nav-item"><a class="nav-link active" href="../../../Back-End/logout.php">Logout</a></li>
          </ul>
      </nav>
      <main>

          <h3>Funcionarios Cadastrados</h3>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Nome</th>
                  <th>Sexo</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>CEP</th>
                  <th>Data Contrato</th>
                  <th>Salário</th>
              </tr>
    
    <?php
      while ($row = $stmt->fetch()) {

        $nome = htmlspecialchars($row['nome']);
        $sexo = htmlspecialchars($row['sexo']);
        $email = htmlspecialchars($row['email']);
        $telefone = htmlspecialchars($row['telefone']);
        $cep = htmlspecialchars($row['cep']);
        $dataContrato = htmlspecialchars($row['dataContrato']);
        $salario = htmlspecialchars($row['salario']);

        echo <<<HTML
          <tr>
            <td>$nome</td> 
            <td>$sexo</td>
            <td>$email</td>
            <td>$telefone</td>
            <td>$cep</td>
            <td>$dataContrato</td>
            <td>$salario</td>
          </tr>      
        HTML;

      }
      ?>

    </table>
    </main>
  </div>

</body>

</html>