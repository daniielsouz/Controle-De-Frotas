<?php

  require_once "config.php";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    

  }

  $sql = "SELECT * FROM users WHERE name = ? AND password = ?";

  $stmt = $conn->prepare($sql);
  $stmt ->bind_param("ss", $name, $email);
  $stmt ->execute();

  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
      $row - $result->fetch_assoc();

      if(password_verify($password, $row['password'])) {

        $_SESSION["loggedin"] = true;

        header("Location: home.php");
        exit;

      }
  }

  else {
    $error = "Usuário e/ou senha incorreto(s)";
  }

?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Login - T3 Frotas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="assets/style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
 
      <div id="login">
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="name">Usuário: </label>
            <input id="name" name="name" required="required" type="text" placeholder="ex. T3 logistic"/>
          </p>          
          <p> 
            <label for="password">Senha: </label>
            <input id="password" name="password" required="required" type="password" placeholder="ex. 1234" /> 
          </p>                     
          <p> 
            <input type="submit" value="Entrar" /> 
          </p>          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1>           
          <p> 
            <label for="name">Seu nome: </label>
            <input id="name" name="name" required="required" type="text" placeholder="ex. T3 Logistic" />
          </p>          
          <p> 
            <label for="email">Seu e-mail: </label>
            <input id="email" name="email" required="required" type="email" placeholder="ex. T3logistic@gmail.com"/> 
          </p>          
          <p> 
            <label for="password">Sua senha: </label>
            <input id="password" name="password" required="required" type="password" placeholder="ex. 1234"/>
          </p>          
          <p> 
            <input type="submit" value="Cadastrar-se"/> 
          </p>          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>