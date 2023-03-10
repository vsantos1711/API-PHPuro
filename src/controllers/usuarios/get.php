<?php


if ($acao == 'lista') {
  try {
    $db = DB::connect();
    $sql = $db->prepare('SELECT * FROM usuarios');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
      echo json_encode(["dados" => $result]);
    } else {
      echo json_encode(["Não há dados para exibir"]);
    }

  } catch (PDOException $e) {
    echo "Erro ao tentar conectar ao banco: " . $e->getMessage();
  }
} else {
  echo json_encode([
    "Status" => "Você precisa definir a ação depois da barra",
    "Ações" => "lista"
  ]);
}

?>