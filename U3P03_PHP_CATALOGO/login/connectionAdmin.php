<?php

$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo");
$conexion->query("SET NAMES 'UTF8'");
?>