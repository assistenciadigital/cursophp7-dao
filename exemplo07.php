<?php

require_once("class/config.php");

// delete

$usuario = new Usuario();
$usuario -> loadByid(5);

$usuario -> delete();

echo $usuario;

?>