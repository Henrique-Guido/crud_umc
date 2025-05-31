<?php
    if(isset($_POST['id'])){
        include(conexao.php);
        $id=$_POST['id'];

        $sql="DELETE FROM registros WHERE id= ?"
        $stmt=$conn->prepare($sql);

        if($stmt){
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
        else{
            echo "Não foi possivel excluir esse cadastro";
        }
        $conn->close();

    }
?>