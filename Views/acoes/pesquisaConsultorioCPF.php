<?php
require_once 'C:\xampp\htdocs\Sistema_Clinica_Veterinaria\DataBase\config.php';

    if (isset($_GET['cpf'])) {
        $cpf = $_GET['cpf'];

        $stmt = $conn->prepare("SELECT nomeTutor, nomeAnimal, sexoAnimal, especie FROM cliente WHERE cpf = ?");
        $stmt->execute([$cpf]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo json_encode($result);
        } else {
            echo json_encode(array('error' => 'CPF não encontrado'));
        }
    } else {
        echo json_encode(array('error' => 'CPF não fornecido'));
    }
?>