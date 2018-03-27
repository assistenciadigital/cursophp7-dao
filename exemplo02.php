<?php

require_once("class/config.php");

$root = new Usuario();

$root -> loadbyid(4);

echo $root;

?>