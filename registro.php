<?php
    include('conexao.php');
    $id = 
    $busca = $_GET['busca'] ?? null;
    $registro = null;
    $erro = null;

    if($busca) {
        $stmt = $conn->prepare("SELECT * FROM registros WHERE nome LIKE '%{$busca}%' LIMIT 1");
        $stmt->execute();
        $result = $stmt->get_result();
        $registro = $result->fetch_assoc();

        if(!$registro){
            $erro = "Nenhum registro encontrado.";
        }
    } else {
        header("Location: index.php");
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
            <?php if ($erro): ?>
                <p id="texto-erro"><?= $erro ?></p>
                 <a href="index.php" id="voltar-btn">Voltar</a>
            <?php elseif ($registro): ?>

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
                    <form>
                        <input type='hidden' name='id' value="<?= htmlspecialchars($registro['id']) ?>">
                        <a href="excluir.php?id=<?= $registro['id'] ?>" type="submit" id="excluir-btn">Excluir</a>
                        <a href="edicao.php?id=<?= $registro['id'] ?>" id="editar-btn">Editar</a>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>