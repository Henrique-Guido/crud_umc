<?php
    include('conexao.php');
    $busca = $_GET['busca'] ?? null;

    if($busca) {

    $sql = "SELECT * FROM registros WHERE nome LIKE '$busca'";
    $result = $conn->query($sql);
    $registro = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Federal - Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div id="container">
        <!-- menu  -->
        <div id="menu">
            <a href="cadastro.php">Cadastrar Usuário</a>
            <a href="index.php">Buscar Usuário</a>
        </div>
        <div class="container-registro">
            <h4><?= $registro['nome'] ?></h4>                  
            <div class="caixa-info">
                <div class="caixa-1">
                    <p>Endereço: <?= $registro['endereco'] ?></p>     
                    <p>Telefone: <?= $registro['telefone'] ?></p>     
                    <p>Estado civil: <?= $registro['est_civil'] ?></p>     
                    <p>Nome da mãe: <?= $registro['nome_mae'] ?></p>     
                </div>
                <div class="caixa-2">
                    <p>Nome do pai: <?= $registro['nome_pai'] ?></p>
                    <p>RG/CPF: <?= $registro['rg_cpf'] ?></p>     
                    <p>Título de eleitor: <?= $registro['tit_eleitor'] ?></p>      
                </div>
            </div>
            <div class="caixa-btn">
                <a href="index.php" id="voltar-btn">Voltar</a>
                <div>
                    <a href="edicao.php" id="editar-btn">Editar</a>
                    <a href="excluir.php" id="excluir-btn">Excluir</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>