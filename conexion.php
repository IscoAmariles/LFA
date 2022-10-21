<?php

$servidor="localhost";
$usuario="root";
$clave="";
$base="ligadefutbol";
$conectar=new mysqli($servidor,$usuario,$clave,$base)or die(mysqli_error());

$conectar -> set_charset("utf8");

?>