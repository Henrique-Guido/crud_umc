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
        <form action="cadastrar.php" method="post">
            <h2>Cadastro</h2>
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="campo">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" name="data_nascimento">
            </div>
            <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco">
            </div>
            <div class="campo">
                <label for="telefone">Telefone:</label>
                <input type="tel" placeholder="(99) 99999-9999" name="telefone">
            </div>
            <div class="campo">
                <label for="estadocivil">Estado Civil:</label>
                <select name="estado_civil" id="">
                    <option disabled selected>Estado Civil:</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                    <option value="divorciado">Viuvo(a)</option>
                </select>
            </div>
            <div class="campo">
                <label for="nomedamae">Nome da Mãe:</label>
                <input type="text" name="nome_mae">
            </div>
            <div class="campo">
                <label for="nomedopai">Nome do Pai:</label>
                <input type="text" name="nome_pai">
            </div>
            <div class="campo">
                <label for="rgoucpf">Rg ou CPF:</label>
                <input type="text" maxlength="14" name="rg_cpf">
            </div>
            <div class="campo">
                <label for="titulodeeleitor">Titulo de Eleitor:</label>
                <input type="text" maxlength="12" name="titulo_eleitor">
            </div>
            <button class="boton-elegante">Cadastrar</button>
        </form>
    </div>
</body>
</html>