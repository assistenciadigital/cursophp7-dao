<?php

require_once("class/config.php");

// Carrega uma lista de usuarios
$search = Usuario::search("jo");

echo json_encode($search);
?>