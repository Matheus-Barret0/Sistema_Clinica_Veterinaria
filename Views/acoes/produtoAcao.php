<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $nomeItem = $_POST["nomeItem"];
        $descricaoItem = $_POST["descricaoItem"];

        $sql = "INSERT INTO produto (nomeItem, descricao)
                    VALUES (:nomeItem, :descricaoItem)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nomeItem', $nomeItem);
        $stmt->bindParam(':descricaoItem', $descricaoItem);

        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listarProduto'</script>";
            } else {
                echo "<script>alert('Cadastrado sem sucesso!');</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
        } 
        break;
}
?>
