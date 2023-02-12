<?php

if ($acao == 'apagar') {

  if ($parametro != '') {

    try {
      $db = DB::connect();
      $rs = $db->prepare("DELETE FROM usuarios WHERE id_usuario={$parametro}");
      $exec = $rs->execute();

      if ($exec) {
        echo json_encode(["Status" => "Usuário apagado com sucesso!"]);
      } else {
        echo json_encode(["Status" => "Houve algum erro ao tentar apagar o usuário!"]);
      }
    } catch (PDOException $e) {
      echo "Erro ao tentar conectar ao banco: " . $e->getMessage();
    }

  } else {
    echo json_encode(['Erro' => 'É necessário informar o id do usuário após da barra']);

  }

} else {
  echo json_encode([
    "Status" => "Você precisa definir a ação depois da barra",
    "Ações" => "apagar"
  ]);
}

?>