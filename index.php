<?php

/*Arquivo de start 4.5.0*/
require_once("config.php");

$sql =  new Sql();

$usuario = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuario);




?>
