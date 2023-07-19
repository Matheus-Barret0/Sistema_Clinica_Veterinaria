<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $produto = $_POST["produto"];
        $fornecedor = $_POST["fornecedor"];
        $quantidade = $_POST["quantidade"];

        $sql = "INSERT INTO itens (nomeProduto, quantidadeProduto, fornecedor)
                    VALUES (:produto, :quantidade, :fornecedor)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':fornecedor', $fornecedor);

        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listarItem'</script>";
            } else {
                echo "<script>alert('Cadastrado sem sucesso!');</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
        } 
        break;
}
?>