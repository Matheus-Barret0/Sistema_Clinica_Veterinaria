<?php
require_once 'C:\xampp\htdocs\Sistema_de_Cadastro_Clinica_Veterinaria\DataBase\config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["password"];

    $sql = "SELECT id, user_name, password FROM user
        WHERE user_name = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Autenticação bem-sucedida
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $user_name = $row['user_name'];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['user_name'] = $user_name;

        header("Location: /Sistema_de_Cadastro_Clinica_Veterinaria/Views");
        exit();
    } else {
        // Usuário ou senha incorretos
        $error_message = "Usuário ou senha incorreto.";
    }
}

mysqli_close($conn);
?>