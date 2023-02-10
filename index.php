<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


if (isset($_GET['path'])) {
  $path = explode("/", $_GET['path']);
} else {
  echo "Você precisa definir a rota que deseja acessar. \n \n \n";
  echo "Rotas possíveis: /usuarios. \n";
  echo "Ações possíveis: /lista.";
  exit;
}

if (isset($path[0])) {
  $rota = $path[0];
} else {
  echo "Você precisa especificar em qual controller quer buscar!";
  exit;
}

if (isset($path[1])) {
  $acao = $path[1];
} else {
  $acao = '';
}

if (isset($path[2])) {
  $param = $path[2];
} else {
  $param = '';
}

$method = $_SERVER['REQUEST_METHOD'];

include_once('./src/classes/db.class.php');
include_once('./src/controllers/usuarios/usuarios.php');
?>