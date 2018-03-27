<?php

require_once("class/config.php");

// Carrega uma lista de usuarios
$usuario = new Usuario();
$usuario -> login("pedro", "44444");

echo $usuario;
?>