<?php
    $servername = "192.168.20.10";
    $username = "brasil";
    $password = "Br@s1l123";
    $dbname = "brasilvidro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>