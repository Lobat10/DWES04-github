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


echo "<h2>Listado de cuidadores</h2>";
echo "<h3>Pulsa en cada cuidador para ver los animales de los que se ocupa</h3>";

$resultado = $conexion-> query("SELECT * FROM cuidador");
if($resultado->num_rows === 0) echo "<p>No hay cuidadores en la base de datos</p>";
echo "<ul>\n";
while($fila=$resultado->fetch_assoc()) {
    echo "<li><a href='cuidador.php?idCuidador=$fila[idCuidador]'>$fila[Nombre]</a></li>\n";
    // Ejemplo: <li><a href='cuidador.php?idCuidador=12345'>Alberto</a></li>
}
echo "</ul>";

echo "<li><a href='conexion.php'>Conexion1</a></li>\n";
echo "<li><a href='conexion2.php'>Conexion2</a></li>\n";
echo "<li><a href='conexion3.php'>Conexion3</a></li>\n";
echo "<li><a href='conexion4.php'>Conexion4</a></li>\n";
echo "<li><a href='conexion6.php'>Conexion6</a></li>\n";
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>
</body>
</html>