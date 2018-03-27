<?php

require_once("class/config.php");

// Carrega uma lista de usuarios
$search = Usuario::search("al");

echo json_encode($search);
?>