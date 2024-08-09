<?php
    require_once "formSup.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
</head>
<body>
    <ul>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li> 
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
    </ul>

    <h2>Nos conte a sua dúvida</h2>
    <form method="post" action=""> 
        <p> 
            <span for="email">Email:</span>
            <input id="email" name="email" required type="text" placeholder="ex. T3@gmail.com"/>
        </p>
        <div class="message">
            <p for="message">Mensagem: </p>
            <textarea type="text" id="message" name="message" required placeholder="Estou com problemas para..." ></textarea>
        </div>
        <input type="submit" value="Enviar" /> 
    </form>

</body>
</html>