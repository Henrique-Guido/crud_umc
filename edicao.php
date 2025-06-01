<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Federal - Edição de Usuário</title>
    <link rel="stylesheet" href="css/edicao.css">
</head>
<body>
    <div id="container">
        <!-- menu  -->
        <div id="menu">
            <a href="cadastro.php">Cadastrar Usuário</a>
            <a href="index.php">Buscar Usuário</a>
        </div>
        <!-- formulario de cadastro -->
        <form action="">
            <h2>Editar Cadastro</h2>
            <div class="campo">
                <label for="nome">Nome:</label>                             
                <input type="text" name="user" value="Nome da pessoa">        <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text">                                       <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="telefone">Telefone:</label>
                <input type="tel" placeholder="(99) 99999-9999">              <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="estadocivil">Estado Civil:</label>
                <select name="estadoCivil" id="">
                    <option disabled selected>Estado Civil:</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                </select>
            </div>
            <div class="campo">
                <label for="nomedamae">Nome da Mãe:</label>
                <input type="text">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="nomedopai">Nome do Pai:</label>
                <input type="text">                                           <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="rgoucpf">Rg ou CPF:</label>
                <input type="text" maxlength="14">                            <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="campo">
                <label for="titulodeeleitor">Titulo de Eleitor:</label>
                <input type="text" maxlength="12">                            <!-- dentro de value vai o valor de $_POST -->
            </div>
            <div class="caixa-flex">
                <a href="registro.html" class="voltar-btn">voltar</a>
                <a href="registro.html" class="atualizar-btn">Atualizar</a>   <!-- manda para a pagina PHP com o cógido de atualização -->
            </div>
        </form>
    </div>
</body>
</html>