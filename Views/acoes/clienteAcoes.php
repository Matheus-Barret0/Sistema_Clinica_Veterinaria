<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $nomeAnimal = $_POST['nomeAnimal'];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO cliente (nome, nomeAnimal, email, cpf, endereco)
                    VALUES (:nome, :nomeAnimal, :email, :cpf, :endereco)";
        
        $stmt = $conn->prepare($sql);
        //bindParam vincular um parâmetro a um marcador de parâmetro em uma consulta preparada
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':nomeAnimal', $nomeAnimal);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':endereco', $endereco);

        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listarCliente'</script>";
            } else {
                echo "<script>alert('Cadastrado sem sucesso!');</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
        }
        break;
    case "excluir":

        break;
}
?>