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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        body{
            background-color: #283039;
            padding-top: 0;
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
        .navbar-nav > li{
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
   <!--  <header>
        <img src="../../images/sanctum.png" alt="CLINICA SANCTUM SANCTORUM" width="220" height="120" >
        
     </header>
     <nav>
          <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link active" href="../index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link active" href="homeUsuario.php">Home Usuário</a></li>
              <li class="nav-item"><a class="nav-link active" href="formCadastroFuncionario.php">Cadastro de Funcionário</a></li>
              <li class="nav-item"><a class="nav-link active" href="formCadastroPaciente.php">Cadastro de Paciente</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosFuncionario.php">Listar Funcionários</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosPaciente.php">Listar Pacientes</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosEndereco.php">Listar Endereços</a></li>
              <li class="nav-item"><a class="nav-link active" href="dados/mostraDadosConsulta.php">Listar Agendamentos</a></li>
              <li class="nav-item"><a class="nav-link active" href="../../Back-End/logout.php">Logout</a></li>
          </ul>
      </nav> -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  ">
        <a class="nav-link active col-1" href="../index.html">
            <img src="../../images/sanctum.png" alt="CLINICA SANCTUM SANCTORUM" height="80">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="homeUsuario.php">Home Usuário</a></li>
                <li class="nav-item"><a class="nav-link" href="formCadastroFuncionario.php">Cadastro de Funcionário</a></li>
                <li class="nav-item"><a class="nav-link" href="formCadastroPaciente.php">Cadastro de Paciente</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosFuncionario.php">Listar Funcionários</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosPaciente.php">Listar Pacientes</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosEndereco.php">Listar Endereços</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosConsulta.php">Listar Agendamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="../../Back-End/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <h2>Login efetudado</h2>
        <p>Bem vindo ao site, esta é sua area de usuario sit amet consectetur adipisicing elit. Quos qui debitis ab reiciendis eos, a quisquam natus quam recusandae rem voluptatem, ad fugiat. Alias voluptatibus cum fuga labore, odio autem.</p>   
        <p>Com essas opções ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis iusto voluptates, expedita rerum voluptate nam harum veniam debitis odio ex quo recusandae ullam doloremque reiciendis. Cupiditate rerum sint nemo enim</p>
    </main>
</body>
</html>