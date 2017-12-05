<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de catalogo</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
include "Obra.php";

$conexion = new mysqli($servidor,$usuario,$clave,"catalogo");
$conexion->query("SET NAMES 'UTF8'");


if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

?>
<table style='border:0'>
<tr style='background-color:red'>
	<th>Codigo obra</th>
	<th>Nombre obra</th>
	<th>Duracion</th>
	<th>Nombre autor</th>
	<th>Imagen</th>
	<th>Imagen Autor</th>
	
</tr>
<?php

if (!isset($_REQUEST["codigoObra"])) die ("<h3>ERROR en la petición. Falta identificador de cuidador</h3>");

$id = $_REQUEST["codigoObra"];

$resultado = $conexion -> query("SELECT * FROM obra where codigoObra=".$id);

if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";

while ($obra = $resultado->fetch_object('Obra')) {
    
    $resultado2 = $conexion -> query("SELECT nombreAutor,foto FROM autor where codigoAutor=".$obra->getCodigoAutor());
    $autor=$resultado2-> fetch_assoc();
    
    echo "<tr bgcolor='yellow'>";
    echo "<td>".$obra->getCodigoObra()."</td>\n";
    echo "<td>".$obra->getNombreObra()."</td>\n";
    echo "<td>".$obra->getDuracion()."</td>\n";
    echo "<td>".$autor['nombreAutor']."</td>\n";
    echo "<td><img src='img/".$obra->getImagen()."'></td>\n";
    echo "<td><img src='img/".$autor['foto']."'></td>\n";
    echo "</tr>";
    
    mysqli_free_result($resultado2);
}
?>
</table>
<?php 
echo "<li><a href='mostrarCatalogo.php'>Volver</a></li>\n";

echo "<h3>Desconectado</h3>";
mysqli_close($conexion);
?>
</body>
</html> 