<?php 
    switch (@$_REQUEST["acao"]) {
        case "cadastrar":
            $nomeCompleto = $_POST["nome"];
            $user_name = $_POST["login"];
            $password = $_POST["senha"];
            $tipoPessoa = $_POST["tipoPessoa"];            

            $sql = "INSERT INTO user (user_name, password, nomeCompleto, tipoPessoa) VALUES (:user_name, :password, :nomeCompleto, :tipoPessoa)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nomeCompleto', $nomeCompleto);
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':tipoPessoa', $tipoPessoa);
            
            try {
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Usuario Cadastrado com Sucesso!');</script>";
                    echo "<script>location.href='?page=listarUsuario'</script>";
                } else {
                    echo "<script>alert('Erro ao Cadastrar');</script>";
                }
            } catch (PDOException $e) {
                echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
            } 

            break;
    }
?>