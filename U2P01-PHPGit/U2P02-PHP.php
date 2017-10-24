<html>
<body>
<?php

// COMENTARIOS

// primera practica php

// Practica 2 unidad 2
$nombre = "Adrián";
echo "Mi nombre es " . $nombre . ".\n";
/*
 * $nombre = "Adrián";
 * echo "Mi nombre es " . $nombre . ".\n";
 */
define("ALUMNO", "Adrián Lobato");
echo "El alumno es " . ALUMNO;
// SENTENCIAS ECHO

echo "<h1>Funciona</h1>";
echo '<h1>Funciona</h1>';

// OPERADORES LOGICOS , DE COMPARACIÓN Y ASIGNACION

$a = 5;
$b = 10;
echo "</br>";
echo $a += $b . "";
echo "</br>";
echo $a -= $b . "";
echo "</br>";
echo $a *= $b . "";
echo "</br>";
echo $a /= $b . "";
echo "</br>";
echo $a .= $b . "";

echo "</br>";
$c = 5;
$d = 10;
if ($a > $b) {
    echo "$c es mayor que $d";
} elseif ($a < $b) {
    echo "$c es menor que $d";
} else {
    echo "$c es igual que $d";
}

if ($a < 10 && $b > 10) {
    echo "<p>Error</p>";
} else {
    echo "<p>Mas error que antes.</p>";
}

// VARIABLE POR REFERENCIA
$cadena = "Esto es una prueba.";

echo "</br>";
echo "<p>El texto:'$cadena' tiene " . strLen($cadena) . " caracteres.<p>";
echo "</br>";
echo "Caracter numero 6" . $cadena[6];
echo "</br>";
echo "Ultimo caracter " . $cadena[strlen($cadena) - 1];
echo "</br>";

// USO DE MAYUSCULAS
echo strtoupper($cadena);
echo "</br>";
echo "$cadena";
echo "</br>";

// VARIABLES BOOLEANAS Y DOUBLES
$boolean = true;
$double = 2.6;
$numeric = 8;
// USO DE IS_NUMERIC, IS_BOOL, IS_DOUBLE

if (is_bool($double)) {
    echo "Error";
} else if (is_numeric($double)) {
    echo "Error";
} else {
    echo "Correcto, es double";
}

// STRING
echo strpos($cadena, "o");
echo "</br>";

echo str_word_count($cadena);
echo "</br>";

echo "<p>El texto:'$cadena' tiene " . strLen($cadena) . " caracteres.<p>";
echo "</br>";

// ARRAY ESCALAR Y ARRAY ASOCIATIVO

$jugadores[0] = "Serresiete";
$jugadores[1] = "Kaka";
$jugadores[4] = "Casemiro";
$jugadores[5] = "Vinlli Price";
/*
 * for ($i = 0; $i < sizeof($ciclos); $i ++) {
 * echo $ciclos[$i];
 * echo "</br>";
 * }
 */
$nombres = array(
    "Salas" => "Diego",
    "Garces" => "Eduardo",
    "Lobato" => "Adrian",
    "Molina" => "Pablo"
);
/*
 * print_r($nombres);
 * echo "</br>";
 *
 * foreach ($nombres as $apellido => $nombre) {
 * echo "<h3>El apellido de $nombre es $apellido </h3>";
 * }
 */

/*
 * $equipos = array(
 * 1 => "Real de Madrid",
 * 2 => "FC. Barcelona",
 * 3 => "Atletico de Madrid"
 * );
 *
 * echo "<h1>Campeón $equipos[1]</h1>";
 * echo "</br>";
 */

// VAR_DUMP

var_dump($jugadores);
echo "</br>";
var_dump($nombres);
echo "</br>";

// ESTRUCTURAS DE CONTROL

for ($i = 0; $i < 10; $i ++) {
    echo "</br>";
    echo "$i";
}

$j = 0;
while ($j < 10) {
    echo "</br>";
    echo "$j";
    $j += 1;
}

$j = 0;
do {
    echo "</br>";
    echo "$j";
    $j += 1;
} while ($j < 10);

$x = 1;
switch ($x) {
    case 1:
        echo "<p>Welcome</p>";
    case 2:
        echo "<p>To</p>";
    case 3:
        echo "<p>Jamrock.</p>";
        break;
    default:
        echo "<p>Fail!</p>";
        break;
}

if (isset($jugadores[0])) {
    echo $jugadores[0];
    echo "</br>";
} elseif (isset($jugadores[1])) {
    echo $jugadores[1];
    echo "</br>";
} else {
    echo "Posiciones 0 y 1 estan vacias.";
    echo "</br>";
}

// RECORRIDO DE LOS ARRAYS CON FOR EACH

echo "<ol>";
foreach ($jugadores as $actual) {
    echo "<li> $actual </li>";
}
echo "</ol>";

echo "<ol>";
foreach ($nombres as $apellido => $nombre) {
    echo "<li>El apellido de $nombre es $apellido </li>";
}
echo "</ol>";

// VARIABLE SUPERGLOBAL_SERVER

echo $_SERVER['PHP_SELF'];
echo "</br>";
echo $_SERVER['HTTP_HOST'];

// FUNCIONES

$sueldo = 1000;
$plus = 235;

function aumentoSueldo($plus)
{
    global $sueldo;
    
    $total = $sueldo + $plus;
    return $total;
}
echo "<p>Aumento de suelto, sueldo total " . aumentoSueldo($plus) . "</p>";

function bajadaSueldo($plus)
{
    global $sueldo;
    
    $total = $sueldo - $plus;
    echo "<p>Bajada de suelto, sueldo total " . $total . "</p>";
}

echo bajadaSueldo($plus);

// FECHA Y HORA

echo "Dia de la semana: " . date("N:l");
echo "</br>";
echo "Fecha actual : " . date("d-m-y");
echo "</br>";
echo "Mes: " . date("F");
echo "</br>";
echo "Este mes tiene : " . date("t") . " dias";
echo "</br>";

if (date("L") == 0) {
    echo "No es bisiesto";
    echo "</br>";
} else {
    echo "Es bisiesto ";
    echo "</br>";
}

echo "La hora actual es : " . date("H:i");
echo "</br>";
echo "La zona horaria es : " . date("e");
echo "</br>";

// FUNCION CON VARIABLE GLOBAL

$sueldo = 1000;
$plus = 235;

function aumentoSueldo2($plus)
{
    $total = $GLOBALS["sueldo"] + $plus;
    return $total;
}
echo "<p>Aumento de suelto, sueldo total " . aumentoSueldo2($plus) . "</p>";

// FORMULARIO

if (! isset($_POST['enviar'])) {
    ?>
<form action="U2P02-PHP.php" method="post">
		Nombre:<input type="text" name="nombre"> Apellido:<input type="text"
			name="apellido"> <input type="submit" name="enviar">
	</form>
<?php
} else {
    echo "<h2>¡Bienvenido " . $_POST["nombre"] . " " . $_POST["apellido"] . "!";
}
?>
</body>
</html>
