<?php


if ($acao == 'atualizar' && $parametro == '') {
  echo json_encode(['ERRO' => 'É necessário informar o id usuário após a /']);
}

if ($acao == 'atualizar' && $parametro != '') {

  $dados = json_decode(file_get_contents("php://input"), true);
  try {
    $db = DB::connect();

    if ($dados) {

      $sql = "UPDATE usuarios SET ";

      $contador = 1;
      foreach (array_keys($dados) as $index) {
        if (count($dados) > $contador) {
          $sql .= "{$index} = '{$dados[$index]}', ";
        } else {
          $sql .= "{$index} = '{$dados[$index]}' ";
        }
        $contador++;
      }

      $sql .= "WHERE id_usuario = {$parametro}";
      $rs = $db->prepare($sql);
      $exec = $rs->execute();

      if ($exec) {
        echo json_encode(["Status" => "Dados alterado com sucesso!"]);
      } else {
        echo json_encode(["Status" => "Houve algum erro ao editar os dados!"]);
      }

    } else {
      echo json_encode(["Erro" => "Informe os dados que deseja alterar!"]);
    }

  } catch (PDOException $e) {
    echo "Erro ao tentar conectar ao banco: " . $e->getMessage();
  }
}

?>