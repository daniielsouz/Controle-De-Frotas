<?php

    require_once "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
        
            $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("sss", $name, $email, $password);

            if ($stmt->execute()) {
                echo "Usuário criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $coon->error;
            }

            $stmt->close();

    }

    $conn->close();
    
