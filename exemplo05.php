<?php

require_once("class/config.php");

//inserir registro
$aluno = new Usuario("aluno", "@lun0");
$aluno -> insert();
echo $aluno;
?>