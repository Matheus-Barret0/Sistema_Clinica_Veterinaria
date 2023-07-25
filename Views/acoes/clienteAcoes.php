<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $nomeAnimal = $_POST['nomeAnimal'];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];
        $dataNascimento = $_POST["dataNascimento"];
        $sexoAnimal = $_POST["sexoAnimal"];
        $especie = $_POST["especie"];
        $pelagem = $_POST["pelagem"];

        $sql = "INSERT INTO cliente (nomeTutor, nomeAnimal, email, cpf, endereco, dataNascimento, sexoAnimal, especie, pelagem)
                    VALUES (:nome, :nomeAnimal, :email, :cpf, :endereco, :dataNascimento, :sexoAnimal, :especie, :pelagem)";
        
        $stmt = $conn->prepare($sql);
        //bindParam vincular um parâmetro a um marcador de parâmetro em uma consulta preparada
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':nomeAnimal', $nomeAnimal);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':sexoAnimal', $sexoAnimal);
        $stmt->bindParam(':especie', $especie);
        $stmt->bindParam(':pelagem', $pelagem);

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