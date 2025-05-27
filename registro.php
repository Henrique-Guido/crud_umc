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
            <a href="cadastro.html">Cadastrar Usuário</a>
            <a href="index.html">Buscar Usuário</a>
        </div>
        <div class="container-registro">
            <h4><?= $res ?></h4>                        <!-- dentro de value vai o valor de $_POST -->
            <div class="caixa-info">
                <div class="caixa-1">
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                </div>
                <div class="caixa-2">
                    <p>Lorem ipsum dolor sit amet.</p>      <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                    <p>Lorem ipsum dolor sit.</p>           <!-- dentro de value vai o valor de $_POST -->
                </div>
            </div>
            <div class="caixa-btn">
                <a href="index.html" id="voltar-btn">Voltar</a>
                <div>
                    <a href="edicao.html" id="editar-btn">Editar</a>
                    <a href="excluir.html" id="excluir-btn">Excluir</a>      <!-- manda para uma página php com o código para deletar do banco -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>