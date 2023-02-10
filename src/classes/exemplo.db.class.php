<?php


class DB
{

  public static function connect()
  {
    $host = "host do seu banco";
    $dbname = "nome do seu banco";
    $user = "usuario de acesso ao banco";
    $password = "senha do usuario";
    $port = 'porta do seu banco';

    return new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }

}





?>