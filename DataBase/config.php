<?php
    /*--definindo os nomes dos elementos--*/
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','vetclinic');

    /*--iniciando conexão com o banco--*/
    $conn = new mysqli(HOST,USER,PASS,BASE);
?>