<?php
if ($rota == 'usuarios') {
  $db = DB::connect();
  $criartabela = $db->prepare('
    CREATE TABLE IF NOT EXISTS public.usuarios (
      id_usuario serial8 NOT NULL,
      nome varchar NOT NULL,
      email varchar NOT NULL,
      senha varchar NOT NULL,
      telefone varchar NULL
    );
    
  ');
  $criartabela->execute();

  if ($method == 'GET') {
    include_once('get.php');
  }

  if ($method == 'POST') {
    include_once('post.php');
  }

  if ($method == 'PUT') {
    include_once('put.php');
  }

  if ($method == 'DELETE') {
    include_once('delete.php');
  }
}

?>