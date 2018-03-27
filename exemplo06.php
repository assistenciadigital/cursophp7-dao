<?php

require_once("class/config.php");

// update

$usuario = new Usuario();
$usuario -> loadByid(8);
$usuario -> update("alterado", "888888");

echo $usuario;

?>