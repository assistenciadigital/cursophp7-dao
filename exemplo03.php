<?php

require_once("class/config.php");

// Carrega uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);

?>