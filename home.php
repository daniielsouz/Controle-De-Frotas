<?php

require 'excluir/conexao.php';
require 'funcionalidades.php';


if (isset($_POST['register'])) {
    $salvarPlaca = new Funcionalidade($pdo);
    $salvarPlaca->adicionarPlaca($_POST['numberPlate']);
}

$placasCadastradas = new Funcionalidade($pdo);
$listaPlacas = $placasCadastradas->mostrarPlacas();


if (isset($_POST['addTrip'])) {
    $adicionarViagem = new Funcionalidade($pdo);
    $adicionarViagem->adicionarViagem($_POST['departureDate'], $_POST['driver'], $_POST['plateOptions'], $_POST['departure'], $_POST['arrival']);
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <div>
            <div class="logo">
                <a href="home.php">Logo</a>
            </div>
            <nav>
                <ul class="nav-itens">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="hitórico.php">Histórico</a></li>
                    <li><a href="suport.php">Suporte</a></li>
            </nav>
        </div>
    </header>
    <main>
        <form method="post">
            <input type="date" name="departureDate" required>
            <input type="text" name="driver" placeholder="Motorista" required>
            <select name="plateOptions" id="" required>
                <option value="placa" selected disabled>Placas Cadastradas</option>
                <?php foreach ($listaPlacas as $i): ?>
                    <option value="<?= $i->placa ?>"><?= $i->placa ?></option>
                <?php endforeach ?>
            </select>
            <input type="text" name="departure" placeholder="Destino de partida" required>
            <input type="text" name="arrival" placeholder="Destino de chegada" required>
            <button type="submit" name="addTrip">Adicionar Viagem</button>
        </form>
        <form method="post">
            <input type="text" name='numberPlate' maxlength="7" minlength="6" required>
            <button name="register" type="submit">Enviar</button>
        </form>
    </main>
</body>

</html>