<?php

require_once "../../sql/conexaoMysql.php";
require_once "../../sql/autenticacao.php";

session_start();
$pdo = mysqlConnect();
exitWhenNotLogged($pdo);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style_restrita.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Home Usuário</title>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  ">
        <a class="nav-link active col-1" href="index.html">
            <img src="../images/sanctum.png" alt="CLINICA SANCTUM SANCTORUM" height="80">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="homeUsuario.php">Home Usuário</a></li>
                <li class="nav-item"><a class="nav-link" href="formCadastroFuncionario.php">Cadastro de Funcionário</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="formCadastroPaciente.php">Cadastro de Paciente</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosFuncionario.php">Listar Funcionários</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosPaciente.php">Listar Pacientes</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosEndereco.php">Listar Endereços</a></li>
                <li class="nav-item"><a class="nav-link" href="dados/mostraDadosConsulta.php">Listar Agendamentos</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="../../Back-End/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <h2>Login efetudado</h2>
        <p>Bem vindo ao site, esta é sua area de usuario sit amet consectetur adipisicing elit. Quos qui debitis ab reiciendis eos, a quisquam natus quam recusandae rem voluptatem, ad fugiat. Alias voluptatibus cum fuga labore, odio autem.</p>   
        <p>Com essas opções ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis iusto voluptates, expedita rerum voluptate nam harum veniam debitis odio ex quo recusandae ullam doloremque reiciendis. Cupiditate rerum sint nemo enim</p>
    </main>
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
</body>

</html>