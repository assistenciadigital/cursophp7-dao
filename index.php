<?php

require_once("class/config.php");

//$sql = new Sql();
//$usuarios = $sql -> select("select * from tb_usuarios order by deslogin");

//echo json_encode($usuarios);

// Carrega somente um usuario
$root = new Usuario();

$root -> loadbyid(5);

echo $root;

?>