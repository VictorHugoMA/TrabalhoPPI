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
    <title>Home Usuário</title>
    <link rel="stylesheet" href="../../style/style.css">
    <style>
        body{
            background-color: #283039;
        }
        main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            background-color: #EFF3F6;
            padding: 1%;
            border-radius: 5px;
        }
        main h2{
            text-align: center;
        }
    </style>
</head>
<body>
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
        <h2>Login efetudado</h2>
        <p>Bem vindo ao site, esta é sua area de usuario sit amet consectetur adipisicing elit. Quos qui debitis ab reiciendis eos, a quisquam natus quam recusandae rem voluptatem, ad fugiat. Alias voluptatibus cum fuga labore, odio autem.</p>   
        <p>Com essas opções ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis iusto voluptates, expedita rerum voluptate nam harum veniam debitis odio ex quo recusandae ullam doloremque reiciendis. Cupiditate rerum sint nemo enim</p>
    </main>
</body>
</html>