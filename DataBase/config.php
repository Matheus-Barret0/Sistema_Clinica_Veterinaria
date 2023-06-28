<?php
    /*--definindo os nomes dos elementos--*/
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','vetclinic');

    /*--iniciando conexão com o banco--*/
    $dsn = "mysql:host=" . HOST . ";dbname=" . BASE;
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    try {
        $conn = new PDO($dsn, USER, PASS, $options);
    } catch(PDOException $e) {
        echo "Falha na conexão: " . $e->getMessage();
    }

    
?>
