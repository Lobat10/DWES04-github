<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";

//<!-- PRUEBAS: -->
$conexion = new mysqli($servidor,$usuario,$clave,"animales");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

?>
<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Chip</th>
	<th>Nombre</th>
	<th>Especie</th>
	<th>Imagen</th>
</tr>
<?php
$ruta="img/";
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
while($fila=$resultado->fetch_assoc()) {
	echo "<tr style='background-color:lightgreen'>";
	echo "<td>$fila[chip]</td>";
	echo "<td>$fila[nombre]</td>";
	echo "<td>$fila[especie]</td>\n";
	echo "<td><img src=$ruta$fila[imagen]></td>\n";
	echo "</tr>";
}
?>
</table>

<?php
$conexion ->query("UPDATE animal SET especie='jabali' WHERE nombre='Babe'");
echo "<h3 style='color:red'>". $conexion->error ."</h3>";

$conexion ->query ("DROP TABLE animal");
echo "<h3 style='color:red'>". $conexion->error ."</h3>";


echo "<li><a href='conexion.php'>Conexion1</a></li>\n";
echo "<li><a href='conexion2.php'>Conexion2</a></li>\n";
echo "<li><a href='conexion3.php'>Conexion3</a></li>\n";
echo "<li><a href='conexion5.php'>Conexion5</a></li>\n";
echo "<li><a href='conexion6.php'>Conexion6</a></li>\n";

echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>
</body>
</html>