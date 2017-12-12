<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo");
$conexion->query("SET NAMES 'UTF8'");
?>
