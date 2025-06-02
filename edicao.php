<?php
    include('conexao.php');

    $id = $_GET['id'] ?? null;
    $msg = $_GET['msg'] ?? null;
    //echo $id;

    if ($id) {
        $stmt = $conn->prepare("SELECT * FROM registros WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $info = $res->fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'] ?? null;
        $data_nasc = $_POST['data_nasc'] ?? null;
        $endereco = $_POST['endereco'] ?? null;
        $telefone = $_POST['telefone'] ?? null;
        $est_civil = $_POST['est_civil'] ?? null;
        $nome_mae = $_POST['nome_mae'] ?? null;
        $nome_pai = $_POST['nome_pai'] ?? null;
        $rg_cpf = $_POST['rg_cpf'] ?? null;
        $tit_eleitor = $_POST['tit_eleitor'] ?? null;
    
        $stmt = $conn->prepare("UPDATE registros SET
            nome=?, data_nasc=?, endereco=?, telefone=?, est_civil=?, nome_mae=?, nome_pai=?, rg_cpf=?, tit_eleitor=?
        WHERE id=?");

        $stmt->bind_param("sssssssssi", $nome, $data_nasc, $endereco, $telefone, $est_civil, $nome_mae, $nome_pai, $rg_cpf, $tit_eleitor, $id);
        
        $stmt->execute();
        header("Location: registro.php?&msg=atualizado&busca=" . $nome);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Federal - Edição de Usuário</title>
    <link rel="stylesheet" href="css/edicao.css">
</head>
<body>
    <?php if($msg === 'atualizado'): ?>
    <div id="msg-box">
        <p>Usuário atualizado com sucesso!</p>
    </div>
    <?php endif; ?>
    <div id="container">
        <!-- menu  -->
        <div id="menu">
            <a href="cadastro.php">Cadastrar Usuário</a>
            <a href="index.php">Buscar Usuário</a>
        </div>
        <!-- formulario de cadastro -->
        <form method="post">
            <h2>Editar Cadastro</h2>
            <div class="campo">
                <label for="nome">Nome:</label>                             
                <input type="text" name="nome" value="<?= $info['nome'] ?>">        <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" name="data_nasc" value="<?= $info['data_nasc'] ?>">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" value="<?= $info['endereco'] ?>">                                       <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" value="<?= $info['telefone'] ?>">              <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="estadocivil">Estado Civil:</label>
                <select name="est_civil">
                    <option disabled selected>Estado Civil:</option>
                    <option value="solteiro" <?= $info['est_civil'] == 'solteiro' ? 'selected' : '' ?>>Solteiro(a)</option>
                    <option value="casado" <?= $info['est_civil'] == 'casado' ? 'selected' : '' ?>>Casado(a)</option>
                    <option value="divorciado" <?= $info['est_civil'] == 'divorciado' ? 'selected' : '' ?>>Divorciado(a)</option>
                </select>
            </div>
            <div class="campo">
                <label for="nomedamae">Nome da Mãe:</label>
                <input type="text" name="nome_mae" value="<?= $info['nome_mae'] ?>">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="nomedopai">Nome do Pai:</label>
                <input type="text" name="nome_pai" value="<?= $info['nome_pai'] ?>">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="rgoucpf">Rg ou CPF:</label>
                <input type="text" maxlength="14" name="rg_cpf" value="<?= $info['rg_cpf'] ?>">                            <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="titulodeeleitor">Titulo de Eleitor:</label>
                <input type="text" maxlength="12" name="tit_eleitor" value="<?= $info['tit_eleitor'] ?>">                            <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="caixa-flex">
                <a href="registro.php" class="voltar-btn">voltar</a>
                <button type="submit" class="atualizar-btn">Atualizar</button>   <!-- manda para a pagina PHP com o cógido de atualização -->
            </div>
        </form>
    </div>
</body>
</html>