<?php
    include('conexao.php');
    $msg = $_GET['msg'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Federal</title>
    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/msg-box.css">
</head>
<body>
    <?php if($msg === 'sucesso'): ?>
    <div id="msg-box">
        <p>Usuário cadastrado com sucesso!</p>
    </div>
    <?php elseif($msg === 'excluido'): ?>
    <div id="msg-box">
        <p>Usuário excluído com sucesso!</p>
    </div>
    <?php endif; ?>
    <div id="container">
        <!-- menu  -->
        <div id="menu">
            <a href="cadastro.php">Cadastrar Usuário</a>
            <a href="index.php">Buscar Usuário</a>
        </div>
        <!-- barra de pesquisa -->
        <div id="pesquisa">
            <h1><i class="fa-solid fa-magnifying-glass"></i>buscar usuários</h1>
            <form action="registro.php" method="get">
                <input type="text" name="busca" placeholder="Digite o nome do usuário" required>
            </form>
        </div>
    </div>
    <!-- link do fontawesome -->
    <script src="https://kit.fontawesome.com/035184f79b.js" crossorigin="anonymous"></script>    
</body>
</html>