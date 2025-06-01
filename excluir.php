<?php
if (isset($_POST['id'])) {
    include('conexao.php');
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM registros WHERE id = ?");
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            // Redireciona com mensagem de sucesso (poderia ser exibida na index.php)
            header("Location: index.php?msg=excluido");
            exit;
        } else {
            echo "Erro ao excluir o registro.";
        }
    } else {
        echo "Erro ao preparar a exclusão.";
    }

    $conn->close();
} else {
    echo "ID do registro não fornecido.";
}
?>
