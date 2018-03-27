<?php

require_once("class/config.php");

//$sql = new Sql();
//$usuarios = $sql -> select("select * from tb_usuarios order by deslogin");

//echo json_encode($usuarios);

$root = new Usuario();

$root -> loadbyid(4);

echo $root;

?>