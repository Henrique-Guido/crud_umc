<?php
    include('conexao.php');

    $msg = $_GET['id'] ?? null;

    // validação para atribuir valores apenas se o formulário for preenchido
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nome = $_POST['nome'] ?? null;
        $data_nasc = $_POST['data_nasc'] ?? null;
        $endereco = $_POST['endereco'] ?? null;
        $telefone = $_POST['telefone'] ?? null;
        $est_civil = $_POST['est_civil'] ?? null;
        $nome_mae = $_POST['nome_mae'] ?? null;
        $nome_pai = $_POST['nome_pai'] ?? null;
        $rg_cpf = $_POST['rg_cpf'] ?? null;
        $tit_eleitor = $_POST['tit_eleitor'] ?? null;
    
        $stmt = $conn->prepare("INSERT INTO registros 
            (nome, data_nasc, endereco, telefone, est_civil, nome_mae, nome_pai, rg_cpf, tit_eleitor)
        VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("sssssssss", $nome, $data_nasc, $endereco, $telefone, $est_civil, $nome_mae, $nome_pai, $rg_cpf, $tit_eleitor);
        $stmt->execute();
    
        header("Location: index.php?msg=sucesso");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Federal - Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div id="container">
        <!-- menu  -->
        <div id="menu">
             <a href="cadastro.php">Cadastrar Usuário</a>
             <a href="index.php">Buscar Usuário</a>
        </div>
        <!-- formulario de cadastro -->
        <form method="post" id="form-cadastro">
            <h2>Cadastro</h2>
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="campo">
                <label for="data_nasc">Data de Nascimento:</label>
                <input type="date" name="data_nasc" id="data_nasc">
            </div>
            <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco">
            </div>
            <div class="campo">
                <label for="telefone">Telefone:</label>
                <input type="tel" placeholder="(99) 99999-9999" name="telefone" id ="telefone">
            </div>
            <div class="campo">
                <label for="est_civil" required >Estado Civil:</label>
                <select name="est_civil" id="est_civil">
                    <option disabled selected>Estado Civil:</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                    <option value="viuvo    ">Viuvo(a)</option>
                </select>
            </div>
            <div class="campo">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" id="nome_mae">
            </div>
            <div class="campo">
                <label for="nome_pai">Nome do Pai:</label>
                <input type="text" name="nome_pai" id="nome_pai">
            </div>
            <div class="campo">
                <label for="rgoucpf">Rg ou CPF:</label>
                <input type="text" maxlength="14" name="rg_cpf" id="rg_cpf">
            </div>
            <div class="campo">
                <label for="titulodeeleitor">Titulo de Eleitor:</label>
                <input type="text" maxlength="12" name="tit_eleitor" id="tit_eleitor">
            </div>
            <button class="boton-elegante">Cadastrar</button>
        </form>
        <script>
            document.getElementById('form-cadastro').onsubmit = function(){
                if (
                    !document.getElementById('nome').value ||
                    !document.getElementById('data_nasc').value ||
                    !document.getElementById('endereco').value ||
                    !document.getElementById('telefone').value ||
                    !document.getElementById('est_civil').value
        
                ){
                    alert('Preencha todos os campos!!');
                    return false;
                }
            }
        </script>
    </div>
</body>
</html>