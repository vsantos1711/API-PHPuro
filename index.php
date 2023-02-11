<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


if (isset($_GET['path'])) {
  $path = explode("/", $_GET['path']);
} else {
  echo "Você precisa definir a rota que deseja acessar. ";
  exit;
}

if (isset($path[0])) {
  $rota = $path[0];
}

if (isset($path[1])) {
  $acao = $path[1];
} else {
  $acao = '';
}

if (isset($path[2])) {
  $parametro = $path[2];
} else {
  $parametro = '';
}

$method = $_SERVER['REQUEST_METHOD'];

include_once('./src/classes/db.class.php');
include_once('./src/controllers/usuarios/usuarios.php');

?>