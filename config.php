<?php
    session_start();

    $servername = "localhost";
    $username = "T3logistic";
    $password = "123456";
    $dbname = "t3frotas";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?>