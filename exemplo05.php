<?php

require_once("class/config.php");

$aluno = new Usuario("aluno", "@lun0");
$aluno -> insert();
echo $aluno;
?>