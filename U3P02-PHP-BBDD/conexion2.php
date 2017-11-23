<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
?>

</body>
</html>
<?php
$conexion = new mysqli($servidor,$usuario,$clave,"animales");
$conexion->query("SET NAMES 'UTF8'");
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
echo "<p>A continuación mostramos algunos animales:</p>";
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
    echo "<hr>";
    echo "Nombre:" . $fila['nombre'];
    echo "<br>Especie: $fila[especie]"; // observa la diferencia en el uso de comillas
    $fila=$resultado->fetch_assoc();
}
echo "<p>A continuación mostramos algunos nombre de cuidadores:</p>";
mysqli_free_result($resultado);
$resultado = $conexion -> query("SELECT nombre FROM cuidador ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
    echo "<hr>";
    echo "Nombre cuidador:" . $fila['nombre'];
    $fila=$resultado->fetch_assoc();
}
echo "<li><a href='conexion.php'>Conexion1</a></li>\n";
echo "<li><a href='conexion3.php'>Conexion3</a></li>\n";
echo "<li><a href='conexion4.php'>Conexion4</a></li>\n";
echo "<li><a href='conexion5.php'>Conexion5</a></li>\n";
echo "<li><a href='conexion6.php'>Conexion6</a></li>\n";
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>


</body>
</html>
