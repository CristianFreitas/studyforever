<?php

$host = "localhost";
$usuario = "study";
$senha = "194979396959";
$bd = "study";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>