<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $nomeEmpresa = $_POST["nomeEmpresa"];
        $cnpj = $_POST["cnpj"];
        $emailEmpresa = $_POST["emailEmpresa"];
        $endereco = $_POST["endereco"];
        $nomeRepresentante = $_POST["nomeRepresentante"];
        $emailRepresentante = $_POST["emailRepresentante"];

        $sql = "INSERT INTO fornecedor (nomeEmpresa, cnpj, emailEmpresa, endereco, nomeRepresentante, emailRepresentante)
                    VALUES (:nomeEmpresa, :cnpj, :emailEmpresa, :endereco, :nomeRepresentante, :emailRepresentante)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nomeEmpresa', $nomeEmpresa);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':emailEmpresa', $emailEmpresa);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':nomeRepresentante', $nomeRepresentante);
        $stmt->bindParam(':emailRepresentante', $emailRepresentante);

        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listarFornecedor'</script>";
            } else {
                echo "<script>alert('Cadastrado sem sucesso!');</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
        } 
        break;
}
?>