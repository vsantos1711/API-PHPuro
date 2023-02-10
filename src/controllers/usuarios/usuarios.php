<?php


if ($rota == 'usuarios') {

  try {

    $db = DB::connect();
    $sql = $db->prepare('SELECT * FROM usuarios');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);

  } catch (PDOException $e) {
    echo "A connection error occurred: " . $e->getMessage();
  }
}

?>