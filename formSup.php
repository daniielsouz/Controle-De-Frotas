<?php
    require_once "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $message = $_POST["message"];
        
            $sql = "INSERT INTO messagesuport (email, message) VALUES (?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param("ss", $email, $message);

            if ($stmt->execute()) {
                echo "Formulário enviado";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }

            $stmt->close();

    }
$conn->close();  
