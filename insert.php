<?php
 $nome = $_POST["nome"];
 $data_nascimento = $_POST["data_nascimento"];
 $endereco = $_POST["endereco"];
 $telefone = $_POST["telefone"];
 $estado_civil = $_POST["estado_civil"];
 $nome_mae = $_POST["nome_mae"];
 $nome_pai = $_POST["nome_pai"];
 $rg_cpf = $_POST["rg_cpf"];
 $titulo_eleitor = $_POST["titulo_eleitor"];
               
$sql = "insert into cadastro (nome, data_nascimento, endereco, telefone, estado_civil, nome_mae, nome_pai, rg_cpf, titulo_eleitor) values (?,?,?,?,?,?,?,?,?) ";
$stmt= $conn-> prepare($sql);
$stmt->bind_param("$nome, $data_nascimento, $endereco, $telefone, $estado_civil, $nome_mae, $nome_pai, $rg_cpf, $titulo_eleitor");
$stmt->execute();

header('location: cadastro.html');

$stmt->close();
$conn->close();

?>
