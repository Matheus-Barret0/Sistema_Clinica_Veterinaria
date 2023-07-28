<?php 
    switch (@$_REQUEST["acao"]) {
        case "cadastrar":
            $idUsuarioResponsavel = $_POST["responsavel"];
            $nomeTutor = $_POST["nomeTutor"];
            $nomeAnimal = $_POST["nomeAnimal"];
            $especie = $_POST["especie"];
            $sexo = $_POST["sexo"];
            $viral = $_POST["viral"];
            $vermifugo = $_POST["vermifugo"];
            $antirrabica = $_POST["antirrabica"];
            $sistNeurologico = $_POST["sistNeurologico"];
            $sistDigestorio = $_POST["sistDigestorio"];
            $sistUrogenital = $_POST["sistUrogenital"];
            $sistCardioResp = $_POST["sistCardioResp"];
            $sistLocomotor = $_POST["sistLocomotor"];
            $sistTegumentar = $_POST["sistTegumentar"];
            $sistOcular = $_POST["sistOcular"];
            $sistAuditivo = $_POST["sistAuditivo"];

            $sql = "INSERT INTO consultorio (nomeTutor, nomeAnimal, especie, sexo, viral, vermifugo, antirrabica, sistNeurologico, sistDigestorio, sistUrogenital, sistCardioResp, 
                                            sistLocomotor, sistTegumentar, sistOcular, sistAuditivo, usuarioAtual)
            VALUES (:nomeTutor, :nomeAnimal, :especie, :sexo, :viral, :vermifugo, :antirrabica, :sistNeurologico, :sistDigestorio, :sistUrogenital, :sistCardioResp, 
                                            :sistLocomotor, :sistTegumentar, :sistOcular, :sistAuditivo, :idUsuarioResponsavel)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nomeTutor', $nomeTutor);
            $stmt->bindParam(':nomeAnimal', $nomeAnimal);
            $stmt->bindParam(':especie', $especie);
            $stmt->bindParam(':sexo', $sexo);
            $stmt->bindParam(':viral', $viral);
            $stmt->bindParam(':vermifugo', $vermifugo);
            $stmt->bindParam(':antirrabica', $antirrabica);
            $stmt->bindParam(':sistNeurologico', $sistNeurologico);
            $stmt->bindParam(':sistDigestorio', $sistDigestorio);
            $stmt->bindParam(':sistUrogenital', $sistUrogenital);
            $stmt->bindParam(':sistCardioResp', $sistCardioResp);
            $stmt->bindParam(':sistLocomotor', $sistLocomotor);
            $stmt->bindParam(':sistTegumentar', $sistTegumentar);
            $stmt->bindParam(':sistOcular', $sistOcular);
            $stmt->bindParam(':sistAuditivo', $sistAuditivo);
            $stmt->bindParam(':idUsuarioResponsavel', $idUsuarioResponsavel);
            
            try {
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Consulta Iniciada!');</script>";
                    echo "<script>location.href='?page=listarFornecedor'</script>";
                } else {
                    echo "<script>alert('Erro ao Iniciar a Consulta!');</script>";
                }
            } catch (PDOException $e) {
                echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');</script>";
            } 

            break;
    }
?>