<?php
require_once 'excluir/conexao.php';
require_once 'viagem.php';

class Funcionalidade
{

  public function __construct(private PDO $pdo) {}



  public function adicionarPlaca(string $placa)
  {

    $sql = "INSERT INTO placas (placa) VALUES (?)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $placa);
    $statement->execute();
  }

  public function placasCadastradas($dados)
  {
    return new Placa(
      $dados['id'],
      $dados['placa']
    );
  }

  public function mostrarPlacas()
  {
    $listaPlacas = $this->pdo->query("SELECT * FROM placas")->fetchAll(PDO::FETCH_ASSOC);
    $dados = array_map(function ($i) {
      return $this->placasCadastradas($i);
    }, $listaPlacas);
    return $dados;
    var_dump($dados);
  }


  public function adicionarViagem(string $dataPartida, string $motorista, string $placa, string $destinoPartida, string $destinoChegada)
  {
    $sql = "INSERT INTO viagem (dataPartida, motorista, placa, destinoPartida,destinoChegada) VALUES(?,?,?,?,?)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $dataPartida);
    $statement->bindValue(2, $motorista);
    $statement->bindValue(3, $placa);
    $statement->bindValue(4, $destinoPartida);
    $statement->bindValue(5, $destinoChegada);
    $statement->execute();
  }
}
