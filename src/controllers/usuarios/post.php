<?php



if ($acao == 'cadastro') {

  $dados = json_decode(file_get_contents("php://input"));
  try {
    $db = DB::connect();
    $sql = $db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES ('{$dados->nome}', '{$dados->email}', '{$dados->senha}')");
    $exec = $sql->execute();

    if ($exec) {
      echo json_encode(["status" => "Usuário criado com sucesso!"]);
    } else {
      echo json_encode(["status" => "Houve algum erro ao tentar cadastrar o usuário!"]);
    }
  } catch (PDOException $e) {
    echo "Erro ao tentar conectar ao banco: " . $e->getMessage();
  }
}



?>