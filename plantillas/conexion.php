<?php
$servidor = "localhost";
$usuario = "alumno";//alumno_rw
$clave = "alumno";//dwes
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo13");
$conexion->query("SET NAMES 'UTF8'");
if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
?>
