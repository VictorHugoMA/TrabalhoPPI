<?php

require "../sql/conexaoMysql.php";
$pdo = mysqlConnect();

$medico = isset($_POST["medico"]) ? $_POST["medico"]: "";
$data = isset($_POST["data"]) ? $_POST["data"]: "";
$horario = isset($_POST["horario"]) ? $_POST["horario"] : "";
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";

try {
    $sql = <<<SQL
    INSERT INTO agenda_Trab (medico,data,horario,nome,sexo,email)
    VALUES (?, ?, ?, ?, ?, ?)
    SQL;

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$medico, $data, $horario, $nome, $sexo, $email]);
  
    header("location: ../Front-End/index.html");
    exit();
} 
catch (Exception $e) {  
  if ($e->errorInfo[1] === 1062)
    exit('Dados duplicados: ' . $e->getMessage());
  else
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}


?>