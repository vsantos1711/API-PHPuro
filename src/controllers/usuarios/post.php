<?php


if ($acao == 'cadastro') {

  $dados = json_decode(file_get_contents("php://input"), true);
  try {
    $db = DB::connect();

    if ($dados->nome && $dados->email && $dados->senha) {

      $sql = "INSERT INTO usuarios(";

      $contador = 1;
      foreach (array_keys($dados) as $chave) {
        if (count($dados) > $contador) {
          $sql .= "{$chave}, ";
        } else {
          $sql .= "{$chave} ";
        }
        $contador++;
      }

      $sql .= ") VALUES (";

      $contador = 1;
      foreach (array_values($dados) as $valor) {
        if (count($dados) > $contador) {
          $sql .= "{$valor}, ";
        } else {
          $sql .= "{$valor} ";
        }
        $contador++;
      }

      $sql .= ")";

      $rs = $db->prepare($sql);
      $exec = $rs->execute();

      if ($exec) {
        echo json_encode(["Status" => "Usuário criado com sucesso!"]);
      } else {
        echo json_encode(["Status" => "Houve algum erro ao tentar cadastrar o usuário!"]);
      }

    } else {
      echo json_encode(["Erro" => "Por favor, preencha todos os campos obrigatórios! (nome, email e senha)"]);
    }
  } catch (PDOException $e) {
    echo "Erro ao tentar conectar ao banco: " . $e->getMessage();
  }
}



?>