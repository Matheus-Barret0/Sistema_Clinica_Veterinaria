<?php
require_once 'C:\xampp\htdocs\Sistema_Clinica_Veterinaria\DataBase\config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["password"];

    $sql = "SELECT id, user_name, password FROM user
        WHERE user_name = :username AND password = :password";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // Autenticação bem-sucedida
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $id = $row['id'];
            $user_name = $row['user_name'];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['user_name'] = $user_name;

            header("Location: /Sistema_Clinica_Veterinaria/Views");
            exit();
        } else {
            // Usuário ou senha incorretos
            $error_message = "Usuário ou senha incorreto.";
        }
    } catch(PDOException $e) {
        echo "Erro na consulta: " . $e->getMessage();
    }
}
?>